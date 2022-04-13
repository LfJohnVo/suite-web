<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AmenazasEntendimientoOrganizacion;

class AmenazasComponent extends Component
{

    public $foda_id;
    public $amenaza;
    public $riesgo;
    public $nombre;
    public $view = 'create';


    public function mount($foda_id)
    {
        $this->foda_id = $foda_id;
    }


    public function render()
    {
        $amenazas = AmenazasEntendimientoOrganizacion::where('foda_id',$this->foda_id)->orderBy('id')->get();

        return view('livewire.amenazas-component',compact('amenazas'));
    }


    public function destroy($id)
    {
        AmenazasEntendimientoOrganizacion::destroy($id);

    }

    public function save()
    {
        // $foda = EntendimientoOrganizacion::find($this->foda_id);

        AmenazasEntendimientoOrganizacion::create([
            'foda_id' => $this->foda_id,
            'amenaza' => $this->amenaza,
            'riesgo' => $this->riesgo,
        ]);

        // dd($fort);

        $this->emit('recargar-amenazas');
        $this->default();
    }


    public function edit($id)
    {
        $amenazaEncontrada = AmenazasEntendimientoOrganizacion::find($id);

        $this->amenaza_id = $amenazaEncontrada->id;
        $this->foda_id = $amenazaEncontrada->foda_id;
        $this->amenaza = $amenazaEncontrada->amenaza;
        $this->riesgo = $amenazaEncontrada->riesgo;
        $this->view = 'edit';

    }

    public function update()
    {
        $amenazaEncontrada = AmenazasEntendimientoOrganizacion::find($this->amenaza_id);
        // dd($this->fortaleza_id);
        $amenazaEncontrada->update([
            'foda_id' => $this->foda_id,
            'amenaza' => $this->amenaza,
            'riesgo' => $this->riesgo,
        ]);

        $this->default();
        $this->dispatchBrowserEvent('contentChanged');

    }



    public function default()
    {
        $this->amenaza = '';
        $this->riesgo = '';
        $this->dispatchBrowserEvent('contentChanged');
        $this->view = 'create';
    }
}
