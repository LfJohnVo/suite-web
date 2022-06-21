<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TiposObjetivosSistema;

class TipoSelectComponent extends Component
{
    protected $listeners = ['render-tipo-select-component' => 'render'];
    public $tipos;
    public $tipo_seleccionado;

    public function mount($tipo_seleccionado = null)
    {
        $this->servicio_seleccionado = $tipo_seleccionado;
        $this->tipos = [];
    }

    public function render()
    {
        $this->tipos = TiposObjetivosSistema::get();

        return view('livewire.tipo-select-component',['tipos' => $this->tipos]);
    }

    public function hydrate()
    {
        $this->emit('select2');
    }
}
