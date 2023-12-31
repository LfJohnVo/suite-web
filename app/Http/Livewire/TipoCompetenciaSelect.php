<?php

namespace App\Http\Livewire;

use App\Models\RH\TipoCompetencia;
use Livewire\Component;

class TipoCompetenciaSelect extends Component
{
    protected $listeners = ['render-tipo-competencia-select' => 'render'];
    public $tipos;
    public $tipo_seleccionado;

    public function mount($tipo_seleccionado)
    {
        $this->tipo_seleccionado = $tipo_seleccionado;
        $this->tipos = [];
    }

    public function render()
    {
        $this->tipos = TipoCompetencia::get();

        return view('livewire.tipo-competencia-select', ['tipos' => $this->tipos]);
    }

    public function hydrate()
    {
        $this->emit('select2');
    }
}
