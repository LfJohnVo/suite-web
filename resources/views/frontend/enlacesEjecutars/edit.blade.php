@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

          <div class="card mt-4">
              <div class="col-md-10 col-sm-9 py-3 card-body azul_silent align-self-center" style="margin-top: -40px;">
                  <h3 class="mb-1  text-center text-white"><strong> Editar: </strong> Matriz de Riesgo </h3>
              </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.enlaces-ejecutars.update", [$enlacesEjecutar->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="ejecutar">{{ trans('cruds.enlacesEjecutar.fields.ejecutar') }}</label>
                            <input class="form-control" type="text" name="ejecutar" id="ejecutar" value="{{ old('ejecutar', $enlacesEjecutar->ejecutar) }}">
                            @if($errors->has('ejecutar'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ejecutar') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.enlacesEjecutar.fields.ejecutar_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">{{ trans('cruds.enlacesEjecutar.fields.descripcion') }}</label>
                            <input class="form-control" type="text" name="descripcion" id="descripcion" value="{{ old('descripcion', $enlacesEjecutar->descripcion) }}">
                            @if($errors->has('descripcion'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('descripcion') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.enlacesEjecutar.fields.descripcion_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="enlace">{{ trans('cruds.enlacesEjecutar.fields.enlace') }}</label>
                            <input class="form-control" type="text" name="enlace" id="enlace" value="{{ old('enlace', $enlacesEjecutar->enlace) }}">
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

        </div>
    </div>
</div>
@endsection
