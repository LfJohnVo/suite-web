<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Spatie\MediaLibrary\HasMedia;
use App\Traits\ClearsResponseCache;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PlanBaseActividade extends Model implements HasMedia, Auditable
{
    use SoftDeletes, MultiTenantModelTrait, InteractsWithMedia, HasFactory;
    use \OwenIt\Auditing\Auditable, ClearsResponseCache;

    protected $appends = [
        'guia',
    ];

    public $table = 'plan_base_actividades';

    protected $dates = [
        'fecha_inicio',
        'fecha_fin',
        'compromiso',
        'real',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'actividad',
        'actividad_fase_id',
        'ejecutar_id',
        'estatus_id',
        'responsable_id',
        'colaborador_id',
        'fecha_inicio',
        'fecha_fin',
        'compromiso',
        'real',
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

    // public function actividad_padre()
    // {
    //     return $this->belongsTo(PlanBaseActividade::class, 'actividad_padre_id');
    // }

    public function ejecutar()
    {
        return $this->belongsTo(EnlacesEjecutar::class, 'ejecutar_id');
    }

    public function getGuiaAttribute()
    {
        return $this->getMedia('guia')->last();
    }

    public function estatus()
    {
        return $this->belongsTo(EstatusPlanTrabajo::class, 'estatus_id');
    }

    public function responsable()
    {
        return $this->belongsTo(User::class, 'responsable_id');
    }

    public function colaborador()
    {
        return $this->belongsTo(User::class, 'colaborador_id');
    }

    public function getFechaInicioAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setFechaInicioAttribute($value)
    {
        $this->attributes['fecha_inicio'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getFechaFinAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setFechaFinAttribute($value)
    {
        $this->attributes['fecha_fin'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getCompromisoAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setCompromisoAttribute($value)
    {
        $this->attributes['compromiso'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getRealAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setRealAttribute($value)
    {
        $this->attributes['real'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
        //return $this->belongsTo('User');
    }

    public function actividad_fase()
    {
        return $this->belongsTo(ActividadFase::class);
    }
}
