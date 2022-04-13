<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DebilidadesEntendimientoOrganizacion.
 *
 * @property int $id
 * @property string|null $debilidad
 * @property string|null $riesgo
 * @property int|null $foda_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property EntendimientoOrganizacion|null $entendimiento_organizacion
 */
class DebilidadesEntendimientoOrganizacion extends Model
{
    protected $table = 'debilidades_entendimiento_organizacion';

    protected $casts = [
        'foda_id' => 'int',
    ];

    protected $fillable = [
        'debilidad',
        'riesgo',
        'foda_id',
    ];

    public function entendimiento_organizacion()
    {
        return $this->belongsTo(EntendimientoOrganizacion::class, 'foda_id');
    }
}
