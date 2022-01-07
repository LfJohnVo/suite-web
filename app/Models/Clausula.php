<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Rennokki\QueryCache\Traits\QueryCacheable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Clausula
 *
 * @property int $id
 * @property character varying $nombre
 * @property timestamp without time zone|null $created_at
 * @property timestamp without time zone|null $updated_at
 * @property string|null $deleted_at
 * @property character varying|null $modulo
 *
 * @property Collection|AuditoriaInternoClausula[] $auditoria_interno_clausulas
 * @property Collection|PartesInteresada[] $partes_interesadas
 *
 * @package App\Models
 */
class Clausula extends Model
{
    use HasFactory, SoftDeletes;
    use QueryCacheable;

    public $cacheFor = 3600;
    protected static $flushCacheOnUpdate = true;
	use SoftDeletes;
	protected $table = 'clausulas';

	protected $casts = [
		'nombre' => 'string',
		'modulo' => 'string'
	];

	protected $fillable = [
		'nombre',
		'modulo'
	];

	public function auditoria_interno_clausulas()
	{
		return $this->hasMany(AuditoriaInternoClausula::class);
	}

	public function partes_interesadas()
	{
		return $this->belongsToMany(PartesInteresada::class, 'partes_interesadas_clausula', 'clausula_id', 'partesint_id')
					->withPivot('id')
					->withTimestamps();
	}
}
