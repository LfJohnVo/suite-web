<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;

class Timesheet extends Model
{
    use HasFactory;
    use Filterable;

    protected $table = 'timesheet';

    protected $appends = ['semana', 'proyectos', 'semana_y', 'semana_text', 'total_horas'];

    protected $fillable = [
        'fecha_semana',
        'fecha_dia',
        'aprobado',
        'empleado_id',
        'aprobador_id',
        'aprobado',
        'rechazado',
        'estatus',
        'comentarios',
        'dia_semana',
        'inicio_semana',
        'fin_semana',
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }

    public function aprobador()
    {
        return $this->belongsTo(Empleado::class, 'aprobador_id');
    }

    public function getSemanaAttribute()
    {
        $inicio = $this->traducirDia($this->inicio_semana);

        $fin = $this->traducirDia($this->fin_semana);

        $inicio_dia = \Carbon\Carbon::parse($this->fecha_dia)->copy()->modify("last {$inicio}")->format('d/m/Y');
        $fin_dia = \Carbon\Carbon::parse($this->fecha_dia)->copy()->format('d/m/Y');

        $semana_rango = '
            <font style="font-weight: lighter !important;"> Del </font>
            <font style="font-weight: bolder !important;">' . $inicio_dia . '</font> 
            <font style="font-weight: lighter !important;"> al </font> 
            <font style="font-weight: bolder !important;">' . $fin_dia . '</font>

            ';

        return $semana_rango;
    }

    public function getSemanaTextAttribute()
    {
        $inicio = $this->traducirDia($this->inicio_semana);

        $fin = $this->traducirDia($this->fin_semana);

        $inicio_dia = \Carbon\Carbon::parse($this->fecha_dia)->copy()->modify("last {$inicio}")->format('d/m/Y');
        $fin_dia = \Carbon\Carbon::parse($this->fecha_dia)->copy()->format('d/m/Y');

        $semana_rango = ' del ' . $inicio_dia . ' al ' . $fin_dia;

        return $semana_rango;
    }

    public function getSemanaYAttribute()
    {
        $inicio = $this->traducirDia($this->inicio_semana);

        $fin = $this->traducirDia($this->fin_semana);

        $inicio_dia = \Carbon\Carbon::parse($this->fecha_dia)->copy()->modify('last Monday')->format('Y-m-d');
        $fin_dia = \Carbon\Carbon::parse($this->fecha_dia)->copy()->modify('next Sunday')->format('Y-m-d');

        $semana_rango = $inicio_dia . '|' . $fin_dia;

        return $semana_rango;
    }

    /**
     * TODO: Esta funcion debería estar en la implementación de i18n
     *
     * @return void
     */
    public function traducirDia($dia_seleccionado)
    {
        $dia = 'Monday';

        if ($dia_seleccionado == 'Martes') {
            $dia = 'Tuesday';
        }
        if ($dia_seleccionado == 'Miércoles') {
            $dia = 'Wednesday';
        }
        if ($dia_seleccionado == 'Jueves') {
            $dia = 'Thursday';
        }
        if ($dia_seleccionado == 'Viernes') {
            $dia = 'Friday';
        }
        if ($dia_seleccionado == 'Sábado') {
            $dia = 'Saturday';
        }
        if ($dia_seleccionado == 'Domingo') {
            $dia = 'Sunday';
        }

        return $dia;
    }

    public function horas()
    {
        return $this->hasMany(TimesheetHoras::class, 'timesheet_id', 'id')->orderBy('id');
    }

    /**
     * TODO: Esta funcion debería estar en un servicio
     *
     * @return void
     */
    public function getProyectosAttribute()
    {
        $horas_id_proyectos = TimesheetHoras::where('timesheet_id', $this->id)->get();

        $proyectos = collect();
        foreach ($horas_id_proyectos as $id_proyect) {
            $proyecto = TimesheetProyecto::find($id_proyect->proyecto_id);

            $proyectos->push($proyecto);
        }

        return $proyectos;
    }

    /**
     * TODO: Esta funcion debería estar en un servicio
     *
     * @return void
     */
    public function getTotalHorasAttribute()
    {
        $total_horas = 0;
        $horas_time = TimesheetHoras::where('timesheet_id', $this->id)->get();
        foreach ($horas_time as $key => $horas) {
            $total_horas += $horas->horas_lunes;
            $total_horas += $horas->horas_martes;
            $total_horas += $horas->horas_miercoles;
            $total_horas += $horas->horas_jueves;
            $total_horas += $horas->horas_viernes;
            $total_horas += $horas->horas_sabado;
            $total_horas += $horas->horas_domingo;
        }

        return $total_horas;
    }
}
