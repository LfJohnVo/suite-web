<?php

namespace App\Http\Livewire\Timesheet;

use App\Models\Empleado;
use App\Models\Timesheet;
use App\Models\TimesheetHoras;
use App\Models\TimesheetProyecto;
use Livewire\Component;

class TimesheetHorasFilas extends Component
{
    public $proyectos;
    public $tareas;
    public $horas;
    public $origen;
    public $timesheet;
    public $timesheet_id;
    public $contador = 5;

    protected $listeners = ['removerFila'];

    public function hydrate()
    {
        $this->emit('select2');
    }

    public function mount($origen, $timesheet_id)
    {
        $empleado = Empleado::find(auth()->user()->empleado->id);

        // areas proyectos
        $proyectos_array = collect();
        $proyectos_totales = TimesheetProyecto::get();
        foreach ($proyectos_totales as $key => $proyecto) {
            if ($proyecto->estatus == 'proceso') {
                foreach ($proyecto->areas as $key => $area) {
                    if (($area['id'] == $empleado->area_id)) {
                        $proyectos_array->push([
                            'id'=>$proyecto->id,
                            'identificador'=>$proyecto->identificador,
                            'proyecto'=>$proyecto->proyecto,
                        ]);
                    }
                }
            }
        }
        $this->proyectos = $proyectos_array->unique();

        $this->tareas = collect();
        $this->origen = $origen;
        $this->timesheet_id = $timesheet_id;
    }

    public function removerFila()
    {
        // $this->contador = $this->contador - 1;
        $this->emit('calcularSumatoriasFacturables');
    }

    public function updatedContador($value)
    {
        $this->emit('calcularSumatoriasFacturables');
    }

    public function render()
    {
        if ($this->origen == 'edit') {
            $this->contador = 2;
            $this->horas = TimesheetHoras::where('timesheet_id', $this->timesheet_id)->get();
            $this->timesheet = Timesheet::find($this->timesheet_id);
        }

        return view('livewire.timesheet.timesheet-horas-filas');
    }
}
