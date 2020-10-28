@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.competencium.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.competencia.update", [$competencium->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="nombrecolaborador_id">{{ trans('cruds.competencium.fields.nombrecolaborador') }}</label>
                <select class="form-control select2 {{ $errors->has('nombrecolaborador') ? 'is-invalid' : '' }}" name="nombrecolaborador_id" id="nombrecolaborador_id" required>
                    @foreach($nombrecolaboradors as $id => $nombrecolaborador)
                        <option value="{{ $id }}" {{ (old('nombrecolaborador_id') ? old('nombrecolaborador_id') : $competencium->nombrecolaborador->id ?? '') == $id ? 'selected' : '' }}>{{ $nombrecolaborador }}</option>
                    @endforeach
                </select>
                @if($errors->has('nombrecolaborador'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nombrecolaborador') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competencium.fields.nombrecolaborador_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="perfilpuesto">{{ trans('cruds.competencium.fields.perfilpuesto') }}</label>
                <input class="form-control {{ $errors->has('perfilpuesto') ? 'is-invalid' : '' }}" type="text" name="perfilpuesto" id="perfilpuesto" value="{{ old('perfilpuesto', $competencium->perfilpuesto) }}">
                @if($errors->has('perfilpuesto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('perfilpuesto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competencium.fields.perfilpuesto_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="certificados">{{ trans('cruds.competencium.fields.certificados') }}</label>
                <div class="needsclick dropzone {{ $errors->has('certificados') ? 'is-invalid' : '' }}" id="certificados-dropzone">
                </div>
                @if($errors->has('certificados'))
                    <div class="invalid-feedback">
                        {{ $errors->first('certificados') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competencium.fields.certificados_helper') }}</span>
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

@section('scripts')
<script>
    var uploadedCertificadosMap = {}
Dropzone.options.certificadosDropzone = {
    url: '{{ route('admin.competencia.storeMedia') }}',
    maxFilesize: 4, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 4
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="certificados[]" value="' + response.name + '">')
      uploadedCertificadosMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedCertificadosMap[file.name]
      }
      $('form').find('input[name="certificados[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($competencium) && $competencium->certificados)
          var files =
            {!! json_encode($competencium->certificados) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="certificados[]" value="' + file.file_name + '">')
            }
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