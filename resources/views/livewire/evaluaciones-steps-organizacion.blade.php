@switch($paso)
    @case('crear-evaluacion')
        <form wire:submit.prevent="crearevaluacion">
            <div class="card card-body">
                <div class="container">
                    <div class="row g-2">
                        <p>
                            Antes de comenzar puedes decidir si quieres incluir en tu evaluación las competencias, así podrás
                            dividir el porcentaje que <br>
                            quieres asignar entre cada una de ellas hasta alcanzar el 100%.
                        </p>
                        <div class="col-md">
                            <div class="p-3 border bg-light">
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" wire:model.defer="objetivos"
                                                id="objetivos" name="objetivos">
                                            <label class="form-check-label" for="objetivos">
                                                Objetivos
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating mb-3">
                                            <input class="form-input" type="number" min="0" max="100"
                                                wire:model.defer="porcentaje_objetivos" id="porcentaje_objetivos"
                                                name="porcentaje_objetivos">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="errors text-danger">
                                @if ($errors->has('objetivos'))
                                    {{ $errors->first('objetivos') }}
                                @endif
                                @if ($errors->has('porcentaje_objetivos'))
                                    {{ $errors->first('porcentaje_objetivos') }}
                                @endif
                            </span>
                        </div>
                        <div class="col-md">
                            <div class="p-3 border bg-light">
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" wire:model.defer="competencias"
                                                id="competencias" name="competencias">
                                            <label class="form-check-label" for="competencias">
                                                Competencias
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating mb-3">
                                            <input class="form-input" type="number" min="0" max="100"
                                                wire:model.defer="porcentaje_competencias" id="porcentaje_competencias"
                                                name="porcentaje_competencias">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="errors text-danger">
                                @if ($errors->has('competencias'))
                                    {{ $errors->first('competencias') }}
                                @endif
                                @if ($errors->has('porcentaje_competencias'))
                                    {{ $errors->first('porcentaje_competencias') }}
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                <span class="errors text-danger">
                    @if ($errors->has('sumatotal'))
                        {{ $errors->first('sumatotal') }}
                    @endif
                </span>
            </div>
            <br>
            <div class="card card-body">
                <div>
                    <h4 class="d-inline">Nombre de la Evaluación</h4>
                    <p class="d-inline">Asigna un nombre a tu evaluación</p>
                    <hr style="width: 100%; height: 2px;">
                </div>
                <div class="row g-1">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" wire:model.defer="nombre" id="nombre" name="nombre"
                            maxlength="220" placeholder="Nombre de la Evaluación">
                        <label for="nombre">Nombre<sup>*</sup></label>
                        <span class="errors nombre_error text-danger">
                            @if ($errors->has('nombre'))
                                {{ $errors->first('nombre') }}
                            @endif
                        </span>
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
                        <button type="submit" class="btn btn-primary">Siguiente</button>
                    </div>
                </div>
        </form>
        </div>
    @break

    @case('periodos')
        <form wire:submit.prevent="periodos">
            <div class="card card-body">
                <div>
                    <h4 class="d-inline">Periodos de las Competencias</h4>
                    <p class="d-inline">Crea los periodos de tus evaluaciones</p>
                    <hr style="width: 100%; height:1px;">
                </div>
                <div class="row g-5">
                    <p>Define el periodo de evaluación</p>
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
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="tipo"
                                wire:model.defer="tipo" value="trimestral">
                            <label class="form-check-label" for="trimestral">
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
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5"
                                disabled>
                            <label class="form-check-label" for="flexRadioDefault5">
                                Anual
                            </label>
                        </div>
                    </div>
                    <div>
                        <span class="errors text-danger">
                            @if ($errors->has('tipo'))
                                {{ $errors->first('tipo') }}
                            @endif
                        </span>
                        <hr style="width: 100%; height:1px;">
                    </div>
                </div>
                <br>

                @if ($flujo == 'obj_com')
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <select class="form-select" name="juntoscompetencias" id="juntoscompetencias"
                                    wire:model.lazy="juntoscompetencias" aria-label="Floating label select example">
                                    <option value="true">Si</option>
                                    <option value="false">No</option>
                                </select>
                                <label for="juntoscompetencias">Deseas evaluar competencias dentro de los periodos de los
                                    objetivos</label>
                            </div>
                        </div>
                    </div>
                    <br>
                @endif

                <div>
                    <p>Elige la duración de cada periodo</p>
                    <hr style="width: 100%; height:1px;">
                </div>

                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nombre_periodo_1"
                                wire:model.lazy="nombre_periodo_1" placeholder="Nombre">
                            <label for="nombre_periodo_1">Nombre</label>
                            <span class="errors text-danger">
                                @if ($errors->has('nombre_periodo_1'))
                                    {{ $errors->first('nombre_periodo_1') }}
                                @endif
                            </span>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="fecha_inicio_p1"
                                        wire:model.defer="fecha_inicio_p1">
                                    <label for="fecha_inicio_p1">Inicio Periodo</label>
                                    <span class="errors text-danger">
                                        @if ($errors->has('fecha_inicio_p1'))
                                            {{ $errors->first('fecha_inicio_p1') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="fecha_fin_p1"
                                        wire:model.defer="fecha_fin_p1">
                                    <label for="fecha_fin_p1">Fin Periodo</label>
                                    <span class="errors text-danger">
                                        @if ($errors->has('fecha_fin_p1'))
                                            {{ $errors->first('fecha_fin_p1') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nombre_periodo_2"
                                wire:model.lazy="nombre_periodo_2" placeholder="Nombre">
                            <label for="nombre_periodo_2">Nombre</label>
                            <span class="errors text-danger">
                                @if ($errors->has('nombre_periodo_2'))
                                    {{ $errors->first('nombre_periodo_2') }}
                                @endif
                            </span>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="fecha_inicio_p2"
                                        wire:model.defer="fecha_inicio_p2">
                                    <label for="fecha_inicio_p2">Inicio Periodo</label>
                                    <span class="errors text-danger">
                                        @if ($errors->has('fecha_inicio_p2'))
                                            {{ $errors->first('fecha_inicio_p2') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="fecha_fin_p2"
                                        wire:model.defer="fecha_fin_p2">
                                    <label for="fecha_fin_p2">Fin Periodo</label>
                                    <span class="errors text-danger">
                                        @if ($errors->has('fecha_fin_p2'))
                                            {{ $errors->first('fecha_fin_p2') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nombre_periodo_3"
                                wire:model.lazy="nombre_periodo_3" placeholder="Nombre">
                            <label for="nombre_periodo_3">Nombre</label>
                            <span class="errors text-danger">
                                @if ($errors->has('nombre_periodo_3'))
                                    {{ $errors->first('nombre_periodo_3') }}
                                @endif
                            </span>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="fecha_inicio_p3"
                                        wire:model.defer="fecha_inicio_p3">
                                    <label for="fecha_inicio_p3">Inicio Periodo</label>
                                    <span class="errors text-danger">
                                        @if ($errors->has('fecha_inicio_p3'))
                                            {{ $errors->first('fecha_inicio_p3') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="fecha_fin_p3"
                                        wire:model.defer="fecha_fin_p3">
                                    <label for="fecha_fin_p3">Fin Periodo</label>
                                    <span class="errors text-danger">
                                        @if ($errors->has('fecha_fin_p3'))
                                            {{ $errors->first('fecha_fin_p3') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nombre_periodo_4"
                                wire:model.lazy="nombre_periodo_4" placeholder="Nombre">
                            <label for="nombre_periodo_4">Nombre</label>
                            <span class="errors text-danger">
                                @if ($errors->has('nombre_periodo_4'))
                                    {{ $errors->first('nombre_periodo_4') }}
                                @endif
                            </span>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="fecha_inicio_p4"
                                        wire:model.defer="fecha_inicio_p4">
                                    <label for="fecha_inicio_p4">Inicio Periodo</label>
                                    <span class="errors text-danger">
                                        @if ($errors->has('fecha_inicio_p4'))
                                            {{ $errors->first('fecha_inicio_p4') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="fecha_fin_p4"
                                        wire:model.defer="fecha_fin_p4">
                                    <label for="fecha_fin_p4">Fin Periodo</label>
                                    <span class="errors text-danger">
                                        @if ($errors->has('fecha_fin_p4'))
                                            {{ $errors->first('fecha_fin_p4') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($juntoscompetencias == 'false')
                    <br>
                    <div>
                        <p>Elige la duración de cada periodo de competencias</p><br>
                        <hr style="width: 100%; height:1px;">
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nombre_periodo_competencia_p1"
                                    wire:model.lazy="nombre_periodo_competencia_p1" placeholder="Nombre">
                                <label for="nombre_periodo_competencia_p1">Nombre</label>
                                <span class="errors text-danger">
                                    @if ($errors->has('nombre_periodo_competencia_p1'))
                                        {{ $errors->first('nombre_periodo_competencia_p1') }}
                                    @endif
                                </span>
                            </div>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="fecha_inicio_competencia_p1"
                                            wire:model.defer="fecha_inicio_competencia_p1">
                                        <label for="fecha_inicio_competencia_p1">Inicio Periodo</label>
                                        <span class="errors text-danger">
                                            @if ($errors->has('fecha_inicio_competencia_p1'))
                                                {{ $errors->first('fecha_inicio_competencia_p1') }}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="fecha_fin_competencia_p1"
                                            wire:model.defer="fecha_fin_competencia_p1">
                                        <label for="fecha_fin_competencia_p1">Fin Periodo</label>
                                        <span class="errors text-danger">
                                            @if ($errors->has('fecha_fin_competencia_p1'))
                                                {{ $errors->first('fecha_fin_competencia_p1') }}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nombre_periodo_competencia_p2"
                                    wire:model.lazy="nombre_periodo_competencia_p2" placeholder="Nombre">
                                <label for="nombre_periodo_competencia_p2">Nombre</label>
                                <span class="errors text-danger">
                                    @if ($errors->has('nombre_periodo_competencia_p2'))
                                        {{ $errors->first('nombre_periodo_competencia_p2') }}
                                    @endif
                                </span>
                            </div>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="fecha_inicio_competencia_p2"
                                            wire:model.defer="fecha_inicio_competencia_p2">
                                        <label for="fecha_inicio_competencia_p2">Inicio Periodo</label>
                                        <span class="errors text-danger">
                                            @if ($errors->has('fecha_inicio_competencia_p2'))
                                                {{ $errors->first('fecha_inicio_competencia_p2') }}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="fecha_fin_competencia_p2"
                                            wire:model.defer="fecha_fin_competencia_p2">
                                        <label for="fecha_fin_competencia_p2">Fin Periodo</label>
                                        <span class="errors text-danger">
                                            @if ($errors->has('fecha_fin_competencia_p2'))
                                                {{ $errors->first('fecha_fin_competencia_p2') }}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nombre_periodo_competencia_p3"
                                    wire:model.lazy="nombre_periodo_competencia_p3" placeholder="Nombre">
                                <label for="nombre_periodo_competencia_p3">Nombre</label>
                                <span class="errors text-danger">
                                    @if ($errors->has('nombre_periodo_competencia_p3'))
                                        {{ $errors->first('nombre_periodo_competencia_p3') }}
                                    @endif
                                </span>
                            </div>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="fecha_inicio_competencia_p3"
                                            wire:model.defer="fecha_inicio_competencia_p3">
                                        <label for="fecha_inicio_competencia_p3">Inicio Periodo</label>
                                        <span class="errors text-danger">
                                            @if ($errors->has('fecha_inicio_competencia_p3'))
                                                {{ $errors->first('fecha_inicio_competencia_p3') }}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="fecha_fin_competencia_p3"
                                            wire:model.defer="fecha_fin_competencia_p3">
                                        <label for="fecha_fin_competencia_p3">Fin Periodo</label>
                                        <span class="errors text-danger">
                                            @if ($errors->has('fecha_fin_competencia_p3'))
                                                {{ $errors->first('fecha_fin_competencia_p3') }}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nombre_periodo_competencia_p4"
                                    wire:model.lazy="nombre_periodo_competencia_p4" placeholder="Nombre">
                                <label for="nombre_periodo_competencia_p4">Nombre</label>
                                <span class="errors text-danger">
                                    @if ($errors->has('nombre_periodo_competencia_p4'))
                                        {{ $errors->first('nombre_periodo_competencia_p4') }}
                                    @endif
                                </span>
                            </div>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="fecha_inicio_competencia_p4"
                                            wire:model.defer="fecha_inicio_competencia_p4">
                                        <label for="fecha_inicio_competencia_p4">Inicio Periodo</label>
                                        <span class="errors text-danger">
                                            @if ($errors->has('fecha_inicio_competencia_p4'))
                                                {{ $errors->first('fecha_inicio_competencia_p4') }}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="fecha_fin_competencia_p4"
                                            wire:model.defer="fecha_fin_competencia_p4">
                                        <label for="fecha_fin_competencia_p4">Fin Periodo</label>
                                        <span class="errors text-danger">
                                            @if ($errors->has('fecha_fin_competencia_p4'))
                                                {{ $errors->first('fecha_fin_competencia_p4') }}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="form-group col-12 text-right mt-4" style="margin-left: 10px; margin-right: 10px;">
                    <div class="col s12 right-align btn-grd distancia">
                        <button class="btn btn_cancelar" wire:click.prevent="retroceso">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Siguiente</button>
                    </div>
                </div>
            </div>
        </form>
    @break

    @case('perspectivas')
        <form wire:submit.prevent="perspectivas(Object.fromEntries(new FormData($event.target)))">
            <div class="card card-body">
                <div>
                    <h4 class="d-inline">Clasificación</h4>
                    <p class="d-inline">Da de alta el grupo de Perspectivas</p>
                    <hr style="width: 100%; height:1px;">
                </div>
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
                        <button type="submit" class="btn btn-primary">Siguiente</button>
                    </div>
                </div>
            </div>
        </form>
    @break

    @case('publico')
        <h3>Público</h3>
        <form wire:submit.prevent="publico(Object.fromEntries(new FormData($event.target)))">
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

            @if ($this->publico != 'total')
                <div class="row">
                    <div class="form-floating">
                        <select class="form-select form-control" name="evaluados" id="evaluados">
                            @foreach ($this->evaluados as $index => $evaluado)
                                <option> {{ $evaluado->name ?? $evaluado->area }}
                                </option>
                                <input type="checkbox" wire:model.lazy="selectedItems.{{ $index }}"
                                    value="{{ $evaluado->id }}">
                            @endforeach
                        </select>
                        <label for="evaluados">Seleccione</label>
                    </div>
                </div>
            @elseif ($this->evaluados == null or $this->publico == 'total')
                <div class="row">
                    <div class="form-floating">
                        <select name="" id="" class="form-select" disabled></select>
                        <label for="evaluados">Seleccione</label>
                    </div>
                </div>
            @endif

            <div class="form-group col-12 text-right mt-4" style="margin-left: 10px; margin-right: 10px;">
                <div class="col s12 right-align btn-grd distancia">
                    <button class="btn btn_cancelar" wire:click.prevent="retroceso">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Siguiente</button>
                </div>
            </div>
        </form>
    @break

    @case('reglas')
        <h3>Reglas</h3>
        <form wire:submit.prevent="reglas(Object.fromEntries(new FormData($event.target)))">
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
                            wire:model.lazy="nombre_regla_1" placeholder="Nombre del valor" maxlength="150" required>
                        <label for="nombre_regla_1">Nombre del valor<sup>*</sup></label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="regla_1" name="regla_1" wire:model.lazy="regla_1"
                            placeholder="Valor Numerico" min="{{ $this->minValue }}" max="{{ $this->maxValue }}" required>
                        <label for="regla_1">Valor Numerico<sup>*</sup></label>
                    </div>
                </div>
            </div>
            <div class="row g-1">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre_regla_2" name="nombre_regla_2"
                            wire:model.lazy="nombre_regla_2" placeholder="Nombre del valor" maxlength="150" required>
                        <label for="nombre_regla_2">Nombre del valor<sup>*</sup></label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="regla_2" name="regla_2" wire:model.lazy="regla_2"
                            placeholder="Valor Numerico" min="{{ $this->minValue }}" max="{{ $this->maxValue }}" required>
                        <label for="regla_2">Valor Numerico<sup>*</sup></label>
                    </div>
                </div>
            </div>
            @foreach ($fields as $index => $field)
                <div class="row g-1">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" wire:model.lazy="fields.{{ $index }}.nombre"
                                id="fields.{{ $index }}.nombre" name="fields.{{ $index }}.nombre"
                                placeholder="Nombre del valor" maxlength="150" required>
                            <label for="nombre">Nombre del valor</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" wire:model.lazy="fields.{{ $index }}.regla"
                                id="fields.{{ $index }}.regla" name="fields.{{ $index }}.regla"
                                placeholder="Valor Numerico" min="{{ $this->minValue }}" max="{{ $this->maxValue }}"
                                required>
                            <label for="nombre">Valor Numerico</label>
                        </div>
                    </div>
                    <div class="col-md d-flex align-items-center">
                        <a role="button" wire:click="removeField({{ $index }})"><i class="bi bi-trash"></i></a>
                    </div>
                </div>
            @endforeach

            <div class="row g-1">
                <div class="col-md-2">
                    <button type="button" wire:click="addField" class="btn btn-link">+ Agregar
                        Reglas</button>
                </div>
            </div>

            <div class="form-group col-12 text-right mt-4" style="margin-left: 10px; margin-right: 10px;">
                <div class="col s12 right-align btn-grd distancia">
                    <button class="btn btn_cancelar" wire:click.prevent="retroceso">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Siguiente</button>
                </div>
            </div>
        </form>
    @break

    @case('evaluadores_objetivos')
        <h3>Evaluadores</h3>
        <form wire:submit.prevent="evaluadores_objetivos(Object.fromEntries(new FormData($event.target)))">
            @foreach ($this->evaluados_asignacion as $index => $ev)
                <div class="row g-1">
                    <div class="m-3 row">
                        <div class="col-md-6">
                            <label>Evaluado</label><br>
                            {{ $ev->empleado->name }}
                            <input type="number" id="id_evaluado_{{ $index }}"
                                name="id_evaluado_{{ $index }}" value="{{ $ev->empleado->id }}" hidden>
                        </div>
                        <div class="col-md-3">
                            <label>Área</label><br>
                            {{ $ev->empleado->area->area }}
                        </div>
                        <div class="col-md-3">
                            <label>Grupo</label><br>
                            {{-- {{ $ev->empleado->area->area }} --}}
                        </div>
                    </div>
                    <div class="m-3 row">
                        <div class="col-md-6">
                            <label for="evaluador_{{ $index }}">Evaluador <sup>*</sup></label>
                            <select class="form-control" name="evaluador_{{ $index }}"
                                id="evaluador_{{ $index }}" required>
                                @foreach ($evaluadores as $evdrs)
                                    <option value="{{ $evdrs->id }}">{{ $evdrs->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="peso_evaluacion_{{ $index }}">Peso de evaluación
                                <sup>*</sup></label>
                            <input class="form-control" id="peso_evaluacion_{{ $index }}"
                                name="peso_evaluacion_{{ $index }}" type="number" min="1" max="100"
                                value="100">
                        </div>
                    </div>
                    <!-- Add a loop for additional evaluadores here -->
                    @foreach ($evaluadoresselects[$index] ?? [] as $idx => $evaluador)
                        <div class="m-3 row">
                            <div class="col-md-6">
                                <label for="evaluador_{{ $index }}_{{ $idx }}">Evaluador</label>
                                <select class="form-control" name="evaluador_{{ $index }}_{{ $idx }}">
                                    @foreach ($evaluadores as $evdrs)
                                        <option value="{{ $evdrs->id }}">{{ $evdrs->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="peso_evaluacion_{{ $index }}_{{ $idx }}">Peso
                                    de
                                    evaluación</label>
                                <input class="form-control" id="peso_evaluacion_{{ $index }}_{{ $idx }}"
                                    name="peso_evaluacion_{{ $index }}_{{ $idx }}" type="number"
                                    min="1" max="100" value="100">
                            </div>
                            <div class="col-md-2 d-flex align-items-center">
                                <a role="button"
                                    wire:click.prevent="removeEvaluador({{ $index }}, {{ $idx }})"><i
                                        class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    @endforeach

                    <span class="errors text-danger">
                        @if ($errors->has('total_peso'))
                            {{ $errors->first('total_peso') }}
                        @endif
                    </span>



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
    @break

    @case('evaluadores_competencias')
        <h3>Evaluadores</h3>
        <form wire:submit.prevent="evaluadores_competencias(Object.fromEntries(new FormData($event.target)))">
            @foreach ($this->evaluados_asignacion as $index => $ev)
                <div class="row g-1">
                    <div class="m-3 row">
                        <div class="col-md-6">
                            <label>Evaluado</label><br>
                            {{ $ev->empleado->name }}
                            <input type="number" id="id_evaluado_{{ $index }}"
                                name="id_evaluado_{{ $index }}" value="{{ $ev->empleado->id }}" hidden>
                        </div>
                        <div class="col-md-3">
                            <label>Área</label><br>
                            {{ $ev->empleado->area->area }}
                        </div>
                        <div class="col-md-3">
                            <label>Grupo</label><br>
                            {{-- {{ $ev->empleado->area->area }} --}}
                        </div>
                    </div>
                    <div class="m-3 row">
                        <div class="col-md-6">
                            <label for="evaluador_{{ $index }}">Evaluador <sup>*</sup></label>
                            <select class="form-control" name="evaluador_{{ $index }}"
                                id="evaluador_{{ $index }}" required>
                                @foreach ($evaluadores as $evdrs)
                                    <option value="{{ $evdrs->id }}">{{ $evdrs->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="peso_evaluacion_{{ $index }}">Peso de evaluación
                                <sup>*</sup></label>
                            <input class="form-control" id="peso_evaluacion_{{ $index }}"
                                name="peso_evaluacion_{{ $index }}" type="number" min="1" max="100"
                                value="100">
                        </div>
                    </div>
                    <!-- Add a loop for additional evaluadores here -->
                    @foreach ($evaluadoresselects[$index] ?? [] as $idx => $evaluador)
                        <div class="m-3 row">
                            <div class="col-md-6">
                                <label for="evaluador_{{ $index }}_{{ $idx }}">Evaluador</label>
                                <select class="form-control" name="evaluador_{{ $index }}_{{ $idx }}">
                                    @foreach ($evaluadores as $evdrs)
                                        <option value="{{ $evdrs->id }}">{{ $evdrs->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="peso_evaluacion_{{ $index }}_{{ $idx }}">Peso
                                    de
                                    evaluación</label>
                                <input class="form-control" id="peso_evaluacion_{{ $index }}_{{ $idx }}"
                                    name="peso_evaluacion_{{ $index }}_{{ $idx }}" type="number"
                                    min="1" max="100" value="100">
                            </div>
                            <div class="col-md-2 d-flex align-items-center">
                                <a role="button"
                                    wire:click.prevent="removeEvaluador({{ $index }}, {{ $idx }})"><i
                                        class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    @endforeach

                    <span class="errors text-danger">
                        @if ($errors->has('total_peso'))
                            {{ $errors->first('total_peso') }}
                        @endif
                    </span>



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
    @break

    @case('evaluacion-creada')
        <div class="col-12">
            <div class="text-center">
                <div class="row">
                    <h4 class="card-title graficas_titulos graficas_titulo1">Evaluación creada con éxito</h4>
                </div>

                <img src="{{ asset('img/evaluacion-creada.png') }}">

                <div class="row">
                    <p>Tu evaluación ha sido creada y guardada, puedes consultarla o editarla <br> en la tabla de
                        evaluaciones</p>
                </div>
            </div>
        </div>
    @break

@endswitch

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