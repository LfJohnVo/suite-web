@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.indicadoresSgsi.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.indicadores-sgsis.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="control">{{ trans('cruds.indicadoresSgsi.fields.control') }}</label>
                            <input class="form-control" type="text" name="control" id="control" value="{{ old('control', '') }}" required>
                            @if($errors->has('control'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('control') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.control_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="titulo">{{ trans('cruds.indicadoresSgsi.fields.titulo') }}</label>
                            <input class="form-control" type="text" name="titulo" id="titulo" value="{{ old('titulo', '') }}">
                            @if($errors->has('titulo'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('titulo') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.titulo_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="responsable_id">{{ trans('cruds.indicadoresSgsi.fields.responsable') }}</label>
                            <select class="form-control select2" name="responsable_id" id="responsable_id">
                                @foreach($responsables as $id => $responsable)
                                    <option value="{{ $id }}" {{ old('responsable_id') == $id ? 'selected' : '' }}>{{ $responsable }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('responsable'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('responsable') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.responsable_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="formula">{{ trans('cruds.indicadoresSgsi.fields.formula') }}</label>
                            <textarea class="form-control" name="formula" id="formula">{{ old('formula') }}</textarea>
                            @if($errors->has('formula'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('formula') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.formula_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('cruds.indicadoresSgsi.fields.frecuencia') }}</label>
                            <select class="form-control" name="frecuencia" id="frecuencia">
                                <option value disabled {{ old('frecuencia', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\IndicadoresSgsi::FRECUENCIA_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('frecuencia', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('frecuencia'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('frecuencia') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.frecuencia_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('cruds.indicadoresSgsi.fields.unidadmedida') }}</label>
                            <select class="form-control" name="unidadmedida" id="unidadmedida">
                                <option value disabled {{ old('unidadmedida', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\IndicadoresSgsi::UNIDADMEDIDA_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('unidadmedida', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('unidadmedida'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('unidadmedida') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.unidadmedida_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="meta">{{ trans('cruds.indicadoresSgsi.fields.meta') }}</label>
                            <input class="form-control" type="text" name="meta" id="meta" value="{{ old('meta', '') }}">
                            @if($errors->has('meta'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('meta') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.meta_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('cruds.indicadoresSgsi.fields.semaforo') }}</label>
                            <select class="form-control" name="semaforo" id="semaforo">
                                <option value disabled {{ old('semaforo', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\IndicadoresSgsi::SEMAFORO_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('semaforo', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('semaforo'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('semaforo') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.semaforo_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="enero">{{ trans('cruds.indicadoresSgsi.fields.enero') }}</label>
                            <input class="form-control" type="number" name="enero" id="enero" value="{{ old('enero', '') }}" step="0.01" max="100">
                            @if($errors->has('enero'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('enero') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.enero_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="febrero">{{ trans('cruds.indicadoresSgsi.fields.febrero') }}</label>
                            <input class="form-control" type="number" name="febrero" id="febrero" value="{{ old('febrero', '') }}" step="0.01" max="100">
                            @if($errors->has('febrero'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('febrero') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.febrero_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="marzo">{{ trans('cruds.indicadoresSgsi.fields.marzo') }}</label>
                            <input class="form-control" type="number" name="marzo" id="marzo" value="{{ old('marzo', '') }}" step="0.01" max="100">
                            @if($errors->has('marzo'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('marzo') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.marzo_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="abril">{{ trans('cruds.indicadoresSgsi.fields.abril') }}</label>
                            <input class="form-control" type="number" name="abril" id="abril" value="{{ old('abril', '') }}" step="0.01" max="100">
                            @if($errors->has('abril'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('abril') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.abril_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="mayo">{{ trans('cruds.indicadoresSgsi.fields.mayo') }}</label>
                            <input class="form-control" type="number" name="mayo" id="mayo" value="{{ old('mayo', '') }}" step="0.01" max="100">
                            @if($errors->has('mayo'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('mayo') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.mayo_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="junio">{{ trans('cruds.indicadoresSgsi.fields.junio') }}</label>
                            <input class="form-control" type="number" name="junio" id="junio" value="{{ old('junio', '') }}" step="0.01" max="100">
                            @if($errors->has('junio'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('junio') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.junio_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="julio">{{ trans('cruds.indicadoresSgsi.fields.julio') }}</label>
                            <input class="form-control" type="number" name="julio" id="julio" value="{{ old('julio', '') }}" step="0.01" max="100">
                            @if($errors->has('julio'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('julio') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.julio_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="agosto">{{ trans('cruds.indicadoresSgsi.fields.agosto') }}</label>
                            <input class="form-control" type="number" name="agosto" id="agosto" value="{{ old('agosto', '') }}" step="0.01" max="100">
                            @if($errors->has('agosto'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('agosto') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.agosto_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="septiembre">{{ trans('cruds.indicadoresSgsi.fields.septiembre') }}</label>
                            <input class="form-control" type="number" name="septiembre" id="septiembre" value="{{ old('septiembre', '') }}" step="0.01" max="100">
                            @if($errors->has('septiembre'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('septiembre') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.septiembre_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="octubre">{{ trans('cruds.indicadoresSgsi.fields.octubre') }}</label>
                            <input class="form-control" type="number" name="octubre" id="octubre" value="{{ old('octubre', '') }}" step="0.01" max="100">
                            @if($errors->has('octubre'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('octubre') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.octubre_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="noviembre">{{ trans('cruds.indicadoresSgsi.fields.noviembre') }}</label>
                            <input class="form-control" type="number" name="noviembre" id="noviembre" value="{{ old('noviembre', '') }}" step="0.01" max="100">
                            @if($errors->has('noviembre'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('noviembre') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.noviembre_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="diciembre">{{ trans('cruds.indicadoresSgsi.fields.diciembre') }}</label>
                            <input class="form-control" type="number" name="diciembre" id="diciembre" value="{{ old('diciembre', '') }}" step="0.01" max="100">
                            @if($errors->has('diciembre'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('diciembre') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.diciembre_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="anio">{{ trans('cruds.indicadoresSgsi.fields.anio') }}</label>
                            <input class="form-control" type="text" name="anio" id="anio" value="{{ old('anio', '') }}">
                            @if($errors->has('anio'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('anio') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.indicadoresSgsi.fields.anio_helper') }}</span>
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