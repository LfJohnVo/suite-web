<?php

namespace App\Models\RH;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoContratoEmpleado extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug', 'description'];

    protected function empleados()
    {
        return $this->hasMany(Empleado::class, 'tipo_contrato_empleado_id', 'id')->alta();
    }
}
