<div class="card card-body">
    @if ($paso == 'crear-evaluacion')
        <form wire:submit.prevent="crearevaluacion(Object.fromEntries(new FormData($event.target)))">
            <div class="row
            g-2">
                <div class="col-md">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="objetivos" name="objetivos" checked>
                                <label class="form-check-label" for="objetivos">
                                    Objetivos
                                </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input class="form-input" type="number" min="0" max="100" value="50"
                                    id="porcentaje_objetivos" name="porcentaje_objetivos">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="competencias" name="competencias"
                                    checked>
                                <label class="form-check-label" for="competencias">
                                    Competencias
                                </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input class="form-input" type="number" min="0" max="100" value="50"
                                    id="porcentaje_competencias" name="porcentaje_competencias">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-1">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nombre" name="nombre" maxlength="220"
                        placeholder="Nombre de la Evaluación">
                    <label for="nombre">Nombre<sup>*</sup></label>
                </div>
            </div>

            <div class="row g-1">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Descripción de la Evaluación" id="descripcion" name="descripcion"
                        style="height: 300px"></textarea>
                    <label for="descripcion">Descripción</label>
                </div>
            </div>

            <div class="form-group col-12 text-right mt-4" style="margin-left: 10px; margin-right: 10px;">
                <div class="col s12 right-align btn-grd distancia">
                    <button class="btn btn_cancelar">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    @endif

    @if ($paso == 2)
        <form wire:submit.prevent="formpaso2(Object.fromEntries(new FormData($event.target)))">
            <div class="row g-5">
                <div class="col-md">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                            disabled>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Mensual
                        </label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            disabled>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Bimestral
                        </label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Trimestral
                        </label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4"
                            disabled>
                        <label class="form-check-label" for="flexRadioDefault4">
                            Semestral
                        </label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault5" disabled>
                        <label class="form-check-label" for="flexRadioDefault5">
                            Anual
                        </label>
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombreperiodo1" placeholder="Q1">
                        <label for="nombreperiodo1">Nombre</label>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="periodo1_inicio">
                                <label for="periodo1_inicio">Inicio Periodo</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="periodo1_fin">
                                <label for="periodo1_fin">Fin Periodo</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombreperiodo2" placeholder="Q2">
                        <label for="nombreperiodo2">Nombre</label>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="periodo2_inicio">
                                <label for="periodo2_inicio">Inicio Periodo</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="periodo2_fin">
                                <label for="periodo2_fin">Fin Periodo</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombreperiodo3" placeholder="Q3">
                        <label for="nombreperiodo3">Nombre</label>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="periodo3_inicio">
                                <label for="periodo3_inicio">Inicio Periodo</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="periodo3_fin">
                                <label for="periodo3_fin">Fin Periodo</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombreperiodo4" placeholder="Q4">
                        <label for="nombreperiodo4">Nombre</label>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="periodo4_inicio">
                                <label for="periodo4_inicio">Inicio Periodo</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="periodo4_fin">
                                <label for="periodo4_fin">Fin Periodo</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group col-12 text-right mt-4" style="margin-left: 10px; margin-right: 10px;">
                <div class="col s12 right-align btn-grd distancia">
                    <button class="btn btn_cancelar" wire:click.prevent="retroceso">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    @endif

    @if ($paso == 3)
        <form wire:submit.prevent="formpaso3(Object.fromEntries(new FormData($event.target)))">
            <div class="row g-2">
                @foreach ($inputs as $key => $input)
                    <div class="row">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="inputs.{{ $key }}"
                                    name="inputs.{{ $key }}" placeholder="Clasificación"
                                    wire:model.lazy="inputs.{{ $key }}">
                                <label for="inputs.{{ $key }}">Clasificación</label>
                            </div>
                        </div>
                        <div class="col-md d-flex align-items-center">
                            <a role="button" wire:click="removeInput({{ $key }})"><i
                                    class="bi bi-trash"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row g-1">
                <div class="col-md-3">
                    <a role="button" class="btn btn-link" wire:click="addInput">+ Agregar Clasificación</a>
                </div>
            </div>
            <div class="form-group col-12 text-right mt-4" style="margin-left: 10px; margin-right: 10px;">
                <div class="col s12 right-align btn-grd distancia">
                    <button class="btn btn_cancelar" wire:click.prevent="retroceso">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    @endif
    @if ($paso == 4)
        <h3>Público</h3>
        <form wire:submit.prevent="formpaso4(Object.fromEntries(new FormData($event.target)))">
            <!-- your_component_view.blade.php -->
            <div class="row">
                <div class="form-floating">
                    <select class="form-select" name="publico" id="publico" wire:model.lazy="publico"
                        aria-label="Floating label select example">
                        <option value="total">Toda la empresa</option>
                        <option value="area">Por área</option>
                        <option value="manual">Manualmente</option>
                    </select>
                    <label for="publico">Publico Objetivo</label>
                </div>
            </div>

            <div class="row">
                <div class="form-floating">
                    @if ($this->evaluados != null)
                        <select class="form-select form-control" name="evaluados" id="evaluados">
                            @foreach ($this->evaluados as $index => $evaluado)
                                <option> {{ $evaluado->name ?? $evaluado->area }}
                                </option>
                                <input type="checkbox" wire:model.lazy="selectedItems.{{ $index }}"
                                    value="{{ $evaluado->id }}">
                            @endforeach
                        </select>
                        <label for="evaluados">Seleccione</label>
                    @elseif ($this->evaluados == null or $this->publico == 'total')
                        <select name="" id="" class="form-select" disabled></select>
                        <label for="evaluados">Seleccione</label>
                    @endif
                </div>
            </div>

            <div class="form-group col-12 text-right mt-4" style="margin-left: 10px; margin-right: 10px;">
                <div class="col s12 right-align btn-grd distancia">
                    <button class="btn btn_cancelar" wire:click.prevent="retroceso">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    @endif

    @if ($paso == 5)
        <h3>Reglas</h3>
        <form wire:submit.prevent="formpaso5(Object.fromEntries(new FormData($event.target)))">
            <div class="row g-2">
                <div class="col-md-3">
                    <div class="form-floating mb-3">
                        <input class="form-control" wire:model.lazy="minValue" type="number" id="minValue"
                            name="minValue" placeholder="Rango Minimo">
                        <label for="minValue">Rango Minimo:</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating mb-3">
                        <input class="form-control" wire:model.lazy="maxValue" type="number" id="maxValue"
                            name="maxValue" placeholder="Rango Maximo">
                        <label for="maxValue">Rango Maximo:</label>
                    </div>

                </div>
            </div>
            <div class="row g-1">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre_regla_1" name="nombre_regla_1"
                            placeholder="Nombre del valor" maxlength="150" required>
                        <label for="nombre_regla_1">Nombre del valor<sup>*</sup></label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="regla_1" name="regla_1"
                            placeholder="Valor Numerico" min="{{ $this->minValue }}" max="{{ $this->maxValue }}"
                            required>
                        <label for="regla_1">Valor Numerico<sup>*</sup></label>
                    </div>
                </div>
            </div>
            <div class="row g-1">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre_regla_2" name="nombre_regla_2"
                            placeholder="Nombre del valor" maxlength="150" required>
                        <label for="nombre_regla_2">Nombre del valor<sup>*</sup></label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="regla_2" name="regla_2"
                            placeholder="Valor Numerico" min="{{ $this->minValue }}" max="{{ $this->maxValue }}"
                            required>
                        <label for="regla_2">Valor Numerico<sup>*</sup></label>
                    </div>
                </div>
            </div>
            @foreach ($fields as $index => $field)
                <div class="row g-1">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control"
                                wire:model.lazy="fields.{{ $index }}.nombre" placeholder="Nombre del valor"
                                maxlength="150" required>
                            <label for="nombre">Nombre del valor</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control"
                                wire:model.lazy="fields.{{ $index }}.regla" placeholder="Valor Numerico"
                                min="{{ $this->minValue }}" max="{{ $this->maxValue }}" required>
                            <label for="nombre">Valor Numerico</label>
                        </div>
                    </div>
                    <div class="col-md d-flex align-items-center">
                        <a role="button" wire:click="removeField({{ $index }})"><i
                                class="bi bi-trash"></i></a>
                    </div>
                </div>
            @endforeach

            <div class="row g-1">
                <div class="col-md-2">
                    <button type="button" wire:click="addField" class="btn btn-link">+ Agregar Reglas</button>
                </div>
            </div>

            <div class="form-group col-12 text-right mt-4" style="margin-left: 10px; margin-right: 10px;">
                <div class="col s12 right-align btn-grd distancia">
                    <button class="btn btn_cancelar" wire:click.prevent="retroceso">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    @endif

    @if ($paso == 6)
        <h3>Evaluadores</h3>
        <form wire:submit.prevent="formpaso6(Object.fromEntries(new FormData($event.target)))">
            @foreach ($this->evaluados as $index => $ev)
                <div class="row g-1">
                    <div class="m-3 row">
                        <div class="col-md-6">
                            <label>Evaluado</label><br>
                            {{ $ev->name }}
                            <input type="number" id="id_evaluado_{{ $index }}"
                                name="id_evaluado_{{ $index }}" value="{{ $ev->id }}" hidden>
                        </div>
                        <div class="col-md-3">
                            <label>Área</label><br>
                            {{ $ev->area->area }}
                        </div>
                        <div class="col-md-3">
                            <label>Grupo</label><br>
                            {{-- {{ $ev->area->area }} --}}
                        </div>
                    </div>
                    <div class="m-3 row">
                        <div class="col-md-6">
                            <label for="evaluador_{{ $index }}">Evaluador</label>
                            <select class="form-control" name="evaluador_{{ $index }}"
                                id="evaluador_{{ $index }}" required>
                                @foreach ($evaluadores as $evdrs)
                                    <option value="{{ $evdrs->id }}">{{ $evdrs->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="peso_evaluacion_{{ $index }}">Peso de evaluación</label>
                            <input class="form-control" id="peso_evaluacion_{{ $index }}"
                                name="peso_evaluacion_{{ $index }}" type="number" min="1"
                                max="100" value="100">
                        </div>
                    </div>
                    <!-- Add a loop for additional evaluadores here -->
                    @foreach ($evaluadoresselects[$index] ?? [] as $idx => $evaluador)
                        <div class="m-3 row">
                            <div class="col-md-6">
                                <label for="evaluador_{{ $index }}_{{ $idx }}">Evaluador</label>
                                <select class="form-control"
                                    name="evaluador_{{ $index }}_{{ $idx }}">
                                    @foreach ($evaluadores as $evdrs)
                                        <option value="{{ $evdrs->id }}">{{ $evdrs->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="peso_evaluador_{{ $index }}_{{ $idx }}">Peso de
                                    evaluación</label>
                                <input class="form-control"
                                    id="peso_evaluador_{{ $index }}_{{ $idx }}"
                                    name="peso_evaluador_{{ $index }}_{{ $idx }}" type="number"
                                    min="1" max="100" value="100">
                                <button
                                    wire:click.prevent="removeEvaluador({{ $index }}, {{ $idx }})"
                                    class="btn btn-danger mt-2">Eliminar
                                </button>
                            </div>
                        </div>
                    @endforeach
                    <div class="m-3 row">
                        <div class="col-md-4">
                            <button type="button" wire:click="addOrInsertEvaluador({{ $index }})"
                                class="btn btn-link mt-2">Agregar Evaluador
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="form-group col-12 text-right mt-4" style="margin-left: 10px; margin-right: 10px;">
                <div class="col s12 right-align btn-grd distancia">
                    <button class="btn btn_cancelar" wire:click.prevent="retroceso">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    @endif
</div>

@livewireScripts

<script>
    document.addEventListener('livewire:load', function() {
        Livewire.hook('element.updating', (fromEl, toEl, component) => {
            if (fromEl.tagName === 'INPUT' && fromEl.type === 'checkbox' && !fromEl.checked) {
                let index = fromEl.getAttribute('wire:model.lazy').split('.').pop();
                @this.call('uncheckItem', index);
            }
        });
    });
</script>
