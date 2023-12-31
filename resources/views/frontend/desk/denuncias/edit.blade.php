@extends('layouts.frontend')
@section('content')




@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/formularios_centro_atencion.css') }}">
@endsection

@include('partials.flashMessages')
<div class="card">
    <div class="text-center card-header" style="background-color: #345183;">
        <strong style="font-size: 16pt; color: #fff;"><i class="mr-4 fas fa-hand-paper"></i>Denuncias</strong>
    </div>
    <div class="caja_botones_menu">
        <a href="#" data-tabs="registro" class="btn_activo"><i class="mr-4 fas fa-hand-paper"></i>Registro de
            Denuncia</a>
        <a href="#" data-tabs="analisis"><i class="mr-4 fas fa-clipboard-list"></i>Análisis Causa Raíz</a>
        <a href="#" data-tabs="plan"><i class="mr-4 fas fa-tasks"></i>Plan de Acción</a>
    </div>
    <div class="card-body">

        <div class="caja_caja_secciones">

            <div class="caja_secciones">

                <section id="registro" class="caja_tab_reveldada">
                    <div class="seccion_div">
                        <form class="row" method="POST"
                            action="{{ route('desk.denuncias-update', $denuncias) }}">
                            @csrf

                            <div class="px-1 py-2 mx-3 mb-4 rounded shadow"
                                style="background-color: #DBEAFE; border-top:solid 1px #3B82F6;">
                                <div class="row w-100">
                                    <div class="text-center col-1 align-items-center d-flex justify-content-center">
                                        <div class="w-100">
                                            <i class="bi bi-info mr-3" style="color: #3B82F6; font-size: 30px"></i>
                                        </div>
                                    </div>
                                    <div class="col-11">
                                        <p class="m-0"
                                            style="font-size: 16px; font-weight: bold; color: #1E3A8A">Instrucciones</p>
                                        <p class="m-0" style="font-size: 14px; color:#1E3A8A ">Al final de
                                            cada formulario dé clic en el botón guardar antes de cambiar de pestaña,
                                            de lo contrario la información capturada no será guardada.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                Tipo de denuncia:
                                @if ($denuncias->anonimo == 'no')
                                    <label class="form-label"><strong>Datos proporcionados</strong></label>
                                @else
                                    <label class="form-label"><strong>Denuncia anónima</strong></label>
                                @endif
                            </div>

                            <div class="mt-1 form-group col-12">
                                <b>Datos generales:</b>
                            </div>

                            <div class="mt-2 form-group col-6">
                                <label class="form-label"><i
                                        class="fas fa-ticket-alt iconos-crear"></i>Folio</label>
                                <div class="form-control">{{ $denuncias->folio }}</div>
                            </div>

                            <div class="mt-2 form-group col-md-6">
                                <label class="form-label"><i
                                        class="fas fa-traffic-light iconos-crear"></i>Estatus</label>
                                <select name="estatus" class="form-control" id="opciones"
                                    onchange='cambioOpciones();'>
                                    <option {{ old('estatus', $denuncias->estatus) == 'nuevo' ? 'selected' : '' }}
                                        value="nuevo">Nuevo</option>
                                    <option {{ old('estatus', $denuncias->estatus) == 'en curso' ? 'selected' : '' }}
                                        value="en curso">En curso</option>
                                    <option {{ old('estatus', $denuncias->estatus) == 'en espera' ? 'selected' : '' }}
                                        value="en espera">En espera</option>
                                    <option {{ old('estatus', $denuncias->estatus) == 'cerrado' ? 'selected' : '' }}
                                        value="cerrado">Cerrado</option>
                                    <option {{ old('estatus', $denuncias->estatus) == 'cancelado' ? 'selected' : '' }}
                                        value="cancelado">Cancelado</option>
                                </select>
                            </div>

                            <div class="mt-2 form-group col-4">
                                <label class="form-label"><i class="fas fa-calendar-alt iconos-crear"></i>Fecha y
                                    hora
                                    de identificación</label>
                                <input type="datetime" name="fecha" value="{{ $denuncias->fecha }}"
                                    class="form-control">
                            </div>

                            <div class="mt-2 form-group col-4">
                                <label class="form-label"><i class="fas fa-calendar-alt iconos-crear"></i>Fecha y
                                    hora
                                    de recepción del reporte</label>
                                <div class="form-control">{{ $denuncias->created_at }}</div>
                            </div>

                            <div class="mt-2 form-group col-md-4">
                                <label class="form-label"><i class="fas fa-calendar-alt iconos-crear"></i>Fecha y
                                    hora
                                    de cierre del ticket</label>

                                <input class="form-control" name="fecha_cierre" type="datetime"
                                    value="{{ $denuncias->fecha_cierre }}" id="solucion" readonly>

                            </div>

                            @if ($denuncias->anonimo == 'no')

                                <div class="mt-2 form-group col-12">
                                    <label class="form-label">
                                        <strong>Denuncia emitida por:</strong>
                                    </label>
                                </div>

                                <div class="mt-2 form-group col-4">
                                    <label class="form-label"><i class="fas fa-user iconos-crear"></i>Nombre</label>
                                    <div class="form-control">{{ $denuncias->denuncio->name }}</div>
                                </div>

                                <div class="mt-2 form-group col-4">
                                    <label class="form-label"><i
                                            class="fas fa-user-tag iconos-crear"></i>Puesto</label>
                                    <div class="form-control">{{ $denuncias->denuncio->puesto }}</div>
                                </div>

                                <div class="mt-2 form-group col-4">
                                    <label class="form-label"><i
                                            class="fas fa-project-diagram iconos-crear"></i>Área</label>
                                    <div class="form-control">{{ $denuncias->denuncio->area->area }}</div>
                                </div>

                                <div class="mt-2 form-group col-6">
                                    <label class="form-label"><i class="fas fa-envelope iconos-crear"></i>Correo
                                        electrónico</label>
                                    <div class="form-control">{{ $denuncias->denuncio->email }}</div>
                                </div>

                                <div class="mt-2 form-group col-6">
                                    <label class="form-label"><i
                                            class="fas fa-phone iconos-crear"></i>Teléfono</label>
                                    <div class="form-control">{{ $denuncias->denuncio->telefono }}</div>
                                </div>
                            @endif

                            <div class="mt-2 form-group col-12">
                                <label class="form-label">
                                    <strong>Denuncia dirigida a:</strong>
                                </label>
                            </div>

                            <div class="mt-4 form-group col-4">
                                <label class="form-label"><i
                                        class="fas fa-user-times iconos-crear"></i>Nombre</label>
                                <div class="form-control">{{ $denuncias->denunciado->name }}</div>
                            </div>

                            <div class="mt-4 form-group col-4">
                                <label class="form-label"><i class="fas fa-user-tag iconos-crear"></i>Puesto
                                </label>
                                <div class="form-control">{{ $denuncias->denunciado->puesto }}</div>
                            </div>

                            <div class="mt-4 form-group col-4">
                                <label class="form-label"><i class="fas fa-project-diagram iconos-crear"></i>Área
                                </label>
                                <div class="form-control">{{ $denuncias->denunciado->area->area }}</div>
                            </div>

                            <div class="mt-4 form-group col-12">
                                <label class="form-label"><i class="fas fa-hand-paper iconos-crear"></i>Tipo de
                                    denuncia</label>
                                <input type="" name="tipo" class="form-control" value="{{ $denuncias->tipo }}">
                            </div>

                            <div class="mt-4 form-group col-12">
                                <label class="form-label"><i class="fas fa-hand-paper iconos-crear"></i>Otro
                                    <input type="" name="tipo" class="form-control" value="{{ $denuncias->tipo }}">
                            </div>

                            <div class="mt-4 form-group col-12">
                                <label class="form-label"><i
                                        class="fas fa-file-alt iconos-crear"></i>Descripción</label><br>
                                <textarea type="" name="descripcion"
                                    class="form-control">{{ $denuncias->descripcion }}</textarea>
                            </div>

                            <div class="mt-4 text-center form-group col-12">
                                <div class="container">
                                    <div class="mb-4 row">
                                        <div class="col text-start">
                                            <a href="#" class="btn btn-danger" data-toggle="modal"
                                                data-target="#largeModal">Evidencia</a>
                                        </div>
                                    </div>
                                    <!-- modal -->
                                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog"
                                        aria-labelledby="basicModal" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    @if (count($denuncias->evidencias_denuncias))
                                                        <!-- carousel -->
                                                        <div id='carouselExampleIndicators' class='carousel slide'
                                                            data-ride='carousel'>
                                                            <ol class='carousel-indicators'>
                                                                @foreach ($denuncias->evidencias_denuncias as $idx => $evidencia)
                                                                    <li data-target='#carouselExampleIndicators'
                                                                        data-slide-to='{{ $idx }}'
                                                                        class='{{ $idx == 0 ? 'active' : '' }}'></li>
                                                                @endforeach
                                                            </ol>
                                                            <div class='carousel-inner'>
                                                                @foreach ($denuncias->evidencias_denuncias as $idx => $evidencia)
                                                                    <div
                                                                        class='carousel-item {{ $idx == 0 ? 'active' : '' }}'>
                                                                        <iframe class='img-size'
                                                                            src='{{ asset('storage/evidencias_denuncias' . '/' . $evidencia->evidencia) }}'></iframe>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                            <a class='carousel-control-prev'
                                                                href='#carouselExampleIndicators' role='button'
                                                                data-slide='prev'>
                                                                <span class='carousel-control-prev-icon'
                                                                    aria-hidden='true'></span>
                                                                <span class='sr-only'>Previous</span>
                                                            </a>
                                                            <a class='carousel-control-next'
                                                                href='#carouselExampleIndicators' role='button'
                                                                data-slide='next'>
                                                                <span class='carousel-control-next-icon'
                                                                    aria-hidden='true'></span>
                                                                <span class='sr-only'>Next</span>
                                                            </a>
                                                        </div>
                                                    @else
                                                        <div class="text-center">
                                                            <h3 style="text-align:center" class="mt-3">Sin
                                                                archivo agregado</h3>
                                                            <img src="{{ asset('img/undrawn.png') }}"
                                                                class="img-fluid " style="width:350px !important">
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 text-right form-group col-12">
                                <a href="{{ asset('frontend/desk') }}" class="btn btn_cancelar">Cancelar</a>
                                <input type="submit" name="" class="btn btn-success" value="Enviar">
                            </div>
                        </form>
                    </div>

                </section>

                <section id="analisis">
                    <div class="seccion_div">
                        <div class="row">
                            <div class="px-1 py-2 mx-3 mb-4 rounded shadow"
                                style="background-color: #DBEAFE; border-top:solid 1px #3B82F6;">
                                <div class="row w-100">
                                    <div class="text-center col-1 align-items-center d-flex justify-content-center">
                                        <div class="w-100">
                                            <i class="bi bi-info mr-3" style="color: #3B82F6; font-size: 30px"></i>
                                        </div>
                                    </div>
                                    <div class="col-11">
                                        <p class="m-0"
                                            style="font-size: 16px; font-weight: bold; color: #1E3A8A">Instrucciones</p>
                                        <p class="m-0" style="font-size: 14px; color:#1E3A8A ">Al final de
                                            cada formulario dé clic en el botón guardar antes de cambiar de pestaña,
                                            de lo contrario la información capturada no será guardada.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 col-sm-12 col-lg-12 col-md-12 text-primary ">
                                <strong style="font-size:13pt;">Folio: {{ $denuncias->folio }}</strong>
                            </div>
                            <div class="col-md-4">
                                Seleccione el metódo de análisis
                            </div>
                            <div class="col-md-8">
                                <select id="select_metodos" class="form-control">
                                    <option selected disabled>- -</option>
                                    <option class="op_ideas" data-metodo="ideas">Lluvia de ideas (Brainstorming)
                                    </option>
                                    <option class="op_porque" data-metodo="porque">5 Porqués (5 Why)</option>
                                    <option class="op_digrama" data-metodo="digrama">Diagrama causa efecto
                                        (Ishikawa)
                                    </option>
                                </select>
                            </div>

                            <form method="POST" class="col-12"
                                action="{{ route('desk.analisis_denuncia-update', $analisis) }}">
                                @csrf

                                <div class="col-12" style="position: relative;">

                                    <div id="ideas" class="caja_oculta_dinamica row">
                                        <div class="form-group col-12">
                                            <label>Ideas</label>
                                            <textarea class="form-control"
                                                name="ideas">{{ $analisis->ideas }}</textarea>
                                        </div>

                                        <div class="form-group col-12">
                                            <label>Causa Raíz</label>
                                            <textarea class="form-control"
                                                name="causa_ideas">{{ $analisis->causa_ideas }}</textarea>
                                        </div>
                                    </div>



                                    <div id="porque" class="caja_oculta_dinamica row">
                                        <div class="form-group col-12">
                                            Problema: <textarea class="form-control"
                                                name="problema_porque">{{ $analisis->problema_porque }}</textarea>
                                        </div>
                                        <div class="form-group col-12">
                                            <label>1er porqué:</label>
                                            <input name="porque_1" class="form-control"
                                                value="{{ $analisis->porque_1 }}">
                                            <label>2do porqué:</label>
                                            <input name="porque_2" class="form-control"
                                                value="{{ $analisis->porque_2 }}">
                                            <label>3er porqué:</label>
                                            <input name="porque_3" class="form-control"
                                                value="{{ $analisis->porque_3 }}">
                                            <label>4to porqué:</label>
                                            <input name="porque_4" class="form-control"
                                                value="{{ $analisis->porque_4 }}">
                                            <label>5to porqué:</label>
                                            <input name="porque_5" class="form-control"
                                                value="{{ $analisis->porque_5 }}">
                                        </div>
                                        <div class="form-group col-12">
                                            Causa Raíz: <textarea class="form-control"
                                                name="causa_porque">{{ $analisis->causa_porque }}</textarea>
                                        </div>
                                    </div>



                                    <div id="digrama" class="caja_oculta_dinamica">
                                        <div class="mt-5 col-12" style="overflow: auto;">
                                            <div style="width: 100%; min-width:540px; position: relative;">
                                                <img src="{{ asset('img/diagrama_causa_raiz.png') }}"
                                                    style="width:100%">

                                                <textarea name="control_a"
                                                    class="politicas_txtarea">{{ $analisis->control_a }}</textarea>
                                                <textarea name="control_b"
                                                    class="politicas_txtarea txt_obj_secundarios_a">{{ $analisis->control_b }}</textarea>

                                                <textarea name="proceso_a"
                                                    class="procesos_txtarea">{{ $analisis->proceso_a }}</textarea>
                                                <textarea name="proceso_b"
                                                    class="procesos_txtarea txt_obj_secundarios_a">{{ $analisis->proceso_b }}</textarea>

                                                <textarea name="personas_a"
                                                    class="personas_txtarea">{{ $analisis->personas_a }}</textarea>
                                                <textarea name="personas_b"
                                                    class="personas_txtarea txt_obj_secundarios_a">{{ $analisis->personas_b }}</textarea>

                                                <textarea name="tecnologia_a"
                                                    class="tecnologia_txtarea txt_obj_secundarios_b">{{ $analisis->tecnologia_a }}</textarea>
                                                <textarea name="tecnologia_b"
                                                    class="tecnologia_txtarea ">{{ $analisis->tecnologia_b }}</textarea>

                                                <textarea name="metodos_a"
                                                    class="metodos_txtarea txt_obj_secundarios_b">{{ $analisis->metodos_a }}</textarea>
                                                <textarea name="metodos_b"
                                                    class="metodos_txtarea ">{{ $analisis->metodos_b }}</textarea>

                                                <textarea name="ambiente_a"
                                                    class="ambiente_txtarea txt_obj_secundarios_b">{{ $analisis->ambiente_a }}</textarea>
                                                <textarea name="ambiente_b"
                                                    class="ambiente_txtarea ">{{ $analisis->ambiente_b }}</textarea>

                                                <textarea name="problema_diagrama"
                                                    class="problemas_txtarea">{{ $analisis->problema_diagrama }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-3 text-right col-12">
                                    <input type="submit" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </section>

                <section id="plan">
                    <div class="seccion_div">
                        <div class="" style=" position: relative; ">
                            <div class=" row">
                            <div class="mb-3 col-sm-12 col-lg-12 col-md-12 text-primary ">
                                <strong style="font-size:13pt;">Folio: {{ $denuncias->folio }}</strong>
                            </div>
                        </div>
                        <h5 style=" position: ;"><b>Acciones para la Atención de la Denuncia</b></h5>
                        <button style="position:absolute; right: 2px; top:2px;"
                            class="btn btn-success btn_modal_form">Agregar actividad</button>
                        @if (count($denuncias->planes))
                            <a style="position:absolute; right: 170px; top:2px;"
                                href="{{ route('planes-de-accion.show', $denuncias->planes->first()->id) }}"
                                class="btn btn-success btn_modal_form"><i class="mr-2 fas fa-stream"></i> Plan De
                                Acción</a>
                        @endif
                    </div>
                    <div class="mt-4 datatable-fix" style="width: 100%;">
                        <table id="tabla_plan_accion_denuncias" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Actividad</th>
                                    <th>Fecha&nbsp;de&nbsp;inicio</th>
                                    <th>Fecha&nbsp;de&nbsp;fin</th>
                                    <th>Prioridad</th>
                                    <th>Tipo</th>
                                    <th>Responsable(s)</th>
                                    <th>Comentarios</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal_form_plan">
                        <div class="fondo_modal"></div>
                        <form class="card" id="form_plan_accion" method="POST"
                            action="{{ route('desk-denuncias-actividades.store') }}">
                            <input type="hidden" name="denuncia_id" value="{{ $denuncias->id }}">
                            <div class="text-center card-header" style="background-color: #345183;">
                                <strong style="font-size: 16pt; color: #fff;"><i class="mr-4 fas fa-tasks"></i>Crear:
                                    Plan de Acción</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="form-label"><i
                                                class="fas fa-wrench iconos-crear"></i>Actividad</label>
                                        <input type="" name="actividad" class="form-control" id="actividad">
                                        <span class="text-danger error_actividad errors"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label"><i
                                                class="fas fa-calendar-alt iconos-crear"></i>Fecha de
                                            inicio</label>
                                        <input type="date" name="fecha_inicio" class="form-control"
                                            id="fecha_inicio">
                                        <span class="text-danger error_fecha_inicio errors"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label"><i
                                                class="fas fa-calendar-alt iconos-crear"></i>Fecha de fin</label>
                                        <input type="date" name="fecha_fin" class="form-control" id="fecha_fin">
                                        <span class="text-danger error_fecha_fin errors"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label"><i
                                                class="fas fa-flag iconos-crear"></i>Prioridad</label>
                                        <select class="form-control" name="prioridad" id="prioridad">
                                            <option value="Alta">Alta</option>
                                            <option value="Media">Media</option>
                                            <option value="Baja">Baja</option>
                                        </select>
                                        <span class="text-danger error_prioridad errors"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label"><i
                                                class="fas fa-list-alt iconos-crear"></i>Tipo</label>
                                        <select class="form-control" name="tipo" id="tipo">
                                            <option value="Acción inmediata">Acción inmediata</option>
                                            <option value="Acción subsecuente">Acción subsecuente</option>
                                            <option value="Acción posterior">Acción posterior </option>
                                        </select>
                                        <span class="text-danger error_tipo errors"></span>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-label"><i
                                                class="fas fa-users iconos-crear"></i>Responsables</label>
                                        <select class="form-control select2" name="responsables[]" multiple
                                            id="responsables">
                                            @foreach ($empleados as $empleado)
                                                <option value="{{ $empleado->id }}">{{ $empleado->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger error_responsables errors"></span>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-label"><i
                                                class="fas fa-comments iconos-crear"></i>Comentarios</label>
                                        <textarea class="form-control" name="comentarios"
                                            id="comentarios"></textarea>
                                        <span class="text-danger error_comentarios errors"></span>
                                    </div>
                                    <div class="text-right form-group col-md-12">
                                        <a href="#" class="btn btn_cancelar">Cancelar</a>
                                        <input type="submit" value="Guardar"
                                            class="btn btn-success btn_enviar_form_modal">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
            </section>
        </div>
    </div>
</div>
</div>

@endsection





@section('scripts')
<script type="text/javascript">
    const formatDate = (current_datetime) => {
        let formatted_date = current_datetime.getFullYear() + "-" + (current_datetime.getMonth() + 1) + "-" +
            current_datetime.getDate() + " " + current_datetime.getHours() + ":" + current_datetime.getMinutes() +
            ":" + current_datetime.getSeconds();
        return formatted_date;
    }

    function cambioOpciones() {
        var combo = document.getElementById('opciones');
        var opcion = combo.value;
        if (opcion == "cerrado") {
            var fecha = new Date();
            document.getElementById('solucion').value = fecha.toLocaleString().replaceAll("/", "-");
        } else {
            document.getElementById('solucion').value = "";
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        let select_activos = document.querySelector('.areas_multiselect #activos');
        select_activos.addEventListener('change', function(e) {
            e.preventDefault();
            let texto_activos = document.querySelector('.areas_multiselect #texto_activos');

            texto_activos.value += `${this.value}, `;

        });
    });

    $(document).ready(function() {
        window.tbl_plan = $("#tabla_plan_accion_denuncias").DataTable({
            ajax: "{{ route('desk-denuncias-actividades.index', $denuncias->id) }}",
            buttons: [],
            columns: [{
                    data: 'id'
                },
                {
                    data: 'actividad'
                },
                {
                    data: 'fecha_inicio'
                },
                {
                    data: 'fecha_fin'
                },
                {
                    data: 'prioridad'
                },
                {
                    data: 'tipo'
                },
                {
                    data: 'id',
                    render: function(data, type, row, meta) {
                        let lista = '<ul>';
                        row.responsables.forEach(responsable => {
                            lista += `<li>${responsable.name}</li>`;
                        })
                        lista += '</ul>';

                        return lista;
                    }
                },
                {
                    data: 'comentarios'
                },
            ]
        });
    });
</script>

<script type="text/javascript">
    $(".btn_modal_form").click(function() {
        $(".modal_form_plan").addClass("modal_vista_plan");
        $(".select2").select2({
            theme: 'bootstrap4'
        });
    });
    $(".modal_form_plan .btn.btn_cancelar").click(function() {
        $(".modal_form_plan").removeClass("modal_vista_plan");
    });

    $(".fondo_modal").click(function() {
        $(".modal_form_plan").removeClass("modal_vista_plan");
    });

    $(".btn_enviar_form_modal").click(function(e) {
        e.preventDefault();
        let datos = $('#form_plan_accion').serialize();
        let url = document.getElementById('form_plan_accion').getAttribute('action')

        $.ajax({
            type: "post",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            data: datos,
            beforeSend: function() {
                toastr.info('Validando y Guardando');
            },
            success: function(response) {
                if (response.success) {
                    $(".modal_form_plan").removeClass("modal_vista_plan");
                    tbl_plan.ajax.reload();
                    limpiarCampos();
                    Swal.fire('Actividad Creada', 'La actividad ha sido creada con éxito',
                        'success');
                }
            },
            error: function(request, status, error) {
                document.querySelectorAll('.errors').forEach(error => {
                    error.innerHTML = "";
                });
                $.each(request.responseJSON.errors, function(indexInArray, valueOfElement) {
                    console.log(valueOfElement, indexInArray);
                    $(`span.error_${indexInArray}`).text(valueOfElement[0]);

                });
            }
        });
    });


    function limpiarCampos() {

        document.getElementById('actividad').value = "";
        document.getElementById('fecha_inicio').value = "";
        document.getElementById('fecha_fin').value = "";
        document.getElementById('prioridad').value = "";
        document.getElementById('tipo').value = "";
        document.getElementById('responsables').value = "";
        document.getElementById('comentarios').value = "";

    }
</script>


<script type="text/javascript">
    $(document).on('change', '#select_metodos', function(event) {
        $(".caja_oculta_dinamica").removeClass("d-block");
        var metodo_v = $("#select_metodos option:selected").attr('data-metodo');
        $(document.getElementById(metodo_v)).addClass("d-block");
    });
</script>
@endsection
