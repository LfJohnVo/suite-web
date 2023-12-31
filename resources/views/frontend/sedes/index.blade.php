@extends('layouts.frontend')
@section('content')
    <div class="mt-5 card">

        <div class="py-3 col-md-10 col-sm-9 card card-body bg-primary align-self-center " style="margin-top:-40px; ">
            <h3 class="mb-2 text-center text-white"><strong>Sedes</strong></h3>
        </div>
        @can('configuracion_sede_create')
            <div style="margin-bottom: 10px; margin-left:10px;" class="row">
                <div class="col-lg-12">
                    @include('csvImport.modal', ['model' => 'Sede', 'route' => 'sedes.parseCsvImport'])
                </div>
            </div>
        @endcan
        @if ($numero_sedes > 0)
            <div class="px-1 py-2 mx-3 rounded shadow" style="background-color: #DBEAFE; border-top:solid 1px #3B82F6;">
                <div class="row w-100">
                    <div class="text-center col-1 align-items-center d-flex justify-content-center">
                        <div class="w-100">
                            <i class="bi bi-info mr-3" style="color: #3B82F6; font-size: 30px"></i>
                        </div>
                    </div>
                    <div class="col-11">
                        <p class="m-0" style="font-size: 16px; font-weight: bold; color: #1E3A8A">Instrucciones</p>
                        <p class="m-0" style="font-size: 14px; color:#1E3A8A ">Por favor registre cada una de las sedes
                            con las que cuenta su organización</p>
                    </div>
                </div>
            </div>
            @include('partials.flashMessages')
            <div class="card-body datatable-fix">
                <table class="table table-bordered w-100 datatable datatable-Sede">
                    <thead class="thead-dark">
                        <tr>
                            <th>
                                {{ trans('cruds.sede.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.sede.fields.sede') }}
                            </th>
                            <th>
                                Fotografía de la Sede
                            </th>
                            <th>
                                Dirección
                            </th>
                            <th>
                                Ubicación
                            </th>
                            <th>
                                {{ trans('cruds.sede.fields.descripcion') }}
                            </th>
                            <th>
                                {{ trans('cruds.sede.fields.organizacion') }}
                            </th>
                            <th>
                                Opciones
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        @else
            <div class="px-1 py-2 mx-3 rounded shadow" style="background-color: #DBEAFE; border-top:solid 1px #3B82F6;">
                <div class="row w-100">
                    <div class="text-center col-1 align-items-center d-flex justify-content-center">
                        <div class="w-100">
                            <i class="bi bi-info mr-3" style="color: #3B82F6; font-size: 30px"></i>
                        </div>
                    </div>
                    <div class="col-11">
                        <p class="m-0" style="font-size: 16px; font-weight: bold; color: #1E3A8A">
                            Atención</p>
                        <p class="m-0" style="font-size: 14px; color:#1E3A8A ">Aún no se han agregado
                            Sedes a la
                            organización
                            <a href="{{ route('sedes.create') }}"><i class="fas fa-share"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <img src="{{ asset('img/sedes.png') }}" alt="No se pudo cargar el organigrama" class="mt-3"
                    style="height: 300px;">
            </div>
        @endif
    </div>

@endsection

@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = [{
                    extend: 'csvHtml5',
                    title: `Sedes - Ubicación ${new Date().toLocaleDateString().trim()}`,
                    text: '<i class="fas fa-file-csv" style="font-size: 1.1rem; color:#3490dc"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Exportar CSV',
                    exportOptions: {
                        columns: ['th:not(:last-child):visible']
                    }
                },
                {
                    extend: 'excelHtml5',
                    title: `Sedes - Ubicación ${new Date().toLocaleDateString().trim()}`,
                    text: '<i class="fas fa-file-excel" style="font-size: 1.1rem;color:#0f6935"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Exportar Excel',
                    exportOptions: {
                        columns: ['th:not(:last-child):visible']
                    }
                },
                {
                    extend: 'pdfHtml5',
                    title: `Sedes - Ubicación ${new Date().toLocaleDateString().trim()}`,
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
                    title: `Sedes - Ubicación ${new Date().toLocaleDateString().trim()}`,
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

            @can('configuracion_sede_create')
                let btnAgregar = {
                text: '<i class="pl-2 pr-3 fas fa-plus"></i> Agregar',
                titleAttr: 'Agregar sede',
                url: "{{ route('sedes.create') }}",
                className: "btn-xs btn-outline-success rounded ml-2 pr-3",
                action: function(e, dt, node, config){
                let {url} = config;
                window.location.href = url;
                }
                };
                let btnImport = {
                text: '<i class="pl-2 pr-3 fas fa-file-csv"></i> CSV Importar',
                titleAttr: 'Importar datos por CSV',
                className: "btn-xs btn-outline-primary rounded ml-2 pr-3",
                action: function(e, dt, node, config){
                $('#csvImportModal').modal('show');
                }
                };
                dtButtons.push(btnAgregar);
                dtButtons.push(btnImport);
            @endcan
            @can('configuracion_sede_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
                let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('sedes.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
                return entry.id
                });

                if (ids.length === 0) {
                alert('{{ trans('global.datatables.zero_selected') }}')

                return
                }

                if (confirm('{{ trans('global.areYouSure') }}')) {
                $.ajax({
                headers: {'x-csrf-token': _token},
                method: 'POST',
                url: config.url,
                data: { ids: ids, _method: 'DELETE' }})
                .done(function () { location.reload() })
                }
                }
                }
                //dtButtons.push(deleteButton)
            @endcan

            let dtOverrideGlobals = {
                buttons: dtButtons,
                processing: true,
                serverSide: true,
                retrieve: true,
                aaSorting: [],
                ajax: "{{ route('sedes.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'sede',
                        name: 'sede'
                    },
                    {
                        data: 'foto_sedes',
                        name: 'foto_sedes',
                        render: function(data, type, row, meta) {
                            return `<div class="text-center w-100"><img style="width:${data!=""?"50px":"80px"}" src="{{ asset('storage/sedes/imagenes/') }}/${data !=""?data:"organizacion.png"}"></div>`;
                        }
                    },
                    {
                        data: 'direccion',
                        name: 'direccion'
                    },
                    {
                        data: 'ubicacion',
                        name: 'ubicacion',
                        render: function(data, type, row, meta) {
                            return `<div class="text-center w-100"><a href="sede-ubicacion/${data}" target="_blank"><i class="fas fa-map-marked-alt fa-2x text-info"></i></a></div>`;
                        }
                    },
                    {
                        data: 'descripcion',
                        name: 'descripcion'
                    },
                    {
                        data: 'organizacion_empresa',
                        name: 'organizacion.empresa'
                    },
                    {
                        data: 'actions',
                        name: '{{ trans('global.actions') }}'
                    }
                ],
                orderCellsTop: true,
                order: [
                    [4, 'desc']
                ],
            };
            let table = $('.datatable-Sede').DataTable(dtOverrideGlobals);
        });
    </script>
@endsection
