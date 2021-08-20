<div class="datatable-fix" style="width: 100%;">

   <table class="table tabla_quejas">
   		<thead>
            <tr style="border: none !important">
                <th colspan="2"></th>
                <th colspan="3" style="border:1px solid #ccc; text-align: center;">Reporto</th>
                <th colspan="3" style="border:1px solid #ccc; text-align: center;">Reportado</th>
            </tr>
            <tr>
       			<th>Folio</th>
                <th>Anonimo</th>
       			<th>Nombre</th>
                <th>Puesto</th>
                <th>Área</th>
                <th>Nombre</th>
                <th>Área</th>
                <th>Proceso</th>
                <th>Externos</th>
       			<th>Descripción</th>
       			<th>Opciones</th> 
            </tr>
   		</thead>
   		<tbody>
   			@foreach($quejas as $queja)
	   			<tr>
	       			<td>{{ $queja->folio }}</td>
	       			<td>{{ $queja->anonimo }}</td>
                    @if($queja->anonimo == 'no')
                        <td>{{ $queja->quejo->name }}</td>
                        <td>{{ $queja->quejo->puesto }}</td>
                        <td>{{ $queja->quejo->area->area }}</td>
                    @else
                        <td> -- </td>
                        <td> -- </td>
                        <td> -- </td> 
                    @endif
                    <td>{{ $queja->quejado }}</td>
                    <td>{{ $queja->area_quejado }}</td>
                    <td>{{ $queja->proceso_quejado }}</td>
                    <td>{{ $queja->externo_quejado }}</td>
	       			<td>{{ $queja->descripcion }}</td>
	       			<td>
	       				<a href="{{ route('admin.desk.quejas-edit', $queja->id) }}"><i class="fas fa-edit"></i></a>
	       			</td>
	   			</tr>
   			@endforeach
   		</tbody>
   </table>
</div>


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
            @can('activo_create')
                let btnAgregar = {
                text: '<i class="pl-2 pr-3 fas fa-plus"></i> Agregar',
                titleAttr: 'Agregar inventario de activos',
                url: "{{ route('admin.activos.create') }}",
                className: "btn-xs btn-outline-success rounded ml-2 pr-3",
                action: function(e, dt, node, config){
                let {url} = config;
                window.location.href = url;
                }
                };
                dtButtons.push(btnAgregar);
            @endcan
            

            let dtOverrideGlobals = {
                buttons: dtButtons,
            };
            let table = $('.tabla_quejas').DataTable(dtOverrideGlobals);
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