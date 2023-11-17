<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluadoresObjetivosEvaluacionOrganizacion extends Model
{
    use HasFactory;

    protected $table = "evaluadores_objetivos_evaluacion_organizacions";

    protected $fillable = [
        'evaluadores_objetivos_pivot_id',
        'evaluador_id',
        'peso_evaluador',
    ];
}
