<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CursosDiplomasEmpleados extends Model
{
    use SoftDeletes;
	protected $table = 'cursos_diplomados_empleados';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const TipoSelect = [
        'Curso' => 'Curso',
        'Diplomado' => 'Diplomado',
    ];


    protected $casts = [
        'empleado_id' => 'int',
        'curso_diploma' => 'string',
        'tipo' => 'string',
        'año' => 'string',
        'duracion' => 'string',
	];

    protected $fillable = [
		'empleado_id',
        'curso_diploma',
        'tipo',
        'año',
        'duracion',

	];

    public function empleado_cursos(){

        return $this->belongsTo(Empleado::class,'empleado_id');

    }

    public function getAñoAttribute($value)
    {
        return $value ? Carbon::parse($value)->format('d-m-Y') : null;
    }


}
