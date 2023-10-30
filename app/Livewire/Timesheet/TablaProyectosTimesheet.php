<?php

namespace App\Livewire\Timesheet;

use App\Models\Area;
use App\Models\Sede;
use App\Models\TimesheetCliente;
use App\Models\TimesheetProyecto;
use App\Models\TimesheetProyectoArea;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class TablaProyectosTimesheet extends Component
{
    use LivewireAlert;

    public $proyectos;

    public $identificador;

    public $proyecto_name;

    public $areas_seleccionadas;

    public $cliente_id;

    public $fecha_inicio;

    public $fecha_fin;

    public $sede_id;

    public $tipo;

    public $proceso_count;

    public $cancelado_count;

    public $terminado_count;

    public $tipos;

    public $sedes;

    public $areas;

    public $timesheetproyectoquery;

    public function mount()
    {
        $this->tipos = TimesheetProyecto::TIPOS;
        $this->tipo = $this->tipos['Interno'];
        $this->proyectos = TimesheetProyecto::getAllOrderByIdentificador()->where('estatus', 'proceso');
        $this->timesheetproyectoquery = TimesheetProyecto::getAll();
    }

    public function render()
    {
        $this->proceso_count = $this->timesheetproyectoquery->where('estatus', 'proceso')->count();
        $this->cancelado_count = $this->timesheetproyectoquery->where('estatus', 'cancelado')->count();
        $this->terminado_count = $this->timesheetproyectoquery->where('estatus', 'terminado')->count();

        $this->dispatch('cerrarModal');

        $this->sedes = Sede::getAll();

        $this->areas = Area::getAll();

        $this->clientes = TimesheetCliente::getAllOrderBy('nombre');

        $this->dispatch('scriptTabla');

        return view('livewire.timesheet.tabla-proyectos-timesheet');
    }

    public function store()
    {
        $this->validate(
            [
                'identificador' => 'required|unique:timesheet_proyectos,identificador',
                'proyecto_name' => 'required',
            ],
            [
                'identificador.unique' => 'El ID ya esta en uso',
            ],
        );
        if ($this->fecha_inicio && $this->fecha_fin) {
            $this->validate(
                [
                    'fecha_inicio' => 'before:fecha_fin',
                    'fecha_fin' => 'after:fecha_inicio',
                ],
                [
                    'fecha_inicio.before' => 'La fecha de incio debe ser anterior a la fecha de fin',
                    'fecha_fin.after' => 'La fecha de fin debe ser posterior a la fecha de incio',
                ],
            );
        }
        $nuevo_proyecto = TimesheetProyecto::create([
            'identificador' => $this->identificador,
            'proyecto' => $this->proyecto_name,
            'cliente_id' => $this->cliente_id,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
            'sede_id' => $this->sede_id,
            'tipo' => $this->tipo,
        ]);

        foreach ($this->areas_seleccionadas as $key => $area_id) {
            TimesheetProyectoArea::create([
                'proyecto_id' => $nuevo_proyecto->id,
                'area_id' => $area_id,
            ]);
        }

        $this->procesos();

        $this->alert('success', 'Registro añadido!');
    }

    public function procesos()
    {
        $this->proyectos = TimesheetProyecto::getAllOrderByIdentificador()->where('estatus', 'proceso');
    }

    public function cancelados()
    {
        $this->proyectos = TimesheetProyecto::getAllOrderByIdentificador()->where('estatus', 'cancelado');
    }

    public function terminados()
    {
        $this->proyectos = TimesheetProyecto::getAllOrderByIdentificador()->where('estatus', 'terminado');
    }

    public function todos()
    {
        $this->proyectos = TimesheetProyecto::getAllOrderByIdentificador();
    }

    public function destroy($id)
    {
        TimesheetProyecto::destroy($id);

        $this->alert('success', 'Registro eliminado!');
    }

    public function terminarProyecto($id)
    {
        $proyecto = TimesheetProyecto::find($id);
        $proyecto->update([
            'estatus' => 'terminado',
        ]);

        $this->alert('success', 'Estatus actualizado!');
    }

    public function cancelarProyecto($id)
    {
        $proyecto = TimesheetProyecto::find($id);
        $proyecto->update([
            'estatus' => 'cancelado',
        ]);

        $this->alert('success', 'Estatus actualizado!');
    }

    public function procesoProyecto($id)
    {
        $proyecto = TimesheetProyecto::find($id);
        $proyecto->update([
            'estatus' => 'proceso',
        ]);

        $this->alert('success', 'Estatus actualizado!');
    }
}
