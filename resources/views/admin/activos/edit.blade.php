@extends('layouts.admin')
@section('content')

<div class="mt-4 card">
    <div class="py-3 col-md-10 col-sm-9 card-body azul_silent align-self-center" style="margin-top: -40px;">
        <h3 class="mb-1 text-center text-white"><strong> Editar: </strong> Alta de Activo </h3>
    </div>

    <div class="card-body">
        <form method="POST" class="row" action="{{ route("admin.activos.update", [$activo->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group col-md-12">
                <label for="nombreactivo_id"><i class="fas fa-chart-line iconos-crear"></i>Nombre del Activo</label>
                <input class="form-control select2 {{ $errors->has('nombre_activo') ? 'is-invalid' : '' }}" name="nombre_activo" id="nombre_activo" value={{ old('nombre_activo', $activo->nombre_activo) }} >
                @if($errors->has('nombre_activo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nombre_activo') }}
                    </div>
                @endif
                  <span class="help-block"></span>
            </div>


            <div class="form-group col-md-6">
                <label for="tipoactivo_id"><i class="fas fa-layer-group iconos-crear"></i>Categoría</label>
                <select class="form-control select2 {{ $errors->has('tipoactivo') ? 'is-invalid' : '' }}" name="tipoactivo_id" id="tipoactivo_id">
                    @foreach($tipoactivos as $id => $tipoactivo)
                        <option value="{{ $id }}" {{ (old('tipoactivo_id') ? old('tipoactivo_id') : $activo->tipoactivo->id ?? '') == $id ? 'selected' : '' }}>{{ $tipoactivo }}</option>
                    @endforeach
                </select>
                @if($errors->has('tipoactivo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tipoactivo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.activo.fields.tipoactivo_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label for="subtipo_id"><i class="fas fa-adjust iconos-crear"></i>Subcategoría</label>
                <select class="form-control select2 {{ $errors->has('subtipo') ? 'is-invalid' : '' }}" name="subtipo_id" id="subtipo_id">
                    @foreach($subtipos as $id => $subtipo)
                        <option value="{{ $id }}" {{ (old('subtipo_id') ? old('subtipo_id') : $activo->subtipo->id ?? '') == $id ? 'selected' : '' }}>{{ $subtipo }}</option>
                    @endforeach
                </select>
                @if($errors->has('subtipo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('subtipo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.activo.fields.subtipo_helper') }}</span>
            </div>
            <div class="form-group col-12">
                <label for="descripcion"><i class="fas fa-align-left iconos-crear"></i>{{ trans('cruds.activo.fields.descripcion') }}</label>
                <textarea class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}" name="descripcion" id="descripcion">{{ old('descripcion', $activo->descripcion) }}</textarea>
                @if($errors->has('descripcion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('descripcion') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.activo.fields.descripcion_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label for="dueno_id"><i class="fas fa-user-tie iconos-crear"></i>{{ trans('cruds.activo.fields.dueno') }}</label>
                <select class="form-control select2 {{ $errors->has('dueno') ? 'is-invalid' : '' }}" name="dueno_id" id="dueno_id">
                    @foreach($duenos as $id => $dueno)
                        <option value="{{ $id }}" {{ (old('dueno_id') ? old('dueno_id') : $activo->dueno->id ?? '') == $id ? 'selected' : '' }}>{{ $dueno }}</option>
                    @endforeach
                </select>
                @if($errors->has('dueno'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dueno') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.activo.fields.dueno_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label for="ubicacion_id"><i class="fas fa-map-marker-alt iconos-crear"></i>{{ trans('cruds.activo.fields.ubicacion') }}</label>
                <select class="form-control select2 {{ $errors->has('ubicacion') ? 'is-invalid' : '' }}" name="ubicacion_id" id="ubicacion_id">
                    @foreach($ubicacions as $id => $ubicacion)
                        <option value="{{ $id }}" {{ (old('ubicacion_id') ? old('ubicacion_id') : $activo->ubicacion->id ?? '') == $id ? 'selected' : '' }}>{{ $ubicacion }}</option>
                    @endforeach
                </select>
                @if($errors->has('ubicacion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ubicacion') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.activo.fields.ubicacion_helper') }}</span>
            </div>
            <div class="text-right form-group col-12">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
