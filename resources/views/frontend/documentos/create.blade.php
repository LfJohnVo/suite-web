@extends('layouts.frontend')
@section('content')
    <style>
        .exists {
            border: 2px solid red !important;
        }

        .not-exists {
            border: 2px solid rgb(18, 250, 114) !important;
        }

        .input-code {
            border: 2px solid rgb(18, 118, 250) !important;
        }

        #existCode {
            font-weight: bold;
        }

        .select2-search--inline {
            margin-top: -20px !important;
        }

        .select2-search__field {
            margin-top: 28px !important;
            display: none !important;
        }

        .select2-selection__choice:not(:first-child) {
            margin-left: -1px !important;
        }

        .select2-selection__choice {
            border: none !important;
            margin-right: 0 !important;
            /* background: #00f4ff26 !important; */
        }

        .circulo {
            width: 35px;
            height: 35px;
            border-radius: 100%;
            border: 2px solid #098f94;
            position: relative;
            margin-right: 5px;
            margin-top: 8px;
        }

        .texto-circulo {
            position: absolute;
            top: 4px;
            right: 10px;
            color: #098f94;
        }

        .select-revisores .select2-selection {
            height: 50px !important;
        }

        .select-revisores .select2-selection,
        .select-revisores textarea {
            border: 2px solid #0b9095 !important;
            height: 50px !important;
        }

        .labels-publicacion {
            color: #0b9095 !important;
            font-weight: normal !important;
        }

        .titulo-modal {
            background: #0b9095;
            padding: 5px 10px;
            text-align: center;
            color: white;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .select2-selection__choice__remove {
            display: none;
        }

    </style>

    <div class="card">
        <div class="card-body">
            <div class="mb-4 text-center" style="background: #098f94; border-radius: 5px;">
                <h5 class="p-2 text-white">Crear Documento</h5>
            </div>
            <form id="formCrearDocumento" method="POST" action="{{ route('documentos.store') }}"
                enctype="multipart/form-data">
                @csrf
                @include('frontend.documentos._form')
                <div class="text-right form-group col-12">
                <a href="{{ route('documentos.index') }}" class="btn_cancelar">Cancelar</a>
                <input type="submit" class="btn btn-danger" value="Guardar">
                @can('documentos_publish')
                    <button id="publicar" class="btn btn-danger">Publicar</button>
                </div>
                @endcan
            </form>
            <!-- Modal -->
            <div class="modal fade" id="modalPublicar" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="modalPublicarLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        {{-- <div class="modal-header">
                            <h5 class="modal-title" id="modalPublicarLabel">Configuración de revisores (antes de solicitud
                                de aprobación)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div> --}}
                        <div class="modal-body">
                            <h5 class="titulo-modal">Publicar <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button></h5>
                            <form action="{{ route('documentos.publish') }}" id="formPublish"
                                enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-lg-6">
                                        <div class="mb-4">
                                            <h5 class="labels-publicacion">Aprobadores:</h5>
                                            <span>Indique quienes aprobarán el documento para que éste sea publicado.</span>
                                        </div>
                                        <div class="form-group">
                                            <div class="mb-3 d-flex select-revisores">
                                                <div class="circulo"><span class="texto-circulo">1</span></div>
                                                <select class="revisoresSelect" id="revisores1" name="revisores1[]"
                                                    multiple="multiple">
                                                    @foreach ($empleados as $empleado)
                                                        <option data-image="{{ $empleado->foto }}"
                                                            data-id-empleado="{{ $empleado->id }}"
                                                            data-gender="{{ $empleado->genero }}"
                                                            value="{{ $empleado->id }}">
                                                            {{ $empleado->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger" id="revisores1_error"></span>
                                            </div>
                                            <div class="mb-3 d-flex select-revisores">
                                                <div class="circulo"><span class="texto-circulo">2</span></div>
                                                <select class="revisoresSelect" id="revisores2" name="revisores2[]"
                                                    multiple="multiple">
                                                    @foreach ($empleados as $empleado)
                                                        <option data-image="{{ $empleado->foto }}"
                                                            data-id-empleado="{{ $empleado->id }}"
                                                            data-gender="{{ $empleado->genero }}"
                                                            value="{{ $empleado->id }}">
                                                            {{ $empleado->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger" id="revisores2_error"></span>
                                            </div>
                                            <div class="mb-3 d-flex select-revisores">
                                                <div class="circulo"><span class="texto-circulo">3</span></div>
                                                <select class="revisoresSelect" id="revisores3" name="revisores3[]"
                                                    multiple="multiple">
                                                    @foreach ($empleados as $empleado)
                                                        <option data-image="{{ $empleado->foto }}"
                                                            data-id-empleado="{{ $empleado->id }}"
                                                            data-gender="{{ $empleado->genero }}"
                                                            value="{{ $empleado->id }}">
                                                            {{ $empleado->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger" id="revisores3_error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <div class="form-group select-revisores">
                                                <label for="descripcion" class="labels-publicacion">Descripción
                                                    del cambio:</label>
                                                <textarea class="form-control" id="descripcion" name="descripcion"
                                                    rows="1"></textarea>
                                                <span class="text-danger" id="descripcion_error"></span>
                                            </div>
                                            <div class="form-group select-revisores">
                                                <label for="comentarios" class="labels-publicacion">Comentarios
                                                    adicionales:</label>
                                                <textarea class="form-control" id="comentarios" name="comentarios"
                                                    rows="1"></textarea>
                                                <span class="text-danger" id="comentarios_error"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                <a href="{{ redirect()->getUrlGenerator()->previous() }}" class="btn_cancelar">Cancelar</a>
                            <button type="button" id="finalizarPublicacion" class="btn btn-danger">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let guardarDocumento = null;
            let documentoCreado = null;
            $('select').select2({
                theme: 'bootstrap4',
            });

            $('select.empleado').select2({
                theme: 'bootstrap4',
                templateResult: formatState,
                templateSelection: formatState
            });

            $('.revisoresSelect').select2({
                theme: 'bootstrap4',
                templateResult: formatState,
                templateSelection: formatStateMulti
            });

            let tipoSelect = document.querySelector('#tipo');
            console.log(tipoSelect);
            $("#tipo").change(function(e) {
                e.preventDefault();
                let valor = e.target.value;
                console.log(valor);
                if (valor == 'proceso') {
                    $("#procesos select#proceso").attr('disabled', true);
                    $("#procesos").addClass('d-none');
                    $("#macroprocesos select#macroproceso").attr('disabled', false);
                    $("#macroprocesos").removeClass('d-none');
                } else {
                    $("#macroprocesos select#macroproceso").attr('disabled', true);
                    $("#macroprocesos").addClass('d-none');
                    $("#procesos select#proceso").attr('disabled', false);
                    $("#procesos").removeClass('d-none');
                }
            });

            document.querySelector('.custom-file-input').addEventListener('change', function(e) {
                var fileName = document.getElementById("archivo").files[0].name;
                var nextSibling = e.target.nextElementSibling
                nextSibling.innerText = fileName
            });

            let codigo = document.getElementById('codigo');
            let existSpan = document.getElementById('existCode');
            codigo.addEventListener('keyup', function(e) {
                e.preventDefault();
                let codigo = e.target.value;
                $.ajax({
                    type: "POST",
                    url: "{{ route('documentos.checkCode') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        codigo
                    },
                    dataType: "JSON",
                    beforeSend: function() {
                        e.target.classList.remove('exists');
                        e.target.classList.remove('not-exists');
                        existSpan.classList.remove('text-success');
                        existSpan.classList.remove('text-danger');
                        existSpan.classList.add('text-primary');
                        e.target.classList.add('input-code');
                        document.querySelector('span.codigo_error').innerHTML = "";
                        existSpan.innerHTML =
                            `<i class="fas fa-info-circle"></i> Buscando...`;
                    },
                    success: function(response) {
                        if (codigo == "") {
                            e.target.classList.remove('exists');
                            e.target.classList.remove('not-exists');
                            existSpan.classList.remove('text-success');
                            existSpan.classList.remove('text-danger');
                            existSpan.classList.add('text-primary');
                            e.target.classList.add('input-code');
                            existSpan.innerHTML =
                                `<i class="fas fa-info-circle"></i> Ingresa un código`;
                        } else {
                            if (response.exists) {
                                e.target.classList.remove('not-exists');
                                e.target.classList.remove('input-code');
                                e.target.classList.add('exists');
                                existSpan.classList.remove('text-success');
                                existSpan.classList.add('text-danger');
                                existSpan.innerHTML =
                                    `<i class="fas fa-times-circle"></i> Código existente`;
                            } else {
                                e.target.classList.remove('exists');
                                e.target.classList.remove('input-code');
                                e.target.classList.add('not-exists');
                                existSpan.classList.remove('text-danger');
                                existSpan.classList.add('text-success');
                                existSpan.innerHTML =
                                    `<i class="fas fa-check-circle"></i> Código disponible`;
                            }
                        }
                    }
                });
            });

            let publicarBtn = document.getElementById('publicar');
            publicarBtn.addEventListener('click', function(e) {
                e.preventDefault();

                let form = document.getElementById('formCrearDocumento');
                let data = new FormData(form);
                guardarDocumento = data;
                $.ajax({
                    type: "POST",
                    url: "{{ route('documentos.store') }}",
                    data: data,
                    processData: false,
                    contentType: false,
                    dataType: "JSON",
                    success: function(response) {
                        console.log(response);
                        // console.log("#formCrearDocumento");
                        if (response.success) {
                            let errores = document.querySelectorAll('span.error-ajax');
                            errores.forEach(element => {
                                element.innerHTML = "";
                            });
                            $('#modalPublicar').modal('show');
                            let reviso_id = document.getElementById('reviso_id').value;
                            let aprobo_id = document.getElementById('aprobo_id').value;
                            $('#revisores1').val([reviso_id]);
                            // document.querySelectorAll("#revisores1 option[data-id-empleado]")
                            //     .forEach(element => {
                            //         if (Number(element.value) == Number(reviso_id)) {
                            //             console.log(element);
                            //             element.setAttribute('disabled', 'disabled');
                            //         }
                            //     });
                            $('#revisores1').trigger(
                                'change'); // Notify any JS components that the value changed
                            $('#revisores2').val([aprobo_id]);
                            // document.querySelectorAll("#revisores2 option[data-id-empleado]")
                            //     .forEach(element => {
                            //         if (Number(element.value) == Number(aprobo_id)) {
                            //             console.log(element);
                            //             element.setAttribute('disabled', 'disabled');
                            //         }
                            //     });
                            $('#revisores2').trigger('change');
                        }
                    },
                    error: function(request, status, error) {
                        let errores = document.querySelectorAll('span.error-ajax');
                        errores.forEach(element => {
                            element.innerHTML = "";
                        });
                        $.each(request.responseJSON.errors, function(indexInArray,
                            valueOfElement) {
                            $(`span.${indexInArray}_error`).text(valueOfElement[0]);
                        });

                    }
                })
            });

            let finalizarPublicacionBtn = document.getElementById('finalizarPublicacion');
            finalizarPublicacionBtn.addEventListener('click', function(e) {
                e.preventDefault();
                let revisores1 = document.getElementById('revisores1');
                let descripcion = document.getElementById('descripcion');
                let comentarios = document.getElementById('comentarios');

                if (!revisores1.value) {
                    document.getElementById('revisores1_error').innerText =
                        "No has seleccionado nigún revisor en este nivel";
                }

                if (!descripcion.value) {
                    document.getElementById('descripcion_error').innerText =
                        "No has descrito los cambios realizados";
                }

                if (descripcion.value.length > 1000) {
                    document.getElementById('descripcion_error').innerText =
                        "La descripción del cambio tiene un máximo de 1000 carácteres";
                }

                if (comentarios.value.length > 1000) {
                    document.getElementById('comentarios_error').innerText =
                        "Los comentarios del cambio tiene un máximo de 1000 carácteres";
                }

                if (revisores1.value && descripcion.value && descripcion.value.length <= 1000 && comentarios
                    .value.length <= 1000) {
                    Swal.fire({
                        title: 'Estás seguro de enviar el documento a aprobación?',
                        text: "No prodrás revertir esto!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sí, enviar a revisión!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            let form = document.getElementById('formCrearDocumento');
                            let formReviewers = document.getElementById('formPublish');
                            let datosDocumento = new FormData(form);
                            let datosRevisores = $(formReviewers).serialize();
                            $.ajax({
                                type: "POST",
                                url: "{{ route('documentos.storeDocumentWhenPublish') }}",
                                data: guardarDocumento,
                                processData: false,
                                contentType: false,
                                dataType: "JSON",
                                success: function(response) {
                                    console.log(response);
                                    documentoCreado = response.documento_id;
                                    $.ajax({
                                        type: "POST",
                                        headers: {
                                            'X-CSRF-TOKEN': $(
                                                    'meta[name="csrf-token"]')
                                                .attr(
                                                    'content')
                                        },
                                        url: "{{ route('documentos.publish') }}",
                                        data: {
                                            datosRevisores,
                                            documentoCreado
                                        },
                                        dataType: "JSON",
                                        success: function(response) {
                                            console.log(response);
                                            // $('#modalPublicar').modal('hide');
                                        }
                                    });
                                }
                            });

                            Swal.fire(
                                'Enviado a revisión!',
                                'Tu documento ha sido enviado a revisión, mantente al tanto de las actualizaciones',
                                'success'
                            );
                            setTimeout(() => {
                                window.location.href =
                                    "{{ route('documentos.index') }}";
                            }, 1500);
                        }
                    })
                }
            })

        });

        function formatStateMulti(opt) {
            if (!opt.id) {
                return opt.text;
            }

            var optimage = $(opt.element).attr('data-image');
            var gender = $(opt.element).attr('data-gender');
            if (!optimage) {
                let foto = 'ususario_no_cargado.png'
                if (gender == 'M') {
                    foto = 'woman.png';
                }

                if (gender == 'H') {
                    foto = 'man.png';
                }

                var $opt = $(
                    '<span><img src="{{ asset('storage/empleados/imagenes/') }}/' + foto +
                    '" class="img-fluid rounded-circle" width="30" height="30"/></span>'
                );
                return $opt;
            } else {
                var $opt = $(
                    '<span><img src="{{ asset('storage/empleados/imagenes/') }}/' + optimage +
                    '" class="img-fluid rounded-circle" width="30" height="30"/></span>'
                );
                return $opt;
            }
        };

        function formatState(opt) {
            if (!opt.id) {
                return opt.text;
            }

            var optimage = $(opt.element).attr('data-image');
            var gender = $(opt.element).attr('data-gender');
            if (!optimage) {
                let foto = 'ususario_no_cargado.png'
                if (gender == 'M') {
                    foto = 'woman.png';
                }

                if (gender == 'H') {
                    foto = 'man.png';
                }

                var $opt = $(
                    '<span><img src="{{ asset('storage/empleados/imagenes/') }}/' + foto +
                    '" class="img-fluid rounded-circle" width=25 height=25/> ' +
                    opt.text + '</span>'
                );
                return $opt;
            } else {
                var $opt = $(
                    '<span><img src="{{ asset('storage/empleados/imagenes/') }}/' + optimage +
                    '" class="img-fluid rounded-circle" width=25 height=25/> ' +
                    opt.text + '</span>'
                );
                return $opt;
            }
        };
    </script>
@endsection
