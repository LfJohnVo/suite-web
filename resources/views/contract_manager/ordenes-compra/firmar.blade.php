@extends('layouts.admin')

@section('content')
@section('titulo', 'Firmar Orden de Compra')
    <link rel="stylesheet" href="{{asset('css/requisiciones.css')}}">
    <style>
        .row{
            padding-left: 30px;
            padding-right: 30px;
        }
    </style>

    <div class="card card-content caja-blue" style="background-color:#49598A;">

        <div>
            <img src="{{ asset('img/welcome-blue.svg') }}" alt="" style="height: 50px;">
        </div>

        <div>
            <h3 style="font-size: 22px; font-weight: bolder;">Bienvenido </h3><br>
            <h5 style="font-size: 17px;">Firma tu Orden de Compra para que sea aprobado por las áreas correspondientes</h5><br>
            <p>
                1. Firma tu Orden de compra. <br>
                2. Envíala para su autorización. <br>
                3. Cuando sea firmada y autorizada se te enviara por correo la notificación de su autorización.
            </p>
        </div>
    </div>
    <div id="paso-firma" class="tab-content">
        <div class="card card-item doc-requisicion">
            <div class="flex header-doc">
                <div class="flex-item item-doc-img">
                    @if ($requisicion->sucursal->mylogo)
                        <img src="{{ url('razon_social/'.$requisicion->sucursal->mylogo) }}" style="width:100%; max-width:150px;">
                    @else
                        <img src="{{ asset('sinLogo.png') }}" style="width:100%; max-width:150px;">
                    @endif
                </div>
                <div class="flex-item info-med-doc-header">
                    {{$requisicion->sucursal->empresa }} <br>
                    {{$requisicion->sucursal->rfc }} <br>
                    {{$requisicion->sucursal->direccion }} <br>
                </div>
                <div class="flex-item item-header-doc-info" style="">
                    <h4 style="font-size: 18px; color:#49598A;">Orden de Compra</h4>
                    <p>Folio: 00-00{{ $requisicion->id}}</p>
                    <p>Fecha de solicitud: {{ date('d-m-Y', strtotime($requisicion->fecha)) }} </p>
                </div>
            </div>
            <div style="border-right: 30px solid #295082;">
                <div class="row" style="margin-top: 30px;">
                    <div class="col s12 l3">
                        <strong>Folio de Requisición:</strong> <br>
                        Folio: 00-00{{ $requisicion->id}}
                    </div>
                    <div class="col s12 l3">
                        <strong>Solicita:</strong> <br>
                        {{$requisicion->user}}
                    </div>
                    <div class="col s12 l3">
                        <strong>Área que solicita:</strong> <br>
                        {{$requisicion->area}}
                    </div>
                    <div class="col s12 l3">
                        <strong>Fecha de entrega:</strong> <br>
                        {{$requisicion->fecha_entrega}}
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l3">
                        <strong>Comprador:</strong> <br>
                        @isset($comprador->user->name)
                            {{$comprador->user->name}}
                        @endisset
                    </div>
                    <div class="col s12 l3">
                        <strong>Razón Social:</strong> <br>
                        {{$requisicion->sucursal->descripcion }}
                    </div>
                    <div class="col s12 l3">
                        <strong>Moneda:</strong> <br>
                        {{$requisicion->moneda }}
                    </div>
                    <div class="col s12 l3">
                        <strong>Pago a:</strong> <br>
                        @if($requisicion->pago)
                            Crédito
                        @else
                            <font style="text-transform: capitalize;">
                                {{ $requisicion->pago }}
                            </font>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l3">
                        <strong>Días de crédito proveedor:</strong> <br>
                        {{$requisicion->dias_credito }}
                    </div>
                    <div class="col s12 l3">
                        <strong>Tipo de cambio:</strong> <br>
                        {{$requisicion->cambio }}
                    </div>
                    <div class="col s12 l6">
                        <strong>Proyecto:</strong> <br>
                        {{ $requisicion->contrato->no_proyecto }} / {{ $requisicion->contrato->no_contrato }} - {{ $requisicion->contrato->nombre_servicio }}
                    </div>
                </div>
            </div>

            <hr style="width: 80%; margin:auto;">
            @foreach ($proveedores as  $proveedor)
            <div class="proveedores-doc" style="">
                <div class="flex header-proveedor-doc">
                    <div class="flex-item">
                        <strong>Proveedor: </strong> {{ $proveedor->razon_social }}
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col s12 l3">
                        <strong>Proveedor:</strong><br>
                        {{$proveedor->razon_social}}
                    </div>
                    <div class="col s12  l3">
                        <strong>Nombre Comercial:</strong><br>
                        {{$proveedor->nombre}}
                    </div>
                    <div class="col s12 l6">
                        <strong>RFC:</strong><br>
                        {{$proveedor->rfc}}
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l3">
                        <strong>Nombre del contacto:</strong><br>
                        {{$proveedor->contacto}}
                    </div>
                    <div class="col s12 l9">
                        <strong>Dirección:</strong><br>
                        {{$proveedor->direccion}}
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l6">
                        <strong>Envío a:</strong><br>
                        {{$proveedor->envio}}
                    </div>
                    <div class="col s12 l3">
                        <strong>Facturación a:</strong><br>
                        {{$proveedor->facturacion}}
                    </div>
                    <div class="col s12 l3">
                        <strong>Crédito disponible:</strong><br>
                        {{$proveedor->credito}}
                    </div>
                </div>
            </div>
            @endforeach

            @foreach ($requisicion->productos_requisiciones as  $producto)
                <div class="flex header-proveedor-doc">
                    <div class="flex-item">
                        <strong>Productos o Servicios</strong> {{ $producto->producto->descripcion }}
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col s12 l4">
                        <strong> Cantidad:</strong><br><br>
                        {{ $producto->cantidad }}
                    </div>
                    <div class="col s12 l4">
                        <strong> Producto o servicio:</strong><br><br>
                       {{ $producto->producto->descripcion }}
                    </div>
                    <div class="col s12 l4">
                        <strong> Especificaciones del producto o servicio: </strong><br><br>
                       {{ $producto->espesificaciones }}
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l4">

                        <strong> SubTotal:</strong><br><br>
                        @if( $producto->sub_total )
                        {{ $producto->sub_total }}
                        @else
                            <small class="not-register">Sin registro</small>
                        @endif
                    </div>

                    <div class="col s12 l4">

                        <strong> Descuento:</strong><br><br>

                       @if( $producto->descuento )
                        {{ $producto->descuento }}
                       @else
                           <small class="not-register">Sin registro</small>
                       @endif
                    </div>

                    <div class="col s12 l4">

                        <strong> Otro Impuesto: </strong><br><br>
                       @if( $producto->otro_impuesto )
                        {{ $producto->otro_impuesto }}
                       @else
                           <small class="not-register">Sin registro</small>
                       @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l4">

                        <strong> IVA: </strong><br><br>
                       @if( $producto->iva )
                        {{ $producto->iva }}
                       @else
                           <small class="not-register">Sin registro</small>
                       @endif
                    </div>

                    <div class="col s12 l4">

                        <strong> IVA retenido: </strong><br><br>
                       @if( $producto->iva_retenido )
                        {{ $producto->iva_retenido }}
                       @else
                           <small class="not-register">Sin registro</small>
                       @endif
                    </div>

                    <div class="col s12 l4">

                        <strong> ISR retenido: </strong><br><br>
                       @if( $producto->isr_retenido )
                        {{ $producto->isr_retenido }}
                       @else
                           <small class="not-register">Sin registro</small>
                       @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l12">

                       <strong> Total: </strong><br><br>
                      @if( $producto->total )
                       {{ $producto->total }}
                      @else
                          <small class="not-register">Sin registro</small>
                      @endif
                     </div>
                </div>
                <div class="row">
                     <div class="col s12 l4">

                       <strong> Centro de costo: </strong><br><br>
                       @if( $producto->centro_costo->descripcion )
                       {{ $producto->centro_costo->descripcion }}
                        @else
                            <small class="not-register">Sin registro</small>
                        @endif
                     </div>
                     <div class="col s12 l4">

                       <strong>  No. de Personas: </strong><br><br>
                       @if( $producto->no_personas )
                       {{ $producto->no_personas }}
                       @else
                           <small class="not-register">Sin registro</small>
                       @endif
                     </div>
                     <div class="col s12 l4">

                       <strong> Porcentaje de involucramiento: </strong><br><br>
                       @if( $producto->porcentaje_involucramiento )
                       {{ $producto->porcentaje_involucramiento }}
                       @else
                           <small class="not-register">Sin registro</small>
                       @endif
                     </div>
                </div>
                     <div class="row">
                     <div class="col s12 l12">
                       <strong> Proyecto: </strong><br><br>
                       {{ $requisicion->contrato->no_proyecto }} / {{ $requisicion->contrato->no_contrato }} - {{ $requisicion->contrato->nombre_servicio }}
                     </div>
                </div>
                <hr>
            @endforeach

            <div class="flex" style="justify-content: space-around;">
                <div class="caja-firmas-doc">
                    <div class="flex" style="margin-top: 70px;">
                        <div class="flex-item">
                            @if ($requisicion->firma_solicitante_orden)
                                 <img src="{{$requisicion->firma_solicitante_orden}}" class="img-firma">
                                 <p>{{$requisicion->user}}</p>
                                 <p>{{ $requisicion->fecha_firma_solicitante_orden }}</p>
                            @else
                                <div style="height: 137px;"></div>
                            @endif
                            <hr>
                            <p>
                            <small>FECHA, FIRMA Y NOMBRE DEL SOLICITANTE </small>
                            </p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex-item">
                            @if ($requisicion->firma_finanzas_orden)
                                <img src="{{$requisicion->firma_finanzas_orden}}" class="img-firma">
                                <p>Lourdes del Pilar Abadía Velasco </p>
                                <p>{{ $requisicion->fecha_firma_finanzas_orden }}</p>
                            @else
                                <div style="height: 137px;"></div>
                            @endif
                            <hr>
                            <p>
                            <small>FECHA, FIRMA Y NOMBRE DE FINANZAS</small>
                            </p>
                        </div>
                        <div class="flex-item">
                            @if ($requisicion->firma_comprador_orden)
                                <img src="{{$requisicion->firma_comprador_orden}}" class="img-firma">
                                <p>{{$requisicion->comprador->user->name}} </p>
                                <p>{{ $requisicion->fecha_firma_comprador_orden }}</p>
                            @else
                                <div style="height: 137px;"></div>
                             @endif
                            <hr>
                            <p>
                            <small> FECHA, FIRMA Y NOMBRE  DE COMPRADORES</small>
                            </p>
                        </div>
                    </div>
                </div>

                <div style="width: 200px;">
                    <div class="flex" style="justify-content: space-between; margin-top:20px;">
                        <strong>Sub total:</strong>
                        <span>$ {{ $requisicion->sub_total }}</span>
                    </div>
                    <div class="flex" style="justify-content: space-between; margin-top:20px;">
                        <strong>IVA:</strong>
                        <span>$ {{ $requisicion->iva }}</span>
                    </div>
                    <div class="flex" style="justify-content: space-between; margin-top:20px;">
                        <strong>IVA retenido:</strong>
                        <span>$ {{ $requisicion->iva_retenido }}</span>
                    </div>
                    <div class="flex" style="justify-content: space-between; margin-top:20px;">
                        <strong>ISR Retenido:</strong>
                        <span>$ {{ $requisicion->isr_retenido }}</span>
                    </div>
                    <div class="flex" style="justify-content: space-between; color: #2395AA; margin-top:20px;">
                        <strong>Total:</strong>
                        <strong>$ {{ $requisicion->total }}</strong>
                    </div>
                </div>
            </div>


            <div class="flex">
                <div class="flex-item">
                    <small><i style="color: #2395AA;">-NOTA : En caso de ser capacitación se necesita el visto bueno de Gestión de talento.</i></small>
                </div>
            </div>
        </div>
        <div class="card card-content">
            <form method="POST" id="myForm" action="{{ route('contract_manager.orden-compra.firmar-update', ['tipo_firma' => $tipo_firma,'id' => $requisicion->id]) }}">
                @csrf
                <div class="">
                    <h5><strong>Firma*</strong></h5>
                    <p>
                        Indispensable firmar la requisición antes de guardar y enviarla a aprobación de lo contrario podrá ser rechazada por alguno de los colaboradores
                    </p>
                </div>
                <div class="flex caja-firmar" style=" " wire:ignore>
                    <div class="flex-item" style="display:flex; justify-content: center; flex-direction: column; align-items:center;">
                        <div id="firma_content" class="caja-space-firma">
                            <input type="hidden" required name="firma" id="firma">
                        </div>
                        <div>
                            <div class="btn" style="background: #959595 !important; transform: translateY(-40px) scale(0.8);" id="clear">Limpiar</div>
                        </div>
                    </div>
                </div>
                {{--  <div class="flex">
                    <div class="flex-item" style="display: flex; justify-content:center;">
                        <div class="btn" style="background: #959595 !important" id="clear">Limpiar</div>
                    </div>
                </div>  --}}
                <div class="flex" style="justify-content: end; gap:10px;">
                    {{--  <div class="btn btn-secundario"  style="background: #959595 !important"><i class="fa-solid fa-chevron-left icon-prior"></i> Regresar </div>  --}}
                </div>
            </form>
            <form method="POST" action="{{ route('contract_manager.orden-compra.rechazada', ['id' => $requisicion->id]) }}">
                @csrf
                <div class="flex" style="justify-content: space-between; gap:25px; margin-top:20px;">
                    @if($requisicion->firma_comprador_orden)
                        <button class="btn btn-primary" style="background: #454545 !important;">RECHAZAR ORDEN DE COMPRA</button>
                    @else
                        <div>&nbsp;</div>
                    @endif
                    <div onclick="validar();" style="" class="btn btn-primary">Guardar</div>
                </div>
            </form>
        </div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function validar(params) {
        var x = $("#firma").val();
        if (x) {
            document.getElementById("myForm").submit();
        }else{
            Swal.fire(
             'Aun no ha firmado',
             'Porfavor Intentelo nuevamente',
             'error');
        }
    }

</script>


    </div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
@endsection
@section('scripts')
<script>
       $('select').select2('destroy');
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            var signaturePad = $('#firma_content').signature({syncField: '#firma', syncFormat: 'PNG'});
            $('#clear').click(function(e) {
                e.preventDefault();
                signaturePad.signature('clear');
                $("#firma").val('');
            });
        });
    </script>
@endsection

