<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionProceso extends Model
{
    use SoftDeletes;
    use QueryCacheable;

    public $cacheFor = 3600;
    protected static $flushCacheOnUpdate = true;
    protected $table = 'evaluacion_procesos';


    protected $fillable = [
        'proceso_evaluar',
        'nivel_riesgo',
        'direccion',
        'servicio',
        'operacional',
        'cumplimiento',
        'legal',
        'reputacional',
        'nivel_impacto',
        'activos_asociados',
        'promedio_activos',
    ];
}
