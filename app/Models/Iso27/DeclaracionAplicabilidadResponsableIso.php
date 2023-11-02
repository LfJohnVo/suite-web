<?php

namespace App\Models\Iso27;

use App\Models\Empleado;
use App\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeclaracionAplicabilidadResponsableIso extends Model implements Auditable
{
    use HasFactory, SoftDeletes, ClearsResponseCache;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'id',
        'aplica',
        'justificacion',
        'fecha_aprobacion',
        'empleado_id',
        'declaracion_id',
        'esta_correo_enviado',
    ];

    public function gapdos()
    {
        return $this->hasOne(GapDosCatalogoIso::class, 'id', 'declaracion_id');
    }

    public function responsable_declaracion()
    {
        return $this->hasMany(Empleado::class, 'id', 'empleado_id');
    }

    public function aprobador()
    {
        return $this->hasOne(DeclaracionAplicabilidadAprobarIso::class, 'declaracion_id', 'declaracion_id');
    }

    // public function aprobadores()
    // {
    //     return $this->hasOne(Empleado::class, 'aprobadores_id', 'id');
    // }

    public function declaracion_aplicabilidad()
    {
        return $this->belongsTo(DeclaracionAplicabilidadConcentradoIso::class, 'declaracion_id');
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id', 'id')->alta();
    }

    // public function notificacion()
    // {
    //     return $this->hasMany(NotificacionAprobadores::class, 'responsables_id', 'id');
    // }
}
