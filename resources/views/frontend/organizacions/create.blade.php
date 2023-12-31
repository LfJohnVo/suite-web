@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.organizacion.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("organizacions.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="empresa">{{ trans('cruds.organizacion.fields.empresa') }}</label>
                            <input class="form-control" type="text" name="empresa" id="empresa" value="{{ old('empresa', '') }}" required>
                            @if($errors->has('empresa'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('empresa') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.organizacion.fields.empresa_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="direccion">{{ trans('cruds.organizacion.fields.direccion') }}</label>
                            <textarea class="form-control" name="direccion" id="direccion" required>{{ old('direccion') }}</textarea>
                            @if($errors->has('direccion'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('direccion') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.organizacion.fields.direccion_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="telefono">{{ trans('cruds.organizacion.fields.telefono') }}</label>
                            <input class="form-control" type="number" name="telefono" id="telefono" value="{{ old('telefono', '') }}" step="1">
                            @if($errors->has('telefono'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('telefono') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.organizacion.fields.telefono_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="correo">{{ trans('cruds.organizacion.fields.correo') }}</label>
                            <input class="form-control" type="email" name="correo" id="correo" value="{{ old('correo') }}">
                            @if($errors->has('correo'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('correo') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.organizacion.fields.correo_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="pagina_web">{{ trans('cruds.organizacion.fields.pagina_web') }}</label>
                            <input class="form-control" type="text" name="pagina_web" id="pagina_web" value="{{ old('pagina_web', '') }}">
                            @if($errors->has('pagina_web'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('pagina_web') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.organizacion.fields.pagina_web_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="giro">{{ trans('cruds.organizacion.fields.giro') }}</label>
                            <input class="form-control" type="text" name="giro" id="giro" value="{{ old('giro', '') }}">
                            @if($errors->has('giro'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('giro') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.organizacion.fields.giro_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="servicios">{{ trans('cruds.organizacion.fields.servicios') }}</label>
                            <input class="form-control" type="text" name="servicios" id="servicios" value="{{ old('servicios', '') }}">
                            @if($errors->has('servicios'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('servicios') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.organizacion.fields.servicios_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="mision">{{ trans('cruds.organizacion.fields.mision') }}</label>
                            <textarea class="form-control" name="mision" id="mision">{{ old('mision') }}</textarea>
                            @if($errors->has('mision'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('mision') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.organizacion.fields.mision_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="vision">{{ trans('cruds.organizacion.fields.vision') }}</label>
                            <textarea class="form-control" name="vision" id="vision">{{ old('vision') }}</textarea>
                            @if($errors->has('vision'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('vision') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.organizacion.fields.vision_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="valores">{{ trans('cruds.organizacion.fields.valores') }}</label>
                            <textarea class="form-control" name="valores" id="valores">{{ old('valores') }}</textarea>
                            @if($errors->has('valores'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('valores') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.organizacion.fields.valores_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="logotipo">{{ trans('cruds.organizacion.fields.logotipo') }}</label>
                            <div class="needsclick dropzone" id="logotipo-dropzone">
                            </div>
                            @if($errors->has('logotipo'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('logotipo') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.organizacion.fields.logotipo_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.logotipoDropzone = {
    url: '{{ route('admin.organizacions.storeMedia') }}',
    maxFilesize: 4, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 4,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="logotipo"]').remove()
      $('form').append('<input type="hidden" name="logotipo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logotipo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($organizacion) && $organizacion->logotipo)
      var file = {!! json_encode($organizacion->logotipo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logotipo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection
