<?php

namespace App\Models\RH;

use App\Models\Empleado;
use App\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class TipoContratoEmpleado extends Model implements Auditable
{
    use ClearsResponseCache, \OwenIt\Auditing\Auditable;
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug', 'description'];

    protected function empleados()
    {
        return $this->hasMany(Empleado::class, 'tipo_contrato_empleado_id', 'id')->alta();
    }
}
