<div class="w-100">
    <form wire:submit.prevent="create()" class="form-group w-100">
        
        <div class="d-flex justify-content-center w-100">
            <div class="form-group w-100 mr-4">
                <label>Proyecto Nuevo</label>
                <input name="proyecto" wire:model="proyecto_name" class="form-control" required>
            </div>
            <div class="form-group w-100 mr-4">
                <label>Área</label>
                <select name="area_id" wire:model="area_id" class="form-control" required>
                    <option selected disabled>Seleccione área</option>
                    @foreach($areas as $area)
                        <option value="{{ $area->id }}">{{ $area->area }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="position:relative; min-width:150px;">
                <button class="btn btn-success" style="position: absolute; bottom: 0;"><i class="fas fa-plus"></i> Agregar</button>
            </div>
        </div>
    </form>
    
    <div class="datatable-fix w-100 mt-5">
        <table id="" class="table w-100">
            <thead class="w-100">
                <tr>
                    <th>Proyecto </th>
                    <th>Área a la que pertenece</th>
                    {{-- <th style="max-width:200px;">Opciones</th> --}}
                </tr>
            </thead>

            <tbody>
                @foreach($proyectos as $proyecto)
                    <tr>
                        <td>{{ $proyecto->proyecto }} </td>
                        <td>{{ $proyecto->area_id ? $proyecto->area->area : '' }} </td>
                        {{-- <td><i class="fas fa-trash-alt" wire:click="destroy({{ $proyecto->id }})"></i></td>                     --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
