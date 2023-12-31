<style type="text/css">
    .tarjetas_seguridad_indicadores {
        width: 100%;
        height: 80px;
        color: #fff;
        margin-bottom: 40px;
        font-size: 15pt;
        border-radius: 6px;
    }

    .tarjetas_seguridad_indicadores i {
        position: relative;
        font-size: 20pt;
        margin-right: 10px;
    }

    .far.fa-circle:after {
        content: "-";
        position: absolute;
        top: -18%;
        left: 33%;
        transform: scale(1.3);
    }

    .tarjetas_seguridad_indicadores div {
        width: 100%;
        text-align: center;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .numero {
        font-size: 20pt;
    }

    .botones_tabla {
        width: 100%;
        display: flex;
    }

</style>


<div class="row">
    <div class="col-6 col-md-2">
        <div class="tarjetas_seguridad_indicadores"
            style="background: linear-gradient(144deg, rgba(12, 119, 255, 1) 35%, rgba(0, 213, 214, 1) 100%);">
            <div class="numero"><i class="fas fa-exclamation-triangle"></i> {{ $total_seguridad }}</div>
            <div>Incidentes</div>
        </div>
    </div>
    <div class="col-6 col-md-2 ">
        <div class="tarjetas_seguridad_indicadores"
            style="background: linear-gradient(144deg, rgba(255, 115, 0, 1) 33%, rgba(237, 255, 86, 1) 100%);">
            <div class="numero"><i class="far fa-arrow-alt-circle-right"></i> {{ $nuevos_seguridad }}</div>
            <div>Nuevos</div>
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div class="tarjetas_seguridad_indicadores"
            style=" background: linear-gradient(144deg, rgba(132, 0, 255, 1) 34%, rgba(255, 54, 240, 1) 100%);">
            <div class="numero"><i class="fas fa-redo-alt"></i> {{ $en_curso_seguridad }}</div>
            <div>En curso</div>
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div class="tarjetas_seguridad_indicadores"
            style="background: linear-gradient(144deg, rgba(0, 27, 222, 1) 33%, rgba(0, 164, 255, 1) 91%);">
            <div class="numero"><i class="fas fa-history"></i> {{ $en_espera_seguridad }}</div>
            <div>En espera</div>
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div class="tarjetas_seguridad_indicadores"
            style="background: linear-gradient(144deg, rgba(56, 198, 67, 1) 34%, rgba(57, 255, 220, 1) 100%);">
            <div class="numero"><i class="far fa-check-circle"></i> {{ $cerrados_seguridad }}</div>
            <div>Cerrados</div>
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div class="tarjetas_seguridad_indicadores"
            style="background: linear-gradient(144deg, rgba(255, 61, 61, 1) 33%, rgba(255, 86, 223, 1) 100%);">
            <div class="numero"><i class="far fa-circle"></i> {{ $cancelados_seguridad }}</div>
            <div>Cancelados</div>
        </div>
    </div>
</div>

<div class="datatable-fix" style="width: 100%;">
    <div class="text-right mb-3">
        <a class="btn btn-danger" href="{{asset('frontend/inicioUsuario/reportes/seguridad')}}">Crear reporte</a>
    </div>
    <table class="table tabla_incidentes_seguridad">
        <thead>
            <tr>
                {{-- <th>ID</th> --}}
                <th style="min-width: 100px;">Folio</th>
                <th style="min-width: 250px;">Título</th>
                <th style="min-width: 250px;">Sede</th>
                <th style="min-width: 250px;">Ubicación</th>
                <th style="min-width: 500px;">Descripción</th>
                <th style="min-width: 250px;">Areas, Afectadas</th>
                <th style="min-width: 250px;">Procesos, Afectados</th>
                <th style="min-width: 250px;">Activos, Afectados</th>
                <th style="min-width: 150px;">Fecha</th>
                <th style="min-width: 250px;">Quién reporto</th>
                <th style="min-width: 250px;">Correo</th>
                <th style="min-width: 250px;">Teléfono</th>
                <th>Urgencia</th>
                <th>Impacto</th>
                <th>Estatus</th>
                <th style="min-width: 150px;">Fecha de cierre</th>
                <th style="min-width: 250px;">Asignado a</th>
                <th style="min-width: 500px;">Comentarios</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($incidentes_seguridad as $incidentes)
	   			<tr>
	       			<td>{{ $incidentes->id }}</td>
	       			<td>{{ $incidentes->folio }}</td>
	       			<td>{{ $incidentes->titulo }}</td>
	       			<td>{{ $incidentes->descripción }}</td>
	       			<td>{{ $incidentes->activos_afectados }}</td>
	       			<td>{{ $incidentes->fecha }}</td>
	       			<td>{{ $incidentes->reporto->name }}</td>
	       			<td>{{ $incidentes->reporto->email }}</td>
	       			<td>{{ $incidentes->reporto->telefono }}</td>
	       			<td>{{ $incidentes->categoria }}</td>
	       			<td>{{ $incidentes->clacificacion }}</td>
	       			<td>{{ $incidentes->prioridad }}</td>
	       			<td>{{ $incidentes->estatus }}</td>
	       			<td>{{ $incidentes->asignado ? $incidentes->asignado->name:'sin asignar'}}</td>
	       			<td>{{ $incidentes->comentarios }}</td>
	       			<td>
	       				<a href="{{ route('frontend.desk.seguridad-edit', $incidentes->id) }}"><i class="fas fa-edit"></i></a>

	       				@if ($incidentes->estatus == 'cerrado' or $incidentes->estatus == 'cancelado')
		       					<button class="btn archivar" data-id={{ $incidentes->id }}>
		       						<i class="fas fa-archive"></i></a>
		       					</button>
	       				@endif
	       			</td>
	   			</tr>
   			@endforeach --}}
        </tbody>
    </table>
