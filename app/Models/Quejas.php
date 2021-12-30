<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Quejas extends Model
{
    use HasFactory;
    use QueryCacheable;

    public $cacheFor = 3600;
    protected static $flushCacheOnUpdate = true;
    protected $table = 'quejas';

    protected $guarded = [
        'id',
    ];

    protected $appends = ['folio', 'fecha_creacion', 'fecha_reporte', 'fecha_de_cierre'];

    public function getFolioAttribute()
    {
        return  sprintf('QUE-%04d', $this->id);
    }

    public function quejo()
    {
        return $this->belongsTo(Empleado::class, 'empleado_quejo_id', 'id');
    }

    public function evidencias_quejas()
    {
        return $this->hasMany(EvidenciasQueja::class, 'id_quejas');
    }

    public function planes()
    {
        return $this->morphToMany(PlanImplementacion::class, 'plan_implementacionable');
    }

    public function actividades()
    {
        return $this->hasMany(ActividadQueja::class, 'queja_id', 'id');
    }

    public function getFechaCreacionAttribute()
    {
        return Carbon::parse($this->fecha)->format('d-m-Y');
    }

    public function getFechaDeCierreAttribute()
    {
        return $this->fecha_cierre ? Carbon::parse($this->fecha_ciere)->format('d-m-Y') : '';
    }

    public function getFechaReporteAttribute()
    {
        return Carbon::parse($this->created_at)->format('d-m-Y');
    }
}
