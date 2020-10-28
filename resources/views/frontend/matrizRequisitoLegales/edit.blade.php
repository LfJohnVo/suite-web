@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.matrizRequisitoLegale.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.matriz-requisito-legales.update", [$matrizRequisitoLegale->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="nombrerequisito">{{ trans('cruds.matrizRequisitoLegale.fields.nombrerequisito') }}</label>
                            <input class="form-control" type="text" name="nombrerequisito" id="nombrerequisito" value="{{ old('nombrerequisito', $matrizRequisitoLegale->nombrerequisito) }}" required>
                            @if($errors->has('nombrerequisito'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nombrerequisito') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.matrizRequisitoLegale.fields.nombrerequisito_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="fechaexpedicion">{{ trans('cruds.matrizRequisitoLegale.fields.fechaexpedicion') }}</label>
                            <input class="form-control date" type="text" name="fechaexpedicion" id="fechaexpedicion" value="{{ old('fechaexpedicion', $matrizRequisitoLegale->fechaexpedicion) }}">
                            @if($errors->has('fechaexpedicion'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('fechaexpedicion') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.matrizRequisitoLegale.fields.fechaexpedicion_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="fechavigor">{{ trans('cruds.matrizRequisitoLegale.fields.fechavigor') }}</label>
                            <input class="form-control date" type="text" name="fechavigor" id="fechavigor" value="{{ old('fechavigor', $matrizRequisitoLegale->fechavigor) }}">
                            @if($errors->has('fechavigor'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('fechavigor') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.matrizRequisitoLegale.fields.fechavigor_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="requisitoacumplir">{{ trans('cruds.matrizRequisitoLegale.fields.requisitoacumplir') }}</label>
                            <input class="form-control" type="text" name="requisitoacumplir" id="requisitoacumplir" value="{{ old('requisitoacumplir', $matrizRequisitoLegale->requisitoacumplir) }}">
                            @if($errors->has('requisitoacumplir'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('requisitoacumplir') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.matrizRequisitoLegale.fields.requisitoacumplir_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('cruds.matrizRequisitoLegale.fields.cumplerequisito') }}</label>
                            <select class="form-control" name="cumplerequisito" id="cumplerequisito">
                                <option value disabled {{ old('cumplerequisito', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\MatrizRequisitoLegale::CUMPLEREQUISITO_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('cumplerequisito', $matrizRequisitoLegale->cumplerequisito) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('cumplerequisito'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cumplerequisito') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.matrizRequisitoLegale.fields.cumplerequisito_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="formacumple">{{ trans('cruds.matrizRequisitoLegale.fields.formacumple') }}</label>
                            <input class="form-control" type="text" name="formacumple" id="formacumple" value="{{ old('formacumple', $matrizRequisitoLegale->formacumple) }}">
                            @if($errors->has('formacumple'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('formacumple') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.matrizRequisitoLegale.fields.formacumple_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="periodicidad_cumplimiento">{{ trans('cruds.matrizRequisitoLegale.fields.periodicidad_cumplimiento') }}</label>
                            <input class="form-control" type="text" name="periodicidad_cumplimiento" id="periodicidad_cumplimiento" value="{{ old('periodicidad_cumplimiento', $matrizRequisitoLegale->periodicidad_cumplimiento) }}">
                            @if($errors->has('periodicidad_cumplimiento'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('periodicidad_cumplimiento') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.matrizRequisitoLegale.fields.periodicidad_cumplimiento_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="fechaverificacion">{{ trans('cruds.matrizRequisitoLegale.fields.fechaverificacion') }}</label>
                            <input class="form-control date" type="text" name="fechaverificacion" id="fechaverificacion" value="{{ old('fechaverificacion', $matrizRequisitoLegale->fechaverificacion) }}">
                            @if($errors->has('fechaverificacion'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('fechaverificacion') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.matrizRequisitoLegale.fields.fechaverificacion_helper') }}</span>
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