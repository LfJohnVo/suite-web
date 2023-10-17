<div class="card card-body">
    @if ($paso == 1)
        <form wire:submit.prevent="formpaso1(Object.fromEntries(new FormData($event.target)))">
            <div class="row
            g-2">
                <div class="col-md">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="obj" id="objetivos"
                                    name="objetivos">
                                <label class="form-check-label" for="objetivos">
                                    Objetivos
                                </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input class="form-input" type="number" min="0" max="100" maxlength="3"
                                    id="porcentaje_objetivos" name="porcentaje_objetivos" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="comp" id="competencias"
                                    name="competencias">
                                <label class="form-check-label" for="competencias">
                                    Competencias
                                </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input class="form-input" type="number" min="0" max="100" maxlength="3"
                                    id="porcentaje_competencias" name="porcentaje_competencias" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-1">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nombre" name="nombre" maxlength="220"
                        placeholder="Nombre de la Evaluación" required>
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
                        <label for="nombreperiodo1">Q1</label>
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
                        <label for="nombreperiodo2">Q2</label>
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
                        <label for="nombreperiodo3">Q3</label>
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
                        <label for="nombreperiodo4">Q4</label>
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
        <div class="row g-2">
            @foreach ($inputs as $key => $input)
                <div class="row">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="inputs.{{ $key }}"
                                name="inputs.{{ $key }}" placeholder="Clasificación"
                                wire:model="inputs.{{ $key }}">
                            <label for="inputs.{{ $key }}">Clasificación</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <button wire:click="removeInput({{ $key }})"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row g-1">
            <div class="form-floating mb-3">
                <button class="btn btn-link" wire:click="addInput">Add Input</button>
            </div>
        </div>
    @endif
</div>
