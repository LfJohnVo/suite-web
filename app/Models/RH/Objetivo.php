<?php

namespace App\Models\RH;

use App\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Objetivo extends Model implements Auditable
{
    use HasFactory, SoftDeletes;
    use \OwenIt\Auditing\Auditable, ClearsResponseCache;

    protected $table = 'ev360_objetivos';

    protected $appends = ['imagen_ruta'];

    protected $guarded = ['id'];

    const APROBADO = 1;

    const RECHAZADO = 2;

    const SIN_DEFINIR = 0;

    public function scopeAprobado($query)
    {
        return $query->where('esta_aprobado', self::APROBADO);
    }

    public function getImagenRutaAttribute()
    {
        if ($this->imagen) {
            return asset('storage/objetivos/img/' . $this->imagen);
        }

        return asset('img/bullseye.png');
    }

    public function metrica()
    {
        return $this->belongsTo('App\Models\RH\MetricasObjetivo', 'metrica_id', 'id');
    }

    public function tipo()
    {
        return $this->belongsTo('App\Models\RH\TipoObjetivo', 'tipo_id', 'id');
    }

    public function calificacion()
    {
        return $this->belongsTo('App\Models\RH\ObjetivoCalificacion', 'objetivo_id', 'id');
    }

    public function comentarios()
    {
        return $this->belongsToMany('App\Models\RH\ObjetivoComentario', 'ev360_objetivos_comentarios_pivot', 'objetivo_id', 'comentario_id');
    }
}
