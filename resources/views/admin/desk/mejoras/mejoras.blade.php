<div class="row">
    <div class="col-6 col-md-2">
        <div class="tarjetas_seguridad_indicadores cdr-celeste">
            <div class="numero"><i class="fas fa-exclamation-triangle"></i> {{ $total_mejoras }}</div>
            <div>Mejoras</div>
        </div>
    </div>
    <div class="col-6 col-md-2 ">
        <div class="tarjetas_seguridad_indicadores cdr-amarillo">
            <div class="numero"><i class="far fa-arrow-alt-circle-right"></i> {{ $nuevos_mejoras }}</div>
            <div>Nuevos</div>
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div class="tarjetas_seguridad_indicadores cdr-morado">
            <div class="numero"><i class="fas fa-redo-alt"></i> {{ $en_curso_mejoras }}</div>
            <div>En curso</div>
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div class="tarjetas_seguridad_indicadores cdr-azul">
            <div class="numero"><i class="fas fa-history"></i> {{ $en_espera_mejoras }}</div>
            <div>En espera</div>
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div class="tarjetas_seguridad_indicadores cdr-verde">
            <div class="numero"><i class="far fa-check-circle"></i> {{ $cerrados_mejoras }}</div>
            <div>Cerrados</div>
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div class="tarjetas_seguridad_indicadores cdr-rojo">
            <div class="numero"><i class="far fa-circle"></i> {{ $cancelados_mejoras }}</div>
            <div>Cancelados</div>
        </div>
    </div>
</div>

<div class="datatable-fix" style="width: 100%;">
    <div class="mb-3 text-right">
        <a class="btn btn-danger" href="{{asset('admin/inicioUsuario/reportes/mejoras')}}">Crear reporte</a>
    </div>

   <table class="table tabla_mejoras">
   		<thead>
   			<tr>
       			<th>Folio</th>
                <th style="min-width:200px;">Estatus</th>
                <th style="min-width:200px;">Fecha de identificación</th>
                <th style="min-width:200px;">Fecha de recepción</th>
                <th style="min-width:200px;">Fecha de cierre</th>
       			<th style="min-width:200px;">Nombre</th>
       			<th style="min-width:200px;">Correo</th>
       			<th style="min-width:200px;">Teléfono</th>
                <th style="min-width: 500px;">Mejora</th>
                <th style="min-width:200px;">Tipo de mejora</th>
                <th style="min-width:200px;">Área</th>
                <th style="min-width:200px;">Proceso</th>
       			<th style="min-width: 500px;">Descripción</th>
                <th style="min-width: 500px;">Beneficios</th>
       			<th>Opciones</th>
   			</tr>
   		</thead>
   		<tbody>
   			@foreach($mejoras as $mejora)
	   			<tr>
	       			<td>{{ $mejora->folio }}</td>
                    <td>{{ $mejora->estatus }}</td>
                    <td>{{ $mejora->fecha_creacion }}</td>
                    <td>{{ $mejora->fecha_reporte }}</td>
                    <td>{{ $mejora->fecha_de_cierre }}</td>
	       			<td>
                        <img class="img_empleado" src="{{ asset('storage/empleados/imagenes/') }}/{{ $mejora->mejoro->avatar }}" title="{{ $mejora->mejoro->name }}">
                    </td>
	       			<td>{{ $mejora->mejoro->email }}</td>
	       			<td>{{ $mejora->mejoro->telefono }}</td>
                    <td>{{ $mejora->titulo }}</td>
                    <td>{{ $mejora->tipo }}</td>
                    <td>{{ $mejora->area_mejora }}</td>
                    <td>{{ $mejora->proceso_mejora }}</td>
	       			<td>{{ $mejora->descripcion }}</td>
                    <td>{{ $mejora->beneficios }}</td>
	       			<td>
	       				<a href="{{ route('admin.desk.mejoras-edit', $mejora->id) }}"><i class="fas fa-edit"></i></a>
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
            let btnAgregar = {
                text: '<i class="pl-2 pr-3 fas fa-plus"></i> Agregar',
                titleAttr: 'Agregar empleado',
                url: "{{asset('admin/inicioUsuario/reportes/mejoras')}}",
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
                order:[
                            [0,'desc']
                        ]
            };
            let table = $('.tabla_mejoras').DataTable(dtOverrideGlobals);
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
