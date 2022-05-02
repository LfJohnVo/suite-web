<div class="row">
    <div class="col-6 col-md-2">
        <div class="tarjetas_seguridad_indicadores cdr-celeste">
            <div class="numero"><i class="fas fa-exclamation-triangle"></i> {{ $total_quejasClientes }}</div>
            <div>Quejas Clientes</div>
        </div>
    </div>
    <div class="col-6 col-md-2 ">
        <div class="tarjetas_seguridad_indicadores cdr-amarillo">
            <div class="numero"><i class="far fa-arrow-alt-circle-right"></i> {{ $nuevos_quejasClientes }}</div>
            <div>Sin atender</div>
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div class="tarjetas_seguridad_indicadores cdr-morado">
            <div class="numero"><i class="fas fa-redo-alt"></i> {{ $en_curso_quejasClientes }}</div>
            <div>En curso</div>
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div class="tarjetas_seguridad_indicadores cdr-azul">
            <div class="numero"><i class="fas fa-history"></i> {{ $en_espera_quejasClientes }}</div>
            <div>En espera</div>
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div class="tarjetas_seguridad_indicadores cdr-verde">
            <div class="numero"><i class="far fa-check-circle"></i> {{ $cerrados_quejasClientes }}</div>
            <div>Cerrados</div>
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div class="tarjetas_seguridad_indicadores cdr-rojo">
            <div class="numero"><i class="far fa-circle"></i> {{ $cancelados_quejasClientes }}</div>
            <div>Cancelados</div>
        </div>
    </div>
</div>

<div class="datatable-fix" style="width: 100%;">
    <div class="mb-3 text-right">
        <a class="btn btn-danger" href="{{asset('admin/desk/quejas-clientes')}}">Crear reporte</a>
    </div>

   <table class="table tabla_quejasclientes">
   		<thead>
            <tr>
       			<th>Folio</th>
                <th style="min-width:200px;">Cliente</th>
                <th style="min-width:200px;">Proyecto</th>
                <th style="min-width:200px;">Nombre</th>
                <th style="min-width:200px;">Puesto</th>
                <th style="min-width:200px;">Teléfono</th>
                <th style="min-width:200px;">Correo</th>
                <th style="min-width:200px;">Titulo</th>
                <th style="min-width:200px;">Estatus</th>
                <th style="min-width:200px;">Fecha de identificación</th>
                <th style="min-width:200px;">Fecha de cierre</th>
                <th style="min-width:200px;">Proceso</th>
                <th style="min-width:200px;">Ubicación</th>
                <th style="min-width:200px;">Otros</th>
       			<th style="min-width: 500px;">Descripción</th>
       			<th>Opciones</th>
            </tr>
   		</thead>
   		<tbody>

   		</tbody>
   </table>
</div>


@section('scripts')
    @parent
    <script type="text/javascript">
        $(document).ready(function() {

            let dtButtons = [{
                    extend: 'csvHtml5',
                    title: `Inventario de Activos ${new Date().toLocaleDateString().trim()}`,
                    text: '<i class="fas fa-file-csv" style="font-size: 1.1rem; color:#3490dc"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Exportar CSV',
                    exportOptions: {
                        columns: ['th:not(:last-child):visible']
                    }
                },
                {
                    extend: 'excelHtml5',
                    title: `Inventario de Activos ${new Date().toLocaleDateString().trim()}`,
                    text: '<i class="fas fa-file-excel" style="font-size: 1.1rem;color:#0f6935"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Exportar Excel',
                    exportOptions: {
                        columns: ['th:not(:last-child):visible']
                    }
                },
                {
                    extend: 'pdfHtml5',
                    title: `Inventario de Activos ${new Date().toLocaleDateString().trim()}`,
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
                    title: `Inventario de Activos ${new Date().toLocaleDateString().trim()}`,
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
                        window.location.href = '/admin/desk/quejas-archivo';
                    }
                }

            ];
            // let btnAgregar = {
            //     text: '<i class="pl-2 pr-3 fas fa-plus"></i> Agregar',
            //     titleAttr: 'Agregar empleado',
            //     url: "{{asset('admin/inicioUsuario/reportes/seguridad')}}",
            //     className: "btn-xs btn-outline-success rounded ml-2 pr-3",
            //     action: function(e, dt, node, config) {
            //     let {
            //     url
            //     } = config;
            //     window.location.href = url;
            //     }
            // };
            //     dtButtons.push(btnAgregar)
            if (!$.fn.dataTable.isDataTable('.tabla_quejasclientes')) {
                window.tabla_quejasclientes_desk = $(".tabla_quejasclientes").DataTable({
                    ajax: "{{route('admin.desk.quejasClientes-index')}}",
                    buttons: dtButtons,
                    columns: [
                        // {data: 'id'},
                        {
                            data: 'folio'
                        },
                        {
                            data: 'cliente',
                            render: function(data, type, row, meta) {
                               return row.cliente.nombre
                            }
                        },
                        {
                            data: 'proyectos',
                            render: function(data, type, row, meta) {
                               return row.proyectos.proyecto
                            }
                        },
                        {
                            data: 'nombre'
                        },
                        {
                            data: 'puesto'
                        },
                        {
                            data: 'telefono'
                        },
                        {
                            data: 'correo'
                        },
                        {
                            data: 'titulo'
                        },
                        {
                            data: 'estatus'
                        },
                        {
                            data: 'fecha'
                        },
                        {
                            data: 'fecha_cierre'
                        },
                        {
                            data: 'proceso_quejado'
                        },
                        {
                            data: 'ubicacion'
                        },
                        {
                            data: 'otro_quejado'
                        },
                        {
                            data: 'descripcion'
                        },
                        {
                            data: 'id',
                            render: function(data, type, row, meta) {
                                let html =
                                    `
                			<div class="botones_tabla">
                				<a href="/admin/desk/${data}/quejas-clientes-edit/"><i class="fas fa-edit"></i></a>`;


                                if ((row.estatus == 'cerrado') || (row.estatus == 'cancelado')) {

                                    html += `<button class="btn archivar" onclick='ArchivarQuejaCliente("/admin/desk/${data}/archivarQuejasClientes"); return false;' style="margin-top:-10px">
				       						<i class="fas fa-archive" ></i></a>
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

            window.ArchivarQuejaCliente = function(url) {
                Swal.fire({
                    title: '¿Archivar queja clientes?',
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
                                    tabla_quejasclientes_desk.ajax.reload();
                                    Swal.fire(
                                        'Queja Archivada',
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
                    // console.log(incidente_id);
                    let url = `/admin/desk/${incidente_id}/archivarQuejasClientes`;
                });
            });
        });
    </script>
@endsection
