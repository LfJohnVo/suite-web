<?php

namespace App\Models;

use App\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class PermisosGoceSueldo extends Model implements Auditable
{
    use ClearsResponseCache, \OwenIt\Auditing\Auditable;
    use SoftDeletes;

    public $table = 'permisos_goce_sueldo';

    public $fillable = [
        'nombre',
        'descripcion',
        'dias',
        'tipo_permiso',
    ];

    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'dias' => 'integer',
        'tipo_permiso',
    ];

    // public function areas()
    // {
    //     return $this->belongsToMany(Area::class, 'regla_vacaciones_areas', 'regla_id', 'area_id');
    // }
}
