@extends('layouts.admin')
@section('content')

<style>

    .btn_cargar{
        border-radius: 100px !important;
        border: 1px solid #345183;
        color: #345183;
        text-align: center;
        padding: 0;
        width: 45px;
        height: 45px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 !important;
        margin-right: 10px !important;
    }
    .btn_cargar:hover{
        color: #fff;
        background:#345183 ;
    }
    .btn_cargar i{
        font-size: 15pt;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .agregar{
        margin-right:15px;
    }

    .table tr td:nth-child(4) {

    text-align: left !important;

    }

</style>

    {{-- {{ Breadcrumbs::render('perfil-puesto') }} --}}
    @can('puesto_create')
        <div class="mt-5 card">
            <div style="margin-bottom: 10px; margin-left:10px;" class="row">
                {{-- <div class="col-lg-12">
                    @include('csvImport.modalperfilpuesto', ['model' => 'Vulnerabilidad', 'route' => 'admin.vulnerabilidads.parseCsvImport'])
                </div> --}}
            </div>

        @endcan

        <div class="py-3 col-md-10 col-sm-9 card-body verde_silent align-self-center" style="margin-top: -40px;">
            <h3 class="mb-1 text-center text-white"><strong> Registrar: </strong>Proceso</h3>
        </div>


        <div class="card-body">
            <div class="row">
                <div class="col-12" style="margin-left:-15px;" >
                    <div class="nav nav-tabs active" id="tabsEmpleado" role="tablist">
                        <a class="nav-link active" href="{{route('admin.procesos-octave.index')}}">
                        <i class="fas fa-project-diagram mr-2" style="font-size:20px;"></i>Procesos
                        </a>
                        <a class="nav-link"  href="{{route('admin.activosInformacion.index')}}" >
                            <i class="mr-2 fas fa-briefcase" style="font-size:20px;" style="text-decoration:none;"></i>
                        Activos
                        </a>
                        <a class="nav-link"  href="{{route('admin.carta-aceptacion.index')}}"  >
                            <i class="fas fa-camera-retro mr-2" style="font-size:20px;" style="text-decoration:none;"></i>
                        Escenarios
                        </a>
                        <a class="nav-link"  href="{{route('admin.carta-aceptacion.index')}}" >
                            <i class="fas fa-box-open mr-2" style="font-size:20px;" style="text-decoration:none;"></i>
                            Contenedores
                        </a>

                        <a class="nav-link"  href="{{route('admin.carta-aceptacion.index')}}" >
                            <i class="fas fa-network-wired mr-2" style="font-size:20px;" style="text-decoration:none;"></i>
                            Árbol de Riesgos
                        </a>
                        <a class="nav-link "  href="{{route('admin.carta-aceptacion.index')}}" >
                        <i class="fas fa-chart-bar mr-2" style="font-size:20px;" style="text-decoration:none;"></i>Gráfica
                        </a>
                    </div>
                </div>
                <div class="datatable-fix mt-3 col-12">
                    <table class="table table-bordered w-100 datatable-Carta">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Proceso
                                </th>
                                <th>
                                    Nivel Riesgo
                                </th>
                                <th>
                                    Dirección
                                </th>
                                <th>
                                    Servicio
                                </th>
                                <th>
                                    Opciones
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = [{
                    extend: 'csvHtml5',
                    title: `Puestos ${new Date().toLocaleDateString().trim()}`,
                    text: '<i class="fas fa-file-csv" style="font-size: 1.1rem; color:#3490dc"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Exportar CSV',
                    exportOptions: {
                        columns: ['th:not(:last-child):visible']
                    }
                },
                {
                    extend: 'excelHtml5',
                    title: `Puestos ${new Date().toLocaleDateString().trim()}`,
                    text: '<i class="fas fa-file-excel" style="font-size: 1.1rem;color:#0f6935"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Exportar Excel',
                    exportOptions: {
                        columns: ['th:not(:last-child):visible']
                    }
                },
                {
                    extend: 'pdfHtml5',
                    title: `Puestos ${new Date().toLocaleDateString().trim()}`,
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
                    title: `Puestos ${new Date().toLocaleDateString().trim()}`,
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

            @can('puesto_create')
                let btnAgregar = {
                text: '<i class="pl-2 pr-3 fas fa-plus"></i> Agregar',
                titleAttr: 'Agregar area',
                url: "{{ route('admin.procesos-octave.create') }}",
                className: "btn-xs btn-outline-success rounded ml-2 pr-3 agregar",
                action: function(e, dt, node, config){
                let {url} = config;
                window.location.href = url;
                }
                };
                let btnExport = {
                text: '<i  class="fas fa-download"></i>',
                titleAttr: 'Descargar plantilla',
                className: "btn btn_cargar" ,
                url:"{{ route('descarga-puesto') }}",
                action: function(e, dt, node, config) {
                    let {
                        url
                    } = config;
                    window.location.href = url;
                }
            };
            let btnImport = {
                text: '<i  class="fas fa-file-upload"></i>',
                titleAttr: 'Importar datos',
                className: "btn btn_cargar",
                action: function(e, dt, node, config) {
                    $('#xlsxImportModal').modal('show');
                }
            };

            dtButtons.push(btnAgregar);
            dtButtons.push(btnExport);
            dtButtons.push(btnImport);
            @endcan
            @can('puesto_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
                let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.carta-aceptacion.destroy') }}",
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
                ajax: "{{ route('admin.carta-aceptacion.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'proceso',
                        name: 'proceso'
                    },
                    {
                        data: 'nivel_riesgo',
                        name: 'nivel_riesgo'
                    },
                    {
                        data: 'direccion',
                        name: 'direccion'
                    },
                    {
                        data: 'servicio',
                        name: 'servicio'
                    },
                    {
                        data: 'actions',
                        name: '{{ trans('global.actions') }}'
                    }
                ],
                orderCellsTop: true,
                order: [
                    [0, 'desc']
                ]
            };
            let table = $('.datatable-Carta').DataTable(dtOverrideGlobals);
            $('#lista_areas').on('change', function() {
                console.log(this.value);
                if (this.value != null && this.value != "") {
                    this.style.border = "2px solid #20a4a1";
                    table.columns(1).search("(^" + this.value + "$)", true, false).draw();
                } else {
                    this.style.border = "none";
                    table.columns(1).search(this.value).draw();
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {})
    </script>
@endsection
