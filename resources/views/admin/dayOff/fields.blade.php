<div class="row">
    <!-- Nombre Field -->
    <div class="form-group col-sm-6">
        <i class="fas fa-id-card iconos-crear"></i><i
        class="fas fa-info-circle" style="font-size:12pt; float: right;"
        title="Nombre del lineamiento"></i>{!! Form::label('nombre', 'Nombre:', ['class' => 'required']) !!}
        {!! Form::text('nombre', null, [
            'class' => 'form-control',
            'maxlength' => 255,
            'maxlength' => 255,
            'placeholder' => 'Esciba nombre de la regla de Days Off´s...',
        ]) !!}
    </div>
    <div class="form-group col-sm-6">
        <label for="tipo_conteo" class="required"><i class="fa-solid fa-calendar-days iconos-crear"></i>Tipo de
            conteo</label><i
            class="fas fa-info-circle" style="font-size:12pt; float: right;"
            title="Tipo de discriminación de días;
            1.- Natural (Se cuenta de Lunes a Domingo)
            2.- Habil ((Se cuenta de Lunes a Viernes)"></i>
        <select id="tipo_conteo" name="tipo_conteo" class="form-control">
            <option value="1" {{ old('tipo_conteo') == $vacacion->tipo_conteo ? ' selected="selected"' : '' }}>
                Día Natural</option>
            <option value="2" {{ old('tipo_conteo') == $vacacion->tipo_conteo ? ' selected="selected"' : '' }}>
                Día Hábil</option>
            <option disabled {{ old('tipo_conteo') == $vacacion->tipo_conteo ? ' selected="selected"' : '' }}>
                Seleccione...</option>
        </select>
    </div>
</div>
<div class="row" x-data="{ otro: false }">
    <div class="form-group col-sm-6">
        <i class="fa-solid fa-calendar-check iconos-crear"></i>{!! Form::label('inicio_conteo', 'Inicio del beneficio', ['class' => 'required']) !!}
        {{-- <select id="inicio_conteo" name="inicio_conteo" class="form-control">
            <option value="1"
                {{ old('inicio_conteo') == $vacacion->inicio_conteo ? ' selected="selected"' : '' }}>Al ingreso
            </option>
            <option value="2" x-on:change="otro = true"
                {{ old('inicio_conteo') == $vacacion->inicio_conteo ? ' selected="selected"' : '' }}>Otro</option>
            <option disabled {{ old('inicio_conteo') == $vacacion->inicio_conteo ? ' selected="selected"' : '' }}>
                Seleccione...</option>
        </select> --}}
        <div class="form-check col-12">
            <input class="form-check-input" type="radio" name="inicio_conteo" value="1" x-on:click="otro = false"
                {{ old('inicio_conteo', $vacacion->inicio_conteo) == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="exampleRadios1">
                Al ingreso
            </label>
        </div>

        <div class="form-check col-12 mt-2">
            <input class="form-check-input" type="radio" name="inicio_conteo" value="2" x-on:click="otro = true"
                {{ old('inicio_conteo', $vacacion->inicio_conteo) == 2 ? 'checked' : '' }}>
            <label class="form-check-label" for="exampleRadios2">
                Otro
            </label>
        </div>
    </div>
    <div class="form-group col-sm-6 mt-4" x-show="otro">
        <label for="meses"> <i class="fa-solid fa-calendar-day iconos-crear"></i>Inicio del beneficio en
            meses:</label>
        <input type="number" class="form-control" name="meses" placeholder="Ingrese numero de meses..."  x-bind:disabled="!otro">
    </div>
</div><br>

<div class="row">
    <!-- Categoria Field -->
    <div class="form-group col-sm-6">
        <i class="fa-solid fa-calendar-day iconos-crear"></i><i
        class="fas fa-info-circle" style="font-size:12pt; float: right;"
        title="Días otorgados por la organización"></i>{!! Form::label('dias', 'Días a gozar:', ['class' => 'required']) !!}
        {!! Form::number('dias', null, [
            'class' => 'form-control',
            'maxlength' => 255,
            'maxlength' => 255,
            'placeholder' => 'Ingrese numero inicial de días...',
        ]) !!}
    </div>

    {{-- <div class="form-group col-sm-6">
        <i class="fa-solid fa-arrow-up-9-1 iconos-crear"></i>{!! Form::label('incremento_dias', 'Incremento de días:', ['class' => 'required']) !!}
        {!! Form::number('incremento_dias', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255,'placeholder' =>'Ingrese numero de días a incrementar...']) !!}
    </div> --}}


    <div class="form-group col-sm-6">
        <i class="fa-solid fa-calendar-plus iconos-crear"></i><i
        class="fas fa-info-circle" style="font-size:12pt; float: right;"
        title="Medida de tiempo para aplicar proxima regla;
        1.- Aniversario (Cuando el colaborador cumpla años en la organizacíon)
        2.- Anual (Cada inicio de año calendario)"></i>{!! Form::label('periodo_corte', 'Periodo de corte', ['class' => 'required']) !!}
        <select id="periodo_corte" name="periodo_corte" class="form-control">
            <option value="1"
                {{ old('periodo_corte') == $vacacion->periodo_corte ? ' selected="selected"' : '' }}>Aniversario
            </option>
            <option value="2"
                {{ old('periodo_corte') == $vacacion->periodo_corte ? ' selected="selected"' : '' }}>Anual</option>
            <option disabled {{ old('periodo_corte') == $vacacion->periodo_corte ? ' selected="selected"' : '' }}>
                Seleccione...</option>
        </select>
    </div>
</div>
<div class="row">

    <div class="form-group col-sm-12">
        <label for="afectados" class="required"> <i class="fa-solid fa-people-line iconos-crear"></i>
            Colaboradores a los que aplica :
        </label>

    </div>
    @php
        $visible = $vacacion->afectados == 2 ? true : false;
    @endphp
    <div class="col-12 form-group" x-data="{ open: @js($visible) }">

        <div class="form-check col-12">
            <input class="form-check-input" type="radio" name="afectados" value="1" x-on:click="open = false"
                {{ old('afectados', $vacacion->afectados) == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="exampleRadios1">
                Toda la Empresa
            </label>
        </div>

        <div class="form-check col-12 mt-2">
            <input class="form-check-input" type="radio" name="afectados" value="2" x-on:click="open = true"
                {{ old('afectados', $vacacion->afectados) == 2 ? 'checked' : '' }}>
            <label class="form-check-label" for="exampleRadios2">
                Área(s) Especificas
            </label>
        </div>

        <div class="form-group col-sm-12 mt-4" x-show="open">
            <label for="normas"><i class="fa-solid fa-arrows-down-to-people iconos-crear"></i>Área(s) a
                aplicar</label>
            <select
                class="form-control js-example-basic-multiple areas-select  {{ $errors->has('controles') ? 'is-invalid' : '' }}"
                name="areas[]" id="areas" multiple="multiple" x-bind:disabled="!open">
                @foreach ($areas as $area)
                    <option value="{{ $area->id }}" data-area="{{ $area->area }}"
                        {{ old('areas', in_array($area->id, $areas_seleccionadas)) ? ' selected="selected"' : '' }}>
                        {{ $area->area }}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('areas'))
                <div class="invalid-feedback">
                    {{ $errors->first('areas') }}
                </div>
            @endif
        </div>
    </div>
</div>
<div class="row">

    <!-- Descripcion Field -->
    <div class="form-group col-sm-12">
        <label for="exampleFormControlTextarea1"> <i
                class="fas fa-file-alt iconos-crear"></i>{!! Form::label('descripcion', 'Descripción:') !!}</label>
        <textarea class="form-control" id="edescripcion" name="descripcion" rows="2">{{ old('descripcion', $vacacion->descripcion) }}</textarea>
    </div>
</div>
<!-- Submit Field -->
<div class="text-right form-group col-12">
    <a href="{{ redirect()->getUrlGenerator()->previous() }}" class="btn_cancelar">Cancelar</a>
    <button class="btn btn-danger" type="submit">
        {{ trans('global.save') }}
    </button>
</div>

@section('scripts')
    <script>
        $(document).ready(function() {

            $('.areas-select').select2({
                'theme': 'bootstrap4'
            });

        });
    </script>
@endsection
