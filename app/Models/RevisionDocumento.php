<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevisionDocumento extends Model
{
    use HasFactory;

    protected $fillable = [
        'empleado_id',
        'documento_id',
        'comentarios',
        'estatus',
        'nivel',
        'no_revision'
    ];

    public function documento()
    {
        return $this->belongsTo(Documento::class);
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
