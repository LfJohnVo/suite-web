<div class="w-100">
    <h5 class="d-flex justify-content-between">Asignar Empleado a Proyecto</h5>
    <div class="row">
        <div class="form-group col-12 text-right">
        <a href="{{ route('admin.timesheet-proyectos-edit', $proyecto->id) }}" class="btn btn_cancelar">Editar Proyecto</a>
        @if($proyecto->tipo === "Externo")
            <a href="{{ route('admin.timesheet-proyecto-externos', $proyecto->id) }}" class="btn btn-success">Asignar Proveedores/Consultores</a>
        @endif
        <a href="{{ route('admin.timesheet-proyectos') }}" class="btn btn-info">Pagina Principal de Proyectos</a>
        </div>
    </div>
    <form wire:submit.prevent="addEmpleado">
        <div class="row mt-4">
            <div class="form-group col-md-7">
                <label for="">Empleado<sup>*</sup></label>
                <select wire:model="empleado_añadido" name="" id="" class="select2" required>
                    <option value="" selected disabled></option>
                    @foreach ($empleados as $empleado)
                        <option value="{{ $empleado->id }}">{{ $empleado->name }}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="form-group col-md-5">
                <label for="">Área</label>
                <div class="form-control">Área de emp</div>
            </div> --}}
        </div>
        <div class="row">
            @if($proyecto->tipo === "Externo")
            <div class="form-group col-md-4">
                <label for="">Horas asignadas</label>
                <input wire:model="horas_asignadas" name="" id="" type="number" min="1" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="">Costo por hora</label>
                <input wire:model="costo_hora" name="" id="" type="number" min="1" class="form-control">
            </div>
            @endif
            <div class="form-group col-md-4" style="display: flex; align-items: flex-end;">
                <button class="btn btn-success">Agregar</button>
            </div>
        </div>
    </form>
    <div class="datatable-fix w-100 mt-5">
        <table id="tabla_time_poyect_empleados" class="table w-100 tabla-animada">
            <thead class="w-100">
                <tr>
                    <th>Nombre </th>
                    <th>Área </th>
                    <th>Puesto </th>
                    <th>Horas asignadas </th>
                    <th>Costo por hora </th>
                    <th>Costo total estimado</th>
                    <th style="max-width:150px !important; width:150px ;">Opciones</th>
                </tr>
            </thead>

            <tbody style="position:relative;">
                @foreach ($proyecto_empleados as $proyect_empleado)
                    <tr>
                        <td>{{ $proyect_empleado->empleado->name }} </td>
                        <td>{{ $proyect_empleado->empleado->area->area }} </td>
                        <td>{{ $proyect_empleado->empleado->puesto }} </td>
                        <td>{{ $proyect_empleado->horas_asignadas ?? '0'}} </td>
                        <td>{{ $proyect_empleado->costo_hora ?? '0'}} </td>
                        <td>{{($proyect_empleado->horas_asignadas * $proyect_empleado->costo_hora) ?? ''}}</td>
                        <td>
                            <button class="btn" data-toggle="modal"
                                data-target="#modal_proyecto_empleado_eliminar_{{ $proyect_empleado->id }}">
                                <i class="fas fa-trash-alt" style="color: red; font-size: 15pt;"
                                    title="Eliminar"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @foreach($proyecto_empleados as $proyect_empleado)
        <div class="modal fade" id="modal_proyecto_empleado_eliminar_{{ $proyect_empleado->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button class="btn btn-tache-cerrar" data-dismiss="modal"><i
                                class="fa-solid fa-xmark"></i></button>
                        <div class="delete">
                            <div class="text-center">
                                <i class="fa-solid fa-trash-can" style="color: #E34F4F; font-size:60pt;"></i>
                                <h1 class="my-4" style="font-size:14pt;">Remover empleado de Proyecto:
                                    <small>{{ $proyect_empleado->proyecto->proyecto }}</small></h1>
                                <p class="parrafo">¿Desea remover a {{ $proyect_empleado->empleado->name }} del proyecto {{ $proyect_empleado->proyecto->proyecto }}?</p>
                            </div>

                            <div class="mt-4 d-flex justify-content-between">
                                <button class="btn btn_cancelar" data-dismiss="modal">
                                    Cancelar
                                </button>
                                <button class="btn btn-info" style="border:none; background-color:#E34F4F;"
                                    wire:click="empleadoProyectoRemove({{ $proyect_empleado->id }})" data-dismiss="modal">
                                    Eliminar Proyecto
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @section('scripts')
    @parent
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', () => {

                Livewire.on('scriptTabla', () => {
                    tablaLivewire('tabla_time_poyect_empleados');

                    $('.select2').select2().on('change', function (e) {
                        var data = $(this).select2("val");
                        @this.set('empleado_añadido', data);
                    });
                });

                $('.select2').select2().on('change', function (e) {
                    var data = $(this).select2("val");
                    @this.set('empleado_añadido', data);
                });
            });
        </script>
    @endsection
</div>
