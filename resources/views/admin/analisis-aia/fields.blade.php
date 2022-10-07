<!-- DATOS DE IDENTIFICACIÓN DEL ENTREVISTADO  -->
<div class="row">
    <div class="text-center form-group col-12" style="background-color:#345183; border-radius: 100px; color: white;">
        DATOS DE IDENTIFICACIÓN DEL ENTREVISTADO
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-6">
        <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('fecha_entrevista', 'Fecha de la entrevista:', ['class' => 'required']) !!}
        {!! Form::date('fecha_entrevista', null, [
            'class' => 'form-control',
        ]) !!}
    </div>
    <div class="form-group col-sm-12">
        <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('entrevistado', 'Entrevistado:', ['class' => 'required']) !!}
        {!! Form::text('entrevistado', null, [
            'class' => 'form-control',
            'maxlength' => 255,
            'maxlength' => 255,
            'placeholder' => '...',
        ]) !!}
    </div>

    <div class="form-group col-sm-12">
        <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('puesto', 'Puesto:', ['class' => 'required']) !!}
        {!! Form::text('puesto', null, [
            'class' => 'form-control',
            'maxlength' => 255,
            'maxlength' => 255,
            'placeholder' => '...',
        ]) !!}
    </div>

    <div class="form-group col-sm-12">
        <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('area', 'Área:', ['class' => 'required']) !!}
        {!! Form::text('area', null, [
            'class' => 'form-control',
            'maxlength' => 255,
            'maxlength' => 255,
            'placeholder' => '...',
        ]) !!}
    </div>

    <div class="form-group col-sm-6">
        <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('extencion', 'Extensión:', ['class' => 'required']) !!}
        {!! Form::number('extencion', null, [
            'class' => 'form-control',
            'placeholder' => '...',
        ]) !!}
    </div>

    <div class="form-group col-sm-6">
        <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('correo', 'Correo:', ['class' => 'required']) !!}
        {!! Form::email('correo', null, [
            'class' => 'form-control',
            'maxlength' => 255,
            'maxlength' => 255,
            'placeholder' => '...',
        ]) !!}
    </div>

    <div class="form-group col-sm-12">
        <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('aplicaciones_a_cargo', 'Aplicaciones a su cargo::', ['class' => 'required']) !!}
        {!! Form::text('aplicaciones_a_cargo', null, [
            'class' => 'form-control',
            'maxlength' => 255,
            'maxlength' => 255,
            'placeholder' => '...',
        ]) !!}
    </div>
</div>
<!-- DATOS DE IDENTIFICACIÓN DEL PROCESO  -->
<div class="row">
    <div class="text-center form-group col-12" style="background-color:#345183; border-radius: 100px; color: white;">
        DATOS DE IDENTIFICACIÓN DE LA APLICACIÓN
    </div>
</div>

<div class="row" x-data="{ periodicidad: false }">
    <div class="form-group col-sm-8">
        <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('id_aplicacion', 'ID de la Aplicación:', ['class' => 'required']) !!}
        {!! Form::text('id_aplicacion', null, [
            'class' => 'form-control',
            'maxlength' => 255,
            'maxlength' => 255,
            'placeholder' => '...',
        ]) !!}
    </div>

    <div class="form-group col-sm-4">
        <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('version', 'Versión:', ['class' => 'required']) !!}
        {!! Form::text('version', null, [
            'class' => 'form-control',
            'maxlength' => 255,
            'maxlength' => 255,
            'placeholder' => '...',
        ]) !!}
    </div>

    <div class="form-group col-sm-8">
        <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('nombre_aplicacion', 'Nombre de la Aplicación:', ['class' => 'required']) !!}
        {!! Form::text('nombre_aplicacion', null, [
            'class' => 'form-control',
            'maxlength' => 255,
            'maxlength' => 255,
            'placeholder' => '...',
        ]) !!}
    </div>


    <div class="form-group col-sm-12">
        <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('objetivo_aplicacion', 'Objetivo de la Aplicación:', ['class' => 'required']) !!}
        {!! Form::text('objetivo_aplicacion', null, [
            'class' => 'form-control',
            'maxlength' => 255,
            'maxlength' => 255,
            'placeholder' => '...',
        ]) !!}
    </div>


    <div class="form-group col-sm-12">
        <label for="tipo_conteo" class="required"><i class="fa-solid fa-calendar-days iconos-crear"></i>Periodicidad con
            que se genera:</label>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2 form-check form-check-inline">
            <input class="form-check-input" type="radio" name="periodicidad" value="1"  @click="periodicidad = false" {{ old('periodicidad_mensual',$cuestionario->periodicidad) == '1' ? 'checked' : '' }}>
            <label class="form-check-label" for="inlineRadio1">Diario</label>
        </div>
        <div class="col-sm-2 form-check form-check-inline">
            <input class="form-check-input" type="radio" name="periodicidad" value="2"  @click="periodicidad = false" {{ old('periodicidad_mensual',$cuestionario->periodicidad) == '2' ? 'checked' : '' }}>
            <label class="form-check-label" for="inlineRadio2">Semanal</label>
        </div>
        <div class="col-sm-2 form-check form-check-inline">
            <input class="form-check-input" type="radio" name="periodicidad" value="3"  @click="periodicidad = false" {{ old('periodicidad_mensual',$cuestionario->periodicidad) == '3' ? 'checked' : '' }}>
            <label class="form-check-label" for="inlineRadio3">Mensual</label>
        </div>
        <div class="col-sm-2 form-check form-check-inline">
            <input class="form-check-input" type="radio" name="periodicidad" value="4"
                @click="periodicidad = true" {{ old('periodicidad_mensual',$cuestionario->periodicidad) == '4' ? 'checked' : '' }}>
            <label class="form-check-label" for="inlineRadio3">Otro: </label>
        </div>
    </div>

    <div class="form-group col-sm-12" x-show="periodicidad">
        <input type="text" class="form-control" name="p_otro_txt" placeholder="Defina" x-bind:disabled="!periodicidad">
    </div>

    <div class="form-group col-sm-12">
        <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('area_pertenece_aplicacion', 'Área a la que pertenece la Aplicación:', ['class' => 'required']) !!}
        {!! Form::text('area_pertenece_aplicacion', null, [
            'class' => 'form-control',
            'maxlength' => 255,
            'maxlength' => 255,
            'placeholder' => '...',
        ]) !!}
    </div>

    <div class="form-group col-sm-12">
        <i class="fas fa-id-card iconos-crear"></i>{!! Form::label('area_responsable_aplicacion', 'Área responsable del uso de la Aplicación:', ['class' => 'required']) !!}
        {!! Form::text('area_responsable_aplicacion', null, [
            'class' => 'form-control',
            'maxlength' => 255,
            'maxlength' => 255,
            'placeholder' => '...',
        ]) !!}
    </div>
</div>

