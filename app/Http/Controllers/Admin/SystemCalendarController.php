<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuditoriaAnual;
use App\Models\AuditoriaInterna;
use App\Models\Calendario;
use App\Models\CalendarioOficial;
use App\Models\Empleado;
use App\Models\Organizacion;
use App\Models\PlanBaseActividade;
use App\Models\PlanImplementacion;
use App\Models\Recurso;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class SystemCalendarController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calendario_corporativo_acceder'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $empleado = auth()->user()->empleado;
        $usuario = auth()->user();

        $implementaciones = PlanImplementacion::get();
        $actividades = collect();

        if ($implementaciones) {
            foreach ($implementaciones as $implementacion) {
                $tasks = $implementacion->tasks;
                foreach ($tasks as $task) {
                    $task->parent_id = $implementacion->id;
                    $task->status = isset($task->status) ? $task->status : 'STATUS_UNDEFINED';
                    $task->end = intval($task->end);
                    $task->start = intval($task->start);
                    $task->canAdd = $task->canAdd == 'true' ? true : false;
                    $task->canWrite = $task->canWrite == 'true' ? true : false;
                    $task->duration = intval($task->duration);
                    $task->progress = intval($task->progress);
                    $task->canDelete = $task->canDelete == 'true' ? true : false;
                    isset($task->level) ? $task->level = intval($task->level) : $task->level = 0;
                    isset($task->collapsed) ? $task->collapsed = $task->collapsed == 'true' ? true : false : $task->collapsed = false;
                    $task->canAddIssue = $task->canAddIssue == 'true' ? true : false;
                    $task->endIsMilestone = $task->endIsMilestone == 'true' ? true : false;
                    $task->startIsMilestone = $task->startIsMilestone == 'true' ? true : false;
                    $task->progressByWorklog = $task->progressByWorklog == 'true' ? true : false;
                    $actividades->push($task);
                }

                $implementacion->tasks = $tasks;
                // if (!isset($implementacion->assigs)) {
                //     $implementacion = (object)array_merge((array)$implementacion, array('assigs' => []));
                // }
            }
        }
        // $actividades = $actividades->flatten(1);

        $plan_base = PlanBaseActividade::get();
        $auditorias_anual = AuditoriaAnual::get();
        $auditoria_internas = AuditoriaInterna::get();
        // dd($auditoria_internas);

        $recursos = collect();
        if ($usuario->empleado) {
            $recursos = Recurso::whereHas('empleados', function ($query) use ($empleado) {
                $query->where('empleados.id', $empleado->id);
            })->get();
        }

        $eventos = Calendario::get();
        $oficiales = CalendarioOficial::get();

        $cumples_aniversarios = Empleado::alta()->get();
        $nombre_organizacion = Organizacion::first();
        $nombre_organizacion = $nombre_organizacion ? $nombre_organizacion->empresa : 'la Organización';

        return view('admin.calendar.calendar', compact('plan_base', 'auditorias_anual', 'recursos', 'actividades', 'auditoria_internas', 'eventos', 'oficiales', 'cumples_aniversarios', 'nombre_organizacion'));
    }
}
