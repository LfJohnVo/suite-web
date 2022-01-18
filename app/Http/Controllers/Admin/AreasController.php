<?php

namespace App\Http\Controllers\Admin;

use App\Exports\AreasExport;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyAreaRequest;
use App\Http\Requests\StoreAreaRequest;
use App\Models\Area;
use App\Models\Empleado;
use App\Models\Grupo;
use App\Models\Organizacion;
use App\Models\Team;
use Gate;
use Illuminate\Auth\Access\Gate as AccessGate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AreasController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('configuracion_area_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Area::orderByDesc('id')->get();
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'configuracion_area_show';
                $editGate = 'configuracion_area_edit';
                $deleteGate = 'configuracion_area_delete';
                $crudRoutePart = 'areas';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('area', function ($row) {
                return $row->area ? $row->area : '';
            });
            $table->editColumn('foto_ruta', function ($row) {
                return $row->foto_ruta ? $row->foto_ruta : '';
            });

            $table->editColumn('grupo', function ($row) {
                return $row->grupo ? $row->grupo->nombre : '';
            });
            $table->editColumn(
                'reporta',
                function ($row) {
                    return $row->supervisor ? $row->supervisor->area : '';
                }
            );
            $table->editColumn('descripcion', function ($row) {
                return $row->descripcion ? $row->descripcion : '';
            });
            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        $direccion_exists = Area::select('id_reporta')->whereNull('id_reporta')->exists();
        $teams = Team::get();
        $grupoarea = Grupo::get();
        $numero_areas = Area::count();

        return view('admin.areas.index', compact('teams', 'direccion_exists', 'numero_areas', 'grupoarea'));
    }

    public function create()
    {
        abort_if(Gate::denies('configuracion_area_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $grupoareas = Grupo::get();
        $direccion_exists = Area::select('id_reporta')->whereNull('id_reporta')->exists();
        $areas = Area::with('areas')->get();
        $reportas = Empleado::get();

        return view('admin.areas.create', compact('grupoareas', 'direccion_exists', 'areas', 'reportas'));
    }

    public function store(StoreAreaRequest $request)
    {
        $direccion_exists = Area::select('id_reporta')->whereNull('id_reporta')->exists();
        $validateReporta = 'nullable|exists:areas,id';
        if ($direccion_exists) {
            $validateReporta = 'required|exists:areas,id';
        }

        $area = Area::create($request->all());

        $image = null;
        if ($request->file('foto_area') != null or !empty($request->file('foto_area'))) {
            $extension = pathinfo($request->file('foto_area')->getClientOriginalName(), PATHINFO_EXTENSION);
            $name_image = basename(pathinfo($request->file('foto_area')->getClientOriginalName(), PATHINFO_BASENAME), '.' . $extension);
            $new_name_image = 'UID_' . $area->id . '_' . $name_image . '.' . $extension;
            $route = storage_path() . '/app/public/areas/' . $new_name_image;
            $image = $new_name_image;
            //Usamos image_intervention para disminuir el peso de la imagen
            $img_intervention = Image::make($request->file('foto_area'));
            $img_intervention->resize(256, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($route);
        }

        $area->update([
            'foto_area' => $image,
        ]);

        $request->validate([
            'area' => 'required|string',
            'id_grupo' => 'required|exists:grupos,id',
            'id_reporta' => $validateReporta,
            'descripcion' => 'required|string',

        ]);

        return redirect()->route('admin.areas.index')->with('success', 'Guardado con éxito');
    }

    public function edit(Area $area)
    {
        abort_if(Gate::denies('configuracion_area_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $grupoareas = Grupo::get();
        $direccion_exists = Area::select('id_reporta')->whereNull('id_reporta')->exists();
        $areas = Area::with('areas')->get();
        $reportas = Empleado::get();

        return view('admin.areas.edit', compact('grupoareas', 'direccion_exists', 'areas', 'area', 'reportas'));
    }

    public function update(Request $request, $id)
    {
        $primer_nodo = Area::select('id', 'id_reporta')->whereNull('id_reporta')->first();
        $direccion_exists = Area::select('id_reporta')->whereNull('id_reporta')->exists();
        $validateReporta = 'nullable|exists:areas,id';
        $area = Area::find($id);

        if ($direccion_exists) {
            if ($primer_nodo->id == intval($area->id)) {
                $validateReporta = 'nullable|exists:areas,id';
            } else {
                $validateReporta = 'required|exists:areas,id';
            }
        }

        $image = $area->foto_area;
        if ($request->file('foto_area') != null or !empty($request->file('foto_area'))) {

            //Si existe la imagen entonces se elimina al editarla

            $isExists = Storage::disk('public')->exists('/app/public/areas/' . $area->foto_area);
            if ($isExists) {
                if ($area->foto_area != null) {
                    unlink(storage_path('/app/public/areas/' . $area->foto_area));
                }
            }
            $extension = pathinfo($request->file('foto_area')->getClientOriginalName(), PATHINFO_EXTENSION);
            $name_image = basename(pathinfo($request->file('foto_area')->getClientOriginalName(), PATHINFO_BASENAME), '.' . $extension);
            $new_name_image = 'UID_' . $area->id . '_' . $name_image . '.' . $extension;
            $route = storage_path() . '/app/public/areas/' . $new_name_image;
            $image = $new_name_image;
            //Usamos image_intervention para disminuir el peso de la imagen
            $img_intervention = Image::make($request->file('foto_area'));
            $img_intervention->resize(256, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($route);
        }

        $request->validate([
            'area' => 'required|string',
            'id_grupo' => 'required|exists:grupos,id',
            'id_reporta' => $validateReporta,
            'descripcion' => 'required|string',
        ]);

        $area->update([
            'area' => $request->area,
            'id_grupo' =>  $request->id_grupo,
            'id_reporta' =>  $request->id_reporta,
            'descripcion' =>  $request->descripcion,
            'empleados_id' =>  $request->empleados_id,
            'foto_area' => $image,

        ]);

        return redirect()->route('admin.areas.index')->with('success', 'Editado con éxito');
    }

    public function show(Area $area)
    {
        abort_if(Gate::denies('configuracion_area_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $area->load('team', 'grupo');

        return view('admin.areas.show', compact('area'));
    }

    public function destroy(Area $area)
    {
        abort_if(Gate::denies('configuracion_area_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $area->delete();

        return back()->with('deleted', 'Registro eliminado con éxito');
    }

    public function massDestroy(MassDestroyAreaRequest $request)
    {
        Area::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function obtenerAreasPorGrupo()
    {
        $grupos = Grupo::with('areas')->orderByDesc('id')->get();
        $numero_grupos = Grupo::count();

        return view('admin.areas.areas-grupo', compact('grupos', 'numero_grupos'));
    }

    public function renderJerarquia(Request $request)
    {
        abort_if(Gate::denies('organizacion_area_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $numero_grupos = Grupo::count();

        $areasTree = Area::exists(); //Eager loading
        // dd($areasTree);

        $rutaImagenes = asset('storage/empleados/imagenes/');
        $grupos = Grupo::with('areas')->orderBy('id')->get();
        $organizacionDB = Organizacion::first();
        $organizacion = !is_null($organizacionDB) ? Organizacion::select('empresa')->first()->empresa : 'la organización';
        $org_foto = !is_null($organizacionDB) ? url('images/' . DB::table('organizacions')->select('logotipo')->first()->logotipo) : url('img/Silent4Business-Logo-Color.png');
        $areas_sin_grupo = Area::whereDoesntHave('grupo')->get();
        $organizacion = Organizacion::first();

        return view('admin.areas.jerarquia', compact('areasTree', 'rutaImagenes', 'organizacion', 'org_foto', 'grupos', 'numero_grupos', 'areas_sin_grupo', 'organizacion'));
    }

    public function obtenerJerarquia(Request $request)
    {
        abort_if(Gate::denies('organizacion_area_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $areasTree = Area::with(['lider', 'supervisor.children', 'supervisor.supervisor', 'grupo', 'children.supervisor', 'children.children'])->whereNull('id_reporta')->first(); //Eager loading

        return json_encode($areasTree);
        // dd($areasTree);
    }

    public function exportTo()
    {
        // abort_if(AccessGate::denies('configuracion_area_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return Excel::download(new AreasExport, 'areas.csv');
    }
}
