<?php

namespace App\Livewire\Timesheet;

use Carbon\Carbon;
use App\Models\Area;
use Livewire\Component;
use App\Models\Empleado;
use App\Models\Timesheet;
use Livewire\WithPagination;
use App\Models\TimesheetHoras;
use App\Models\TimesheetProyecto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Cache;
use App\Exports\ReporteColaboradorTarea;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ReportesProyemp extends Component
{
    use WithPagination;
    use LivewireAlert;

    protected $paginationTheme = 'bootstrap';

    public $todos_contador;

    public $borrador_contador;

    public $pendientes_contador;

    public $aprobados_contador;

    public $rechazos_contador;

    public $totalRegistrosMostrando;

    public $perPage = 5;

    public $search;

    // public $times;
    public $areas;

    public $area_id = 0;

    public $estatus;

    public $fecha_inicio;

    public $fecha_fin;

    public $emp;

    public $emp_id;

    public $apr;

    public $apr_id;

    public $proy;

    public $proy_id;

    public $empleados_estatus;

    public function mount()
    {
        $this->estatus = null;
        $this->areas = Area::getIdNameAll();
        $this->emp = Empleado::getIdNameAll();
        $this->proy = TimesheetProyecto::getIdNameAll();
    }

    public function updatedFechaInicio($value)
    {
        $fi = Carbon::parse($value)->format('Y-m-d');
        $this->fecha_inicio = $fi;
        // dd($value, $this->fecha_inicio);
        // $this->times = Timesheet::whereHas('empleado', function ($query) {
        //     if ($this->area_id == 0) {
        //         return $query;
        //     } else {
        //         $query->where('area_id', $this->area_id);
        //     }
        // })->where('fecha_dia', '>=', $this->fecha_inicio ? $this->fecha_inicio : '1900-01-01')->where('fecha_dia', '<=', $this->fecha_fin ? $this->fecha_fin : now()->format('Y-m-d'))->orderByDesc('fecha_dia')->get();
    }

    public function updatedFechaFin($value)
    {
        $ff = Carbon::parse($value)->format('Y-m-d');
        $this->fecha_fin = $ff;
        // $this->times = Timesheet::whereHas('empleado', function ($query) {
        //     if ($this->area_id == 0) {
        //         return $query;
        //     } else {
        //         $query->where('area_id', $this->area_id);
        //     }
        // })->where('fecha_dia', '>=', $this->fecha_inicio ? $this->fecha_inicio : '1900-01-01')->where('fecha_dia', '<=', $this->fecha_fin ? $this->fecha_fin : now()->format('Y-m-d'))->orderByDesc('fecha_dia')->get();
    }

    // public function updatedAreaId($value)
    // {
    //     $this->area_id = $value;

    //     // $this->times = Timesheet::whereHas('empleado', function ($query) {
    //     //     if ($this->area_id == 0) {
    //     //         return $query;
    //     //     } else {
    //     //         $query->where('area_id', $this->area_id);
    //     //     }
    //     // })->where('fecha_dia', '>=', $this->fecha_inicio ? $this->fecha_inicio : '1900-01-01')->where('fecha_dia', '<=', $this->fecha_fin ? $this->fecha_fin : now()->format('Y-m-d'))->orderByDesc('fecha_dia')->get();
    // }

    public function updatedEmpleadoId($value)
    {
        $this->emp_id = $value;

        // if($this->emp_id != 0)
        // $emp_area = Empleado::select('area_id')->find($this->emp_id);
        // $areas_emp = TimesheetProyectoArea::where('area_id', '=', $emp_area->area_id)->get();
        // $areas = Area::
    }

    public function updatedProyectoId($value)
    {
        $this->proy_id = $value;
    }

    // public function updatedAprobadorId($value)
    // {
    //     $this->apr_id = $value;

    // }

    public function render()
    {
        // dd($this->fecha_inicio);
        //Query para obtener los timesheet y filtrarlo
        $times = Cache::remember('TimesheeHoras:timesheethoras_all', 3600 * 4, function () {
            return TimesheetHoras::with('tarea.areaData')
                ->whereHas('timesheet', function ($query) {
                    if ($this->emp_id != 0) {
                        $query->where('empleado_id', $this->emp_id);
                    }
                    $query->where('fecha_dia', '>=', $this->fecha_inicio ?? '1900-01-01')
                        ->where('fecha_dia', '<=', $this->fecha_fin ?? now()->format('Y-m-d'))
                        ->orderByDesc('fecha_dia');
                })
                ->whereHas('proyecto', function ($query) {
                    if ($this->proy_id != 0) {
                        $query->where('id', $this->proy_id);
                    }
                })
                ->fastPaginate($this->perPage);
        });

        $this->totalRegistrosMostrando = $times->total();

        // $this->totalRegistrosMostrando = $proyemp->count();

        //Funcion para pintar contadores en los filtros de estatus
        // $this->establecerContadores();

        $this->dispatch('scriptTabla');

        return view('livewire.timesheet.reportes-proyemp', compact('times'));
    }

    // public function establecerContadores()
    // {
    //     //Contador Todos los registros timesheet
    //     $this->todos_contador = Timesheet::select('id', 'empleado_id')->whereHas('empleado', function ($query) {
    //         if ($this->area_id == 0) {
    //             return $query;
    //         } else {
    //             $query->where('area_id', $this->area_id);
    //         }
    //     })
    //         ->where('fecha_dia', '>=', $this->fecha_inicio ? $this->fecha_inicio : '1900-01-01')->where('fecha_dia', '<=', $this->fecha_fin ? $this->fecha_fin : now()->format('Y-m-d'))->count();

    //     //Contador Todos los registros timesheet en borrador
    //     $this->borrador_contador = Timesheet::select('id', 'empleado_id')->whereHas('empleado', function ($query) {
    //         if ($this->area_id == 0) {
    //             return $query;
    //         } else {
    //             $query->where('area_id', $this->area_id);
    //         }
    //     })
    //         ->where('fecha_dia', '>=', $this->fecha_inicio ? $this->fecha_inicio : '1900-01-01')->where('fecha_dia', '<=', $this->fecha_fin ? $this->fecha_fin : now()->format('Y-m-d'))->where('estatus', 'papelera')->count();

    //     //Contador Todos los registros timesheet en penduente
    //     $this->pendientes_contador = Timesheet::select('id', 'empleado_id')->whereHas('empleado', function ($query) {
    //         if ($this->area_id == 0) {
    //             return $query;
    //         } else {
    //             $query->where('area_id', $this->area_id);
    //         }
    //     })
    //         ->where('fecha_dia', '>=', $this->fecha_inicio ? $this->fecha_inicio : '1900-01-01')->where('fecha_dia', '<=', $this->fecha_fin ?
    //             $this->fecha_fin : now()->format('Y-m-d'))->where('estatus', 'pendiente')->count();

    //     //Contador Todos los registros timesheet aprobados
    //     $this->aprobados_contador = Timesheet::select('id', 'empleado_id')->whereHas('empleado', function ($query) {
    //         if ($this->area_id == 0) {
    //             return $query;
    //         } else {
    //             $query->where('area_id', $this->area_id);
    //         }
    //     })
    //         ->where('fecha_dia', '>=', $this->fecha_inicio ? $this->fecha_inicio : '1900-01-01')->where('fecha_dia', '<=', $this->fecha_fin ? $this->fecha_fin : now()->format('Y-m-d'))->where('estatus', 'aprobado')->count();

    //     //Contador Todos los registros timesheet rechazados
    //     $this->rechazos_contador = Timesheet::select('id', 'empleado_id')->whereHas('empleado', function ($query) {
    //         if ($this->area_id == 0) {
    //             return $query;
    //         } else {
    //             $query->where('area_id', $this->area_id);
    //         }
    //     })
    //         ->where('fecha_dia', '>=', $this->fecha_inicio ? $this->fecha_inicio : '1900-01-01')->where('fecha_dia', '<=', $this->fecha_fin ? $this->fecha_fin : now()->format('Y-m-d'))->where('estatus', 'rechazado')->count();
    // }

    // public function exportExcel()
    // {
    //     $date = Carbon::now();
    //     $date = $date->format('d-m-Y');

    //     $file_name = 'Reporte Colaborador-Tarea' . $date . '.xlsx';
    //     // dd($this->fecha_inicio, $this->fecha_fin, $this->area_id, $this->emp_id);
    //     return Excel::download(new ReporteColaboradorTarea($this->fecha_inicio, $this->fecha_fin, $this->area_id, $this->emp_id, $this->proy_id), $file_name);
    // }

    public function exportExcel()
    {
        $response = Http::post(env('GOSERVICES_API') . '/api/timesheet/proyecto', [
            'emp_id' => $this->emp_id,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
            'proy_id' => $this->proy_id,
            'solicitante' => Auth::user()->email,
        ]);

        if ($response->successful()) {
            // Get the XLS content from the response
            $xlsContent = $response->getBody()->getContents();

            $this->alert('success', $xlsContent, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'text' => 'Revise su bandeja de correo',
                'timerProgressBar' => true,
            ]);
        } else {
            // Handle the error if the request is not successful
            return response()->json([
                'message' => 'Failed to get data from the API',
            ], $response->status());
        }
    }

    // public function todos()
    // {
    //     // $this->times = Timesheet::whereHas('empleado', function ($query) {
    //     //     if ($this->area_id == 0) {
    //     //         return $query;
    //     //     } else {
    //     //         $query->where('area_id', $this->area_id);
    //     //     }
    //     // })->where('fecha_dia', '>=', $this->fecha_inicio ? $this->fecha_inicio : '1900-01-01')->where('fecha_dia', '<=', $this->fecha_fin ? $this->fecha_fin : now()->format('Y-m-d'))->orderByDesc('fecha_dia')->get();
    //     $this->estatus = null;
    // }

    // public function papelera()
    // {
    //     $this->estatus = 'papelera';
    //     // $this->times = Timesheet::whereHas('empleado', function ($query) {
    //     //     if ($this->area_id == 0) {
    //     //         return $query;
    //     //     } else {
    //     //         $query->where('area_id', $this->area_id);
    //     //     }
    //     // })->where('fecha_dia', '>=', $this->fecha_inicio ? $this->fecha_inicio : '1900-01-01')->where('fecha_dia', '<=', $this->fecha_fin ? $this->fecha_fin : now()->format('Y-m-d'))->where('estatus', 'papelera')->orderByDesc('fecha_dia')->get();
    // }

    // public function pendientes()
    // {
    //     // $this->times = Timesheet::whereHas('empleado', function ($query) {
    //     //     if ($this->area_id == 0) {
    //     //         return $query;
    //     //     } else {
    //     //         $query->where('area_id', $this->area_id);
    //     //     }
    //     // })->where('fecha_dia', '>=', $this->fecha_inicio ? $this->fecha_inicio : '1900-01-01')->where('fecha_dia', '<=', $this->fecha_fin ? $this->fecha_fin : now()->format('Y-m-d'))->where('estatus', 'pendiente')->orderByDesc('fecha_dia')->get();
    //     $this->estatus = 'pendiente';
    // }

    // public function aprobados()
    // {
    //     // $this->times = Timesheet::whereHas('empleado', function ($query) {
    //     //     if ($this->area_id == 0) {
    //     //         return $query;
    //     //     } else {
    //     //         $query->where('area_id', $this->area_id);
    //     //     }
    //     // })->where('fecha_dia', '>=', $this->fecha_inicio ? $this->fecha_inicio : '1900-01-01')->where('fecha_dia', '<=', $this->fecha_fin ? $this->fecha_fin : now()->format('Y-m-d'))->where('estatus', 'aprobado')->orderByDesc('fecha_dia')->get();
    //     $this->estatus = 'aprobado';
    // }

    // public function rechazos()
    // {
    //     // $this->times = Timesheet::whereHas('empleado', function ($query) {
    //     //     if ($this->area_id == 0) {
    //     //         return $query;
    //     //     } else {
    //     //         $query->where('area_id', $this->area_id);
    //     //     }
    //     // })->where('fecha_dia', '>=', $this->fecha_inicio ? $this->fecha_inicio : '1900-01-01')->where('fecha_dia', '<=', $this->fecha_fin ? $this->fecha_fin : now()->format('Y-m-d'))->where('estatus', 'rechazado')->orderByDesc('fecha_dia')->get();
    //     $this->estatus = 'rechazado';
    // }
}
