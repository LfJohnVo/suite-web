<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReglasEvaluacionOrganizacion extends Model
{
    use HasFactory;

    protected $table = 'reglas_evaluacion_organizacions';

    protected $fillable = [
        'evaluacion_organizacion_id',
        'rango_minimo',
        'rango_maximo',
        'nombre_regla',
        'valor_regla',
    ];
}
