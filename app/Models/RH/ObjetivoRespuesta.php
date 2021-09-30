<?php

namespace App\Models\RH;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjetivoRespuesta extends Model
{
    use HasFactory;
    protected $table = 'ev360_objetivos_calificaciones';
    protected $guarded = ["id"];

    public function objetivo()
    {
        return $this->belongsTo('App\Models\RH\Objetivo', 'objetivo_id', 'id');
    }

    public function evaluado()
    {
        return $this->belongsTo('App\Models\Empleado', 'evaluado_id', 'id');
    }

    public function evaluador()
    {
        return $this->belongsTo('App\Models\Empleado', 'evaluador_id', 'id');
    }

    public function evaluacion()
    {
        return $this->belongsTo('App\Models\RH\Evaluacion', 'evaluacion_id', 'id');
    }
}
