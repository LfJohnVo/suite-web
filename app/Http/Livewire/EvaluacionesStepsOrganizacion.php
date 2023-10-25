<?php

namespace App\Http\Livewire;

// use App\Mail\RH\Evaluaciones\NotificacionEvaluador;
use App\Models\Area;
use App\Models\Empleado;
use App\Models\EvaluacionOrganizacion;
// use App\Models\RH\Competencia;
// use App\Models\RH\Evaluacion;
// use App\Models\RH\EvaluacionCompetencia;
// use App\Models\RH\EvaluacionObjetivo;
// use App\Models\RH\EvaluacionRepuesta;
// use App\Models\RH\EvaluadoEvaluador;
// use App\Models\RH\GruposEvaluado;
// use App\Models\RH\Objetivo;
// use App\Models\RH\ObjetivoRespuesta;
// use App\Models\RH\TipoCompetencia;
use App\Models\RH\TipoObjetivo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class EvaluacionesStepsOrganizacion extends Component
{
    public $paso = "crear-evaluacion";

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

    public $o_c = false;

    public $o = false;

    public $c = false;


    public function addOrInsertEvaluador($index = null)
    {
        if ($this->selectedEvaluadorIndex !== null) {
            if (!isset($this->evaluadoresselects[$this->selectedEvaluadorIndex])) {
                $this->evaluadoresselects[$this->selectedEvaluadorIndex] = [];
            }
            array_splice($this->evaluadoresselects[$this->selectedEvaluadorIndex], $index + 1, 0, [null]);
        } else {
            $this->evaluadoresselects[$index][] = null;
        }
    }

    public function removeEvaluador($evaluadoIndex, $evaluadorIndex)
    {
        if (isset($this->evaluadoresselects[$evaluadoIndex])) {
            unset($this->evaluadoresselects[$evaluadoIndex][$evaluadorIndex]);
        }
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
        $this->paso = "crear-evaluacion";
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

    public function crearevaluacion($form1)
    {
        $data = collect($form1);

        // $validator = Validator::make($data->all(), [
        //     'form1.nombre' => 'required|regex:/\S/', // Requires at least one non-whitespace character
        //     'form1.descripcion' => 'required|regex:/\S/',
        //     'form1.objetivos' => 'nullable',
        //     'form1.valor_objetivos' => 'required',
        //     'form1.competencias' => 'nullable',
        //     'form1.valor_competencias' => 'required',
        //     // Add other validation rules as needed
        // ]);
        // dd($data->all());

        if (array_key_exists("objetivos", $form1) && array_key_exists("competencias", $form1)) {
            $total = $form1['porcentaje_objetivos'] + $form1['porcentaje_competencias'];
            if ($total != 100) {
                return false;
            }
            $this->o_c = true;
        } elseif (array_key_exists("objetivos", $form1) && $form1['porcentaje_objetivos'] == 100) {
            $form1['competencias'] = false;
            $form1['porcentaje_competencias'] = 0;
            // dd('tiene objetivos');
            $this->c = true;
        } elseif (array_key_exists("competencias", $form1) && $form1['porcentaje_competencias'] == 100) {
            $form1['objetivos'] = false;
            $form1['porcentaje_objetivos'] = 0;
            $this->o = true;
            // dd('tiene competencias');
        } else {
            dd('no cumple');
        };

        $creacion_evaluacion = EvaluacionOrganizacion::create([
            'nombre_evaluacion' => $form1['nombre'],
            'descripcion' => $form1['descripcion'],
            'objetivos' => $form1['objetivos'],
            'valor_objetivos' => $form1['porcentaje_objetivos'],
            'competencias' => $form1['competencias'],
            'valor_competencias' => $form1['porcentaje_competencias'],
            'estado' => 'Borrador'
        ]);




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
