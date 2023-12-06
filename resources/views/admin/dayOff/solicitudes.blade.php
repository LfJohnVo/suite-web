@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/vacaciones.css') }}">
@endsection
@section('content')
    {{ Breadcrumbs::render('Vista-Global-Dayoff') }}


    <h5 class=" titulo_general_funcion">Vista Global de Solicitudes de Day OFF</h5>

    <div class="row">
        @can('reglas_dayoff_vista_global')
            <div class="col-12 text-right">
                <a type="button" class="btn" style="background-color:#b9eeb9; border: #fff; width:200px;"
                    href="{{ route('admin.descarga-dayOff') }}">
                    <i class="fas fa-file-excel" style="font-size: 1.1rem;color:#0f6935" title="Exportar Excel"></i>
                    Exportar Excel
                </a>
            </div>
        @endcan
    </div>
    {{-- <div class="card">
        @can('amenazas_agregar')
            <div style="margin-bottom: 10px; margin-left:10px;" class="row">
                <div class="col-lg-12">
                    @include('csvImport.modal', [
                        'model' => 'Amenaza',
                        'route' => 'admin.amenazas.parseCsvImport',
                    ])
                </div>
            @endcan
        </div>
 --}}

    @include('partials.flashMessages')
    <div class="datatable-fix datatable-rds">
        <table class="datatable datatable-vista-global-dayoff tblCSV" id="datatable-vista-global-dayoff">
            <thead>
                <tr>
                    <th style="min-width: 200px;">
                        Solicitante
                    </th>
                    <th style="min-width: 110px;">
                        Descripción
                    </th>

                    <th style="min-width: 75px;">
                        Año
                    </th>
                    <th style="min-width: 110px;">
                        Días Solicitados
                    </th>

                    <th style="min-width: 75px;">
                        Inicio
                    </th>
                    <th style="min-width: 75px;">
                        Fin
                    </th>
                    <th style="min-width: 75px;">
                        Estatus
                    </th>
                    {{-- <th style="min-width: 150px;">
                            Comentarios
                        </th> --}}
                    <th style="min-width: 70px;">
                        Opciones
                    </th>
                </tr>
            </thead>
        </table>
    </div>
    {{-- </div> --}}
@endsection

