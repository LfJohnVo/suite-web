<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoImpacto
 *
 * @property int $id
 * @property string|null $nombre_impacto
 * @property string|null $criterio
 * @property string|null $base
 * @property int|null $niveles_impacto_id
 * @property int|null $tabla_impacto_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property NivelesImpacto|null $niveles_impacto
 * @property TablaImpacto|null $tabla_impacto
 *
 * @package App\Models
 */
class TipoImpacto extends Model
{
	protected $table = 'tipo_impacto';

	protected $casts = [
		'niveles_impacto_id' => 'int',
		'tabla_impacto_id' => 'int'
	];

	protected $fillable = [
		'nombre_impacto',
		'criterio',
		'base',
		'niveles_impacto_id',
		'tabla_impacto_id'
	];

	public function niveles_impacto()
	{
		return $this->belongsTo(NivelesImpacto::class);
	}

	public function tabla_impacto()
	{
		return $this->belongsTo(TablaImpacto::class);
	}
}
