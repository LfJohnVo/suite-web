<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\OportunidadesEntendimientoOrganizacion;

class OportunidadesComponent extends Component
{

    public $foda_id;
    public $oportunidad;
    public $riesgo;
    public $nombre;
    public $view = 'create';

    public function mount($foda_id)
    {
        $this->foda_id = $foda_id;
    }


    public function render()
    {
        $oportunidades = OportunidadesEntendimientoOrganizacion::where('foda_id',$this->foda_id)->orderBy('id')->get();

        return view('livewire.oportunidades-component',compact('oportunidades'));
    }

    public function destroy($id)
    {
        OportunidadesEntendimientoOrganizacion::destroy($id);

    }

    public function save()
    {
        // $foda = EntendimientoOrganizacion::find($this->foda_id);

        OportunidadesEntendimientoOrganizacion::create([
            'foda_id' => $this->foda_id,
            'oportunidad' => $this->oportunidad,
            'riesgo' => $this->riesgo,
        ]);

        // dd($fort);

        $this->emit('recargar-oportunidades');
        $this->default();
    }


    public function edit($id)
    {
        $oportunidadEncontrada = OportunidadesEntendimientoOrganizacion::find($id);

        $this->oportunidad_id = $oportunidadEncontrada->id;
        $this->foda_id = $oportunidadEncontrada->foda_id;
        $this->oportunidad = $oportunidadEncontrada->oportunidad;
        $this->riesgo = $oportunidadEncontrada->riesgo;
        $this->view = 'edit';

    }

    public function update()
    {
        $oportunidadEncontrada = OportunidadesEntendimientoOrganizacion::find($this->oportunidad_id);
        // dd($this->fortaleza_id);
        $oportunidadEncontrada->update([
            'foda_id' => $this->foda_id,
            'oportunidad' => $this->oportunidad,
            'riesgo' => $this->riesgo,
        ]);

        $this->default();
        $this->dispatchBrowserEvent('contentChanged');

    }



    public function default()
    {
        $this->oportunidad = '';
        $this->riesgo = '';
        $this->dispatchBrowserEvent('contentChanged');
        $this->view = 'create';
    }

}
