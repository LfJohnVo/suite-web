@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.glosario.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.glosarios.update", [$glosario->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="concepto">{{ trans('cruds.glosario.fields.concepto') }}</label>
                            <input class="form-control" type="text" name="concepto" id="concepto" value="{{ old('concepto', $glosario->concepto) }}" required>
                            @if($errors->has('concepto'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('concepto') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.glosario.fields.concepto_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="definicion">{{ trans('cruds.glosario.fields.definicion') }}</label>
                            <textarea class="form-control" name="definicion" id="definicion">{{ old('definicion', $glosario->definicion) }}</textarea>
                            @if($errors->has('definicion'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('definicion') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.glosario.fields.definicion_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="explicacion">{{ trans('cruds.glosario.fields.explicacion') }}</label>
                            <textarea class="form-control" name="explicacion" id="explicacion">{{ old('explicacion', $glosario->explicacion) }}</textarea>
                            @if($errors->has('explicacion'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('explicacion') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.glosario.fields.explicacion_helper') }}</span>
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