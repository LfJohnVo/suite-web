<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionRequisitoLegal extends Model
{
    use HasFactory;

    public $cacheFor = 3600;
    protected static $flushCacheOnUpdate = true;
    protected $table = 'evaluacion_requisito_legal';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'id',
        'cumplerequisito',
        'fechaverificacion',
        'metodo',
        'descripcion_cumplimiento',
        'comentarios',
        'id_matriz',
        'id_reviso',

    ];

    public function evaluador()
    {
        return $this->belongsTo(Empleado::class, 'id_reviso', 'id', 'puestoRelacionado');
    }

    public function requisito()
    {
        return $this->belongsTo(MatrizRequisitoLegale::class, 'id_matriz', 'id');
    }

    public function evidencias_matriz()
    {
        return $this->hasMany(EvidenciaMatrizRequisitoLegale::class, 'id_matriz_requisito');
    }

    public function planes()
    {
        return $this->morphToMany(PlanImplementacion::class, 'plan_implementacionable');
    }
}
