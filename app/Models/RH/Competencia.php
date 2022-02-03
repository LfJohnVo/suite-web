<?php

namespace App\Models\RH;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Competencia extends Model
{
    use HasFactory, SoftDeletes, QueryCacheable;
    public $cacheFor = 3600;
    protected static $flushCacheOnUpdate = true;

    protected $table = 'ev360_competencias';
    protected $guarded = ['id'];
    protected $appends = ['tipo_competencia', 'imagen_ruta', 'existe_imagen_en_servidor'];

    const TODA_LA_EMPRESA = 0;
    const POR_PUESTO = 1;
    const POR_AREA = 2;
    const POR_PERFIL = 3;

    public function getTipoCompetenciaAttribute()
    {
        return $this->tipo->nombre;
    }

    public function getImagenRutaAttribute()
    {
        if ($this->getExisteImagenEnServidorAttribute()) {
            if ($this->imagen) {
                return asset('storage/competencias/img/' . $this->imagen);
            }

            return asset('img/star.png');
        } else {
            return asset('img/page-not-found.png');
        }
    }

    public function getExisteImagenEnServidorAttribute()
    {
        return Storage::exists('public/competencias/img/' . $this->imagen);
    }

    public function competencia_puesto()
    {
        return $this->hasMany('App\Models\RH\CompetenciaPuesto', 'competencia_id', 'id');
    }

    public function tipo()
    {
        return $this->belongsTo('App\Models\RH\TipoCompetencia', 'tipo_id', 'id');
    }

    public function opciones()
    {
        return $this->hasMany('App\Models\RH\Conducta', 'competencia_id', 'id');
    }

    public static function search($search)
    {
        return empty($search) ? static::query() : static::where('id', 'ILIKE', '%' . $search . '%')
            ->orWhere('nombre', 'ILIKE', '%' . $search . '%')
            ->orWhere('descripcion', 'ILIKE', '%' . $search . '%');
    }
}