@section('scripts')
    @parent
    <script>
        $(function() {
            // let dtButtons = [{
            //         extend: 'csvHtml5',
            //         title: `Amenazas ${new Date().toLocaleDateString().trim()}`,
            //         text: '<i class="fas fa-file-csv" style="font-size: 1.1rem; color:#3490dc"></i>',
            //         className: "btn-sm rounded pr-2",
            //         titleAttr: 'Exportar CSV',
            //         exportOptions: {
            //             columns: ['th:not(:last-child):visible']
            //         }
            //     },
            //     {
            //         extend: 'excelHtml5',
            //         title: `Amenazas ${new Date().toLocaleDateString().trim()}`,
            //         text: '<i class="fas fa-file-excel" style="font-size: 1.1rem;color:#0f6935"></i>',
            //         className: "btn-sm rounded pr-2",
            //         titleAttr: 'Exportar Excel',
            //         exportOptions: {
            //             columns: ['th:not(:last-child):visible']
            //         }
            //     },

            //     {
            //         extend: 'print',
            //         text: '<i class="fas fa-print" style="font-size: 1.1rem;color:#345183"></i>',
            //         className: "btn-sm rounded pr-2",
            //         titleAttr: 'Imprimir',
            //         // set custom header when print
            //         customize: function(doc) {
            //             let logo_actual = @json($logo_actual);
            //             let empresa_actual = @json($empresa_actual);
            //             let empleado = @json(auth()->user()->empleado->name);

            //             var now = new Date();
            //             var jsDate = now.getDate() + '-' + (now.getMonth() + 1) + '-' + now.getFullYear();
            //             $(doc.document.body).prepend(`
        //                 <div class="row">
        //                     <div class="col-4 text-center p-2" style="border:2px solid #CCCCCC">
        //                         <img class="img-fluid" style="max-width:120px" src="${logo_actual}"/>
        //                     </div>
        //                     <div class="col-4 text-center p-2" style="border:2px solid #CCCCCC">
        //                         <p>${empresa_actual}</p>
        //                         <strong style="color:#345183">Amenazas</strong>
        //                     </div>
        //                     <div class="col-4 text-center p-2" style="border:2px solid #CCCCCC">
        //                         Fecha: ${jsDate}
        //                     </div>
        //                 </div>
        //             `);

            //             $(doc.document.body).find('table')
            //                 .css('font-size', '12px')
            //                 .css('margin-top', '15px')
            //             // .css('margin-bottom', '60px')
            //             $(doc.document.body).find('th').each(function(index) {
            //                 $(this).css('font-size', '18px');
            //                 $(this).css('color', '#fff');
            //                 $(this).css('background-color', 'blue');
            //             });
            //         },
            //         title: '',
            //         exportOptions: {
            //             columns: ['th:not(:last-child):visible']
            //         }
            //     },
            //     {
            //         extend: 'colvis',
            //         text: '<i class="fas fa-filter" style="font-size: 1.1rem;"></i>',
            //         className: "btn-sm rounded pr-2",
            //         titleAttr: 'Seleccionar Columnas',
            //     },
            //     {
            //         extend: 'colvisGroup',
            //         text: '<i class="fas fa-eye" style="font-size: 1.1rem;"></i>',
            //         className: "btn-sm rounded pr-2",
            //         show: ':hidden',
            //         titleAttr: 'Ver todo',
            //     },
            //     {
            //         extend: 'colvisRestore',
            //         text: '<i class="fas fa-undo" style="font-size: 1.1rem;"></i>',
            //         className: "btn-sm rounded pr-2",
            //         titleAttr: 'Restaurar a estado anterior',
            //     }

            // ];

            let dtButtons = [];

            // let btnAgregar = {
            //     text: '<i class="fa-solid fa-box-archive"></i>  Archivo',
            //     titleAttr: 'Archivo',
            //     url: "{{ route('admin.solicitud-vacaciones.archivo') }}",
            //     className: "btn-xs btn-outline-primary rounded ml-2 pr-3 archivo",
            //     action: function(e, dt, node, config) {
            //         let {
            //             url
            //         } = config;
            //         window.location.href = url;
            //     }
            // };
            // dtButtons.push(btnAgregar);


            // let btnExport = {
            //     text: '<i  class="fas fa-download"></i>',
            //     titleAttr: 'Descargar plantilla',
            //     className: "btn btn_cargar",
            //     url: "{{ route('descarga-amenaza') }}",
            //     action: function(e, dt, node, config) {
            //         let {
            //             url
            //         } = config;
            //         window.location.href = url;
            //     }
            // };
            // let btnImport = {
            //     text: '<i  class="fas fa-file-upload"></i>',
            //     titleAttr: 'Importar datos',
            //     className: "btn btn_cargar",
            //     action: function(e, dt, node, config) {
            //         $('#csvImportModal').modal('show');
            //     }
            // };



            // dtButtons.push(btnExport);
            // dtButtons.push(btnImport);


            let dtOverrideGlobals = {
                pageLength: 10,
                buttons: dtButtons,
                processing: true,
                serverSide: true,
                retrieve: true,
                aaSorting: [],
                ajax: "{{ route('admin.vista-global-dayoff') }}",
                columns: [{
                        data: 'empleado',
                        name: 'empleado',
                        render: function(data, type, row, meta) {
                            data = JSON.parse(data);
                            return `
                            <img src="{{ asset('storage/empleados/imagenes') }}/${data.avatar}" title="${data.name}" class="rounded-circle" style="clip-path: circle(15px at 50% 50%);height: 30px;" />
                            <span>${data.name}</span>
                            `;
                        }
                    },

                    {
                        data: 'descripcion',
                        name: 'descripcion',
                        render: function(data, type, row) {
                            return `<div style="text-align:center">${data}</div>`;
                        }
                    },

                    {
                        data: 'año',
                        name: 'año',
                        render: function(data, type, row) {

                            return `<div style="text-align:center">${data}</div>`;
                        }

                    },

                    {
                        data: 'dias_solicitados',
                        name: 'dias_solicitados',
                        render: function(data, type, row) {

                            return `<div style="text-align:center">${data}</div>`;
                        }

                    },

                    {
                        data: 'fecha_inicio',
                        name: 'fecha_inicio',
                        render: function(data, type, row) {
                            let fecha = data.split('-');
                            let fechaDMY = `${fecha[2]}-${fecha[1]}-${fecha[0]}`;
                            return `<div style="text-align:left">${fechaDMY}</div>`;

                        }
                    },
                    {
                        data: 'fecha_fin',
                        name: 'fecha_fin',
                        render: function(data, type, row) {
                            let fecha = data.split('-');
                            let fechaDMY = `${fecha[2]}-${fecha[1]}-${fecha[0]}`;
                            return `<div style="text-align:left">${fechaDMY}</div>`;
                        }
                    },
                    {
                        data: 'aprobacion',
                        name: 'aprobacion',
                        render: function(data, type, row) {
                            const aprobacion = row.aprobacion;
                            console.log(aprobacion)
                            switch (Number(aprobacion)) {
                                case 1:
                                    return `
                                <div  style="text-align:left">
                                    <span class="badge badge-pill badge-warning">Pendiente</span>
                                </div>
                                `;
                                    break;
                                case 2:
                                    return `
                                <div style="text-align:left">
                                    <span class="badge badge-pill badge-danger">Rechazado</span>
                                </div>
                                `;
                                    break;
                                case 3:
                                    return `
                                <div style="text-align:left">
                                    <span class="badge badge-pill badge-success">Aprobado</span>
                                </div>
                                `;
                                    break;
                                default:
                                    return `
                                <span class="badge badge-pill badge-secondary">Sin Seguimiento</span>
                                `;
                            }
                        }
                    },

                    // {
                    //     data: 'descripcion',
                    //     name: 'descripcion',
                    //     render: function(data, type, row) {
                    //         return `<div style="text-align:left">${data}</div>`;
                    //     }
                    // },
                    {
                        data: 'opciones',
                        render: function(data, type, row, meta) {
                            let aprobacion = row.aprobacion;
                            let id = row.id;
                            console.log(id);

                            return `
                                <div style="text-aling:center">
                                <a href="solicitud-dayoff/${row.id}/vistaGlobal"  title="Ver solicitud"><i class="fa-solid fa-eye fa-1x text-info text-aling:center"></i></a>
                                </div>
                               `;
                        }
                    }
                ],
                orderCellsTop: true,
                order: [
                    [0, 'desc']
                ],
            };
            let table = $('.datatable-vista-global-dayoff').DataTable(dtOverrideGlobals);
            $('.btn.buttons-print.btn-sm.rounded.pr-2').unbind().click(function() {
                let titulo_tabla = `
                <h5>
                    <strong>
                       Vista Global Day Off
                    </strong>
                </h5>
            `;
                imprimirTabla('datatable-vista-global-dayoff', titulo_tabla);
            });

        });
    </script>
@endsection
