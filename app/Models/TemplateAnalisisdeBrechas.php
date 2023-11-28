<?php

namespace App\Models;

use App\Http\Livewire\SeccionesTemplate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateAnalisisdeBrechas extends Model
{
    use HasFactory;

    public $table = 'template_analisisde_brechas';

    public $fillable = [
        'nombre_template',
        'norma_id',
        'descripcion',
        'no_secciones',
    ];

    public function secciones()
    {
        return $this->hasMany(SeccionesTemplateAnalisisdeBrechas::class, 'template_id', 'id');
    }

    public function parametros()
    {
        return $this->hasMany(ColoresTemplateAnalisisdeBrechas::class, 'template_id', 'id');
    }
}
