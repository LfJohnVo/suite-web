<?php

namespace App\Models;

use App\Http\Livewire\ISO31000\ActivosInformacion;
use Illuminate\Database\Eloquent\Model;

class MatrizOctaveProceso extends Model
{
    protected $table = 'matriz_octave_procesos';

    protected $casts = [
        'id_proceso' => 'int',
        'nivel_riesgo' => 'int',
        'id_direccion' => 'int',
        'servicio_id' => 'int',
        'operacional' => 'int',
        'cumplimiento' => 'int',
        'legal' => 'int',
        'reputacional' => 'int',
        'tecnologico' => 'int',
        'impacto' => 'int',
        'id_activos_informacion' => 'int',
        'promedio' => 'int',
    ];

    protected $fillable = [
        'id_proceso',
        'nivel_riesgo',
        'id_direccion',
        'servicio_id',
        'operacional',
        'cumplimiento',
        'legal',
        'reputacional',
        'tecnologico',
        'impacto',
        'id_activos_informacion',
        'promedio',
    ];

    public function proceso()
    {
        return $this->belongsTo(Proceso::class, 'id_proceso');
    }

    public function children()
    {
        return $this->belongsTo(Proceso::class, 'id_proceso')->with('children');
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'id_direccion');
    }

    public function servicio()
    {
        return $this->belongsTo(MatrizOctaveServicio::class, 'servicio_id', 'id');
    }

    public function activos_informacion()
    {
        return $this->hasMany(ActivosInformacion::class, 'id_activos_informacion', 'id');
    }
}
