<?php

namespace App\Http\Livewire;

use App\Mail\RH\Evaluaciones\NotificacionEvaluador;
use App\Models\Area;
use App\Models\Empleado;
use App\Models\RH\Competencia;
use App\Models\RH\Evaluacion;
use App\Models\RH\EvaluacionCompetencia;
use App\Models\RH\EvaluacionObjetivo;
use App\Models\RH\EvaluacionRepuesta;
use App\Models\RH\EvaluadoEvaluador;
use App\Models\RH\GruposEvaluado;
use App\Models\RH\Objetivo;
use App\Models\RH\ObjetivoRespuesta;
use App\Models\RH\TipoCompetencia;
use App\Models\RH\TipoObjetivo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class EvaluacionesStepsOrganizacion extends Component
{
    public $paso = 1;

    public $inputs = [];

    public $publico = "";

    public $evaluados = [];

    public $selectedItems = [];

    public function uncheckItem($index)
    {
        unset($this->selectedItems[$index]);
    }

    public function updatedPublico($value)
    {
        $this->publico = $value;
        // This method will be called whenever the "publico" property is updated
        // $value will contain the new value of "publico"
        // Add your logic here
    }


    public function addInput()
    {
        $this->inputs[] = '';
    }

    public function removeInput($index)
    {
        unset($this->inputs[$index]);
        $this->inputs = array_values($this->inputs);
    }

    public function mount()
    {
        $clasificaciones = TipoObjetivo::select('id', 'nombre')->get();

        foreach ($clasificaciones as $clasif) {
            $this->inputs[] = $clasif->nombre;
        }
        // dd($Clasificaciones);
        $this->paso = 1;
    }

    public function render()
    {
        // dd($clasificaciones);
        switch ($this->publico) {
                // case 'total':
                //     $this->evaluados = Empleado::getAltaEmpleados();
                //     break;
            case 'area':
                $this->evaluados = Area::getAll();
                break;

            case 'manual':
                $this->evaluados = Empleado::getAltaEmpleados();
                break;
        }
        // dd($this->evaluados);
        return view('livewire.evaluaciones-steps-organizacion');
    }

    public function retroceso()
    {
        $this->paso = 1;
    }

    public function formpaso1($form1)
    {
        $this->paso = 2;
    }

    public function formpaso2($form2)
    {
        $this->paso = 3;
    }

    public function formpaso3($form3)
    {
        // dd($form3);
        $this->paso = 4;
    }

    public function formpaso4($form4)
    {
        // dd($form4, $this->selectedItems);
        // dd($this->publico);
        $this->paso = 5;
    }
}
