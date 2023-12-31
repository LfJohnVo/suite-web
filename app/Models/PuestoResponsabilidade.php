<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PuestoResponsabilidade.
 *
 * @property int $id
 * @property string|null $actividad
 * @property int|null $puesto_id
 * @property timestamp without time zone|null $created_at
 * @property timestamp without time zone|null $updated_at
 *
 * @property Puesto|null $puesto
 */
class PuestoResponsabilidade extends Model
{
    protected $table = 'puesto_responsabilidades';

    protected $fillable = [
        'actividad',
        'resultado',
        'indicador',
        'tiempo_asignado',
        'puesto_id',
    ];

    public function puesto()
    {
        return $this->hasMany('App\Model\Puesto');
    }
}
