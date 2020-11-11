@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.enlacesEjecutar.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.enlaces-ejecutars.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="ejecutar">{{ trans('cruds.enlacesEjecutar.fields.ejecutar') }}</label>
                <input class="form-control {{ $errors->has('ejecutar') ? 'is-invalid' : '' }}" type="text" name="ejecutar" id="ejecutar" value="{{ old('ejecutar', '') }}">
                @if($errors->has('ejecutar'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ejecutar') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.enlacesEjecutar.fields.ejecutar_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="descripcion">{{ trans('cruds.enlacesEjecutar.fields.descripcion') }}</label>
                <input class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}" type="text" name="descripcion" id="descripcion" value="{{ old('descripcion', '') }}">
                @if($errors->has('descripcion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('descripcion') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.enlacesEjecutar.fields.descripcion_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="enlace">{{ trans('cruds.enlacesEjecutar.fields.enlace') }}</label>
                <input class="form-control {{ $errors->has('enlace') ? 'is-invalid' : '' }}" type="text" name="enlace" id="enlace" value="{{ old('enlace', '') }}">
                @if($errors->has('enlace'))
                    <div class="invalid-feedback">
                        {{ $errors->first('enlace') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.enlacesEjecutar.fields.enlace_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection