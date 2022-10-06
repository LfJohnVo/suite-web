<div class="w-100">
    <x-loading-indicator />
    <form id="form_timesheet" action="{{ route('admin.timesheet.store') }}" method="POST">
        @csrf
        <div id="timesheet-web">
            @include('admin.timesheet.table.table-index', [
                'proyectos' => $proyectos,
            ])
        </div>
        <div class="form-group d-flex align-items-center" wire:ignore style="position: relative">
            <div class=" d-movile ">
                <span style="color:#345183; font-size:15px; font-weight:500;">Semana laborada</span>
            </div>
            <div class="d-movile-none">
                <label class="mr-3" style="margin-top: 5px;"><i class="fas fa-calendar-alt iconos-crear"></i>Fecha
                    fin
                    de jornada laboral</label>
            </div>
            <input type="date" id="fecha_dia" name="fecha_dia" class="form-control" style="max-width:160px;">
            <small class="fecha_dia errores text-danger" style="margin-left: 15px;"></small>

            <div class="d-movile-none" style="position: absolute; bottom:0; left:0; margin-bottom:-15px;">
                <small class="permitido-texto" style="color:#aaa;">Tiene permitido registrar
                    <strong>{{ auth()->user()->empleado->semanas_min_timesheet }} </strong> semanas
                    atras
                </small>
            </div>


            <i class="bi bi-calendar text-center ml-2 text-white d-movile"
                style="background-color: #345183; padding:3px 8px; border-radius: 5px; font-size:20px; position:absolute; right:0;"></i>
        </div>
        <div class="d-movile">
            <small class="d-movile permitido-texto mt-5" style="color:#aaa;">Tiene permitido registrar
                <strong>{{ auth()->user()->empleado->semanas_min_timesheet }} </strong> semanas atras
            </small>
        </div>



        @include('admin.timesheet.table.table-index', [
            'proyectos' => $proyectos,
        ])





        <div class="modal fade" id="modal_aprobar_" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="delete">
                            <div class="text-center">
                                <i class="fa-solid fa-calendar-plus" style="color: #2F96EB; font-size:60pt;"></i>
                                <h1 class="my-4" style="font-size:14pt;">Registrar Jornada Laboral
                                </h1>
                                <p class="parrafo">¿Está seguro que desea enviar a aprobación este
                                    registro?
                                </p>
                            </div>

                            <div class="mt-4">
                                <div class="col-12 text-center">
                                    <div title="Rechazar" class="btn btn_cancelar" data-dismiss="modal">
                                        Cancelar
                                    </div>
                                    <button data-dismiss="modal" onclick="event.preventDefault();"
                                        id="enviar_aprobacion_time" class="btn_enviar_formulario btn btn-info"
                                        style="border:none; background-color:#2F96EB;">
                                        Enviar a Aprobación
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </form>





    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', () => {
            window.initSelect2 = () => {

                $('.select2').select2({
                    'theme': 'bootstrap4'
                });

            }

            initSelect2();

            Livewire.on('select2', () => {

                initSelect2();

            });

            $('#select_proyectos1').on('select2:select', function(e) {
                var data = e.params.data;
            });

            $('#datatable_timesheet_create').on('change', (e) => {
                if (e.target.getAttribute('data-type') == 'parent') {
                    let contador = e.target.getAttribute('data-contador');
                    let proyecto_id = e.target.value;
                    document.getElementById('loaderComponent').style.display = 'block';
                    $.ajax({
                        type: "post",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ route('admin.timesheet-obtener-tareas') }}",
                        data: {
                            proyecto_id
                        },
                        dataType: "json",
                        beforeSend: function() {

                        },
                        success: function(response) {
                            let select = document.getElementById(`select_tareas${contador}`);
                            select.removeAttribute('disabled');
                            let html = '<option selected disabled>Seleccione tarea</option>';
                            response.tareas.forEach(tarea => {
                                html += `
                                    <option value="${tarea.id }">${tarea.tarea}</option>
                                `;
                            });
                            select.innerHTML = html;
                            document.getElementById('loaderComponent').style.display = 'none';
                        },
                        error: function(error) {
                            document.getElementById('loaderComponent').style.display = 'none';
                        }
                    });
                }
            });

            function procesarInformacionTimesheet(e) {
                e.preventDefault();
                limpiarErrores();
                let formulario = document.getElementById('form_timesheet');
                let formData = new FormData(formulario);
                if (e.target.getAttribute('data-type') == 'borrador') {
                    formData.append('estatus', 'papelera');
                }
                document.getElementById('loaderComponent').style.display = 'block';
                $.ajax({
                    type: "POST",
                    url: "{{ route('admin.timesheet.store') }}",
                    headers: {

                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    dataType: "json",
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        document.getElementById('loaderComponent').style.display = 'none';
                        if (response.status == 200) {
                            Swal.fire(
                                'Buen trabajo',
                                'Timesheet Registrado',
                                'success'
                            ).then(() => {
                                window.location.href = '{{ route('admin.timesheet-inicio') }}';
                            });
                        } else {
                            toastr.error('Error al enviar');
                        }
                    },
                    error: function(request, status, error) {
                        document.getElementById('loaderComponent').style.display = 'none';
                        $('#modal_aprobar_').modal('hide');
                        $('.modal-backdrop').hide();
                        $.each(request.responseJSON.errors, function(indexInArray, valueOfElement) {

                            let index_error = indexInArray.replaceAll('.', '_');
                            $(`small.${index_error}`).html(
                                '<i class="fas fa-exclamation-circle mr-2"></i> ' +
                                valueOfElement[0]);
                        });
                    }
                });
            }
            document.querySelector('.btn_enviar_formulario').addEventListener('click',
                procesarInformacionTimesheet);
            document.querySelector('#enviar_aprobacion_time').addEventListener('click',
                procesarInformacionTimesheet);

            function limpiarErrores() {
                document.querySelectorAll('.errores').forEach(item => {
                    item.innerHTML = '';
                });
            }
        });
    </script>
</div>
