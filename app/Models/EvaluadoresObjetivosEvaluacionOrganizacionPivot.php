<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluadoresObjetivosEvaluacionOrganizacionPivot extends Model
{
    use HasFactory;
    protected $table = "evaluadores_objetivos_evaluacion_organizacions_pivot";

    protected $fillable = [
        'evaluacion_organizacion_id',
        'evaluado_id',
    ];
}
