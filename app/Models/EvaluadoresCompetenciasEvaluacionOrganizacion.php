<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluadoresCompetenciasEvaluacionOrganizacion extends Model
{
    use HasFactory;
    protected $table = "evaluadores_competencias_evaluacion_organizacions";

    protected $fillable = [
        'evaluadores_competencias_pivot_id',
        'evaluador_id',
        'peso_evaluador',
    ];
}
