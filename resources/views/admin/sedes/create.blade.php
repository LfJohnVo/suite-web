@extends('layouts.admin')
@section('content')

<div class="card mt-4">
    <div class="col-md-10 col-sm-9 py-3 card-body verde_silent align-self-center" style="margin-top: -40px;">
        <h3 class="mb-1  text-center text-white"><strong> Registrar: </strong> Sede</h3>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sedes.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="sede"><i class="fas fa-building iconos-crear"></i>{{ trans('cruds.sede.fields.sede') }}</label>
                <input class="form-control {{ $errors->has('sede') ? 'is-invalid' : '' }}" type="text" name="sede" id="sede" value="{{ old('sede', '') }}" required>
                @if($errors->has('sede'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sede') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sede.fields.sede_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="descripcion"><i class="fas fa-file-signature iconos-crear"></i>{{ trans('cruds.sede.fields.descripcion') }}</label>
                <textarea class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}" name="descripcion" id="descripcion">{{ old('descripcion') }}</textarea>
                @if($errors->has('descripcion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('descripcion') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sede.fields.descripcion_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="organizacion_id"><i class="fas fa-building iconos-crear"></i>{{ trans('cruds.sede.fields.organizacion') }}</label>
                <select class="form-control select2 {{ $errors->has('organizacion') ? 'is-invalid' : '' }}" name="organizacion_id" id="organizacion_id">
                    @foreach($organizacions as $id => $organizacion)
                        <option value="{{ $id }}" {{ old('organizacion_id') == $id ? 'selected' : '' }}>{{ $organizacion }}</option>
                    @endforeach
                </select>
                @if($errors->has('organizacion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organizacion') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sede.fields.organizacion_helper') }}</span>
            </div>
            <div class="form-group col-12 text-right" style="margin-left:15px;">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
