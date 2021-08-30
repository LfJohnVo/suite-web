<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActividadQueja;
use App\Models\PlanImplementacion;
use App\Models\Quejas;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ActividadesQuejasController extends Controller
{

    public function index(Request $request, $queja_id)
    {
        if ($request->ajax()) {
            $actividades = ActividadQueja::with('responsables')->where('queja_id', $queja_id)->get();
            return datatables()->of($actividades)->toJson();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'actividad' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'prioridad' => 'required',
            'tipo' => 'required',
            'responsables' => 'required',
            'comentarios' => 'required',
        ]);
        if ($request->ajax()) {
            $actividad = ActividadQueja::create($request->all());
            $responsables = $request->responsables;
            $actividad->responsables()->sync($responsables);

            $modelo = Quejas::find(intval($request->queja_id));
            $actividad = ActividadQueja::find($actividad->id);
            if (!count($modelo->planes)) {
                $this->vincularActividadesPlanDeAccion($actividad, $modelo);
            } else {
                $plan = $modelo->planes->first();
                $this->vincularActividadesPlanDeAccion($actividad, $modelo, $plan, true);
            }

            return response()->json(['success' => true]);
            // $actividades = ActividadIncidente::with('responsables')->where('seguridad_id', $request->seguridad_id)->get();
        }
    }


    public function vincularActividadesPlanDeAccion($actividad, $modelo, $planEdit = null, $edit = false)
    {
        if (isset($actividad)) {
            if (!count($modelo->planes)) {
                $tasks = [
                    array(
                        'id' => 'tmp_' . (strtotime(now())) . '_1',
                        'end' => strtotime(now()) * 1000,
                        'name' => 'Quejas - ' . $modelo->folio . '-' . $modelo->titulo,
                        'level' => 0,
                        'start' => strtotime(now()) * 1000,
                        "canAdd" => true,
                        "status" => "STATUS_UNDEFINED",
                        "canWrite" => true,
                        'duration' => 0,
                        'progress' => 0,
                        "canDelete" => true,
                        "collapsed" => false,
                        "relevance" => "0",
                        "canAddIssue" => true,
                        "description" => "",
                        "endIsMilestone" => false,
                        "startIsMilestone" => false,
                        "progressByWorklog" => false,
                        "assigs" => []
                    ),
                    array(
                        'id' => 'tmp_' . (strtotime(now())) . rand(1, 1000),
                        'end' => strtotime(now()) * 1000,
                        'name' => $modelo->folio . '-' . $modelo->titulo,
                        'level' => 1,
                        'start' => strtotime(now()) * 1000,
                        "canAdd" => true,
                        "status" => "STATUS_UNDEFINED",
                        "canWrite" => true,
                        'duration' => 0,
                        'progress' => 0,
                        "canDelete" => true,
                        "collapsed" => false,
                        "relevance" => "0",
                        "canAddIssue" => true,
                        "description" => "",
                        "endIsMilestone" => false,
                        "startIsMilestone" => false,
                        "progressByWorklog" => false,
                        "assigs" => []
                    )
                ];

                $asignados = $actividad->responsables;
                $assigs = [];
                foreach ($asignados as $asignado) {
                    // $empleado = Empleado::find($id);
                    $assigs[] = array(
                        "id" => 'tmp_' . time() . '_' . $asignado->id,
                        "effort" => "0",
                        "roleId" => "1",
                        "resourceId" => $asignado->id
                    );
                }

                $start = strtotime($actividad->fecha_inicio) * 1000;
                $end = strtotime($actividad->fecha_fin) * 1000;
                $duration = Carbon::parse($actividad->fecha_inicio)->diffInDays(Carbon::parse($actividad->fecha_fin));
                $tasks[] = array(
                    'id' => 'tmp_' . $start . '_' . $end . '_' . $actividad->id,
                    'end' => $end,
                    'name' => $actividad->actividad,
                    'level' => 2,
                    'start' => $start,
                    "canAdd" => true,
                    "status" => "STATUS_UNDEFINED",
                    "canWrite" => true,
                    'duration' => $duration,
                    'progress' => 0,
                    "canDelete" => true,
                    "collapsed" => false,
                    "relevance" => "0",
                    "canAddIssue" => true,
                    "description" => $actividad->comentarios,
                    "endIsMilestone" => false,
                    "startIsMilestone" => false,
                    "progressByWorklog" => false,
                    "assigs" => $assigs
                );
            } else {
                $planActual = $modelo->planes->first();
                $tasks = $planActual->tasks;

                $asignados = $actividad->responsables;

                $assigs = [];
                foreach ($asignados as $asignado) {
                    // $empleado = Empleado::find($id);
                    $assigs[] = array(
                        "id" => 'tmp_' . time() . '_' . $asignado->id,
                        "effort" => "0",
                        "roleId" => "1",
                        "resourceId" => $asignado->id
                    );
                }

                $start = strtotime($actividad->fecha_inicio) * 1000;
                $end = strtotime($actividad->fecha_fin) * 1000;
                $duration = Carbon::parse($actividad->fecha_inicio)->diffInDays(Carbon::parse($actividad->fecha_fin));
                $tasks[] = array(
                    'id' => 'tmp_' . $start . '_' . $end . '_' . $actividad->id,
                    'end' => $end,
                    'name' => $actividad->actividad,
                    'level' => 2,
                    'start' => $start,
                    "canAdd" => true,
                    "status" => "STATUS_UNDEFINED",
                    "canWrite" => true,
                    'duration' => $duration,
                    'progress' => 0,
                    "canDelete" => true,
                    "collapsed" => false,
                    "relevance" => "0",
                    "canAddIssue" => true,
                    "description" => $actividad->comentarios,
                    "endIsMilestone" => false,
                    "startIsMilestone" => false,
                    "progressByWorklog" => false,
                    "assigs" => $assigs
                );
            }

            if ($edit) {
                $planEdit->update([
                    'tasks' => $tasks
                ]);
                $modelo->planes()->sync($planEdit);
            } else {
                $planImplementacion = new PlanImplementacion(); // Necesario se carga inicialmente el Diagrama Universal de Gantt
                $planImplementacion->tasks = $tasks;
                $planImplementacion->canAdd = true;
                $planImplementacion->canWrite = true;
                $planImplementacion->canWriteOnParent = true;
                $planImplementacion->changesReasonWhy = false;
                $planImplementacion->selectedRow = 0;
                $planImplementacion->zoom = "3d";
                $planImplementacion->parent = 'Queja - ' . $modelo->folio;
                $planImplementacion->norma = 'ISO 27001';
                $planImplementacion->modulo_origen = 'Quejas';
                $planImplementacion->objetivo = null;
                $planImplementacion->elaboro_id = auth()->user()->empleado->id;

                $modelo->planes()->save($planImplementacion);
            }
        }
    }
}
