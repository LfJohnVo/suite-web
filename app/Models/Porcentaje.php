<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Porcentaje.
 *
 * @property int $id
 * @property character varying|null $porcentaje
 * @property timestamp without time zone|null $created_at
 * @property timestamp without time zone|null $updated_at
 */
class Porcentaje extends Model
{
    protected $table = 'porcentajes';

    protected $casts = [
        'porcentaje' => 'string',

    ];

    protected $fillable = [
        'porcentaje',
    ];

    // public function language()
    // {
    //     return $this->belongsToMany('\App\Language', 'puesto_idioma_porcentaje_pivot')
    //         ->withPivot('id_idioma');
    // }

    // public function puesto()
    // {
    //     return $this->belongsToMany('\App\Puesto', 'puesto_idioma_porcentaje_pivot')
    //         ->withPivot('id_puesto');
    // }
}
