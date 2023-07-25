<?php

namespace App\Http\Livewire;

use App\Models\Clausula;
use App\Models\Norma;
use Livewire\Component;

class PartesInteresadasComponent extends Component
{
    public $clausulas;

    public $norma_id;

    public $parteinteresada;

    public $value;

    public $normas;

    public function mount()
    {
        $this->normas = Norma::get();
        $this->value == false;
    }

    public function render()
    {
        return view('livewire.partes-interesadas-component');
    }

    public function UpdatedNormaId($norma)
    {
        switch ($norma) {
            case '1':
                $this->value = true;
                $this->clausulas = Clausula::where('modulo', 'iso27001')->get();
                $this->dispatchBrowserEvent('norma-updated');
                break;
            case '2':
                $this->value = true;
                $this->clausulas = Clausula::where('modulo', 'iso9001')->get();
                $this->dispatchBrowserEvent('norma-updated');
                break;
            default:
                $this->value = false;
                $this->dispatchBrowserEvent('norma-updated');
                break;
        }
    }
}
