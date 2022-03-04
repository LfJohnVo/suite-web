@extends('layouts.admin')
@section('content')

    <style type="text/css">
        .aprobada {
            padding: 3px;
            background-color: #61CB5C;
            color: #fff;
            border-radius: 4px;
        }

        .rechazada {
            padding: 3px;
            background-color: #EA7777;
            color: #fff;
            border-radius: 4px;
        }

        .pendiente {
            padding: 3px;
            background-color: #F48C16;
            color: #fff;
            border-radius: 4px;
        }

    </style>


    {{ Breadcrumbs::render('timesheet-aprobaciones') }}

    <h5 class="col-12 titulo_general_funcion">TimeSheet: <font style="font-weight:lighter;">Aprobaciones</font></h5>

    <div class="card card-body">
        <div class="row">

            <div class="datatable-fix w-100">
                <table id="datatable_timesheet" class="table w-100">
                    <thead class="w-100">
                        <tr>
                            <th>Fin de semana </th>
                            <th>Empleado</th>
                            <th>Responsable</th>
                            <th>Aprobación</th>
                            <th>opciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($aprobaciones as $aprobacion)
                            <tr>
                                <td>
                                    {{ $aprobacion->fecha_dia }}
                                </td>
                                <td>
                                    {{ $aprobacion->empleado->name }}
                                </td>
                                <td>
                                    {{ $aprobacion->aprobador->name }}
                                </td>
                                <td>
                                    @if ($aprobacion->aprobado)
                                        <span class="aprobada">Aprobada</span>
                                    @endif

                                    @if ($aprobacion->rechazado)
                                        <span class="rechazada">Rechazada</span>
                                    @endif

                                    @if ($aprobacion->rechazado == false && $aprobacion->aprobado == false)
                                        <span class="pendiente">Pendiente</span>
                                    @endif
                                </td>
                                <td class="">
                                    @can('timesheet_administrador_aprobar_horas')
                                        <a href="{{ asset('admin/timesheet/show') }}/{{ $aprobacion->id }}" title="Visualizar" class="btn"><i class="fa-solid fa-eye"></i></a>
                                        
                                        <div class="btn" data-toggle="modal" data-target="#modal_aprobar_{{ $aprobacion->id}}"> 
                                            <i class="fas fa-calendar-check" style="color:#3CA06C; font-size: 15pt;"></i>
                                        </div>

                                        <div class="btn" data-toggle="modal" data-target="#modal_rechazar_{{ $aprobacion->id}}">
                                            <i class="fa-solid fa-calendar-xmark" style="color:#F05353; font-size: 15pt;"></i>
                                        </div>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    @foreach ($aprobaciones as $aprobacion)
        {{-- aprobar --}}
        <div class="modal fade" id="modal_aprobar_{{ $aprobacion->id}}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="delete">
                            <div class="text-center">
                                <i class="fa-solid fa-calendar-check" style="color: #3CA06C; font-size:60pt;"></i>
                                <h1 class="my-4" style="font-size:14pt;">Aceptar Registro</h1>
                                <p class="parrafo">¿Esta seguro que desea aceptar este registro?</p>
                            </div>
                            
                            <div class="mt-4">
                                <form action="{{ route('admin.timesheet-aprobar', ['id' => $aprobacion->id]) }}" method="POST" class="row">
                                    @csrf
                                    <div class="form-group col-12">
                                        <label><i class="fa-solid fa-comment-dots iconos_crear"></i> Comentarios</label>
                                        <textarea class="form-control" name="comentarios"></textarea>
                                        <small>Escriba las razones por la que acepta este registro.</small>
                                    </div>
                                    <div class="col-12 text-right">
                                         <button title="Rechazar" class="btn btn_cancelar" data-dismiss="modal">
                                            Canecelar
                                        </button>
                                        <button title="Rechazar" class="btn btn-info" style="border:none; background-color:#3CA06C;">
                                            <i class="fas fa-calendar-check iconos_crear"></i>
                                            Aceptar Registro
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- rechazar --}}
        <div class="modal fade" id="modal_rechazar_{{ $aprobacion->id}}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="delete">
                            <div class="text-center">
                                <i class="fa-solid fa-calendar-xmark" style="color: #F05353; font-size:60pt;"></i>
                                <h1 class="my-4" style="font-size:14pt;">Rechazar Registro</h1>
                                <p class="parrafo">¿Esta seguro que desea rechazar este registro?</p>
                            </div>
                            
                            <div class="mt-4">
                                <form action="{{ route('admin.timesheet-rechazar', ['id' => $aprobacion->id]) }}" method="POST" class="row">
                                    @csrf
                                    <div class="form-group col-12">
                                        <label><i class="fa-solid fa-comment-dots iconos_crear"></i> Comentarios</label>
                                        <textarea class="form-control" name="comentarios"></textarea>
                                        <small>Escriba las razones por la que rechaza este registro.</small>
                                    </div>
                                    <div class="col-12 text-right">
                                        <button title="Rechazar" class="btn btn_cancelar" data-dismiss="modal">
                                            Canecelar
                                        </button>
                                        <button title="Rechazar" class="btn btn-info" style="border:none; background-color:#F05353;">
                                            <i class="fas fa-calendar-xmark iconos_crear"></i>
                                            Rechazar Registro
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection


@section('scripts')
    @parent
    <script>
        $(function() {
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
                        doc.pageMargins = [5, 20, 5, 20];
                        doc.styles.tableHeader.fontSize = 10;
                        doc.defaultStyle.fontSize = 10; //<-- set fontsize to 16 instead of 10
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
                }

            ];
            let btnAgregar = {
                text: '<i class="pl-2 pr-3 fas fa-plus"></i> Agregar',
                titleAttr: 'Agregar empleado',
                url: "{{ asset('admin/inicioUsuario/reportes/quejas') }}",
                className: "btn-xs btn-outline-success rounded ml-2 pr-3",
                action: function(e, dt, node, config) {
                    let {
                        url
                    } = config;
                    window.location.href = url;
                }
            };


            let dtOverrideGlobals = {
                buttons: dtButtons,
                order: [
                    [0, 'desc']
                ]
            };
            let table = $('#datatable_timesheet').DataTable(dtOverrideGlobals);
            // $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
            //     $($.fn.dataTable.tables(true)).DataTable()
            //         .columns.adjust();
            // });
            // $('.datatable thead').on('input', '.search', function() {
            //     let strict = $(this).attr('strict') || false
            //     let value = strict && this.value ? "^" + this.value + "$" : this.value
            //     table
            //         .column($(this).parent().index())
            //         .search(value, strict)
            //         .draw()
            // });
        });
    </script>
@endsection
