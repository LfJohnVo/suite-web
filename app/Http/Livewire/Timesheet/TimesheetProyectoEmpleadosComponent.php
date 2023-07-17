<?php

namespace App\Http\Livewire\Timesheet;

use App\Models\TimesheetProyecto;
use App\Models\TimesheetProyectoEmpleado;
use App\Models\TimesheetProyectoArea;
use App\Models\Empleado;
use Livewire\Component;
use PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\F;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TimesheetProyectoEmpleadosComponent extends Component
{
    use LivewireAlert;

    public $proyecto;
    public $empleados;
    public $proyecto_empleados;
    public $proyecto_id;

    public $empleado_añadido;
    public $horas_asignadas;
    public $costo_hora;

    // public $empleado_editado;
    // public $horas_edit;
    // public $costo_edit;

    public function mount($proyecto_id)
    {
        $this->proyecto = TimesheetProyecto::find($proyecto_id);
        $this->areasempleado = TimesheetProyectoArea::where('proyecto_id', $proyecto_id)->get();
        $this->empleados = Empleado::where('estatus', '=', 'alta')->get();
    }

    public function render()
    {
        $this->proyecto_empleados = TimesheetProyectoEmpleado::where('proyecto_id', $this->proyecto->id)->orderBy('id')->get();
        $this->emit('scriptTabla');
        return view('livewire.timesheet.timesheet-proyecto-empleados-component');
    }

    private function resetInput()
    {
        // $this->empleado_añadido = null;
        $this->horas_asignadas = null;
        $this->costo_hora = null;
    }

    public function addEmpleado()
    {
        $empleado_add_proyecto = Empleado::find($this->empleado_añadido);
        if ($this->proyecto->tipo === "Externo") {
            $this->validate([
                'horas_asignadas' => ['required'],
                'costo_hora' => ['required'],
            ]);
        }

        if($this->proyecto->tipo === "Externo"){
            $time_proyect_empleado = TimesheetProyectoEmpleado::create([
                'proyecto_id' => $this->proyecto->id,
                'empleado_id' => $empleado_add_proyecto->id,
                'area_id' => $empleado_add_proyecto->area_id,
                'horas_asignadas' => $this->horas_asignadas,
                'costo_hora' => $this->costo_hora,
            ]);
            $this->resetInput();
        }else{
            $time_proyect_empleado = TimesheetProyectoEmpleado::create([
                'proyecto_id' => $this->proyecto->id,
                'empleado_id' => $empleado_add_proyecto->id,
                'area_id' => $empleado_add_proyecto->area_id,
                'horas_asignadas' => 0,
                'costo_hora' => 0,
            ]);
        }

        $this->alert('success', 'Empleado agregado exitosamente', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
           ]);
    }

    public function editEmpleado($id, $datos)
    {
        if ($this->proyecto->tipo === "Externo") {
            if(empty($datos['horas_edit']) || empty($datos['costo_edit']) || empty($datos['empleado_editado'])){
                // dd('Llega nulo');
                // $this->dispatchBrowserEvent('closeModal');
                $this->alert('error', 'No debe contener datos vacios', [
                    'position' => 'top-end',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
                   ]);

                   return null;
            }else{
                $emp_upd_proyecto = Empleado::find($datos['empleado_editado']);
                // dd($emp_upd_proyecto);
                $empleado_edit_proyecto = TimesheetProyectoEmpleado::find($id);
                $empleado_edit_proyecto->update([
                    'empleado_id' => $datos['empleado_editado'],
                    'area_id' => $emp_upd_proyecto->area_id,
                    'horas_asignadas' => $datos['horas_edit'],
                    'costo_hora' => $datos['costo_edit'],
                ]);
            }
        }else{ //Internos
            $emp_upd_proyecto = Empleado::find($datos['empleado_editado']);
            // dd($emp_upd_proyecto);
            $empleado_edit_proyecto = TimesheetProyectoEmpleado::find($id);
            $empleado_edit_proyecto->update([
                'empleado_id' => $datos['empleado_editado'],
                'area_id' => $emp_upd_proyecto->area_id,
                'horas_asignadas' => 0,
                'costo_hora' => 0,
            ]);
        }

        $this->dispatchBrowserEvent('closeModal');
        // $this->resetInput();
        $this->alert('success', 'Editado exitosamente', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
           ]);

    }

    public function empleadoProyectoRemove($id)
    {
        $empleado_remov = TimesheetProyectoEmpleado::find($id);

        $empleado_remov->delete();
    }
}
