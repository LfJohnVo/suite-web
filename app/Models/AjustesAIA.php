<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AjustesAIA extends Model
{
    use SoftDeletes;
    
    public $table = 'ajustes_aia';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'impacto_operativo',
        'impacto_regulatorio',
        'impacto_reputacion',
        'impacto_social',
    ];
}
