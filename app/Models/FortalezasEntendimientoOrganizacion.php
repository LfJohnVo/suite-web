<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FortalezasEntendimientoOrganizacion.
 *
 * @property int $id
 * @property string|null $fortaleza
 * @property string|null $riesgo
 * @property int|null $foda_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property EntendimientoOrganizacion|null $entendimiento_organizacion
 */
class FortalezasEntendimientoOrganizacion extends Model
{
    protected $table = 'fortalezas_entendimiento_organizacion';

    protected $casts = [
        'foda_id' => 'int',
    ];

    protected $fillable = [
        'fortaleza',
        'riesgo',
        'foda_id',
    ];

    protected $appends = ['tiene_riesgos_asociados'];

    public function entendimiento_organizacion()
    {
        return $this->belongsTo(EntendimientoOrganizacion::class, 'foda_id', 'id');
    }

    public function riesgos()
    {
        return $this->morphToMany(MatrizRiesgo::class, 'riesgosable', null, null, 'riesgos_id');
    }

    public function getTieneRiesgosAsociadosAttribute()
    {
        $tiene_riesgos = false;

        if (count($this->riesgos) > 0) {
            $tiene_riesgos = true;
        }

        return $tiene_riesgos;
    }
}
