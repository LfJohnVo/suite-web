<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\TiposObjetivosSistema;

class TipoComponent extends Component
{
    public $nombre;
    public $descripcion;
    protected $rules = [
        'nombre' => 'required|string|max:255',
    ];

    protected $mesages = [
        'nombre.required' => 'Debes de definir un nombre para el tipo',

    ];

    public function save(){
        $this->validate();
        TiposObjetivosSistema::create([
            'nombre' => $this->nombre,
            'slug'=>Str::slug($this->nombre,'-'),
            'descripcion' => $this->descripcion,
        ]);
        $this->emit('tipoStore');
        $this->emit('render-tipo-select-component');
    }

    public function render()
    {
        return view('livewire.tipo-component');
    }
}
