<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluadosEvaluacionOrganizacion extends Model
{
    use HasFactory;

    protected $table = 'evaluados_evaluacion_organizacions';

    protected $fillable = [
        'tipo',
        'evaluado_id',
        'evaluacion_organizacion_id',
        'area_id',
        'gtupo_id',
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'evaluado_id', 'id')->alta()
            ->select('id', 'name', 'area_id');;
    }
}
