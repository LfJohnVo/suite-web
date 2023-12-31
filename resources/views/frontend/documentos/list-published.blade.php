@extends('layouts.frontend')
@section('content')
    <div class="mt-5 card">
        <div class="py-3 col-md-10 col-sm-9 card card-body bg-primary align-self-center " style="margin-top:-40px; ">
            <h3 class="mb-2 text-center text-white"><strong>Lista de documentos públicados</strong></h3>
        </div>
        @if (count($documentos) == 0)
            <div class="container pb-4 text-center">
                <img src="{{ asset('img/empleados_no_encontrados.svg') }}" alt="" class="img-fluid" style="width:500px;">
                <h3 class="mt-4">Ningún documento se ha publicado</h3>
            </div>
        @else
            <div class="container datatable-fix">
                <table id="tblDocumentos" class="table table-bordered w-100 datatable-ControlDocumento">
                    <thead class="thead-dark">
                        <tr>
                            <th style="vertical-align: top">
                                Código&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </th>
                            <th style="vertical-align: top">
                                Nombre
                            </th>
                            <th style="vertical-align: top">
                                Tipo
                            </th>

                            <th style="vertical-align: top">
                                Vinculado&nbsp;a
                            </th>
                            <th style="vertical-align: top">
                                Estatus
                            </th>
                            <th style="vertical-align: top">
                                Versión
                            </th>
                            <th style="vertical-align: top">
                                Fecha&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </th>
                            <th style="vertical-align: top">
                                Elaboró
                            </th>
                            <th style="vertical-align: top">
                                Revisó
                            </th>
                            <th style="vertical-align: top">
                                Aprobó
                            </th>
                            <th style="vertical-align: top">
                                Responsable
                            </th>
                            @can('documentos_show')
                                <th style="vertical-align: top">
                                    Visualizar
                                </th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($documentos as $documento)
                            <tr>
                                <td>
                                    {{ $documento->codigo ?? '' }}
                                </td>
                                <td>
                                    {{ $documento->nombre ?? '' }}
                                </td>
                                <td style="text-transform: capitalize">
                                    {{ $documento->tipo ?? '' }}
                                </td>
                                @if ($documento->proceso_id == null)
                                    <th style="vertical-align: top">
                                        {{ $documento->macroproceso ? $documento->macroproceso->nombre : 'Sin vincular' }}
                                    </th>
                                @else
                                    <th style="vertical-align: top">
                                        {{ $documento->proceso ? $documento->proceso->nombre : 'Sin vincular' }}
                                    </th>
                                @endif
                                <td>
                                    @if ($documento->estatus)
                                        @switch($documento->estatus)
                                            @case(1)
                                                <span class="badge badge-info">EN ELABORACIÓN</span>
                                            @break
                                            @case(2)
                                                <span class="badge badge-primary">EN REVISIÓN</span>
                                            @break
                                            @case(3)
                                                <span class="badge badge-success">PUBLICADO</span>
                                            @break
                                            @case(4)
                                                <span class="badge badge-danger">RECHAZADO</span>
                                            @break
                                            @default
                                                <span class="badge badge-info">EN ELABORACIÓN</span>
                                        @endswitch

                                    @endif
                                </td>
                                <td>
                                    {{ $documento->version == 0 ? 'Sin versión actualmente' : $documento->version }}
                                </td>
                                <td>
                                    {{ $documento->fecha_dmy ?? '' }}
                                </td>
                                <td>
                                    @if ($documento->elaborador)
                                        <img src="{{ asset('storage/empleados/imagenes/') . '/' . $documento->elaborador->avatar }}"
                                            class="rounded-circle" alt="{{ $documento->elaborador->name }}"
                                            title="{{ $documento->elaborador->name }}" width="40">
                                    @else
                                        <span class="badge badge-info">Sin Asignar</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($documento->revisor)
                                        <img src="{{ asset('storage/empleados/imagenes/') . '/' . $documento->revisor->avatar }}"
                                            class="rounded-circle" alt="{{ $documento->revisor->name }}"
                                            title="{{ $documento->revisor->name }}" width="40">
                                    @else
                                        <span class="badge badge-info">Sin Asignar</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($documento->aprobador)
                                        <img src="{{ asset('storage/empleados/imagenes/') . '/' . $documento->aprobador->avatar }}"
                                            class="rounded-circle" alt="{{ $documento->aprobador->name }}"
                                            title="{{ $documento->aprobador->name }}" width="40">
                                    @else
                                        <span class="badge badge-info">Sin Asignar</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($documento->responsable)
                                        <img src="{{ asset('storage/empleados/imagenes/') . '/' . $documento->responsable->avatar }}"
                                            class="rounded-circle" alt="{{ $documento->responsable->name }}"
                                            title="{{ $documento->responsable->name }}" width="40">
                                    @else
                                        <span class="badge badge-info">Sin Asignar</span>
                                    @endif
                                </td>
                                @can('documentos_show')
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">

                                            <a class="btn btn-sm" title="Visualizar Documento"
                                                href="{{ route('documentos.renderViewDocument', $documento) }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection

@section('scripts')
@parent
<script>
    $(document).ready(function() {
        let tblDocumentos = $("#tblDocumentos").DataTable({
            buttons: []
        });
    });
</script>
@endsection
