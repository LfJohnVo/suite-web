<?php

namespace App\Models\ContractManager;

use App\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FacturaFile extends Model implements Auditable
{
    use HasFactory, softDeletes, ClearsResponseCache;
    use AuditableTrait;

    public $table = 'facturas_files';

    protected $dates = ['deleted_at'];

    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'pdf',
        'xml',
        'factura_id',
        'created_by',
        'updated_by',
    ];
}
