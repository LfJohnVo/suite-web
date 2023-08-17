<?php

namespace App\Http\Livewire\Timesheet;

use App\Mail\TimesheetCorreoRetraso;
use App\Models\Area;
use App\Models\Empleado;
use App\Models\Organizacion;
use App\Models\Timesheet;
use App\Models\TimesheetHoras;
use App\Models\TimesheetProyecto;
use App\Traits\getWeeksFromRange;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Livewire\WithPagination;

class ReportesEmpleados extends Component
{
    use getWeeksFromRange;
    use LivewireAlert;
    use WithPagination;

    public $lista_empleados;

    public $empleado_seleccionado_id;

    public $hoy_format;

    public $empleado;

    public $empleados;

    public $perPage = 5;

    public $totalRegistrosMostrando;

    public $timesheet;

    public $hoy;

    public $areas;

    public $todos_contador;

    public $borrador_contador;

    public $pendientes_contador;

    public $aprobados_contador;

    public $rechazos_contador;

    public $times_empleado;

    public $proyectos;

    public $proyectos_detalle;

    public $horas_totales = 0;

    public $times_empleado_horas;

    public $horas_totales_filtros_empleados;

    public $reporte_general = false;

    public $calendario_tabla;

    public $empleados_list_global;

    public $times_faltantes_empleado;

    public $empleados_estatus;

    public $semanas_totales_calendario = 0;

    public $costo_total_empleado = 0;

    public $area_id = 0;

    public $fecha_inicio;

    public $fecha_fin;

    public $fecha_inicio_empleado;

    public $fecha_fin_empleado;
    public $empleadosQuery;
    public $timesheetQuery;

    public function mount()
    {
        $this->areas = Area::getAll();
        $this->empleados_estatus = 'alta';
        $this->fecha_inicio = Carbon::now()->endOfMonth()->subMonth(1)->format('Y-m-d');
        $this->fecha_fin = Carbon::now()->format('Y-m-d');
        $this->empleadosQuery = Empleado::getreportesAll();
        $this->timesheetQuery = Timesheet::getreportes();
    }

    public function updatedAreaId($value)
    {
        $this->area_id = $value;
        $this->empleado = null;
    }

