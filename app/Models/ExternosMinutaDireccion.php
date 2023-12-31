<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternosMinutaDireccion extends Model
{
    use HasFactory;

    protected $table = 'externos_minuta_alta_direcccion';

    protected $fillable = [
        'nombreEXT',
        'emailEXT',
        'puestoEXT',
        'empresaEXT',
        'minuta_id',
    ];

    public function revision()
    {
        return $this->belongsTo(MinutasAltaDireccion::class, 'minuta_id');
    }
}
