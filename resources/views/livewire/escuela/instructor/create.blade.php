<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="createDataModalLabel">Agregar preguntas a la evaluación</h4>
            </div>
            <div class="modal-body">
                <div>
                    <label>Pregunta<span style="color:red">*</span></label>
                    <input class="form-control" type="text" value="" id="title"
                        wire:model.defer="question">
                    @error('question')
                        <p class="text-xs text-red-700">El campo pregunta es obligatorio.</p>
                    @enderror
                </div>
                <div>
                    <label>Descripción<span style="color:red">*</span></label>
                    <input class="form-control" type="text" value="" id="title"
                        wire:model.defer="explanation">
                    @error('question')
                        <p class="text-xs text-red-700">El campo pregunta es obligatorio.</p>
                    @enderror
                </div>
                <div class="mt-4">
                    @foreach ($answers as $key => $answer)
                        <div class="grid grid-cols-2 gap-4 m-2 row justify-content-start ">
                            <div class="col-2 pt-2">
                                <input wire:model.defer="answers.{{ $key }}.is_correct" type="hidden"
                                    value="0" name="answers[1][is_checked]">
                                <input wire:model.defer="answers.{{ $key }}.is_correct" type="checkbox"
                                    value="1" name="answers[1][is_checked]">
                                @error('answers.' . $key . '.is_correct')
                                    <small class="text-xs text-red-700">El campo correcta es obligatorio</small>
                                @enderror
                            </div>
                            <div class="col-9 pl-0">
                                <input wire:model.defer="answers.{{ $key }}.answer" name="answers[1][answer]"
                                    value="{{ old('answers.1.answer') }}" type="text" class="form-control bg-gray-200"
                                    style="border: none" />
                                @error('answers.' . $key . '.answer')
                                    <small class="text-xs text-red-700">El campo respuesta es obligatorio</small>
                                @enderror
                            </div>
                            <div class="col-1 pt-2">
                                @if ($key > 1)
                                    <i wire:click="removeInput({{ $key }})"
                                        class="text-sm text-red-500 fas fa-trash-alt"></i>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    @error('answers')
                        <p><small class="ml-5 text-xs text-red-700 ">{{ $message }}</small></p>
                    @enderror
                </div>
                <div class="btn btn-light text-primary" wire:click.prevent="addInput" style="cursor: pointer">
                    Agregar Opción <i class="fas fa-plus"></i>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal"
                    wire:click.prevent="cancel()">Cerrar</button>
                <button wire:click.prevent="save()" class="btn btn-primary close-modal" style="background-color: #345183">
                    Guardar
                </button>
            </div>
        </div>
    </div>
</div>