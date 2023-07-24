<?php

namespace App\Http\Livewire\Timesheet;

use App\Models\TimesheetProyecto;
use App\Models\TimesheetProyectoEmpleado;
use App\Models\TimesheetProyectoArea;
use App\Models\TimesheetHoras;
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

    public $areasempleado;

    // public $empleado_editado;
    // public $horas_edit;
    // public $costo_edit;

    public function mount($proyecto_id)
    {
        $this->proyecto = TimesheetProyecto::find($proyecto_id);
        $this->areasempleado = TimesheetProyectoArea::where('proyecto_id', $proyecto_id)->get();
        $this->empleados = Empleado::getaltaAll();
    }

    public function render()
    {
        $emp_proy = TimesheetProyectoEmpleado::where('proyecto_id', $this->proyecto->id)->orderBy('id')->get();

        foreach ($emp_proy as $ep) {
            $times = TimesheetHoras::where('proyecto_id', '=', $ep->proyecto_id)
                ->where('empleado_id', '=', $ep->empleado_id)
                ->get();

            $tot_horas_proyecto = 0;

            $sumalun = $times->sum('horas_lunes');
            $sumamar = $times->sum('horas_martes');
            $sumamie = $times->sum('horas_miercoles');
            $sumajue = $times->sum('horas_jueves');
            $sumavie = $times->sum('horas_viernes');
            $sumasab = $times->sum('horas_sabado');
            $sumadom = $times->sum('horas_domingo');

            $tot_horas_proyecto = $sumalun + $sumamar + $sumamie + $sumajue + $sumavie + $sumasab + $sumadom;

            $resta = $tot_horas_proyecto - $ep->horas_asignadas;

            if ($resta > 0) {
                $sobre = $resta;
            } else {
                $sobre = 'No se han excedido';
            }

            $ep->totales = $tot_horas_proyecto;
            $ep->sobrepasadas = $sobre;
        }
        $this->proyecto_empleados = $emp_proy;
        // dd($this->proyecto_empleados);
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

        if ($this->proyecto->tipo === "Externo") {
            $time_proyect_empleado = TimesheetProyectoEmpleado::create([
                'proyecto_id' => $this->proyecto->id,
                'empleado_id' => $empleado_add_proyecto->id,
                'area_id' => $empleado_add_proyecto->area_id,
                'horas_asignadas' => $this->horas_asignadas,
                'costo_hora' => $this->costo_hora,
            ]);
            $this->resetInput();
        } else {
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
            if (empty($datos['horas_edit']) || empty($datos['costo_edit']) || empty($datos['empleado_editado'])) {
                // dd('Llega nulo');
                // $this->dispatchBrowserEvent('closeModal');
                $this->alert('error', 'No debe contener datos vacios', [
                    'position' => 'top-end',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
                ]);

                return null;
            } else {
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
        } else { //Internos
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

    // public function bloquearEmpleado($id)
    // {
    //     $emp_bloq = TimesheetProyectoEmpleado::find($id);
    //     if($emp_bloq->usuario_bloqueado == false){
    //         // dd($emp_bloq->usuario_bloqueado);
    //         $emp_bloq->update([
    //             'usuario_bloqueado' => true,
    //         ]);
    //         $this->alert('success', 'El Usuario ha sido Bloqueado', [
    //             'position' => 'top-end',
    //             'timer' => 3000,
    //             'toast' => true,
    //             'timerProgressBar' => true,
    //            ]);
    //            dd($emp_bloq->usuario_bloqueado);
    //     }elseif($emp_bloq->usuario_bloqueado == true){
    //         $emp_bloq->update([
    //             'usuario_bloqueado' => false,
    //         ]);
    //         $this->alert('success', 'El Usuario ha sido Desloqueado', [
    //             'position' => 'top-end',
    //             'timer' => 3000,
    //             'toast' => true,
    //             'timerProgressBar' => true,
    //            ]);
    //     }
    //     // dd($emp_bloq->usuario_bloqueado);
    // }

    public function empleadoProyectoRemove($id)
    {
        $empleado_remov = TimesheetProyectoEmpleado::find($id);

        $empleado_remov->delete();
    }
}
