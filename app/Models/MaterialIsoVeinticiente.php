<?php

namespace App\Models;

use App\Traits\MultiTenantModelTrait;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Rennokki\QueryCache\Traits\QueryCacheable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MaterialIsoVeinticiente extends Model implements HasMedia
{
    use SoftDeletes, MultiTenantModelTrait, InteractsWithMedia, HasFactory;
    use QueryCacheable;

    public $cacheFor = 3600;
    protected static $flushCacheOnUpdate = true;
    public static $searchable = [
        'objetivo',
    ];

    public $table = 'material_iso_veinticientes';

    protected $appends = [
        'listaasistencia',
        'materialarchivo',
    ];

    const TIPOIMPARTICION_SELECT = [
        'presencial' => 'Presencial',
        'virtual'    => 'Virtual',
    ];

    protected $dates = [
        'fechacreacion_actualizacion',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'objetivo',
        'arearesponsable_id',
        'tipoimparticion',
        'fechacreacion_actualizacion',
        'created_at',
        'updated_at',
        'deleted_at',
        'team_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getListaasistenciaAttribute()
    {
        return $this->getMedia('listaasistencia')->last();
    }

    public function arearesponsable()
    {
        return $this->belongsTo(Area::class, 'arearesponsable_id');
    }

    public function getFechacreacionActualizacionAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setFechacreacionActualizacionAttribute($value)
    {
        $this->attributes['fechacreacion_actualizacion'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getMaterialarchivoAttribute()
    {
        return $this->getMedia('materialarchivo')->last();
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