    public function updatedFechaInicio($value)
    {
        $this->fecha_inicio = $value;
        if ($this->fecha_inicio > now()->format('Y-m-d')) {
            $this->alert('info', 'La fecha de inicio no puede ser posterior a la fecha de hoy', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
            $this->fecha_inicio = now()->endOfMonth()->subMonths(2)->format('Y-m-d');
        }
        $this->empleado = null;
    }

    public function updatedFechaFin($value)
    {
        $this->fecha_fin = $value;
        if (intval(Carbon::parse($this->fecha_fin)->format('Y')) > intval(now()->format('Y'))) {
            $this->alert('info', 'El año de la fecha fin no puede ser posterior al año actual ( ' . now()->format('Y') . ' )', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
            $this->fecha_fin = now()->format('Y-m-d');
        } else {
            if ($this->fecha_fin < $this->fecha_inicio) {
                $this->alert('info', 'La fecha de fin no puede ser anterior a la fecha de inicio ( ' . $this->fecha_inicio . ' )', [
                    'position' => 'top-end',
                    'timer' => 3000,
                    'toast' => true,
                ]);
                $this->fecha_fin = now()->format('Y-m-d');
            }
        }
        $this->empleado = null;
    }

    public function updatedFechaInicioEmpleado($value)
    {
        $this->fecha_inicio_empleado = $value;
        $this->buscarEmpleado($this->empleado->id);
    }

    public function updatedFechaFinEmpleado($value)
    {
        $this->fecha_fin_empleado = $value;
        $this->buscarEmpleado($this->empleado->id);
    }

    public function updateEmpleadosEstatus($value)
    {
        $this->empleados_estatus = $value;
    }

    public function render()
    {
        // dd( $this->empleadosQuery);
        $this->hoy = Carbon::now();
        $semanas_del_mes = intval(($this->hoy->format('d') * 4) / 29);
        $this->empleados = collect();

        if ($this->area_id && $this->empleados_estatus) {
            $empleados_list = $this->empleadosQuery->where('area_id', $this->area_id)->where('estatus', $this->empleados_estatus);
            $this->empleados_list_global = $this->empleadosQuery->where('area_id', $this->area_id)->where('estatus', $this->empleados_estatus);
        } elseif ($this->area_id) {
            $empleados_list = $this->empleadosQuery->where('area_id', $this->area_id);
            $this->empleados_list_global = $this->empleadosQuery->where('area_id', $this->area_id);
        } elseif ($this->empleados_estatus) {
            $empleados_list = $this->empleadosQuery->where('estatus', $this->empleados_estatus);
            $this->empleados_list_global = $this->empleadosQuery->where('estatus', $this->empleados_estatus);
        } else {
            $empleados_list = $this->empleadosQuery;
            $this->empleados_list_global = $this->empleadosQuery;
        }
        // $empleados_list = Empleado::where('id', 222)->get();

        //calendario tabla
        $calendario_array = [];
        // $this->fecha_inicio = "2022-08-31";
        // $this->fecha_fin = "2023-01-29";
        $fecha_inicio_complit_timesheet = $this->fecha_inicio ? $this->fecha_inicio : Organizacion::select('fecha_registro_timesheet')->first()->fecha_registro_timesheet;
        $fecha_inicio_complit_timesheet = Carbon::parse($fecha_inicio_complit_timesheet);
        $semanas_complit_timesheet = $this->getWeeksFromRange($fecha_inicio_complit_timesheet->format('Y'), $fecha_inicio_complit_timesheet->format('m'), $fecha_inicio_complit_timesheet->format('d'), [], 'monday', 'sunday', $this->fecha_fin ? Carbon::parse($this->fecha_fin) : null, $this->fecha_fin ? Carbon::parse($this->fecha_fin) : Carbon::now(), false);
        $total_months = 0;
        // dd("test");
        foreach ($semanas_complit_timesheet as $semana) {
            $semana_array = explode('|', $semana);
            foreach ($semana_array as $semana_a) {
                $fecha = Carbon::parse($semana_a);
                $previous_month = $fecha->format('m');
                $previous_month = intval($previous_month) - 1;
                $previous_month = $previous_month == 0 ? 1 : $previous_month;
                $previous_month = Carbon::create()->day(1)->month(intval($previous_month))->format('F');
                $year = $fecha->format('Y');
                $month = $fecha->format('F');
                if (!($this->buscarKeyEnArray($year, $calendario_array))) {
                    $calendario_array["{$year}"] = [
                        'year' => $year,
                        'total_weeks' => 0,
                        'total_months' => 0,
                        'months' => [
                            "{$month}" => [
                                'weeks' => [],
                            ],
                        ],
                    ];

                    if ($month == 'January') {
                        $previous_year = $year - 1;
                        if (array_key_exists($previous_year, $calendario_array)) {
                            if (!($this->existsWeeksInMonth($semana, $calendario_array["{$previous_year}"]['months']['December']['weeks']))) {
                                $calendario_array["{$year}"]['months']["{$month}"]['weeks'][] = $semana;
                            }
                        }
                    }
                } else {
                    if (array_key_exists($month, $calendario_array["{$year}"]['months'])) {
                        if (!in_array($semana, $calendario_array["{$year}"]['months']["{$month}"]['weeks'])) {
                            $calendario_array["{$year}"]['months']["{$month}"]['weeks'][] = $semana;
                        }
                    } else {
                        if (array_key_exists($previous_month, $calendario_array["{$year}"]['months'])) {
                            if (!($this->existsWeeksInMonth($semana, $calendario_array["{$year}"]['months']["{$previous_month}"]['weeks']))) {
                                $calendario_array["{$year}"]['months']["{$previous_month}"]['weeks'][] = $semana;
                            } else {
                                $calendario_array["{$year}"]['months']["{$month}"]['weeks'][] = $semana;
                                array_pop($calendario_array["{$year}"]['months']["{$previous_month}"]['weeks']);
                            }
                        } else {
                            $calendario_array["{$year}"]['months']["{$month}"]['weeks'][] = $semana;
                        }
                    }
                }
            }
        }
        // dd("test");

        foreach ($calendario_array as $key => &$c_year) {
            $total_months = count($c_year['months']);
            $total_weeks_year = 0;
            $c_year['total_months'] = $total_months;

            foreach ($c_year['months'] as $key => &$c_mes) {
                $total_weeks = count($c_mes['weeks']);
                $total_weeks_year += $total_weeks;
                $c_mes['total_weeks'] = $total_weeks;
            }
            $c_year['total_weeks'] = $total_weeks_year;
            $this->semanas_totales_calendario += $total_weeks_year;
        }
        // dd("test");
        $this->horas_totales_filtros_empleados = 0;
        foreach ($empleados_list as $empleado_list) {
            $horas_total_time = 0;

            $fecha_registro_timesheet = Organizacion::select('fecha_registro_timesheet')->first()->fecha_registro_timesheet;

            if ($this->fecha_inicio) {
                $fecha_inicio_timesheet_empleado = $this->fecha_inicio;
            }

            if (($this->fecha_fin) && (Carbon::parse($this->fecha_fin)->lt($this->hoy))) {
                $fecha_fin_timesheet_empleado = $this->fecha_fin;
            } else {
                // $fecha_fin_timesheet_empleado = $this->hoy->format('Y-m-d');
                $fecha_fin_timesheet_empleado = $this->fecha_fin;
            }

            $hoy_2 = now();
            if ($hoy_2->subweeks(3)->lt($fecha_inicio_timesheet_empleado)) {
                if (gettype($fecha_inicio_timesheet_empleado == 'string')) {
                    $fecha_inicio_timesheet_empleado = Carbon::parse($fecha_inicio_timesheet_empleado);
                }
                $fecha_inicio_timesheet_empleado = $fecha_inicio_timesheet_empleado->subweek()->subMonth();
            }

            // horas totales por empleado
            $times_empleado_aprobados_pendientes_list = $this->timesheetQuery->where('fecha_dia', '>=', $fecha_inicio_timesheet_empleado)->where('fecha_dia', '<=', $fecha_fin_timesheet_empleado)->where('empleado_id', $empleado_list->id)->where('estatus', '!=', 'rechazado')->where('estatus', '!=', 'papelera');

            $horas_semana = 0;
            $times_empleado_calendario_array = [];
            $times_empleado_array = [];
            foreach ($times_empleado_aprobados_pendientes_list as $time) {
                $horas_semana = 0;
                foreach ($time->horas as $hora) {
                    $horas_total_time += $hora->horas_lunes;
                    $horas_total_time += $hora->horas_martes;
                    $horas_total_time += $hora->horas_miercoles;
                    $horas_total_time += $hora->horas_jueves;
                    $horas_total_time += $hora->horas_viernes;
                    $horas_total_time += $hora->horas_sabado;
                    $horas_total_time += $hora->horas_domingo;

                    $horas_semana += $hora->horas_lunes;
                    $horas_semana += $hora->horas_martes;
                    $horas_semana += $hora->horas_miercoles;
                    $horas_semana += $hora->horas_jueves;
                    $horas_semana += $hora->horas_viernes;
                    $horas_semana += $hora->horas_sabado;
                    $horas_semana += $hora->horas_domingo;

                    $times_empleado_calendario_array[] = [
                        'id' => $time->id,
                        'semana_y' => $time->semana_y,
                        'horas_semana' => $horas_semana,
                    ];
                }
            }
            $this->horas_totales_filtros_empleados += $horas_total_time;

            // $times_empleado = $this->timesheetQuery->where('empleado_id', $empleado_list->id)->where('estatus', '!=', 'rechazado')->where('estatus', '!=', 'papelera')->count();

            // $fecha_inicio = date_create(Carbon::parse($fecha_inicio_timesheet_empleado)->format('d-m-Y'));
            // $fecha_fin = date_create(Carbon::parse($fecha_fin_timesheet_empleado)->format('d-m-Y'));

            // $semanas_empleado = intval(date_diff($fecha_inicio, $fecha_fin)->format('%R%a') / 7);

            // semanas faltantes
            $entro_esta_semana = false;
            if (Carbon::parse($this->fecha_inicio)->lt(Carbon::parse($empleado_list->antiguedad))) {
                if (Carbon::parse($empleado_list->antiguedad)->startOfWeek(Carbon::MONDAY) >= Carbon::now()->startOfWeek(Carbon::MONDAY)) {
                    // concuerda la misma semana de ingreso y de la actual
                    $entro_esta_semana = true;
                } else {
                    $fecha_inicio_timesheet_faltantes_empleado = Carbon::parse($empleado_list->antiguedad)->startOfWeek(Carbon::MONDAY);
                }
            } else {
                $fecha_inicio_timesheet_faltantes_empleado = $fecha_inicio_timesheet_empleado;
            }
            if (!$fecha_inicio_timesheet_faltantes_empleado) {
                $fecha_inicio_timesheet_faltantes_empleado = $this->fecha_inicio;
            }

            $fechaToFormat = Carbon::parse($fecha_inicio_timesheet_faltantes_empleado);
            $antiguedad_y = $fechaToFormat->format('Y');
            $antiguedad_m = $fechaToFormat->format('m');
            $antiguedad_d = $fechaToFormat->format('d');

            foreach ($times_empleado_aprobados_pendientes_list as $time) {
                $times_empleado_array[] = $time->semana_y;
            }

            if ($entro_esta_semana) {
                $this->times_faltantes_empleado = [];

                $times_atrasados = 0;
            } else {
                if ($this->fecha_fin == now()->format('Y-m-d')) {
                    $fecha_finalizacion = null;
                } else {
                    $fecha_finalizacion = Carbon::parse($this->fecha_fin)->gt(now()) ? null : Carbon::parse($this->fecha_fin);
                }

                $this->times_faltantes_empleado = $this->getWeeksFromRange($antiguedad_y, $antiguedad_m, $antiguedad_d, $times_empleado_array, 'monday', 'sunday', $fecha_finalizacion, $this->fecha_fin ? Carbon::parse($this->fecha_fin) : Carbon::now(), true);

                $times_atrasados = count($this->times_faltantes_empleado);
            }
            // registro de horas en calendario
            // dd($times_empleado_array);
            //Fecha de ingreso para saber si aplica el registro de semanas
            $fecha_ing = Carbon::parse($empleado_list->antiguedad);
            $fecha_ingre = date('Y-m-d', strtotime($fecha_ing));

            $horas_totales_empleado_calendar = 0;
            $calendario_tabla_empleado = [];
            foreach ($calendario_array as $key => $año) {
                foreach ($año['months'] as $key => $mes) {
                    foreach ($mes['weeks'] as $key => $semana) {
                        if (count($times_empleado_calendario_array) > 0) {
                            $unique_array = [];
                            $s = explode('|', $semana);
                            foreach ($times_empleado_calendario_array as $element) {
                                $hash = $element['semana_y'];
                                $unique_array[$hash] = $element;
                            }
                            $result_unique = array_values($unique_array);

                            $time = array_filter($result_unique, function ($value) use ($semana) {
                                return $value['semana_y'] == $semana;
                            });
                            if (count($time) > 0) {
                                foreach ($time as $key => $t) {
                                    array_push($calendario_tabla_empleado, $t['horas_semana']);
                                    $horas_totales_empleado_calendar += $t['horas_semana'];
                                }
                            } elseif ($entro_esta_semana === true or (Carbon::parse($s[0])->lt(Carbon::parse($fecha_ingre)))) {
                                array_push($calendario_tabla_empleado, '<span class="p-1" style="background-color:#FFF2CC;">No&nbsp;Aplica</span>');
                            } else {
                                array_push($calendario_tabla_empleado, '<span class="p-1" style="background-color:#FFF2CC;">Sin&nbsp;Registro</span>');
                                $times_atrasados = ($times_atrasados + 1);
                            }
                        } else {
                            // dd($semana);
                            $s = explode('|', $semana);
                            if ((Carbon::parse($s[0])->lt(Carbon::parse($fecha_ingre)))) {
                                array_push($calendario_tabla_empleado, '<span class="p-1" style="background-color:#FFF2CC;">No&nbsp;Aplica</span>');
                            } else {
                                array_push($calendario_tabla_empleado, '<span class="p-1" style="background-color:#FFF2CC;">Sin&nbsp;Registro</span>');
                                $times_atrasados = ($times_atrasados + 1);
                            }
                        }
                    }
                }
            }

            // array empleados
            $this->empleados->push([
                'id' => $empleado_list->id,
                'avatar_ruta' => $empleado_list->avatar_ruta,
                'estatus' => $empleado_list->estatus,

                'horas_totales' => $horas_totales_empleado_calendar,
                // 'horas_totales' => $horas_total_time,

                'name' => $empleado_list->name,
                'area' => $empleado_list->area ? $empleado_list->area->area : '',
                'puesto' => $empleado_list->puesto,
                'times_atrasados' => $times_atrasados,
                'times_faltantes' => $this->times_faltantes_empleado,
                'fecha_alta_baja' => $empleado_list->estatus == 'alta' ? Carbon::parse($empleado_list->fecha_ingreso)->format('d/m/Y') : ($empleado_list->fecha_baja == null ? 'Fecha no registrada' : Carbon::parse($empleado_list->fecha_baja)->format('d/m/Y')),
                'calendario' => $calendario_tabla_empleado,
            ]);
        }

        // dump($times_empleado_aprobados_pendientes_list);

        $this->calendario_tabla = $calendario_array;
        $this->hoy_format = $this->hoy->format('d/m/Y');

        $this->emit('scriptTabla');

        return view('livewire.timesheet.reportes-empleados');
    }

    public function getMonthSpanish($month)
    {
        $mes = '';
        switch ($month) {
            case 'January':
                $mes = 'Enero';
                break;
            case 'February':
                $mes = 'Febrero';
                break;
            case 'March':
                $mes = 'Marzo';
                break;
            case 'April':
                $mes = 'Abril';
                break;
            case 'May':
                $mes = 'Mayo';
                break;
            case 'June':
                $mes = 'Junio';
                break;
            case 'July':
                $mes = 'Julio';
                break;
            case 'August':
                $mes = 'Agosto';
                break;
            case 'September':
                $mes = 'Septiembre';
                break;
            case 'October':
                $mes = 'Octubre';
                break;
            case 'November':
                $mes = 'Noviembre';
                break;
            case 'December':
                $mes = 'Diciembre';
                break;
        }

        return $mes;
    }

    public function buscarEnArray($search, $array)
    {
        foreach ($array as $value) {
            if ($value == $search) {
                return true;
            }
        }

        return false;
    }

    public function buscarKeyEnArray($search, $array)
    {
        foreach ($array as $key => $value) {
            if ($key == $search) {
                return true;
            }
        }

        return false;
    }

    public function existsWeeksInMonth($search, $array)
    {
        if (in_array($search, $array)) {
            return true;
        }

        return false;
    }

    public function buscarEmpleado($id_empleado)
    {
        $this->empleado_seleccionado_id = $id_empleado;

        $this->proyectos = collect();

        $this->proyectos_detalle = collect();

        $this->times_empleado_horas = collect();

        $this->empleado = $this->empleadosQuery->find($this->empleado_seleccionado_id);

        // calcular fechas de parametros en reporte empleado
        $fecha_registro_timesheet = Organizacion::select('fecha_registro_timesheet')->first()->fecha_registro_timesheet;

        if ($this->fecha_inicio_empleado) {
            $fecha_inicio_timesheet_empleado = Carbon::parse($this->empleado->antiguedad)->lt($this->fecha_inicio_empleado) ? $this->fecha_inicio_empleado : $this->empleado->antiguedad;
        } else {
            $fecha_inicio_timesheet_empleado = Carbon::parse($this->empleado->antiguedad)->lt($fecha_registro_timesheet) ? $fecha_registro_timesheet : $this->empleado->antiguedad;
        }

        if (($this->fecha_fin_empleado) && (Carbon::parse($this->fecha_fin_empleado)->lt($this->hoy->format('Y-m-d')))) {
            $fecha_fin_timesheet_empleado = $this->empleado->estatus == 'baja' ? $this->empleado->fecha_baja : $this->fecha_fin_empleado;
        } else {
            $fecha_fin_timesheet_empleado = $this->empleado->estatus == 'baja' ? $this->empleado->fecha_baja : $this->hoy;
        }

        $hoy_2 = now();
        if ($hoy_2->subweeks(3)->lt($fecha_inicio_timesheet_empleado)) {
            if (gettype($fecha_inicio_timesheet_empleado) == 'string') {
                $fecha_inicio_timesheet_empleado = Carbon::parse($fecha_inicio_timesheet_empleado)->startOfMonth()->subMonth();
            } else {
                $fecha_inicio_timesheet_empleado = $fecha_inicio_timesheet_empleado->startOfMonth()->subMonth();
            }
        }

        $this->timesheet = Timesheet::where('fecha_dia', '>=', $fecha_inicio_timesheet_empleado)->where('fecha_dia', '<=', $fecha_fin_timesheet_empleado)->where('empleado_id', $this->empleado_seleccionado_id)->where('estatus', '!=', 'rechazado')->where('estatus', '!=', 'papelera')->orderByDesc('fecha_dia')->get();

        foreach ($this->timesheet as $t) {
            $horas_semana_lunes = 0;
            $horas_semana_martes = 0;
            $horas_semana_miercoles = 0;
            $horas_semana_jueves = 0;
            $horas_semana_viernes = 0;
            $horas_semana_sabado = 0;
            $horas_semana_domingo = 0;
            $horas_totales_semana = 0;
            foreach ($t->horas as $hora) {
                $this->proyectos->push($hora->proyecto->id);

                $horas_semana_lunes += $hora->horas_lunes;
                $horas_semana_martes += $hora->horas_martes;
                $horas_semana_miercoles += $hora->horas_miercoles;
                $horas_semana_jueves += $hora->horas_jueves;
                $horas_semana_viernes += $hora->horas_viernes;
                $horas_semana_sabado += $hora->horas_sabado;
                $horas_semana_domingo += $hora->horas_domingo;

                $horas_totales_semana += $hora->horas_lunes;
                $horas_totales_semana += $hora->horas_martes;
                $horas_totales_semana += $hora->horas_miercoles;
                $horas_totales_semana += $hora->horas_jueves;
                $horas_totales_semana += $hora->horas_viernes;
                $horas_totales_semana += $hora->horas_sabado;
                $horas_totales_semana += $hora->horas_domingo;
            }

            $this->times_empleado_horas->push([
                'fecha' => $t->fecha_dia,
                'estatus' => $t->estatus,
                'semana' => $t->semana,
                'semana_y' => $t->semana_y,
                'horas_lunes' => $horas_semana_lunes,
                'horas_martes' => $horas_semana_martes,
                'horas_miercoles' => $horas_semana_miercoles,
                'horas_jueves' => $horas_semana_jueves,
                'horas_viernes' => $horas_semana_viernes,
                'horas_sabado' => $horas_semana_sabado,
                'horas_domingo' => $horas_semana_domingo,
                'horas_totales' => $horas_totales_semana,
            ]);
        }

        $this->proyectos = $this->proyectos->unique();
        foreach ($this->proyectos as $proyecto) {
            $tareas = collect();
            $horas_proyecto = 0;
            foreach (TimesheetProyecto::getAll()->find($proyecto)->tareas as $tarea) {
                $tarea_horas = TimesheetHoras::where('tarea_id', $tarea->id)->get();
                $horas = 0;
                foreach ($tarea_horas as $tm) {
                    if ((Carbon::parse($fecha_inicio_timesheet_empleado)->lt($tm->timesheet->fecha_dia)) && (Carbon::parse($tm->timesheet->fecha_dia)->lt($fecha_fin_timesheet_empleado))) {
                        $horas += intval($tm->horas_lunes);
                        $horas += intval($tm->horas_martes);
                        $horas += intval($tm->horas_miercoles);
                        $horas += intval($tm->horas_jueves);
                        $horas += intval($tm->horas_viernes);
                        $horas += intval($tm->horas_sabado);
                        $horas += intval($tm->horas_domingo);
                    }
                }
                if ($horas > 0) {
                    $tareas->push([
                        'id' => $tarea->id,
                        'tarea' => $tarea->tarea,
                        'horas' => $horas,
                    ]);
                }
                $horas_proyecto += $horas;
            }
            $this->proyectos_detalle->push([
                'id' => $proyecto,
                'proyecto' => TimesheetProyecto::getAll()->find($proyecto)->proyecto,
                'tareas' => $tareas,
                'horas' => $this->fecha_inicio_empleado ? '50' : $horas_proyecto,
            ]);
            $this->horas_totales += $horas_proyecto;

            $this->costo_total_empleado = $this->horas_totales * ($this->empleado->salario_diario / 24);
        }

        // contadores
        $contadorthis = $this->timesheetQuery->where('fecha_dia', '>=', $fecha_inicio_timesheet_empleado)->where('fecha_dia', '<=', $fecha_fin_timesheet_empleado)->where('empleado_id', $this->empleado_seleccionado_id);
        $this->todos_contador = $contadorthis->count();
        $this->borrador_contador = $contadorthis->where('estatus', 'papelera')->count();
        $this->pendientes_contador = $contadorthis->where('estatus', 'pendiente')->count();
        $this->aprobados_contador = $contadorthis->where('estatus', 'aprobado')->count();
        $this->rechazos_contador = $contadorthis->where('estatus', 'rechazado')->count();

        $this->times_empleado = $contadorthis;

        $this->emit('scriptTabla');

        $this->emit('scriptCharts', $this->proyectos_detalle, $this->times_empleado_horas);
    }

    public function reporteGeneral()
    {
        $this->reporte_general = true;
    }

    public function correoRetraso($id, $sem_falt)
    {
        $empleado = Empleado::select('id', 'name', 'email', 'antiguedad')->find($id);

        foreach ($this->empleados as $key => $empleado_a) {
            if ($empleado_a['id'] == $id) {
                $semanas_faltantes = $sem_falt;
            }
        }
        Mail::to(removeUnicodeCharacters($empleado->email))->send(new TimesheetCorreoRetraso($empleado, $semanas_faltantes));

        $this->alert('success', 'Correo Enviado!');

        $this->empleado = null;
    }

    public function correoMasivo()
    {
        foreach ($this->empleados as $empleado) {
            if ($empleado['times_atrasados'] > 0) {
                $this->correoRetraso($empleado['id'], $empleado['times_atrasados']);
            }
        }

        $this->alert('success', 'Correos Enviados!');
        $this->empleado = null;
    }

    public function todos()
    {
        $this->times_empleado = $this->timesheetQuery->where('empleado_id', $this->empleado_seleccionado_id);
    }

    public function papelera()
    {
        $this->times_empleado = $this->timesheetQuery->where('empleado_id', $this->empleado_seleccionado_id)->where('estatus', 'papelera');
    }

    public function pendientes()
    {
        $this->times_empleado = $this->timesheetQuery->where('empleado_id', $this->empleado_seleccionado_id)->where('estatus', 'pendiente');
    }

    public function aprobados()
    {
        $this->times_empleado = $this->timesheetQuery->where('empleado_id', $this->empleado_seleccionado_id)->where('estatus', 'aprobado');
    }

    public function rechazos()
    {
        $this->times_empleado = $this->timesheetQuery->where('empleado_id', $this->empleado_seleccionado_id)->where('estatus', 'rechazado');
    }
}