</div>


@section('scripts')
    @parent

    <script type="text/javascript">
        $(document).ready(function() {
            let dtButtons = [{
                    extend: 'csvHtml5',
                    title: `Cursos y Capacitaciones ${new Date().toLocaleDateString().trim()}`,
                    text: '<i class="fas fa-file-csv" style="font-size: 1.1rem; color:#3490dc"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Exportar CSV',
                    exportOptions: {
                        columns: ['th:not(:last-child):visible']
                    }
                },
                {
                    extend: 'excelHtml5',
                    title: `Cursos y Capacitaciones ${new Date().toLocaleDateString().trim()}`,
                    text: '<i class="fas fa-file-excel" style="font-size: 1.1rem;color:#0f6935"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Exportar Excel',
                    exportOptions: {
                        columns: ['th:not(:last-child):visible']
                    }
                },
                {
                    extend: 'pdfHtml5',
                    title: `Cursos y Capacitaciones ${new Date().toLocaleDateString().trim()}`,
                    text: '<i class="fas fa-file-pdf" style="font-size: 1.1rem;color:#e3342f"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Exportar PDF',
                    orientation: 'portrait',
                    exportOptions: {
                        columns: ['th:not(:last-child):visible']
                    },
                    customize: function(doc) {
                        doc.pageMargins = [20, 60, 20, 30];
                        // doc.styles.tableHeader.fontSize = 7.5;
                        // doc.defaultStyle.fontSize = 7.5; //<-- set fontsize to 16 instead of 10
                    }
                },
                {
                    extend: 'print',
                    title: `Cursos y Capacitaciones ${new Date().toLocaleDateString().trim()}`,
                    text: '<i class="fas fa-print" style="font-size: 1.1rem;"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Imprimir',
                    exportOptions: {
                        columns: ['th:not(:last-child):visible']
                    }
                },
                {
                    extend: 'colvis',
                    text: '<i class="fas fa-filter" style="font-size: 1.1rem;"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Seleccionar Columnas',
                },
                {
                    extend: 'colvisGroup',
                    text: '<i class="fas fa-eye" style="font-size: 1.1rem;"></i>',
                    className: "btn-sm rounded pr-2",
                    show: ':hidden',
                    titleAttr: 'Ver todo',
                },
                {
                    extend: 'colvisRestore',
                    text: '<i class="fas fa-undo" style="font-size: 1.1rem;"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Restaurar a estado anterior',
                },
                {

                    text: '<i class="fas fa-archive" style="font-size: 1.1rem;"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Archivo',
                    action: function(e, dt, node, config) {
                        window.location.href = '/frontend/desk/seguridad-archivo';
                    }
                }

            ];
            if (!$.fn.dataTable.isDataTable('.tabla_incidentes_seguridad')) {
                let tabla_incidentes = $(".tabla_incidentes_seguridad").DataTable({
                    ajax: '/frontend/desk/seguridad',
                    buttons: dtButtons,
                    columns: [
                        // {data: 'id'},
                        {
                            data: 'folio'
                        },
                        {
                            data: 'titulo'
                        },
                        {
                            data: 'sede'
                        },
                        {
                            data: 'ubicacion'
                        },
                        {
                            data: 'descripcion'
                        },
                        {
                            data: 'areas_afectados'
                        },
                        {
                            data: 'procesos_afectados'
                        },
                        {
                            data: 'activos_afectados'
                        },
                        {
                            data: 'fecha'
                        },
                        {
                            data: 'id',
                            render: function(data, type, row, meta) {
                                return `${row.reporto.name}`;
                            }
                        },
                        {
                            data: 'id',
                            render: function(data, type, row, meta) {
                                return `${row.reporto.email}`;
                            }
                        },
                        {
                            data: 'id',
                            render: function(data, type, row, meta) {
                                return `${row.reporto.telefono}`;
                            }
                        },
                        {
                            data: 'urgencia'
                        },
                        {
                            data: 'impacto'
                        },
                        {
                            data: 'estatus'
                        },
                        {
                            data: 'fecha_cierre'
                        },
                        {
                            data: 'id',
                            render: function(data, type, row, meta) {
                                return `${row.asignado ? row.asignado.name: 'sin asignar'}`;
                            }
                        },
                        {
                            data: 'comentarios'
                        },
                        {
                            data: 'id',
                            render: function(data, type, row, meta) {
                                let html =
                                    `
                			<div class="botones_tabla">
                				<a href="/frontend/desk/${data}/seguridad-edit/" class="btn archivar"><i class="fas fa-edit"></i></a>`;


                                if ((row.estatus == 'cerrado') || (row.estatus == 'cancelado')) {

                                    html += `<button class="btn archivar" onclick='Archivar("/frontend/desk/${data}/archivar"); return false;' >
				       						<i class="fas fa-archive"></i></a>
				       					</button>
				       					</div>`;
                                }
                                return html;
                            }
                        },
                    ],
                        order:[
                            [0,'desc']
                        ]
                });
            }

            window.Archivar = function(url) {
                Swal.fire({
                    title: '¿Archivar incidente?',
                    text: "",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Archivar',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({

                            type: "post",

                            url: url,

                            data: {
                                _token: '{{ csrf_token() }}'
                            },

                            dataType: "json",

                            success: function(response) {

                                if (response.success) {
                                    tabla_incidentes.ajax.reload();
                                    Swal.fire(
                                        'Archivado',
                                        '',
                                        'success'
                                    )
                                }

                            }

                        });

                    }
                })
            }

            let botones_archivar = document.querySelectorAll('.archivar');
            botones_archivar.forEach(boton => {
                boton.addEventListener('click', function(e) {
                    e.preventDefault();
                    let incidente_id = this.getAttribute('data-id');
                    console.log(incidente_id);
                    let url = `/desk/${incidente_id}/archivar`;
                    // $.ajax({

                    //     type: "post",

                    //     url: url,

                    //     data: {
                    //     	_token: '{{ csrf_token() }}'
                    //     },

                    //     dataType: "json",

                    //     success: function (response) {

                    //         console.log(response);

                    //     }

                    // });
                });
            });


        });
    </script>
@endsection
