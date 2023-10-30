<?php

namespace App\Http\Livewire;

// use App\Mail\RH\Evaluaciones\NotificacionEvaluador;
use App\Models\Area;
use App\Models\Empleado;
use App\Models\EvaluacionOrganizacion;
use App\Models\EvaluadosEvaluacionOrganizacion;
use App\Models\PeriodosEvaluacionOrganizacion;
use App\Models\PerspectivasEvaluacionOrganizacion;
use App\Models\ReglasEvaluacionOrganizacion;
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

    public $evaluados = [];

    public $selectedItems = [];

    public $fields = [];

    public $evaluadores;

    public $evaluadoresselects = [];

    public $selectedEvaluadorIndex = null;

    //Casos
    public $o_c = false;
    public $o = false;
    public $c = false;

    //Paso 1
    public $creacion_evaluacion;
    public $nombre;
    public $descripcion;
    public $objetivos = true;
    public $competencias = true;
    public $porcentaje_objetivos = 50;
    public $porcentaje_competencias = 50;
    public $sumatotal;

    //Paso_periodos
    public $create_periodos;
    public $tipo;
    public $objetivos_y_competencias;
    public $evaluacion_organizacion_id;
    public $nombre_periodo_1;
    public $fecha_inicio_p1;
    public $fecha_fin_p1;
    public $nombre_periodo_2;
    public $fecha_inicio_p2;
    public $fecha_fin_p2;
    public $nombre_periodo_3;
    public $fecha_inicio_p3;
    public $fecha_fin_p3;
    public $nombre_periodo_4;
    public $fecha_inicio_p4;
    public $fecha_fin_p4;
    public $nombre_periodo_competencias_1;
    public $fecha_inicio_competencias_p1;
    public $fecha_fin_competencias_p1;
    public $nombre_periodo_competencias_2;
    public $fecha_inicio_competencias_p2;
    public $fecha_fin_competencias_p2;
    public $nombre_periodo_competencias_3;
    public $fecha_inicio_competencias_p3;
    public $fecha_fin_competencias_p3;
    public $nombre_periodo_competencias_4;
    public $fecha_inicio_competencias_p4;
    public $fecha_fin_competencias_p4;

    //Paso periodos
    public $create_perspectivas;

    //Publico
    public $publico;

    //Reglas
    public $minValue;
    public $maxValue;
    public $nombre_regla_1;
    public $regla_1;
    public $nombre_regla_2;
    public $regla_2;

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

    public function crearevaluacion()
    {
        $this->sumatotal = 0;

        $this->validate([
            'nombre' => 'required',
            'objetivos' => 'accepted_if:competencias,false',
            'porcentaje_objetivos' => 'required_unless:objetivos,false|numeric|prohibited_if:objetivos,false',
            'competencias' => 'accepted_if:objetivos,false',
            'porcentaje_competencias' => 'required_unless:competencias,false|numeric|prohibited_if:competencias,false',
        ]);

        if ($this->porcentaje_objetivos == "") {
            $this->porcentaje_objetivos = 0;
        } elseif ($this->porcentaje_competencias == "") {
            $this->porcentaje_competencias = 0;
        }

        $this->sumatotal = floatval($this->porcentaje_objetivos) + floatval($this->porcentaje_competencias);

        $this->validate([
            'sumatotal' => 'required|numeric|min:100|max:100',
        ]);

        $this->creacion_evaluacion = EvaluacionOrganizacion::create([
            'nombre_evaluacion' => $this->nombre,
            'descripcion' => $this->descripcion,
            'objetivos' => $this->objetivos,
            'valor_objetivos' => $this->porcentaje_objetivos,
            'competencias' => $this->competencias,
            'valor_competencias' => $this->porcentaje_competencias,
            'estado' => 'Borrador',
        ]);

        if ($this->objetivos == true && $this->competencias == true) {
            $this->o_c = true;
            $this->paso = "periodos";
        } elseif ($this->objetivos == true) {
            $this->o = true;
            $this->paso = "periodos";
        } elseif ($this->competencias == true) {
            $this->c = true;
            $this->paso = "periodos";
        }

        // $this->paso = 2;
    }

    public function periodos()
    {
        // dd(
        //     $this->trimestral,
        //     $this->creacion_evaluacion->id,
        //     $this->nombre_periodo_1,
        //     $this->fecha_inicio_p1,
        //     $this->fecha_fin_p1,
        //     $this->nombre_periodo_2,
        //     $this->fecha_inicio_p2,
        //     $this->fecha_fin_p2,
        //     $this->nombre_periodo_3,
        //     $this->fecha_inicio_p3,
        //     $this->fecha_fin_p3,
        //     $this->nombre_periodo_4,
        //     $this->fecha_inicio_p4,
        //     $this->fecha_fin_p4,
        //     // $this->nombreperiodocompetencias_1,
        //     // $this->fecha_inicio_competencias_p1,
        //     // $this->fecha_fin_competencias_p1,
        //     // $this->nombreperiodocompetencias_2,
        //     // $this->fecha_inicio_competencias_p2,
        //     // $this->fecha_fin_competencias_p2,
        //     // $this->nombreperiodocompetencias_3,
        //     // $this->fecha_inicio_competencias_p3,
        //     // $this->fecha_fin_competencias_p3,
        //     // $this->nombreperiodocompetencias_4,
        //     // $this->fecha_inicio_competencias_p4,
        //     // $this->fecha_fin_competencias_p4,
        // );

        $this->validate([
            'tipo' => 'required',
            'nombre_periodo_1' => 'required',
            'fecha_inicio_p1' => 'required',
            'fecha_fin_p1' => 'required|after_or_equal:fecha_inicio_p1',
            'nombre_periodo_2' => 'required',
            'fecha_inicio_p2' => 'required|after_or_equal:fecha_fin_p1',
            'fecha_fin_p2' => 'required|after_or_equal:fecha_inicio_p2',
            'nombre_periodo_3' => 'required',
            'fecha_inicio_p3' => 'required|after_or_equal:fecha_fin_p2',
            'fecha_fin_p3' => 'required|after_or_equal:fecha_inicio_p3',
            'nombre_periodo_4' => 'required',
            'fecha_inicio_p4' => 'required|after_or_equal:fecha_fin_p3',
            'fecha_fin_p4' => 'required|after_or_equal:fecha_inicio_p4',
        ]);

        $this->create_periodos = PeriodosEvaluacionOrganizacion::create([
            'tipo' =>  $this->tipo,
            'objetivos_y_competencias',
            'evaluacion_organizacion_id' => $this->creacion_evaluacion->id,
            'periodo_1' => $this->nombre_periodo_1,
            'fecha_inicio_p1' => $this->fecha_inicio_p1,
            'fecha_fin_p1' => $this->fecha_fin_p1,
            'periodo_2' => $this->nombre_periodo_2,
            'fecha_inicio_p2' => $this->fecha_inicio_p2,
            'fecha_fin_p2' => $this->fecha_fin_p2,
            'periodo_3' => $this->nombre_periodo_3,
            'fecha_inicio_p3' => $this->fecha_inicio_p3,
            'fecha_fin_p3' => $this->fecha_fin_p3,
            'periodo_4' => $this->nombre_periodo_4,
            'fecha_inicio_p4' => $this->fecha_inicio_p4,
            'fecha_fin_p4' => $this->fecha_fin_p4,
            'periodo_competencias_1' => null,
            'fecha_inicio_competencias_p1' => null,
            'fecha_fin_competencias_p1' => null,
            'periodo_competencias_2' => null,
            'fecha_inicio_competencias_p2' => null,
            'fecha_fin_competencias_p2' => null,
            'periodo_competencias_3' => null,
            'fecha_inicio_competencias_p3' => null,
            'fecha_fin_competencias_p3' => null,
            'periodo_competencias_4' => null,
            'fecha_inicio_competencias_p4' => null,
            'fecha_fin_competencias_p4' => null,
        ]);

        $this->paso = "perspectivas";
    }

    public function perspectivas($form3)
    {
        // dd("perspectivas", $form3);

        foreach ($form3 as $key => $value) {
            $index = str_replace('inputs.', '', $key);
            $this->create_perspectivas = PerspectivasEvaluacionOrganizacion::create([
                'nombre' => $value,
                'evaluacion_organizacion_id' => $this->creacion_evaluacion->id,
            ]);
        }
        $this->publico = "total";
        $this->paso = "publico";
    }

    public function publico($form4)
    {
        // dd($this->publico, $form4, $this->selectedItems, $this->evaluados);

        switch ($this->publico) {
            case 'total':

                foreach ($this->evaluados as $evaluado) {
                    $lista_evaluados = EvaluadosEvaluacionOrganizacion::create([
                        'evaluacion_organizacion_id' => $this->creacion_evaluacion->id,
                        'evaluado_id' => $evaluado->id,
                        'area_id' => $evaluado->area_id,
                        'grupo_id' => null,
                    ]);
                }

                break;
            case 'area':
                $this->evaluados = Area::getAll();
                break;
            case 'manual':
                $this->evaluados = Empleado::getAltaEmpleados();
                break;
        }

        $this->paso = "reglas";
    }

    public function reglas($form5)
    {
        // dd($form5);
        // $this->evaluadores = Empleado::getAltaEmpleados();

        $create_reglas = ReglasEvaluacionOrganizacion::create([
            'evaluacion_organizacion_id' => $this->creacion_evaluacion->id,
            'rango_minimo' => $this->minValue,
            'rango_maximo' => $this->maxValue,
            'nombre_regla' => $this->nombre_regla_1,
            'valor_regla' => $this->regla_1,
        ]);

        $create_reglas = ReglasEvaluacionOrganizacion::create([
            'evaluacion_organizacion_id' => $this->creacion_evaluacion->id,
            'rango_minimo' => $this->minValue,
            'rango_maximo' => $this->maxValue,
            'nombre_regla' =>     $this->nombre_regla_2,
            'valor_regla' =>     $this->regla_2,
        ]);

        dd('Guardados');

        $this->paso = 6;
    }

    public function formpaso6($form6)
    {
        // dd($form5);
        dd($form6);
        $this->paso = 6;
    }
}
