<?php

namespace App\Exports;

use App\Models\TimesheetHoras;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReporteColaboradorRegistro implements FromCollection, WithHeadings
{
    public $fecha_inicio;

    public $fecha_fin;

    public $area_id;

    public $emp_id;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function __construct(?string $fecha_inicio, ?string $fecha_fin, ?string $area_id, ?string $emp_id)
    {
        $this->fecha_inicio = $fecha_inicio;
        $this->fecha_fin = $fecha_fin;
        $this->area_id = $area_id;
        $this->emp_id = $emp_id;
    }

    public function collection()
    {
        $query = TimesheetHoras::join('timesheet', 'timesheet.id', '=', 'timesheet_horas.timesheet_id')
            ->join('timesheet_proyectos', 'timesheet_proyectos.id', '=', 'timesheet_horas.proyecto_id')
            ->join('timesheet_tareas', 'timesheet_tareas.id', '=', 'timesheet_horas.tarea_id')
            ->join('empleados as empleados', 'empleados.id', '=', 'timesheet.empleado_id')
            ->join('empleados as aprobadores', 'aprobadores.id', '=', 'timesheet.aprobador_id')
            ->join('areas', 'areas.id', '=', 'timesheet_tareas.area_id')
            ->select(
                'timesheet_proyectos.fecha_inicio',
                'timesheet_proyectos.fecha_fin',
                'empleados.name as empleado_name',
                'aprobadores.name as supervisor_name',
                'areas.area as area_name',
                'timesheet_proyectos.estatus',
                'timesheet_horas.horas_lunes',
                'timesheet_horas.horas_martes',
                'timesheet_horas.horas_miercoles',
                'timesheet_horas.horas_jueves',
                'timesheet_horas.horas_viernes',
                'timesheet_horas.horas_sabado',
                'timesheet_horas.horas_domingo'
            )
            ->where(function ($query) {

                if ($this->fecha_inicio || $this->fecha_fin) {
                    $query->where('timesheet.fecha_dia', '>=', $this->fecha_inicio ?? '1900-01-01')
                        ->where('timesheet.fecha_dia', '<=', $this->fecha_fin ?? now()->format('Y-m-d'));
                }

                if ($this->emp_id != 0) {
                    $query->where('empleados.id', $this->emp_id);
                }

                if ($this->area_id != 0) {
                    $query->where('timesheet_tareas.area_id', $this->area_id);
                }
                // Otras condiciones que ya tenías
            })
            ->groupBy(
                'timesheet_proyectos.fecha_inicio',
                'timesheet_proyectos.fecha_fin',
                'empleado_name',
                'supervisor_name',
                'area_name',
                'timesheet_proyectos.estatus',
                'timesheet_horas.horas_lunes',
                'timesheet_horas.horas_martes',
                'timesheet_horas.horas_miercoles',
                'timesheet_horas.horas_jueves',
                'timesheet_horas.horas_viernes',
                'timesheet_horas.horas_sabado',
                'timesheet_horas.horas_domingo'
            )->orderByDesc('timesheet_proyectos.fecha_inicio')
            ->get()
            ->map(function ($timesheetHora) {
                return [
                    'Fecha Inicio' => \Carbon\Carbon::parse($timesheetHora->fecha_inicio)->format('d/m/Y'),
                    'Fecha Fin' => \Carbon\Carbon::parse($timesheetHora->fecha_fin)->format('d/m/Y'),
                    'Empleado' => $timesheetHora->empleado_name,
                    'Supervisor' => $timesheetHora->supervisor_name,
                    'Area' => $timesheetHora->area_name,
                    'Estatus' => $timesheetHora->estatus,
                    'Total de Horas' => (floatval($timesheetHora->horas_lunes) + floatval($timesheetHora->horas_martes) + floatval($timesheetHora->horas_miercoles) + floatval($timesheetHora->horas_jueves) + floatval($timesheetHora->horas_viernes) + floatval($timesheetHora->horas_sabado) + floatval($timesheetHora->horas_domingo)),
                ];
            });

        return $query;
    }

    public function headings(): array
    {
        return [
            'Fecha Inicio',
            'Fecha Fin',
            'Empleado',
            'Supervisor',
            'Area',
            'Estatus',
            'Total de Horas'
        ];
    }

    public function headingsStyle(): array
    {
        return [
            'font' => [
                'color' => ['rgb' => 'FFFFFF'], // Color del texto (blanco)
            ],
            'fill' => [
                'fillType' => 'solid',
                'startColor' => ['rgb' => '00FF00'], // Color de fondo (verde)
            ],
        ];
    }
}
