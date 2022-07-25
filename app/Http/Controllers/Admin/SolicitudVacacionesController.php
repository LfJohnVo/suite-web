<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\RespuestaVacaciones as MailRespuestaVacaciones;
use App\Mail\SolicitudVacaciones as MailSolicitudVacaciones;
use App\Models\Empleado;
use App\Models\IncidentesVacaciones;
use App\Models\Organizacion;
use App\Models\SolicitudDayOff;
use App\Models\SolicitudPermisoGoceSueldo;
use App\Models\SolicitudVacaciones;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Vacaciones;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Exists;

class SolicitudVacacionesController extends Controller
{

    public function index(Request $request)
    {

        abort_if(Gate::denies('amenazas_acceder'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data = auth()->user()->empleado->id;

        if ($request->ajax()) {
            $query = SolicitudVacaciones::with('empleado')->where('empleado_id', '=', $data)->orderByDesc('id')->get();
            $table = datatables()::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'amenazas_ver';
                $editGate = 'no_permitido';
                $deleteGate = 'amenazas_eliminar';
                $crudRoutePart = 'solicitud-vacaciones';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('dias_solicitados', function ($row) {
                return $row->dias_solicitados ? $row->dias_solicitados : '';
            });
            $table->editColumn('fecha_inicio', function ($row) {
                return $row->fecha_inicio ? $row->fecha_inicio : '';
            });
            $table->editColumn('fecha_fin', function ($row) {
                return $row->fecha_fin ? $row->fecha_fin : '';
            });
            // $table->editColumn('descripcion', function ($row) {
            //     return $row->descripcion ? $row->descripcion : '';
            // });
            $table->editColumn('aprobacion', function ($row) {
                return $row->aprobacion ? $row->aprobacion : '';
            });
            // $table->editColumn('año', function ($row) {
            //     return $row->año ? $row->año : '';
            // });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }
        $organizacion_actual = Organizacion::select('empresa', 'logotipo')->first();
        if (is_null($organizacion_actual)) {
            $organizacion_actual = new Organizacion();
            $organizacion_actual->logotipo = asset('img/logo.png');
            $organizacion_actual->empresa = 'Silent4Business';
        }
        $logo_actual = $organizacion_actual->logotipo;
        $empresa_actual = $organizacion_actual->empresa;
        return view('admin.solicitudVacaciones.index', compact('logo_actual', 'empresa_actual'));
    }


    public function create()
    {
        $ingreso = auth()->user()->empleado->antiguedad;
        $no_vacaciones = $ingreso->format('d-m-Y');
        $año = Carbon::createFromDate($ingreso)->age;
        $existe_regla_por_area = Vacaciones::where('inicio_conteo', '=', $año)->whereHas('areas', function ($q) {
            $q->where('area_id', auth()->user()->empleado->area_id);
        })->select('dias', 'tipo_conteo')->exists();
        $existe_regla_toda_empresa = Vacaciones::where('inicio_conteo', $año)->where('afectados', 1)->select('dias', 'tipo_conteo')->exists();
      
        if ($año > 0) {
            if ($existe_regla_toda_empresa) {
                $regla_aplicada = Vacaciones::where('inicio_conteo', $año)->where('afectados', 1)->select('dias', 'tipo_conteo')->first();
            } elseif ($existe_regla_por_area) {
                $regla_aplicada = Vacaciones::where('inicio_conteo', '=', $año)->whereHas('areas', function ($q) {
                    $q->where('area_id', auth()->user()->empleado->area_id);
                })->select('dias', 'tipo_conteo')->first();
            } else {
                Flash::error('Regla de vacaciones no asociada');
                return redirect(route('admin.solicitud-vacaciones.index'));
            }
        }else{
            $tipo_conteo = null;
            $fecha_limite = Vacaciones::where('inicio_conteo', '=', $año)->pluck('fin_conteo')->first();
            $inicio_vacaciones = $ingreso->addYear();
            $finVacaciones = $inicio_vacaciones->addYear($año);
            $finVacaciones = $finVacaciones->format('d-m-Y');
            $autoriza = auth()->user()->empleado->supervisor_id;
            $vacacion = new SolicitudVacaciones();
            $dias_disponibles = $this->diasDisponibles();
            $organizacion = Organizacion::first();
            $dias_pendientes = SolicitudVacaciones::where('empleado_id', '=', auth()->user()->empleado->id)->where('aprobacion', '=', 1)->where('año', '=', $año)->sum('dias_solicitados');
    
    
            return view('admin.solicitudVacaciones.create', compact('vacacion', 'dias_disponibles', 'año', 'autoriza', 'no_vacaciones', 'organizacion', 'finVacaciones', 'dias_pendientes', 'tipo_conteo'));

        }

        $tipo_conteo = $regla_aplicada->tipo_conteo;
        $fecha_limite = Vacaciones::where('inicio_conteo', '=', $año)->pluck('fin_conteo')->first();
        $inicio_vacaciones = $ingreso->addYear();
        $finVacaciones = $inicio_vacaciones->addYear($año);
        $finVacaciones = $finVacaciones->format('d-m-Y');
        $autoriza = auth()->user()->empleado->supervisor_id;
        $vacacion = new SolicitudVacaciones();
        $dias_disponibles = $this->diasDisponibles();
        $organizacion = Organizacion::first();
        $dias_pendientes = SolicitudVacaciones::where('empleado_id', '=', auth()->user()->empleado->id)->where('aprobacion', '=', 1)->where('año', '=', $año)->sum('dias_solicitados');


        return view('admin.solicitudVacaciones.create', compact('vacacion', 'dias_disponibles', 'año', 'autoriza', 'no_vacaciones', 'organizacion', 'finVacaciones', 'dias_pendientes', 'tipo_conteo'));
    }


    public function store(Request $request)
    {
        abort_if(Gate::denies('amenazas_agregar'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $request->validate([
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'empleado_id' => 'required|int',
            'dias_solicitados' => 'required|int',
            'año' => 'required|int',
            'autoriza' => 'required|int',
        ]);
        $supervisor = Empleado::find($request->autoriza);
        $solicitante = Empleado::find($request->empleado_id);
     
        $solicitud = SolicitudVacaciones::create($request->all());
        Mail::to($supervisor->email)->send(new MailSolicitudVacaciones( $solicitante,$supervisor,$solicitud));

        Flash::success('Solicitud creada satisfactoriamente.');

        return redirect()->route('admin.solicitud-vacaciones.index');
    }


    public function show($id)
    {
        abort_if(Gate::denies('amenazas_editar'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vacacion = SolicitudVacaciones::with('empleado')->find($id);

        if (empty($vacacion)) {
            Flash::error('Vacación not found');
            return redirect(route('admin.solicitud-vacaciones.index'));
        }



        return view('admin.solicitudVacaciones.show', compact('vacacion'));
    }


    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
        abort_if(Gate::denies('amenazas_editar'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $request->validate([
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'empleado_id' => 'required|int',
            'dias_solicitados' => 'required|int',
            'año' => 'required|int',
            'autoriza' => 'required|int',
            'aprobacion' => 'required|int',
        ]);

        $solicitud = SolicitudVacaciones::find($id);
        $supervisor = Empleado::find($request->autoriza);
        $solicitante = Empleado::find($request->empleado_id);

        $solicitud->update($request->all());
        
        Mail::to($solicitante->email)->send(new MailRespuestaVacaciones( $solicitante,$supervisor,$solicitud));
        Flash::success('Respuesta enviada satisfactoriamente.');

        return redirect(route('admin.solicitud-vacaciones.aprobacion'));
    }


    public function destroy(Request $request)
    {
        $id = $request->id;
        $vacaciones = SolicitudVacaciones::find($id);
        $vacaciones->delete();

        return response()->json(['status' => 200]);
    }

    public function massDestroy(Request $request)
    {
        SolicitudVacaciones::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function diasDisponibles()
    {

        $ingreso = auth()->user()->empleado->antiguedad;
        $año = Carbon::createFromDate($ingreso)->age;

        if ($año >= 1) {

            $dias_otorgados = Vacaciones::where('inicio_conteo', '=', $año)->pluck('dias')->first();
            $dias_extra = IncidentesVacaciones::where('efecto', 1)->where('aniversario', $año)->whereHas('empleados', function ($q) {
                $q->where('empleado_id', auth()->user()->empleado->id);
            })->pluck('dias_aplicados')->sum();
            $dias_restados = IncidentesVacaciones::where('efecto', 2)->where('aniversario', $año)->whereHas('empleados', function ($q) {
                $q->where('empleado_id', auth()->user()->empleado->id);
            })->pluck('dias_aplicados')->sum();

            $dias_gastados = SolicitudVacaciones::where('empleado_id', auth()->user()->empleado->id)->where('año', '=', $año)->where(function ($query) {
                $query->where('aprobacion', '=', 1)
                    ->orwhere('aprobacion', '=', 3);
            })->sum('dias_solicitados');
            $dias_disponibles = $dias_otorgados - $dias_gastados + $dias_extra - $dias_restados;
            return $dias_disponibles;
        } else {

            return null;
        }
    }

    public function aprobacionMenu(Request $request)
    {
        $solicitud_vacacion= SolicitudVacaciones::where('autoriza', auth()->user()->empleado->id)->where('aprobacion',1)->count();
        $solicitud_dayoff= SolicitudDayOff::where('autoriza', auth()->user()->empleado->id)->where('aprobacion',1)->count();
        $solicitud_permiso= SolicitudPermisoGoceSueldo::where('autoriza', auth()->user()->empleado->id)->where('aprobacion',1)->count();
        $solicitudes_pendientes = $solicitud_vacacion + $solicitud_dayoff + $solicitud_permiso;
        return view('admin.solicitudVacaciones.aprobacion-menu',compact('solicitud_dayoff','solicitud_vacacion','solicitud_permiso'));
    }


    public function aprobacion(Request $request)
    {
        abort_if(Gate::denies('amenazas_acceder'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data = auth()->user()->empleado->id;

        if ($request->ajax()) {
            $query = SolicitudVacaciones::with('empleado')->where('autoriza', '=', $data)->where('aprobacion', '=', 1)->orderByDesc('id')->get();
            $table = datatables()::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('empleado', function ($row) {
                return $row->empleado ? $row->empleado : '';
            });

            $table->editColumn('dias_solicitados', function ($row) {
                return $row->dias_solicitados ? $row->dias_solicitados : '';
            });
            $table->editColumn('fecha_inicio', function ($row) {
                return $row->fecha_inicio ? $row->fecha_inicio : '';
            });
            $table->editColumn('fecha_fin', function ($row) {
                return $row->fecha_fin ? $row->fecha_fin : '';
            });
            $table->editColumn('aprobacion', function ($row) {
                return $row->aprobacion ? $row->aprobacion  : '';
            });
            // $table->editColumn('descripcion', function ($row) {
            //     return $row->descripcion ? $row->descripcion : '';
            // });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }
        $organizacion_actual = Organizacion::select('empresa', 'logotipo')->first();
        if (is_null($organizacion_actual)) {
            $organizacion_actual = new Organizacion();
            $organizacion_actual->logotipo = asset('img/logo.png');
            $organizacion_actual->empresa = 'Silent4Business';
        }
        $logo_actual = $organizacion_actual->logotipo;
        $empresa_actual = $organizacion_actual->empresa;
        return view('admin.solicitudVacaciones.global-solicitudes', compact('logo_actual', 'empresa_actual'));
    }


    public function respuesta($id)
    {

        abort_if(Gate::denies('amenazas_editar'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $vacacion = SolicitudVacaciones::with('empleado')->find($id);

        if (empty($vacacion)) {
            Flash::error('Vacación not found');

            return redirect(route('admin.solicitud-vacaciones.index'));
        }
        $solicitante = $vacacion->empleado_id;
        $ingreso = Empleado::where('id', $solicitante)->pluck('antiguedad')->first();
        $año = Carbon::createFromDate($ingreso)->age;
        if ($año >= 1) {
            $dias_otorgados = Vacaciones::where('inicio_conteo', '=', $año)->pluck('dias')->first();
            $dias_gastados = SolicitudVacaciones::where('año', '=', $año)->where('aprobacion', '=', '3')->sum('dias_solicitados');
            $dias_disponibles = $dias_otorgados - $dias_gastados;
        } else {
            $dias_disponibles = null;
        }

        return view('admin.solicitudVacaciones.respuesta', compact('vacacion', 'dias_disponibles', 'año'));
    }

    public function archivo(Request $request)
    {

        abort_if(Gate::denies('amenazas_acceder'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data = auth()->user()->empleado->id;

        if ($request->ajax()) {
            $query = SolicitudVacaciones::with('empleado')->where('autoriza', '=', $data)->where(function ($query) {
                $query->where('aprobacion', '=', 2)
                    ->orwhere('aprobacion', '=', 3);
            })->orderByDesc('id')->get();
            $table = datatables()::of($query);
            $table->editColumn('actions', function ($row) {
                $viewGate = 'amenazas_ver';
                $editGate = 'amenazas_editar';
                $deleteGate = 'amenazas_eliminar';
                $crudRoutePart = 'solicitud-vacaciones';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('empleado', function ($row) {
                return $row->empleado ? $row->empleado : '';
            });
            $table->editColumn('dias_solicitados', function ($row) {
                return $row->dias_solicitados ? $row->dias_solicitados : '';
            });
            $table->editColumn('fecha_inicio', function ($row) {
                return $row->fecha_inicio ? $row->fecha_inicio : '';
            });
            $table->editColumn('fecha_fin', function ($row) {
                return $row->fecha_fin ? $row->fecha_fin : '';
            });
            $table->editColumn('aprobacion', function ($row) {
                return $row->aprobacion ? $row->aprobacion : '';
            });

            $table->rawColumns(['actions', 'placeholder']);
            return $table->make(true);
        }
        $organizacion_actual = Organizacion::select('empresa', 'logotipo')->first();
        if (is_null($organizacion_actual)) {
            $organizacion_actual = new Organizacion();
            $organizacion_actual->logotipo = asset('img/logo.png');
            $organizacion_actual->empresa = 'Silent4Business';
        }
        $logo_actual = $organizacion_actual->logotipo;
        $empresa_actual = $organizacion_actual->empresa;
        return view('admin.solicitudVacaciones.archivo', compact('logo_actual', 'empresa_actual'));
    }
    public function showVistaGlobal($id)
    {
        $vacacion = SolicitudVacaciones::with('empleado')->find($id);

        if (empty($vacacion)) {
            Flash::error('Vacación not found');
            return redirect(route('admin.solicitud-vacaciones.index'));
        }
        return view('admin.solicitudVacaciones.vistaGlobal',compact('vacacion'));
    }

    public function archivoShow($id)
    {
        $vacacion = SolicitudVacaciones::with('empleado')->find($id);

        if (empty($vacacion)) {
            Flash::error('Vacación not found');
            return redirect(route('admin.solicitud-vacaciones.index'));
        }
        return view('admin.solicitudVacaciones.archivoShow',compact('vacacion'));
    }
}
