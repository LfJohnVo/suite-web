<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeccionRecurso extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'lecciones_recursos';

    protected $fillable = [
        'name',
        'recurso_id',
    ];

    public function lecciones()
    {
        return $this->hasMany(LeccionRecurso::class, 'seccion_id', 'id');
    }

    public function capacitacion()
    {
        return $this->belongsTo(Recurso::class, 'recurso_id', 'id');
    }
}
