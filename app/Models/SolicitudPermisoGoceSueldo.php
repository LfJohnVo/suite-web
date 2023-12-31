<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SolicitudPermisoGoceSueldo extends Model
{
    use SoftDeletes;

    public $table = 'solicitud_permiso_goce_sueldo';

    public $fillable = [
        'dias_solicitados',
        'fecha_inicio',
        'fecha_fin',
        'descripcion',
        'aprobacion',
        'empleado_id',
        'año',
        'autoriza',
        'comentarios_aprobador',
        'permiso_id',
    ];

    public function permiso()
    {
        return $this->belongsTo(PermisosGoceSueldo::class, 'permiso_id');
    }

    // public function tipo()
    // {
    //     return $this->belongsTo(PermisosGoceSueldo::class,'tipo_permiso');
    // }
    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }
}
