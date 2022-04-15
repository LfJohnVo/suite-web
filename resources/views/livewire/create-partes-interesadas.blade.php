<div class="form-group col-md-12">
    {{-- <button type="button" class="btn-xs btn-outline-success rounded ml-2 pr-3 offset-4"><i class="pl-2 pr-3 fas fa-plus"></i> Agregar</button> --}}
    <button type="button" class="btn btn-primary offset-11" style="text-align:center;" data-toggle="modal"
        data-target="#exampleModal">
        Agregar
    </button>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $view == 'create' ? 'Agregar' : 'Actualizar' }}
                        nuevo requisito</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Necesidad</label>
                            <input type="text" class="form-control" id="necesidades" name="nececidades"
                                aria-describedby="emailHelp" wire:model.defer="necesidades">
                                @error('necesidades') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="required">Expectativa</label>
                            <input type="text" class="form-control" id="expectativas" name="expectativas"
                                wire:model.defer="expectativas">
                                @error('expectativas') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary"
                        wire:click.prevent="{{ $view == 'create' ? 'save' : 'update' }}">{{ $view == 'create' ? 'Guardar' : 'Actualizar' }}</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Agregar Norma -->
    <div class="modal fade" id="NormasModal" tabindex="-1" aria-labelledby="NormasModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="NormasModalLabel">
                        {{ $view == 'create' ? 'Agregar' : 'Actualizar' }}Norma(s)</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                      <select multiple wire:model.defer="normasModel" class="form-control">
                        @foreach ($normas as $norma)
                            <option value="{{$norma->id}}" {{in_array($norma->id,$normasModel)? "selected":''}}>{{$norma->norma}}</option>
                        @endforeach
                      </select>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary"
                        wire:click.prevent="saveNorma">{{ $view == 'create' ? 'Guardar' : 'Actualizar' }}</button>
                </div>
            </div>
        </div>
    </div>
</div>
