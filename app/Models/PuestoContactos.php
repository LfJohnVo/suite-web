<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuestoContactos extends Model
{
    use HasFactory;

    protected $table = 'puestos_contactos';

    protected $fillable = [
        'puesto_contacto',
        'descripcion_contacto',
        'puesto_id',
        'id_contacto',
    ];

    public function puesto()
    {
        return $this->belongsTo(Puesto::class);
    }

    // public function empleados()
    // {
    //     return $this->belongsTo(Empleado::class);
    // }

    public function empleados()
    {
        return $this->belongsTo(Empleado::class, 'id_contacto', 'id')->with('area');
    }

}
