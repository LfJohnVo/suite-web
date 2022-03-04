<?php

namespace App\Models;

use App\Traits\MultiTenantModelTrait;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Rennokki\QueryCache\Traits\QueryCacheable;

class PlanAuditorium extends Model
{
    use SoftDeletes, MultiTenantModelTrait, HasFactory;
    use QueryCacheable;

    public $cacheFor = 3600;
    protected static $flushCacheOnUpdate = true;
    public $table = 'plan_auditoria';

    public static $searchable = [
        'objetivo',
    ];

    protected $dates = [
        'fecha_auditoria',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'objetivo',
        'alcance',
        'criterios',
        'id_equipo_auditores',
        'documentoauditar',
        'fecha_auditoria',
        'descripcion',
        'created_at',
        'updated_at',
        'deleted_at',
        'team_id',
    ];

    protected $appends = ['objetivo_html', 'alcance_html', 'criterios_html', 'documento_auditar_html'];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    // public function fecha()
    // {
    //     return $this->belongsTo(AuditoriaAnual::class, 'fecha_id');
    // }

    public function getFechaAuditoriaAttribute($value)
    {
        return $value ? Carbon::parse($value)->format('d-m-Y') : null;
    }

    public function auditados()
    {
        return $this->belongsToMany(Empleado::class, 'plan_auditoria_empleados', 'plan_auditoria_id', 'empleado_id');
    }

    public function equipo()
    {
        return $this->belongsTo(Empleado::class, 'id_equipo_auditores', 'id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function getObjetivoHtmlAttribute()
    {
        return html_entity_decode(strip_tags($this->objetivo), ENT_QUOTES, 'UTF-8');
    }

    public function getAlcanceHtmlAttribute()
    {
        return html_entity_decode(strip_tags($this->alcance), ENT_QUOTES, 'UTF-8');
    }

    public function getCriteriosHtmlAttribute()
    {
        return html_entity_decode(strip_tags($this->criterios), ENT_QUOTES, 'UTF-8');
    }

    public function getDocumentoAuditarHtmlAttribute()
    {
        return html_entity_decode(strip_tags($this->documentoauditar), ENT_QUOTES, 'UTF-8');
    }

}
