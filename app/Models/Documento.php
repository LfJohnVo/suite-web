<?php

namespace App\Models;

use Carbon\Carbon;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Documento extends Model
{
    use HasFactory, SoftDeletes, Searchable;

    //REVISION DE DOCUMENTOS ESTATUS
    const SOLICITUD_REVISION = 1;
    const APROBADO = 2;
    const RECHAZADO = 3;
    const RECHAZADO_EN_CONSECUENCIA_POR_NIVEL_ANTERIOR = 4;

    // DOCUMENTOS ESTATUS
    const EN_ELABORACION = 1;
    const EN_REVISION = 2;
    const PUBLICADO = 3;
    const DOCUMENTO_RECHAZADO = 4;
    const DOCUMENTO_OBSOLETO = 5;

    public static $searchable = [
        'nombre', 'codigo'
    ];

    protected $dates = ['fecha'];

    protected $appends = ['estatus_formateado', 'fecha_dmy', 'archivo_actual'];

    protected $fillable = [
        'codigo',
        'nombre',
        'tipo',
        'macroproceso_id',
        'proceso_id',
        'estatus',
        'version',
        'fecha',
        'archivo',
        'elaboro_id',
        'reviso_id',
        'aprobo_id',
        'responsable_id'
    ];

    public function searchableAs()
    {
        return 'posts_index';
    }

    public function getFechaDMYAttribute()
    {
        return Carbon::parse($this->fecha)->format('d-m-Y');
    }

    public function getEstatusFormateadoAttribute()
    {
        switch ($this->estatus) {
            case strval($this::EN_ELABORACION):
                return 'En Elaboración';
                break;
            case strval($this::EN_REVISION):
                return 'En Revisión';
                break;
            case strval($this::PUBLICADO):
                return 'Publicado';
                break;
            case strval($this::DOCUMENTO_RECHAZADO):
                return 'Documento Rechazado';
                break;
            default:
                return 'En Elaboración';
                break;
        }
    }

    public function getArchivoActualAttribute()
    {


        $path_documento = '/storage/Documentos publicados';
        if ($this->estatus == $this::EN_REVISION) {
            $path_documento = '/storage/Documentos en aprobacion';
        }

        switch ($this->tipo) {
            case 'politica':
                $path_documento .= '/politicas';
                break;
            case 'procedimiento':
                $path_documento .= '/procedimientos';
                break;
            case 'manual':
                $path_documento .= '/manuales';
                break;
            case 'plan':
                $path_documento .= '/planes';
                break;
            case 'instructivo':
                $path_documento .= '/instructivos';
                break;
            case 'reglamento':
                $path_documento .= '/reglamentos';
                break;
            case 'externo':
                $path_documento .= '/externos';
                break;
            case 'proceso':
                $path_documento .= '/procesos';
                break;
            default:
                $path_documento .= '/procesos';
                break;
        }

        return asset($path_documento . '/' . $this->archivo);
    }
    //Relacion uno a muchos inversa
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function revisores()
    {
        return $this->belongsToMany(Empleado::class);
    }


    public function revisiones()
    {
        return $this->hasMany(RevisionDocumento::class, 'documento_id', 'id');
    }

    public function revisor()
    {
        return $this->belongsTo(Empleado::class, 'reviso_id', 'id');
    }

    public function macroproceso()
    {
        return $this->belongsTo(Macroproceso::class, 'macroproceso_id', 'id');
    }

    public function elaborador()
    {
        return $this->belongsTo(Empleado::class, 'elaboro_id', 'id');
    }

    public function aprobador()
    {
        return $this->belongsTo(Empleado::class, 'aprobo_id', 'id');
    }
    public function responsable()
    {
        return $this->belongsTo(Empleado::class, 'responsable_id', 'id');
    }

    public function proceso()
    {
        return $this->belongsTo(Proceso::class, 'proceso_id', 'id');
    }

    public function procesos()
    {
        return $this->hasMany(Proceso::class);
    }
}
