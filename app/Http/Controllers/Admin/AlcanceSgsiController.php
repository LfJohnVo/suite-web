<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAlcanceSgsiRequest;
use App\Models\AlcanceSgsi;
use App\Models\Empleado;
use App\Models\Norma;
use App\Models\Team;
use App\Traits\ObtenerOrganizacion;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AlcanceSgsiController extends Controller
{
    use ObtenerOrganizacion;

    public function index(Request $request)
    {
        abort_if(Gate::denies('determinacion_alcance_acceder'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = AlcanceSgsi::with(['norma', 'empleado'])->select(sprintf('%s.*', (new AlcanceSgsi)->table))->orderByDesc('id');
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'determinacion_alcance_ver';
                $editGate = 'determinacion_alcance_editar';
                $deleteGate = 'determinacion_alcance_eliminar';
                $crudRoutePart = 'alcance-sgsis';

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
            $table->editColumn('nombre', function ($row) {
                return $row->nombre ? strip_tags($row->nombre) : '';
            });
            $table->editColumn('alcancesgsi', function ($row) {
                return  $row->alcancesgsi ? html_entity_decode(strip_tags($row->alcancesgsi), ENT_QUOTES, 'UTF-8') : '';
            });

            $table->editColumn('norma', function ($row) {
                return $row->normas ? $row->normas : '';
            });

            $table->editColumn('fecha_publicacion', function ($row) {
                return $row->fecha_publicacion ? $row->fecha_publicacion : '';
            });
            $table->editColumn('fecha_entrada', function ($row) {
                return $row->fecha_entrada ? $row->fecha_entrada : '';
            });
            $table->editColumn('reviso_alcance', function ($row) {
                return $row->empleado ? $row->empleado->name : '';
            });
            $table->editColumn('puesto_reviso', function ($row) {
                return $row->empleado ? $row->empleado->puesto : '';
            });
            $table->editColumn('area_reviso', function ($row) {
                return $row->empleado ? $row->empleado->area->area : '';
            });
            $table->editColumn('fecha_revision', function ($row) {
                return $row->fecha_revision ? $row->fecha_revision : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        $teams = Team::get();
        $empleados = Empleado::alta()->with('area')->get();
        $organizacion_actual = $this->obtenerOrganizacion();
        $logo_actual = $organizacion_actual->logo;
        $empresa_actual = $organizacion_actual->empresa;

        return view('admin.alcanceSgsis.index', compact('teams', 'empleados', 'organizacion_actual', 'logo_actual', 'empresa_actual'));
    }

    public function create()
    {
        abort_if(Gate::denies('determinacion_alcance_agregar'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $empleados = Empleado::with('area')->get();
        $normas = Norma::get();

        return view('admin.alcanceSgsis.create', compact('empleados', 'normas'));
    }

    public function store(Request $request)
    {
        abort_if(Gate::denies('determinacion_alcance_agregar'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $request->validate([
            'nombre' => 'required|string',
            'alcancesgsi' => 'required|string',
            'fecha_publicacion' => 'required|date',
            'fecha_entrada' => 'required|date',
            'fecha_revision' => 'required|date',
            'id_reviso_alcance' => 'required',
            'normas' => 'required|array',
        ]);

        $normas = array_map(function ($value) {
            return intval($value);
        }, $request->normas);
        $alcanceSgsi = AlcanceSgsi::create($request->all());
        $alcanceSgsi->normas()->sync($normas);

        return redirect()->route('admin.alcance-sgsis.index')->with('success', 'Guardado con éxito');
    }

    public function edit(AlcanceSgsi $alcanceSgsi)
    {
        abort_if(Gate::denies('determinacion_alcance_editar'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $alcanceSgsi->load('normas');
        $normas_seleccionadas = $alcanceSgsi->normas->pluck('id')->toArray();

        $normas = Norma::get();
        $empleados = Empleado::alta()->with('area')->get();

        return view('admin.alcanceSgsis.edit', compact('alcanceSgsi', 'empleados', 'normas', 'normas_seleccionadas'));
    }

    public function update(Request $request, AlcanceSgsi $alcanceSgsi)
    {
        abort_if(Gate::denies('determinacion_alcance_editar'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $request->validate([
            'nombre' => 'required|string',
            'alcancesgsi' => 'required|string',
            'fecha_publicacion' => 'required|date',
            'fecha_entrada' => 'required|date',
            'fecha_revision' => 'required|date',
            'id_reviso_alcance' => 'required',
            'normas' => 'required|array',
        ]);

        $alcanceSgsi->update($request->all());
        $normas = array_map(function ($value) {
            return intval($value);
        }, $request->normas);
        $alcanceSgsi->normas()->sync($normas);

        return redirect()->route('admin.alcance-sgsis.index')->with('success', 'Editado con éxito');
    }

    public function show(AlcanceSgsi $alcanceSgsi)
    {
        abort_if(Gate::denies('determinacion_alcance_ver'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $alcanceSgsi->load('team');
        $normas = Norma::get();

        return view('admin.alcanceSgsis.show', compact('alcanceSgsi', 'normas'));
    }

    public function destroy(AlcanceSgsi $alcanceSgsi)
    {
        abort_if(Gate::denies('determinacion_alcance_eliminar'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $alcanceSgsi->delete();

        return back()->with('deleted', 'Registro eliminado con éxito');
    }

    public function massDestroy(MassDestroyAlcanceSgsiRequest $request)
    {
        AlcanceSgsi::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
