<div class="col-12">
    <div class="mt-4 mb-3 w-100" style="border-bottom: solid 2px #345183;">
        <span style="font-size: 17px; font-weight: bold;">
            Amenazas</span>
    </div>

    <div class="mt-2">
        <label for="contacto"><i class="fas fa-bomb iconos-crear"></i>Nombre</label>
        <input class="form-control {{ $errors->has('contacto') ? 'is-invalid' : '' }}" wire:model.defer="amenaza">
        <small class="text-danger errores descripcion_contacto_error"></small>
    </div>

    <div class="mt-2">
        <label for="contacto"><i class="fas fa-clipboard-list iconos-crear"></i>Riesgo Asociado</label>
        <textarea class="form-control {{ $errors->has('contacto') ? 'is-invalid' : '' }}" wire:model.defer="riesgo">{{ old('riesgo') }}</textarea>
        <small class="text-danger errores descripcion_contacto_error"></small>
    </div>


    <div class="mb-3 col-12 mt-4 " style="text-align: end">
        <button type="button" wire:click.prevent="{{$view =='create' ? 'save':'update'}}"
        class="btn btn-success">Agregar</button>
    </div>


    <div class="mt-3 mb-4 col-12 w-100 datatable-fix p-0">
        <table class="table w-100" id="contactos_table" style="width:100%">
            <thead>
                <tr>
                    <th>Amenaza</th>
                    <th>Riesgo Asociado</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody >
                @foreach ($amenazas as $amenaza)
                <tr>
                    <td>
                        {{$amenaza->amenaza}}
                    </td>
                    <td>
                        {{$amenaza->riesgo}}
                    </td>
                    <td>
                        <i wire:click="destroy({{ $amenaza->id }})" class="fas fa-trash-alt text-danger"></i>
                        <i class="fas fa-edit text-primary ml-4" wire:click="edit({{ $amenaza->id }})"></i>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
