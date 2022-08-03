@extends('layouts.admin')


@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('admin.analisis-impacto.index') !!}">Cuestionario de Análisis de Impacto</a>
        </li>
        <li class="breadcrumb-item active">Editar</li>
    </ol>
    <h5 class="col-12 titulo_general_funcion">Editar: Cuestionario de Análisis de Impacto</h5>
    <div class="mt-4 card">
        <div class="card-body">
            {!! Form::model($cuestionario, [
                'route' => ['admin.analisis-impacto.update', $cuestionario->id],
                'method' => 'patch',
            ]) !!}

            @include('admin.analisis-impacto.fields')

            <!--  RESPONSABLES DEL PROCESO -->
            <div class="row">
                <div class="text-center form-group col-12"
                    style="background-color:#345183; border-radius: 100px; color: white;">
                    RESPONSABLES DEL PROCESO
                </div>
            </div>
            <div class="row">
                <div class="input-group col-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><strong>Titular</strong></span>
                    </div>
                    <input type="text" name="titular_nombre" aria-label="First name" class="form-control"
                        placeholder="Nombre(s)" value="{{ old('titular_nombre', $cuestionario->titular_nombre) }}">
                    <input type="text" name="titular_a_paterno" aria-label="Last name" class="form-control"
                        placeholder="A. Paterno" value="{{ old('titular_a_paterno', $cuestionario->titular_a_paterno) }}">
                    <input type="text" name="titular_a_materno" aria-label="Last name" class="form-control"
                        placeholder="A. Materno"
                        value="{{ old('titular_a_materno', $cuestionario->titular_a_materno) }}"><br>
                </div>
                <div class="form-group col-sm-12 mt-3">
                    <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('titular_puesto', 'Puesto', ['class' => 'required']) !!}
                    {!! Form::text('titular_puesto', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'maxlength' => 255,
                        'placeholder' => '...',
                    ]) !!}
                </div>
                <div class="form-group col-sm-6">
                    <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('titular_correo', 'Correo electrónico:', ['class' => 'required']) !!}
                    {!! Form::text('titular_correo', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'maxlength' => 255,
                        'placeholder' => '...',
                    ]) !!}
                </div>
                <div class="form-group col-sm-6">
                    <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('titular_extencion', 'Extensión') !!}
                    {!! Form::text('titular_extencion', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'maxlength' => 255,
                        'placeholder' => '...',
                    ]) !!}
                </div>
                <hr>
                <div class="input-group col-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><strong>Suplente</strong></span>
                    </div>
                    <input type="text" name="suplente_nombre" aria-label="First name" class="form-control"
                        placeholder="Nombre(s)" value="{{ old('suplente_nombre', $cuestionario->suplente_nombre) }}">
                    <input type="text" name="suplente_a_paterno" aria-label="Last name" class="form-control"
                        placeholder="A. Paterno" value="{{ old('suplente_a_paterno', $cuestionario->suplente_a_paterno) }}">
                    <input type="text" name="suplente_a_materno" aria-label="Last name" class="form-control"
                        placeholder="A. Materno"
                        value="{{ old('suplente_a_materno', $cuestionario->suplente_a_materno) }}"><br>
                </div>
                <div class="form-group col-sm-12 mt-3">
                    <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('suplente_puesto', 'Puesto', ['class' => 'required']) !!}
                    {!! Form::text('suplente_puesto', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'maxlength' => 255,
                        'placeholder' => '...',
                    ]) !!}
                </div>
                <div class="form-group col-sm-6">
                    <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('suplente_correo', 'Correo electrónico:', ['class' => 'required']) !!}
                    {!! Form::text('suplente_correo', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'maxlength' => 255,
                        'placeholder' => '...',
                    ]) !!}
                </div>
                <div class="form-group col-sm-6">
                    <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('suplente_extencion', 'Extensión') !!}
                    {!! Form::text('suplente_extencion', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'maxlength' => 255,
                        'placeholder' => '...',
                    ]) !!}
                </div>
                <div class="input-group col-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><strong>Supervisor</strong></span>
                    </div>
                    <input type="text" name="supervisor_nombre" aria-label="First name" class="form-control"
                        placeholder="Nombre(s)" value="{{ old('supervisor_nombre', $cuestionario->supervisor_nombre) }}">
                    <input type="text" name="supervisor_a_paterno" aria-label="Last name" class="form-control"
                        placeholder="A. Paterno"
                        value="{{ old('supervisor_a_paterno', $cuestionario->supervisor_a_paterno) }}">
                    <input type="text" name="supervisor_a_materno" aria-label="Last name" class="form-control"
                        placeholder="A. Materno"
                        value="{{ old('supervisor_a_materno', $cuestionario->supervisor_a_materno) }}"><br>
                </div>
                <div class="form-group col-sm-12 mt-3">
                    <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('supervisor_puesto', 'Puesto', ['class' => 'required']) !!}
                    {!! Form::text('supervisor_puesto', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'maxlength' => 255,
                        'placeholder' => '...',
                    ]) !!}
                </div>
                <div class="form-group col-sm-6">
                    <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('supervisor_correo', 'Correo electrónico:', ['class' => 'required']) !!}
                    {!! Form::text('supervisor_correo', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'maxlength' => 255,
                        'placeholder' => '...',
                    ]) !!}
                </div>
                <div class="form-group col-sm-6">
                    <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('supervisor_extencion', 'Extensión') !!}
                    {!! Form::text('supervisor_extencion', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'maxlength' => 255,
                        'placeholder' => '...',
                    ]) !!}
                </div>
            </div>



            <!-- FLUJO DEL PROCESO -->
            <div class="row">
                <div class="text-center form-group col-12 mt-4"
                    style="background-color:#345183; border-radius: 100px; color: white;">
                    FLUJO DEL PROCESO
                </div>
            </div>
            <div class="row" x-data="{ periodicidad_flujo: false }">
                <div class="form-group col-sm-12">
                    <i class="fas fa-id-card iconos-crear"></i>{!! Form::label(
                        'flujo_q_1',
                        '1. ¿Qué información se requiere para iniciar el proceso?  (Documentos, Correo electrónico, Oficios, Reportes, etc.)',
                        ['class' => 'required'],
                    ) !!}
                    {!! Form::text('flujo_q_1', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'maxlength' => 255,
                        'placeholder' => '...',
                    ]) !!}
                </div>
                <div class="form-group col-sm-12">
                    <i class="fas fa-id-card iconos-crear"></i>{!! Form::label(
                        'flujo_q_2',
                        '2. ¿De dónde proviene la información? (Nombre de la Empresa / Nombre del Área / Nombre del Proceso / Nombre del Sistema)',
                        ['class' => 'required'],
                    ) !!}
                    {!! Form::text('flujo_q_2', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'maxlength' => 255,
                        'placeholder' => '...',
                    ]) !!}
                </div>
                {{-- livewire 3.¿Quién le proporciona esta información? --}}
                @livewire('propociona-informacion', ['cuestionario_id' => $cuestionario->id])
                {{-- Termina livewire --}}

                <div class="form-group col-sm-12">
                    <i class="fas fa-id-card iconos-crear"></i>{!! Form::label(
                        'flujo_q_4',
                        '4.	¿De qué manera recibe usted la información? (Entrega Física / Correo Electrónico / Consulta en Aplicativo o Base de Datos / Consulta en Portal Web)',
                        ['class' => 'required'],
                    ) !!}
                    {!! Form::text('flujo_q_4', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'maxlength' => 255,
                        'placeholder' => '...',
                    ]) !!}
                </div>
                {{-- Alpine periodicidad flujo --}}
                <div class="form-group col-sm-12">
                    <label for="tipo_conteo" class="required"><i class="fa-solid fa-calendar-days iconos-crear"></i>5.
                        ¿Con
                        que periodicidad recibe esta información para llevar a cabo el proceso?:</label>
                </div>
                <div class="form-group col-sm-12">
                    <div class="col-sm-2 form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="periodicidad_diario" value="0">
                        <input class="form-check-input" type="checkbox" name="periodicidad_diario" value="1"
                            {{ old('periodicidad_diario', $cuestionario->periodicidad_diario) == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio1">Diario</label>
                    </div>
                    <div class="col-sm-2 form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="periodicidad_quincenal" value="0">
                        <input class="form-check-input" type="checkbox" name="periodicidad_quincenal" value="1"
                            {{ old('periodicidad_quincenal', $cuestionario->periodicidad_quincenal) == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio2">Quincenal</label>
                    </div>
                    <div class="col-sm-2 form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="periodicidad_mensual" value="0">
                        <input class="form-check-input" type="checkbox" name="periodicidad_mensual" value="1"
                            {{ old('periodicidad_mensual', $cuestionario->periodicidad_mensual) == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio3">Mensual</label>
                    </div>
                    <div class="col-sm-2 form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="periodicidad_otro" value="0">
                        <input class="form-check-input" type="checkbox" name="periodicidad_otro" value="1"
                            x-model="periodicidad_flujo"
                            {{ old('periodicidad_otro', $cuestionario->periodicidad_otro) == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio3">Otro: </label>
                    </div>
                </div>
                {{--  --}}
                <div class="form-group col-sm-12" x-show="periodicidad_flujo">
                    <input type="text" class="form-control" name="periodicidad_flujo_txt" placeholder="Defina"
                        x-bind:disabled="!periodicidad_flujo">
                </div>

                <div class="form-group col-sm-12">
                    <i class="fas fa-id-card iconos-crear"></i>{!! Form::label(
                        'flujo_q_6',
                        '6.	¿Qué información obtiene al finalizar el proceso? (Documentos, Correo electrónico, Oficios, Reportes, etc.)',
                        ['class' => 'required'],
                    ) !!}
                    {!! Form::text('flujo_q_6', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'maxlength' => 255,
                        'placeholder' => '...',
                    ]) !!}
                </div>
                <div class="form-group col-sm-12">
                    <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('flujo_q_7', '7.	¿Este es un proceso final o genera información para iniciar otro proceso?', [
                        'class' => 'required',
                    ]) !!}
                    {!! Form::text('flujo_q_7', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'maxlength' => 255,
                        'placeholder' => '...',
                    ]) !!}
                </div>
                <div class="form-group col-sm-12">
                    <i class="fas fa-id-card iconos-crear"></i>{!! Form::label(
                        'flujo_q_8',
                        '8.	¿A dónde envía la información generada en el proceso? (Nombre de la Empresa / Nombre del Área / Nombre del Proceso / Nombre del Sistema)',
                        ['class' => 'required'],
                    ) !!}
                    {!! Form::text('flujo_q_8', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'maxlength' => 255,
                        'placeholder' => '...',
                    ]) !!}
                </div>

                {{-- livewire 9.¿Quién le recibe esta información? --}}
                @livewire('recibe-informacion', ['cuestionario_id' => $cuestionario->id])
                {{-- Termina livewire --}}

                <div class="form-group col-sm-12">
                    <i class="fas fa-id-card iconos-crear"></i>{!! Form::label(
                        'flujo_q_10',
                        '10.	¿Cómo valida que el proceso se realizó correctamente? (Carta o firma de aceptación, Acuse de Recibido, Notificación, etc..)',
                        ['class' => 'required'],
                    ) !!}
                    {!! Form::text('flujo_q_10', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'maxlength' => 255,
                        'placeholder' => '...',
                    ]) !!}
                </div>
                <div class="form-group col-sm-12"><label for="tipo_conteo" class="required"><i
                            class="fa-solid fa-calendar-days iconos-crear"></i>11. ¿Cuánto tiempo requiere para realizar el
                        proceso de inicio a fin?</label> </div>
                <div class="form-group col-sm-2">
                    {!! Form::label('flujo_años', 'Año(s)') !!}
                    {!! Form::number('flujo_años', null, [
                        'class' => 'form-control',
                        'placeholder' => '...',
                    ]) !!}
                </div>

                <div class="form-group col-sm-2">
                    {!! Form::label('flujo_meses', 'Mes(es)') !!}
                    {!! Form::number('flujo_meses', null, [
                        'class' => 'form-control',
                        'placeholder' => '...',
                    ]) !!}
                </div>
                <div class="form-group col-sm-2">
                    {!! Form::label('flujo_semanas', 'Semana(s)') !!}
                    {!! Form::number('flujo_semanas', null, [
                        'class' => 'form-control',
                        'placeholder' => '...',
                    ]) !!}
                </div>
                <div class="form-group col-sm-2">
                    {!! Form::label('flujo_dias', 'Día(s)') !!}
                    {!! Form::number('flujo_dias', null, [
                        'class' => 'form-control',
                        'placeholder' => '...',
                    ]) !!}
                </div>
                <div class="form-group col-sm-4">
                    {!! Form::label('flujo_otro_txt', 'Otro') !!}
                    {!! Form::text('flujo_otro_txt', null, [
                        'class' => 'form-control',
                        'placeholder' => 'Defina..',
                    ]) !!}
                </div>
            </div>
            <!-- INFRAESTRUCTURA TECNOLÓGICA (inciso b Anexo 67)-->
            <div class="row">
                <div class="text-center form-group col-12 mt-4"
                    style="background-color:#345183; border-radius: 100px; color: white;">
                    INFRAESTRUCTURA TECNOLÓGICA (inciso b Anexo 67)
                </div>
            </div>
            <div class="row">
                    {{-- livewire  INFRAESTRUCTURA TECNOLÓGICA --}}
                    @livewire('infraestructura-tecnologica', ['cuestionario_id' => $cuestionario->id])
                    {{-- Termina livewire --}}
            </div>

             <!-- RECURSOS HUMANOS (inciso b Anexo67)-->
             <div class="row">
                <div class="text-center form-group col-12 mt-4"
                    style="background-color:#345183; border-radius: 100px; color: white;">
                    RECURSOS HUMANOS (inciso b Anexo67)
                </div>
            </div>
            <div class="row">
                    {{-- livewire RECURSOS HUMANOS (inciso b Anexo67) --}}
                    @livewire('recursos-humanos', ['cuestionario_id' => $cuestionario->id])
                    {{-- Termina livewire --}}
            </div>


            <!-- Submit Field -->
            <div class="row">
                <div class="text-right form-group col-12">
                    <a href="{{ redirect()->getUrlGenerator()->previous() }}" class="btn_cancelar">Cancelar</a>
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </div>


            {!! Form::close() !!}
        </div>
    </div>
@endsection
