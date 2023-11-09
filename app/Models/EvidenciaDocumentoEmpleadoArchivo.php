<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EvidenciaDocumentoEmpleadoArchivo extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable, ClearsResponseCache;

    protected $table = 'evidencias_documentos_empleados_archivos';

    protected $fillable = [
        'evidencias_documentos_empleados_id',
        'documento',
        'archivado',
    ];

    protected $appends = ['ruta_documento', 'ruta_absoluta_documento'];

    public function getRutaDocumentoAttribute()
    {
        $empleado = Empleado::select('id', 'name')->find($this->evidencia->empleados_documentos->id);

        return asset('storage/expedientes/' . Str::slug($empleado->name) . '/' . $this->documento);
    }

    public function getRutaAbsolutaDocumentoAttribute()
    {
        $empleado = Empleado::select('id', 'name')->find($this->evidencia->empleados_documentos->id);

        return 'expedientes/' . Str::slug($empleado->name) . '/' . $this->documento;
    }

    public function evidencia()
    {
        return $this->belongsTo(EvidenciasDocumentosEmpleados::class, 'evidencias_documentos_empleados_id', 'id');
    }
}
