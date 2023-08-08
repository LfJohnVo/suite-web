<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class LockedPlanTrabajo extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'locked_plan_trabajos';

    protected $dates = ['locked_to'];

    protected $fillable = [
        'locked_to',
        'blocked',
        'locked_by',
    ];
}
