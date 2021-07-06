<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use \DateTimeInterface;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Area
 *
 * @property int $id
 * @property string|null $area
 * @property int|null $id_grupo
 * @property int|null $id_reporta
 * @property string|null $descripcion
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $team_id
 *
 * @property Grupo|null $grupo
 * @property Team|null $team
 * @property Collection|Area[] $areas
 * @property Collection|ConcientizacionSgi[] $concientizacion_sgis
 * @property Collection|Empleado[] $empleados
 * @property Collection|MaterialIsoVeinticiente[] $material_iso_veinticientes
 * @property Collection|MaterialSgsi[] $material_sgsis
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Area extends Model
{
	use SoftDeletes, MultiTenantModelTrait, HasFactory;
	protected $table = 'areas';

	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	protected $casts = [
		'id_grupo' => 'int',
		'id_reporta' => 'int',
		'team_id' => 'int'
	];

	protected $fillable = [
		'area',
		'id_grupo',
		'id_reporta',
		'descripcion',
		'team_id'
	];

	protected $appends = ['grupo_name'];

	protected function serializeDate(DateTimeInterface $date)
	{
		return $date->format('Y-m-d H:i:s');
	}

	public function grupo()
	{
		return $this->belongsTo(Grupo::class, 'id_grupo');
	}

	public function getGrupoNameAttribute()
	{
		return $this->grupo()->first('nombre')->nombre;
	}

	public function area()
	{
		return $this->belongsTo(Area::class, 'id_reporta');
	}

	public function team()
	{
		return $this->belongsTo(Team::class);
	}

	public function supervisor()
	{
		return $this->belongsTo(Area::class, 'id_reporta', 'id');
	}

	public function areas()
	{
		return $this->hasMany(Area::class, 'id_reporta');
	}

	public function children()
	{
		return $this->hasMany(Area::class, 'id_reporta', 'id')->with('children', 'supervisor', 'grupo'); //Eager Loading utilizar solo para construir un arbol si no puede desbordar la pila
	}

	public function concientizacion_sgis()
	{
		return $this->hasMany(ConcientizacionSgi::class, 'arearesponsable_id');
	}

	public function empleados()
	{
		return $this->hasMany(Empleado::class);
	}

	public function material_iso_veinticientes()
	{
		return $this->hasMany(MaterialIsoVeinticiente::class, 'arearesponsable_id');
	}

	public function material_sgsis()
	{
		return $this->hasMany(MaterialSgsi::class, 'arearesponsable_id');
	}

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
