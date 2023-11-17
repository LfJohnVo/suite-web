<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluadoresCompetenciasEvaluacionOrganizacionPivot extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = "evaluadores_competencias_evaluacion_organizacions_PIVOT";

    protected $fillable = [
        'evaluacion_organizacion_id',
        'evaluado_id',
        // 'evaluador_id',
        // 'peso_evaluador',
    ];
}
