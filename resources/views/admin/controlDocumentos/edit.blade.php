@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} Control de documento
        </div>
        <div class="card-body">
            <h6>Nombre del documento: <strong>{{ $controlDocumento->nombre }}</strong> </h6>
            <h6>Versión actual: <strong>{{ $controlDocumento->version }}</strong></h6>
            <h6>Estado: <strong>{{ $controlDocumento->estado->descripcion }}</strong></h6>
            <form method="POST" action="{{ route('admin.control-documentos.update', [$controlDocumento->id]) }}"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="clave">{{ trans('cruds.controlDocumento.fields.clave') }}</label>
                    <input class="form-control {{ $errors->has('clave') ? 'is-invalid' : '' }}" type="text" name="clave"
                        id="clave" value="{{ old('clave', $controlDocumento->clave) }}">
                    @if ($errors->has('clave'))
                        <div class="invalid-feedback">
                            {{ $errors->first('clave') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.controlDocumento.fields.clave_helper') }}</span>
                </div>
                {{-- <div class="form-group">
                    <label for="nombre">{{ trans('cruds.controlDocumento.fields.nombre') }}</label>
                    <input class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" type="text" name="nombre"
                        id="nombre" value="{{ old('nombre', $controlDocumento->nombre) }}" readonly>
                    @if ($errors->has('nombre'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nombre') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.controlDocumento.fields.nombre_helper') }}</span>
                </div> --}}
                <div class="form-group">
                    <label for="fecha_creacion">{{ trans('cruds.controlDocumento.fields.fecha_creacion') }}</label>
                    <input class="form-control date {{ $errors->has('fecha_creacion') ? 'is-invalid' : '' }}" type="date"
                        name="fecha_creacion" id="fecha_creacion"
                        value="{{ old('fecha_creacion', $controlDocumento->fecha_creacion) }}">
                    @if ($errors->has('fecha_creacion'))
                        <div class="invalid-feedback">
                            {{ $errors->first('fecha_creacion') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.controlDocumento.fields.fecha_creacion_helper') }}</span>
                </div>
                {{-- <div class="form-group">
                    <label for="version">{{ trans('cruds.controlDocumento.fields.version') }}</label>
                    <input class="form-control {{ $errors->has('version') ? 'is-invalid' : '' }}" type="text"
                        name="version" id="version" value="{{ old('version', $controlDocumento->version) }}" readonly>
                    @if ($errors->has('version'))
                        <div class="invalid-feedback">
                            {{ $errors->first('version') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.controlDocumento.fields.version_helper') }}</span>
                </div> --}}
                <div class="form-group">
                    <label for="elaboro_id">{{ trans('cruds.controlDocumento.fields.elaboro') }}</label>
                    <select class="form-control select2 {{ $errors->has('elaboro') ? 'is-invalid' : '' }}"
                        name="elaboro_id" id="elaboro_id">
                        @foreach ($elaboros as $id => $elaboro)
                            <option value="{{ $id }}"
                                {{ (old('elaboro_id') ? old('elaboro_id') : $controlDocumento->elaboro->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $elaboro }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('elaboro'))
                        <div class="invalid-feedback">
                            {{ $errors->first('elaboro') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.controlDocumento.fields.elaboro_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="reviso_id">{{ trans('cruds.controlDocumento.fields.reviso') }}</label>
                    <select class="form-control select2 {{ $errors->has('reviso') ? 'is-invalid' : '' }}"
                        name="reviso_id" id="reviso_id">
                        @foreach ($revisos as $id => $reviso)
                            <option value="{{ $id }}"
                                {{ (old('reviso_id') ? old('reviso_id') : $controlDocumento->reviso->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $reviso }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('reviso'))
                        <div class="invalid-feedback">
                            {{ $errors->first('reviso') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.controlDocumento.fields.reviso_helper') }}</span>
                </div>
                {{-- <div class="form-group">
                    <label for="estado_id">{{ trans('cruds.controlDocumento.fields.estado') }}</label>
                    <select class="form-control select2 {{ $errors->has('estado') ? 'is-invalid' : '' }}"
                        name="estado_id" id="estado_id" disabled>
                        @foreach ($estados as $id => $estado)
                            <option value="{{ $id }}"
                                {{ (old('estado_id') ? old('estado_id') : $controlDocumento->estado->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $estado }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('estado'))
                        <div class="invalid-feedback">
                            {{ $errors->first('estado') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.controlDocumento.fields.estado_helper') }}</span>
                </div> --}}
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>



@endsection
