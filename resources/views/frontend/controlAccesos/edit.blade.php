@extends('layouts.admin')
@section('content')

    {{ Breadcrumbs::render('admin.control-accesos.create') }}

<div class="card mt-4">
    <div class="col-md-10 col-sm-9 py-3 card-body azul_silent align-self-center" style="margin-top: -40px;">
        <h3 class="mb-1  text-center text-white"><strong> Editar: </strong> Control de Acceso </h3>
    </div>

    <div class="card-body">
        <form method="POST" class="row" action="{{ route("admin.control-accesos.update", [$controlAcceso->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group col-md-12">
                <label for="descripcion"><i class="fas fa-align-left iconos-crear"></i>{{ trans('cruds.controlAcceso.fields.descripcion') }}</label>
                <textarea class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}" name="descripcion" id="descripcion">{{ old('descripcion', $controlAcceso->descripcion) }}</textarea>
                @if($errors->has('descripcion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('descripcion') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.controlAcceso.fields.descripcion_helper') }}</span>
            </div>


            {{-- <div class="form-group col-md-12">
                <label for="archivo"><i class="far fa-file iconos-crear"></i>{{ trans('cruds.controlAcceso.fields.archivo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('archivo') ? 'is-invalid' : '' }}" id="archivo-dropzone">
                </div>
                @if($errors->has('archivo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('archivo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.controlAcceso.fields.archivo_helper') }}</span>
            </div> --}}

{{-- editar --}}
            <div class="mb-3 col-sm-12">
                <label for="archivo"><i class="fas fa-folder-open iconos-crear"></i>Material(Archivo PDF)</label>
                <div class="custom-file">
                    <input type="file" class="form-control" {{ $errors->has('archivo') ? 'is-invalid' : '' }}"
                        multiple id="archivo" name="files[]"
                        {{ old('archivo', $controlAcceso->controlA_id) }}>
                    @if ($errors->has('archivo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('archivo') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="mb-3 col-10 d-flex justify-content-right">
                <span class="float-right" type="button" class="pl-0 ml-0 btn text-primary" data-toggle="modal"
                    data-target="#largeModal">
                    <i class="mr-2 fas fa-file-download text-primary" style="font-size:14pt"></i>Descargar Documentos
                </span>
            </div>
{{-- editar --}}

            <div class="form-group col-12 text-right">
                <a href="{{ redirect()->getUrlGenerator()->previous() }}" class="btn_cancelar">Cancelar</a>
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <!-- carousel -->
                            <div id='carouselExampleIndicators' class='carousel slide' data-ride='carousel'>
                                <ol class='carousel-indicators'>
                                    @foreach($controlAcceso->documentos_controlA as $idx=>$controlA_id)
                                    <li data-target=#carouselExampleIndicators data-slide-to= {{$idx}}></li>

                                    @endforeach

                                </ol>
                                <div class='carousel-inner'>
                                    @foreach($controlAcceso->documentos_controlA as $idx=>$controlA_id)
                                    <div class='carousel-item {{$idx==0?"active":""}}'>
                                        <iframe style="width:100%;height:300px;" seamless class='img-size'
                                            src="{{ asset('storage/documetos_control_accesos') }}/{{$controlA_id->documento}}"></iframe>
                                    </div>
                                    @endforeach


                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <a style="height: 50px; top: 50px;" class='carousel-control-prev' href='#carouselExampleIndicators' role='button'
                                data-slide='prev'>
                                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                                <span class='sr-only'>Previous</span>
                            </a>
                            <a style="height: 50px; top: 50px;" class='carousel-control-next' href='#carouselExampleIndicators' role='button'
                                data-slide='next'>
                                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                                <span class='sr-only'>Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.archivoDropzone = {
    url: '{{ route('admin.control-accesos.storeMedia') }}',
    maxFilesize: 4, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 4
    },
    success: function (file, response) {
      $('form').find('input[name="archivo"]').remove()
      $('form').append('<input type="hidden" name="archivo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="archivo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($controlAcceso) && $controlAcceso->archivo)
      var file = {!! json_encode($controlAcceso->archivo) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="archivo" value="' + file.file_name + '">')
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