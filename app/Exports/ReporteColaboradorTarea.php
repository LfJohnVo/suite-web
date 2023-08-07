<?php

namespace App\Exports;

use App\Models\TimesheetHoras;
use Maatwebsite\Excel\Concerns\FromCollection;
use Carbon\Carbon;

class ReporteColaboradorTarea implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct(?string $fecha_inicio, ?string $fecha_fin, ?string $area_id, ?string $emp_id, ?string $proy_id) {
        $this->fecha_inicio = $fecha_inicio;
        $this->fecha_fin = $fecha_fin;
        $this->area_id = $area_id;
        $this->emp_id = $emp_id;
        $this->proy_id = $proy_id;
    }

    public function headings(): array

    {

        return [

            'ID',

            'Promesa',

            'Pagado',

            'Cliente',

            'Fecha Promesa',

            'Fecha Pago',

        ];

    }

    public function collection()
    {
        // return TimesheetHoras::all();
        $query = TimesheetHoras::with('tarea.areaData')
        ->withwhereHas('timesheet', function ($query) {
            if ($this->emp_id == 0) {
                return $query;
            } else {
                $query->where('empleado_id', $this->emp_id);
            }
        })
        ->withwhereHas('timesheet', function ($query) {
            $query->where('fecha_dia', '>=', $this->fecha_inicio ? $this->fecha_inicio : '1900-01-01')->where('fecha_dia', '<=', $this->fecha_fin ? $this->fecha_fin : now()->format('Y-m-d'))->orderByDesc('fecha_dia');
        })
        ->withwhereHas('proyecto', function ($query) {
            if ($this->proy_id == 0) {
                return $query;
            } else {
                $query->where('proyecto_id', $this->proy_id);
            }
        })->get();

        return $query;
    }
}
