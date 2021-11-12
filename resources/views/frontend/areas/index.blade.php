@extends('layouts.frontend')
@section('content')
    <div class="mt-5 card">
        @can('configuracion_area_create')
            <div class="py-3 col-md-10 col-sm-9 card card-body bg-primary align-self-center " style="margin-top:-40px; ">
                <h3 class="mb-2 text-center text-white"><strong>Registro de Áreas</strong></h3>
            </div>
            <div style="margin-bottom: 10px; margin-left:10px;" class="row">
                <div class="col-lg-12">
                    @include('csvImport.modal', ['model' => 'Area', 'route' => 'areas.parseCsvImport'])
                </div>
            </div>
        @endcan

                <div class="card-body">
                <div class="px-1 py-2 mx-3 rounded shadow" style="background-color: #DBEAFE; border-top:solid 3px #3B82F6;">
            <div class="row w-100">
                <div class="text-center col-1 align-items-center d-flex justify-content-center">
                    <div class="w-100">
                        <i class="fas fa-info-circle" style="color: #3B82F6; font-size: 22px"></i>
                    </div>
                </div>
                <div class="col-11">
                    <p class="m-0" style="font-size: 16px; font-weight: bold; color: #1E3A8A">Paso 2</p>
                    <p class="m-0" style="font-size: 14px; color:#1E3A8A ">Agregue las áreas de la organización comenzando
                        por la de más alta jerarquía y dé
                        clic en finalizar
                        <a href="{{ route('areas.renderJerarquia') }}" class="item-right col-2 btn text-light"
                            style="background-color:rgb(85, 217, 226); float:right">Finalizar</a>
                    </p>

                </div>
            </div>
        </div>
                @include('partials.flashMessages')
                <div class="card-body datatable-fix">
                    <table class="table table-bordered w-100 datatable-Area">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Nombre de Área
                                </th>
                                <th>
                                    Grupo
                                </th>
                                <th>
                                    Reporta a
                                </th>
                                <th>
                                    Descripción
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

        
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = [{
                    extend: 'csvHtml5',
                    title: `Áreas ${new Date().toLocaleDateString().trim()}`,
                    text: '<i class="fas fa-file-csv" style="font-size: 1.1rem; color:#3490dc"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Exportar CSV',
                    exportOptions: {
                        columns: ['th:not(:last-child):visible']
                    }
                },
                {
                    extend: 'excelHtml5',
                    title: `Áreas ${new Date().toLocaleDateString().trim()}`,
                    text: '<i class="fas fa-file-excel" style="font-size: 1.1rem;color:#0f6935"></i>',
                    className: "btn-sm rounded pr-2",
                    titleAttr: 'Exportar Excel',
                    exportOptions: {
                        columns: ['th:not(:last-child):visible']
                    }
                },
                {
                    extend: 'pdfHtml5',
                    title: `Áreas ${new Date().toLocaleDateString().trim()}`,
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
                    title: `Áreas ${new Date().toLocaleDateString().trim()}`,
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
                titleAttr: 'Agregar area',
                url: "{{ route('areas.create') }}",
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
            
            @can('configuracion_area_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
                let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('areas.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
                return entry.id
                });

                if (ids.length === 0) {
                alert('{{ trans('global.datatables.zero_selected') }}')

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 0, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Area:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  $('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value
      table
        .column($(this).parent().index())
        .search(value, strict)
        .draw()
  });
})

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
                ajax: "{{ route('areas.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'area',
                        name: 'area'
                    },
                    {
                        data: 'grupo',
                        name: 'grupo'
                    },
                    {
                        data: 'reporta',
                        name: 'reporta'
                    },
                    {
                        data: 'descripcion',
                        name: 'descripcion'
                    },
                    {
                        data: 'actions',
                        name: '{{ trans('global.actions') }}'
                    }
                ],
                orderCellsTop: true,
                order: [
                    [3, 'desc']
                ]
            };
            let table = $('.datatable-Area').DataTable(dtOverrideGlobals);
        });
    </script>

    <script type="text/javascript">
        $(".caja_btn_a a").click(function() {
            $(".caja_btn_a a").removeClass("btn_a_seleccionado");
            $(".caja_btn_a a:hover").addClass("btn_a_seleccionado");
            $("#contenido1").removeClass("d-block");

        });
    </script>
@endsection
