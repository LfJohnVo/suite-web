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
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class EvaluacionesStepsOrganizacion extends Component
{
    public $paso = 1;

    public function mount()
    {
        $this->paso = 1;
    }

    public function render()
    {
        return view('livewire.evaluaciones-steps-organizacion');
    }

    public function retroceso()
    {
        $this->paso = 1;
    }

    public function formpaso1($form1)
    {
        dd('Si llega', $form1);
        $this->paso = 2;
    }
}
