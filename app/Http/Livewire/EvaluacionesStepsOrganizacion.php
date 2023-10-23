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

    public $minValue;
    public $maxValue;

    public $fields = [];

    public $evaluadores;

    public $evaluadoresselects = [];

    public $selectedEvaluadorIndex = null;

    public function addEvaluador()
    {
        if ($this->selectedEvaluadorIndex !== null) {
            array_splice($this->evaluadoresselects, $this->selectedEvaluadorIndex + 1, 0, [null]);
        } else {
            $this->evaluadoresselects[] = null;
        }
    }

    public function setSelectedEvaluadorIndex($index)
    {
        $this->selectedEvaluadorIndex = $index;
    }

    public function removeEvaluador($index)
    {
        unset($this->evaluadoresselects[$index]);
        $this->evaluadoresselects = array_values($this->evaluadoresselects);
    }

    public function addField()
    {
        $this->fields[] = ['nombre' => '', 'regla' => ''];
    }

    public function removeField($index)
    {
        unset($this->fields[$index]);
        $this->fields = array_values($this->fields);
    }

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

    // public function getRangeProperty()
    // {
    //     return range($this->minValue, $this->maxValue);
    // }


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
            case 'total':
                $this->evaluados = Empleado::getAltaEmpleados();
                break;
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
        $this->paso = $this->paso - 1;
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

    public function formpaso5($form5)
    {
        // dd($form5);
        // dd($this->evaluados);
        $this->evaluadores = Empleado::getAltaEmpleados();
        $this->paso = 6;
    }

    public function formpaso6($form6)
    {
        // dd($form5);
        dd($form6);
        $this->paso = 6;
    }
}
