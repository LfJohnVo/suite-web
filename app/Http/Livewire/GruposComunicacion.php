<?php

namespace App\Http\Livewire;

use App\Models\RH\GruposEvaluado;
use App\Models\Area;
use App\Models\Empleado;
use App\Models\RH\Competencia;
use App\Models\RH\Evaluacion;
use App\Models\RH\TipoCompetencia;
use Livewire\Component;

class GruposComunicacion extends Component
{
    protected $listeners = ['grupoEvaluadosSaved' => 'render'];
    public $evaluados_objetivo;
    public $by_manual;
    public $by_area;
    public $habilitarSelectManual = false;
    public $habilitarSelectAreas = false;

    public function render()
    {
        $grupos_evaluados = GruposEvaluado::all();
        $areas = Area::all();
        $empleados = Empleado::all();
        return view('livewire.grupos-comunicacion',["grupos_evaluados"=>$grupos_evaluados,"areas"=>$areas,"empleados"=>$empleados ]);
    }
    public function habilitarSelectAlternativo()
    {
        if ($this->evaluados_objetivo == 'manual') {
            $this->habilitarSelectManual = true;
            $this->habilitarSelectAreas = false;
        } elseif ($this->evaluados_objetivo == 'area') {
            $this->habilitarSelectAreas = true;
            $this->habilitarSelectManual = false;
        } else {
            $this->habilitarSelectManual = false;
            $this->habilitarSelectAreas = false;
        }
    }
    // public function render()
    // {
    //     $evaluacion = new Evaluacion();
    //     $areas = Area::all();
    //     $empleados = Empleado::all();
    //     $grupos_evaluados = GruposEvaluado::all();

    //     $competencias = Competencia::search($this->search)->simplePaginate($this->perPage);
    //     $tipos = TipoCompetencia::select('id', 'nombre')->get();

    //     return view('livewire.multi-step-form', ['evaluacion' => $evaluacion, 'areas' => $areas, 'empleados' => $empleados, 'grupos_evaluados' => $grupos_evaluados, 'competencias' => $competencias, 'tipos' => $tipos]);
    // }
}
