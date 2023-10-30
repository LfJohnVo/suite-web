<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodosEvaluacionOrganizacion extends Model
{
    use HasFactory;

    protected $table = 'periodos_evaluacion_organizacions';

    protected $fillable = [
        'tipo',
        'objetivos_y_competencias',
        'evaluacion_organizacion_id',
        'periodo_1',
        'fecha_inicio_p1',
        'fecha_fin_p1',
        'periodo_2',
        'fecha_inicio_p2',
        'fecha_fin_p2',
        'periodo_3',
        'fecha_inicio_p3',
        'fecha_fin_p3',
        'periodo_4',
        'fecha_inicio_p4',
        'fecha_fin_p4',
        'periodo_competencias_1',
        'fecha_inicio_competencias_p1',
        'fecha_fin_competencias_p1',
        'periodo_competencias_2',
        'fecha_inicio_competencias_p2',
        'fecha_fin_competencias_p2',
        'periodo_competencias_3',
        'fecha_inicio_competencias_p3',
        'fecha_fin_competencias_p3',
        'periodo_competencias_4',
        'fecha_inicio_competencias_p4',
        'fecha_fin_competencias_p4',
    ];
}
