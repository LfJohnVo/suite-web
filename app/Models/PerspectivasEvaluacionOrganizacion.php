<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerspectivasEvaluacionOrganizacion extends Model
{
    use HasFactory;

    protected $table = "perspectivas_evaluacion_organizacions";

    protected $fillable = [
        'nombre',
        'evaluacion_organizacion_id',
    ];
}
