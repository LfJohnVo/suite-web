<?php

namespace App\Livewire\Timesheet;

use App\Models\TimesheetProyecto;
use App\Models\TimesheetTarea;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class TablaTareasTimesheet extends Component
{
    use LivewireAlert;

    public $tareas;

    public $proyectos;

    public $proyecto_seleccionado;

    public $tarea_name;

    public $area_select;

    public $proyecto_id;

    public $origen;

    public $tareas_proyecto;

    public $area_seleccionar;

    public $proyecto_filtro;

    public $tarea_name_actualizada;

    public function hydrate()
    {
        $this->dispatch('select2');
        $this->dispatch('scriptTabla');
    }

    public function mount($proyecto_id, $origen)
    {
        $this->origen = $origen;
        $this->proyecto_id = $proyecto_id;
        $this->area_seleccionar = null;
    }

    public function updateProyecto($value)
    {
        $this->proyecto_filtro = $value;

        $this->dispatch('updateProyecto');
    }

    public function render()
    {
        if ($this->origen == 'tareas') {
            $this->proyectos = TimesheetProyecto::getIdNameAll();

            if ($this->proyecto_filtro) {
                $this->tareas = TimesheetTarea::getAll()->where('proyecto_id', $this->proyecto_filtro);
            } else {
                $this->tareas = TimesheetTarea::getAll();
            }
        }

        if ($this->origen == 'tareas-proyectos') {
            $this->proyecto_seleccionado = TimesheetProyecto::getIdNameAll()->find($this->proyecto_id);
            $this->tareas = TimesheetTarea::getAll()->where('proyecto_id', $this->proyecto_id);
            $this->area_seleccionar = $this->proyecto_seleccionado->areas;
        }

        return view('livewire.timesheet.tabla-tareas-timesheet');
    }

    public function create()
    {
        if ($this->area_select == 0) {
            $area_id = null;
            $todos = true;
        } else {
            $area_id = $this->area_select;
            $todos = false;
        }
        if ($this->origen == 'tareas') {
            $proyecto_procesado = $this->proyecto_id;
        } else {
            $proyecto_procesado = $this->proyecto_seleccionado->id;
        }

        $nueva_tarea = TimesheetTarea::create([
            'tarea' => $this->tarea_name,
            'proyecto_id' => $proyecto_procesado,
            'area_id' => $area_id,
            'todos' => $todos,
        ]);

        $this->dispatch('tarea-actualizada', nueva_tarea: $nueva_tarea);

        $this->alert('success', 'Registro añadido!');
    }

    public function actualizarNameTarea($id, $value)
    {
        $tarea_actualizada = TimesheetTarea::getAll()->find($id);

        $tarea_actualizada->update([
            'tarea' => $value,
        ]);

        $this->dispatch('tarea-actualizada', tarea_actualizada: $tarea_actualizada);
    }

    public function actualizarAreaTarea($id, $value)
    {
        $tarea_actualizada = TimesheetTarea::getAll()->find($id);

        if ($value == 0) {
            $area_id = null;
            $todos = true;
        } else {
            $area_id = $value;
            $todos = false;
        }

        $tarea_actualizada->update([
            'area_id' => $area_id,
            'todos' => $todos,
        ]);

        $this->dispatch('tarea-actualizada', tarea_Actualizada: $tarea_actualizada);
    }

    public function llenarAreas($id)
    {
        if ($id) {
            $this->proyecto_seleccionado = TimesheetProyecto::getIdNameAll()->find($id);
            $this->area_seleccionar = $this->proyecto_seleccionado->areas;
        } else {
            $this->area_seleccionar = [];
        }
    }

    public function destroy($id)
    {
        TimesheetTarea::destroy($id);

        $this->alert('success', 'Registro eliminado!');
    }
}
