<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Timesheet;
use App\Models\TimesheetCliente;
use App\Models\TimesheetHoras;
use App\Models\TimesheetProyecto;
use App\Models\TimesheetTarea;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class TimesheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times = timesheet::where('empleado_id', auth()->user()->empleado->id)->get();

        return view('admin.timesheet.index', compact('times'));
    }

    public function timesheetInicio()
    {
        abort_if(Gate::denies('timesheet_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.timesheet.timesheet-inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('timesheet_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $proyectos = TimesheetProyecto::get();
        $tareas = TimesheetTarea::get();

        return view('admin.timesheet.create', compact('proyectos', 'tareas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_if(Gate::denies('timesheet_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $request->validate([
            'timesheet.1.proyecto' => 'required',
            'timesheet.1.tarea' => 'required',
        ]);
        if (
            $request->timesheet[1]['lunes'] == null &&
            $request->timesheet[1]['martes'] == null &&
            $request->timesheet[1]['miercoles'] == null &&
            $request->timesheet[1]['jueves'] == null &&
            $request->timesheet[1]['viernes'] == null &&
            $request->timesheet[1]['sabado'] == null &&
            $request->timesheet[1]['domingo'] == null
        ) {
            $request->validate([
                'timesheet.1.horas' => 'required',
            ]);
        }

        foreach ($request->timesheet as $index => $hora) {
            if ($index > 1) {
                if (array_key_exists('proyecto', $hora) || array_key_exists('tarea', $hora)) {
                    $request->validate([
                        "timesheet.{$index}.proyecto" => 'required',
                        "timesheet.{$index}.tarea" => 'required',
                    ]);

                    if (
                        $hora['lunes'] == null &&
                        $hora['martes'] == null &&
                        $hora['miercoles'] == null &&
                        $hora['jueves'] == null &&
                        $hora['viernes'] == null &&
                        $hora['sabado'] == null &&
                        $hora['domingo'] == null
                    ) {
                        $request->validate([
                            "timesheet.{$index}.horas" => 'required',
                        ]);
                    }
                }
            }
        }

        $timesheet_nuevo = Timesheet::create([
            'fecha_dia' => $request->fecha_dia,
            'empleado_id' => auth()->user()->empleado->id,
            'aprobador_id' => auth()->user()->empleado->supervisor_id,
        ]);

        foreach ($request->timesheet as $index => $hora) {
            if (array_key_exists('proyecto', $hora) && array_key_exists('tarea', $hora)) {
                $horas_nuevas = TimesheetHoras::create([
                    'timesheet_id' => $timesheet_nuevo->id,
                    'proyecto_id' => array_key_exists('proyecto', $hora) ? $hora['proyecto'] : null,
                    'tarea_id' => array_key_exists('tarea', $hora) ? $hora['tarea'] : null,
                    'facturable' => array_key_exists('facturable', $hora) ? true : false,
                    'horas_lunes' => $hora['lunes'],
                    'horas_martes' => $hora['martes'],
                    'horas_miercoles' => $hora['miercoles'],
                    'horas_jueves' => $hora['jueves'],
                    'horas_viernes' => $hora['viernes'],
                    'horas_sabado' => $hora['sabado'],
                    'horas_domingo' => $hora['domingo'],
                    'descripcion' => $hora['descripcion'],
                ]);
            }
        }

        return redirect()->route('admin.timesheet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.timesheet.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function proyectos()
    {
        $clientes = TimesheetCliente::get();

        return view('admin.timesheet.proyectos', compact('clientes'));
    }

    public function tareas()
    {
        abort_if(Gate::denies('timesheet_administrador_tareas_proyectos_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.timesheet.tareas');
    }

    public function tareasProyecto($proyecto_id)
    {
        $proyecto_id = $proyecto_id;

        return view('admin.timesheet.tareas-proyecto', compact('proyecto_id'));
    }

    public function rechazadas()
    {
        abort_if(Gate::denies('mi_timesheet_horas_rechazadas_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $rechazadas = Timesheet::where('rechazado', true)->where('empleado_id', auth()->user()->empleado->id)->get();

        return view('admin.timesheet.rechazadas', compact('rechazadas'));
    }

    public function aprobaciones()
    {
        abort_if(Gate::denies('timesheet_administrador_aprobar_rechazar_horas_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $aprobaciones = Timesheet::where('rechazado', false)
            ->where('aprobado', false)
            ->where('aprobador_id', auth()->user()->empleado->id)
            ->get();

        return view('admin.timesheet.aprobaciones', compact('aprobaciones'));
    }

    public function aprobar($id)
    {
        abort_if(Gate::denies('timesheet_administrador_aprobar_horas'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $aprobar = Timesheet::find($id);
        $aprobar->update([
            'aprobado' => true,
            'rechazado' => false,
        ]);

        return redirect()->route('admin.timesheet-aprobaciones')->with('success', 'Guardado con éxito');
    }

    public function clientes()
    {
        abort_if(Gate::denies('timesheet_administrador_clientes_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $clientes = TimesheetCliente::get();

        return view('admin.timesheet.clientes.index', compact('clientes'));
    }

    public function clientesCreate()
    {
        return view('admin.timesheet.clientes.create');
    }

    public function clientesStore(Request $request)
    {
        $cliente_nuevo = TimesheetCliente::create($request->all());

        return redirect()->route('admin.timesheet-clientes')->with('success', 'Guardado con éxito');
    }
}
