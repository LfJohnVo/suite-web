@extends('layouts.admin')
@section('content')
    {{-- {{ Breadcrumbs::render('sugerencia-archivo') }} --}}
    <div class="pl-4 pr-4 mt-5 card">
        <div class="py-3 col-md-10 col-sm-9 card card-body bg-primary align-self-center " style="margin-top:-40px; ">
            <h3 class="mb-2 text-center text-white"><strong>Archivo sugerencias</strong></h3>
        </div>

        <div class="datatable-fix" style="width: 100%;">

            <table class="table tabla_sugerencias">
                <thead>
                    <tr>
                        <th>Folio</th>
                        <th style="min-width:200px;">Estatus</th>
                        <th style="min-width:200px;">Fecha de recepcion</th>
                        <th style="min-width:200px;">Fecha de cierre</th>
                        <th style="min-width:200px;">Nombre</th>
                        <th style="min-width: 500px;">Correo</th>
                        <th style="min-width: 500px;">Teléfono</th>
                        <th style="min-width:200px;">Sugerencia</th>
                        <th style="min-width:200px;">Área</th>
                        <th style="min-width:200px;">Proceso</th>
                        <th style="min-width:200px;">Descripción</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sugerencias as $sugerencia)
                        {{-- @if($incidentes->archivar == 'false') --}}
                            <tr>
                                <td>{{ $sugerencia->folio }}</td>
                                <td>{{ $sugerencia->estatus }}</td>
                                <td>{{ $sugerencia->fecha_reporte }}</td>
                                <td>{{ $sugerencia->fecha_cierre }}</td>
                                <td>
                                    <img class="img_empleado" src="{{ asset('storage/empleados/imagenes/') }}/{{ $sugerencia->sugirio->avatar }}" title="{{ $sugerencia->sugirio->name }}">
                                </td>
                                <td>{{ $sugerencia->sugirio->email }}</td>
                                <td>{{ $sugerencia->sugirio->telefono }}</td>
                                <td>{{ $sugerencia->titulo }}</td>
                                <td>{{ $sugerencia->area_sugerencias }}</td>
                                <td>{{ $sugerencia->proceso_sugerencias }}</td>
                                <td>{{ $sugerencia->descripcion }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="{{ route('admin.desk.sugerencias-edit', $sugerencia->id) }}"><i
                                                class="fas fa-edit"></i></a>
                                        </div>
                                        <div class="col-6">
                                            <form action="{{route('admin.desk.sugerencia-archivo.recuperar', $sugerencia->id)}}" method="POST">
                                                @csrf
                                                <button class="btn" title="Recuperar" style="all: unset !important;">
                                                    <i class="fas fa-sign-in-alt"></i>
                                                </button>
                                            </form>
                                        </div>

                                    </div>

                                </td>
                                {{-- <td class="opciones_iconos">
                                    <form action="{{route('admin.inicio-Usuario.capacitaciones.recuperar', $incidentes->id)}}" method="POST">
                                        @csrf
                                        <button class="btn" title="Recuperar" style="all: unset !important;">
                                            <i class="fas fa-sign-in-alt" style="font-size: 20pt; color:#345183;"></i>
                                        </button>
                                    </form>
                                </td> --}}
                            </tr>
			   			{{-- @endif --}}

                    @endforeach
                </tbody>
            </table>
        </div>

    @endsection
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
                    }

                ];
                $(".tabla_sugerencias").DataTable({
                    buttons: dtButtons,
                });
            });
        </script>
    @endsection
