<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionOrganizacion extends Model
{
    use HasFactory;

    protected $table = 'evaluacion_organizacions';

    protected $fillable = [
        'nombre_evaluacion',
        'descripcion',
        'objetivos',
        'valor_objetivos',
        'competencias',
        'valor_competencias',
        'estado',
    ];
}
