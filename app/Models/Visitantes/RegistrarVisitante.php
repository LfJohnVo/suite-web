<?php

namespace App\Models\Visitantes;

use App\Models\Area;
use App\Models\Empleado;
use App\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegistrarVisitante extends Model implements Auditable
{
    use HasFactory, SoftDeletes;
    use \OwenIt\Auditing\Auditable, ClearsResponseCache;

    protected $table = 'registrar_visitantes';

    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'telefono',
        'celular',
        'empresa',
        'dispositivo',
        'serie',
        'motivo',
        'foto',
        'tipo_visita',
        'empleado_id',
        'area_id',
        'firma',
        'registro_salida',
        'fecha_salida',
        'uuid',
        'autorizado',
    ];

    protected $casts = [
        'empleado_id' => 'integer',
        'area_id' => 'integer',
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function dispositivos()
    {
        return $this->hasMany(VisitantesDispositivo::class);
    }
}
