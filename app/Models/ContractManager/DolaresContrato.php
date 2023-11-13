<?php

namespace App\Models\ContractManager;

use Carbon\Carbon;
use App\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditableTrait;

/**
 * Class DolaresContrato.
 *
 * @property int $id
 * @property int|null $contrato_id
 * @property float|null $monto_dolares
 * @property float|null $maximo_dolares
 * @property float|null $minimo_dolares
 * @property string|null $valor_dolar
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 */
class DolaresContrato extends Model implements Auditable
{
    use SoftDeletes, ClearsResponseCache;
    use AuditableTrait;

    protected $table = 'dolares_contratos';

    protected $casts = [
        'contrato_id' => 'int',
        'monto_dolares' => 'float',
        'maximo_dolares' => 'float',
        'minimo_dolares' => 'float',
    ];

    protected $fillable = [
        'contrato_id',
        'monto_dolares',
        'maximo_dolares',
        'minimo_dolares',
        'valor_dolar',
    ];

    public function contrato()
    {
        return $this->belongsTo(Contrato::class);
    }
}
