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
                    <form method="POST" action="{{ route("frontend.estado-incidentes.update", [$estadoIncidente->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="estado">{{ trans('cruds.estadoIncidente.fields.estado') }}</label>
                            <input class="form-control" type="text" name="estado" id="estado" value="{{ old('estado', $estadoIncidente->estado) }}" required>
                            @if($errors->has('estado'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('estado') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.estadoIncidente.fields.estado_helper') }}</span>
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
