<?php

namespace App\Models\ContractManager;

use App\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable as AuditableTrait;
use OwenIt\Auditing\Contracts\Auditable;

class HistoricoCedulaCumplimiento extends Model implements Auditable
{
    use AuditableTrait, ClearsResponseCache;
    use HasFactory;

    protected $table = 'cedula_cumplimiento_historico';
}
