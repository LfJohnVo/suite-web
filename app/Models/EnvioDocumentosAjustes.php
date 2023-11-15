<?php

namespace App\Models;

use App\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class EnvioDocumentosAjustes extends Model implements Auditable
{
    use ClearsResponseCache, \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'envio_documentos_ajustes';

    protected $fillable = [
        'id_coordinador',
        'id_mensajero',
        'created_at',
        'updated_at',
        'deleted_at',
        'team_id',
    ];

    public function coordinador()
    {
        return $this->belongsTo(Empleado::class, 'id_coordinador')->alta();
    }

    public function mensajero()
    {
        return $this->belongsTo(Empleado::class, 'id_mensajero')->alta();
    }
}
