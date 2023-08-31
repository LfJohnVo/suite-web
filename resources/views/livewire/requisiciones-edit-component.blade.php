<div class="create-requisicion">
    <div class="card card-content caja-blue">

        <div>
            <img src="{{ asset('img/welcome-blue.svg') }}" alt="" style="width: 150px;">
        </div>

        <div>
            <h3 style="font-size: 22px; font-weight: bolder;">Bienvenido </h3>
            <h5 style="font-size: 17px;">En esta sección puedes generar tu requisición</h5>
            <p>
                Aquí podrás crear, revisar y procesar solicitudes de compra de manera rápida y sencilla, optimizando el flujo de trabajo y asegurando un seguimiento transparente de todas las transacciones.
            </p>
        </div>
    </div>

    <div class="card card-content hide" wire:ignore>
        <ul class="tabs" id="tabs-swipe-demo">
            <li class="tab">
                <a href="#paso-servicio" class="active">
                    <i class="number-icon active-number">1</i> Servicios y Productos
                </a>
            </li>
            <li class="tab">
                <a href="#paso-proveedores">
                    <i class="number-icon">2</i> Proveedores
                </a>
            </li>
            <li class="tab">
                <a href="#paso-firma">
                    <i class="number-icon">3</i> Firma
                </a>
            </li>
        </ul>
    </div>

    <div class="card card-content caja-proceso-requi" wire:ignore>
        <div class="flex" style="gap: 20px;">
            <div class="paso-tab active" data-id="paso-servicio">
                <i class="number-icon">1</i> Servicios y Productos
            </div>
            <hr>
            <div class="paso-tab" data-id="paso-proveedores">
                <i class="number-icon">2</i> Proveedores
            </div>
            <hr>
            <div class="paso-tab" data-id="paso-firma">
                <i class="number-icon">3</i> Firma
            </div>
        </div>
    </div>

    <div id="paso-servicio" class="tab-content" wire:ignore>
        <form method="PUT" wire:submit.prevent="servicioUpdate(Object.fromEntries(new FormData($event.target)), {{$editrequisicion->id}})" enctype="multipart/form-data">
            <div class="card card-content">
                <h3 class="titulo-form">Solicitud de requisición</h3>
                <hr style="margin: 20px 0px;">

                <div class="row">
                    <div class="col s12 l3 ">
                        <label for="" class="txt-tamaño">
                            Fecha solicitud <font class="asterisco">*</font>
                        </label>
                        <input id="fecha-solicitud-input" class="browser-default" type="date" name="fecha" value="{{old('fecha', $editrequisicion->fecha) }}" required>
                    </div>
                    <div class="col s12 l3 ">
                        <label for="" class="txt-tamaño">
                            Razón Social <font class="asterisco">*</font>
                        </label>
                        <select required class="browser-default" name="sucursal_id">
                            <option value="{{old('sucursal_id',$editrequisicion->sucursal->id)}}" selected>{{$editrequisicion->sucursal->descripcion}}</option>
                            @foreach ($sucursales as $sucursal)
                                <option value="{{$sucursal->id}}">{{$sucursal->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col s12 l3 ">
                        <label for="" class="txt-tamaño">
                            Solicita  <font class="asterisco">*</font>
                        </label>
                        <input id="user_print" name="user" value="{{$editrequisicion->user}}" readonly style="background: #eaf0f1" class="browser-default" type="text">
                    </div>
                    <div class="col s12 l3 ">
                        <label for="" class="txt-tamaño">
                            Área que solicita <font class="asterisco">*</font>
                        </label>
                       <input id="area_print" name="area" value="{{$editrequisicion->area}}" readonly style="background: #eaf0f1" class="browser-default" type="text">
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 l6 ">
                        <label for="" class="txt-tamaño">
                            Referencia (Título de la requisición) <font class="asterisco">*</font>
                        </label>
                        <input class="browser-default" type="text" name="descripcion" required value="{{old('descripcion', $editrequisicion->referencia) }}">
                    </div>

                    <div class="col s12 l3 ">
                        <label for="" class="txt-tamaño">
                            Comprador <font class="asterisco">*</font>
                        </label>
                        <select required class="browser-default" name="comprador_id">
                            @forelse ($compradores as $comprador)
                                @if($comprador->user)
                                    <option value="{{$comprador->id}}" {{ $editrequisicion->comprador->id == $comprador->id ? 'selected' : '' }}>
                                        {{$comprador->user->name}}
                                    </option>
                                @endif
                                @empty
                            @endforelse
                        </select>
                    </div>
                    <div class="col s12 l3 ">
                        <label for="" class="txt-tamaño">
                            Contratos (Proyectos) <font class="asterisco">*</font>
                        </label>
                        <select required class="browser-default" name="contrato_id">
                            @foreach ($contratos as $contrato)
                                <option value="{{$contrato->id}}" {{$editrequisicion->contrato->id == $contrato->id ? 'selected' : ''}}>
                                    {{$contrato->no_contrato}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="caja-card-product caja-cards-inner" wire:ignore>
                @php
                    $count = 0;
                @endphp
                @foreach ($editrequisicion->productos_requisiciones as $edtprod)
                    @php
                        $count = $count+1;
                    @endphp
                    <div id="product-serv-{{$count}}" class="card card-content card-inner card-product" data-count="{{$count}}">
                        <div class="row">
                            <div class="col s12">
                                <div class="flex" style="justify-content: space-between">
                                    <h3 class="sub-titulo-form">Captura del producto o servicio</h3>
                                    <i class="fa-regular fa-trash-can btn-deleted-card btn-deletd-product" title="Eliminar producto" onclick="deleteProduct()"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l4 ">
                                <label for="" class="txt-tamaño">
                                    Cantidad <font class="asterisco">*</font>
                                </label>
                                <input type="number" name="cantidad_{{$count}}" min="1" class="model-cantidad browser-default" value="{{old('cantidad_'.$count, $edtprod->cantidad) ?:''}}" required>
                            </div>
                            <div class="col s12 l8 ">
                                <label for="" class="txt-tamaño">
                                    Producto o servicio <font class="asterisco">*</font>
                                </label>
                                <select class="model-producto browser-default" name="producto_{{$count}}" required>
                                    <option value="{{old('producto_'.$count, $edtprod->producto->id)}}"
                                    selected>{{$edtprod->producto->descripcion}}</option>
                                    @foreach($productos as $producto)
                                        <option value="{{$producto->id}}">{{$producto->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l12 ">
                                <label for="" class="txt-tamaño">
                                    Especificaciones del producto o servicio <font class="asterisco">*</font>
                                </label>
                                <textarea class="model-especificaciones browser-default" name="especificaciones_{{$count}}" required>{{$edtprod->espesificaciones}}</textarea>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div>
                <div class="btn btn-add-card" onclick="addCard('servicio')"><i class="fa-regular fa-square-plus"></i> AGREGAR SERVICIOS Y PRODUCTOS</div>
            </div>

            <div class="col s12 right-align ">
                {{--  <a href="{{ route('proveedores.index') }}" class="btn btn-secundario" style="background: #959595 !important">Cancelar</a>  --}}
                <button class="btn btn-primary" type="submit">
                    Siguiente <i class="fa-solid fa-chevron-right icon-next"></i>
                </button>
            </div>
        </form>
    </div>

    <div id="paso-proveedores" class="tab-content" {{ !$habilitar_proveedores ? ' style=display:none; ' : '' }}>
        <form id="form-proveedores" wire:submit.prevent="proveedoresUpdate(Object.fromEntries(new FormData($event.target)), {{$editrequisicion->id}})" action="PUT" enctype="multipart/form-data">
            <div class="card card-content">
                <h3 class="titulo-form">Solicitud de requisición</h3>
                <hr style="margin: 20px 0px;">
                <p>
                    Provea contexto detallado de su necesidad de Adquisición, es importante mencionar si es que la solicitud está ligada a algún proyecto en particular.
                    <br>
                    En caso de que no se brinde detalle suficiente que sustente la compra, es no procedera.
                </p>
            </div>
            <div class="caja-card-proveedor caja-cards-inner">
                @php
                    $count = 0;
                @endphp

                @if ($this->proveedores_count)
                @foreach ($editrequisicion->provedores_requisiciones as $edtprov)

                    <div id="proveedor-card-{{$count}}" class="card card-content card-inner card-proveedor" data-count="{{$count}}">
                        <div class="row">
                            <div class="col s12 ">
                                <div class="flex" style="justify-content: space-between">
                                    <h3 class="sub-titulo-form">Captura del Proveedor</h3>
                                     {{-- <i class="fa-regular fa-trash-can btn-deleted-card btn-deletd-proveedor" title="Eliminar proveedor" onclick="deleteProveedor()"></i> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l12 ">
                                <label for="" class="txt-tamaño">
                                    Proveedor <font class="asterisco">*</font>
                                </label>
                                <input type="text" name="proveedor_{{$count}}" value="{{old('proveedor_'.$count, $edtprov->proveedor)}}" class="browser-default modal-proveedor" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l6">
                                <label for="" class="txt-tamaño">
                                    Detalles del producto <font class="asterisco">*</font>
                                </label>
                                <input type="text" class="browser-default modal-detalles" name="detalles_{{$count}}" value="{{old('detalles_'.$count, $edtprov->detalles)}}" required>
                            </div>
                            <div class="col s12 l3">
                                <input type="radio" class="modal-tipo" name="tipo_{{$count}}" value="fisico" required {{$edtprov->tipo == 'fisico' ? 'checked' : ''}}>
                                <label for="tipo_{{$count}}" class="txt-tamaño">
                                    Proveedor Físico
                                </label>
                            </div>
                            <div class="col s12 l3">
                                <input type="radio" class="modal-tipo-2" name="tipo_{{$count}}" value="online" required {{$edtprov->tipo == 'online' ? 'checked' : ''}}>
                                <label for="" class="txt-tamaño">
                                    Proveedor Online
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l12">
                                <label for="" class="txt-tamaño">
                                    Comentarios <font class="asterisco">*</font>
                                </label>
                                <textarea class="browser-default modal-comentario" name="comentarios_{{$count}}" required>{{$edtprov->comentarios}}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12 l12">
                                <h3 class="sub-titulo-form">Datos de contacto</h3>
                            </div>
                            <div class="col s12 l6">
                                <label for="" class="txt-tamaño">
                                    Nombre del contacto
                                </label>
                                <input type="text" class="browser-default modal-nombre" name="contacto_{{$count}}"
                                value="{{old('contacto_'.$count, $edtprov->contacto)}}" required>
                            </div>
                            <div class="col s12 l3">
                                <label for="" class="txt-tamaño">
                                    Teléfono
                                </label>
                                <input type="tel" class="browser-default modal-telefono" name="contacto_telefono_{{$count}}"
                                value="{{old('contacto_telefono_'.$count, $edtprov->cel)}}" required>
                            </div>
                            <div class="col s12 l3">
                                <label for="" class="txt-tamaño">
                                    Correo Electrónico
                                </label>
                                <input type="email" class="browser-default modal-correo" name="contacto_correo_{{$count}}"
                                value="{{old('contacto_correo_'.$count, $edtprov->contacto_correo)}}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l6">
                                <label for="" class="txt-tamaño">
                                    URL
                                </label>
                                <input type="url" class="browser-default modal-url" name="contacto_url_{{$count}}"
                                value="{{old('contacto_url_'.$count, $edtprov->url)}}" required>
                            </div>
                            <div class="col s12 l3">
                                <label for="" class="txt-tamaño">
                                    Fecha inicio
                                </label>
                                <input type="date" class="browser-default modal-start" name="contacto_fecha_inicio_{{$count}}"
                                value="{{old('contacto_fecha_inicio_'.$count, $edtprov->fecha_inicio)}}" required>
                            </div>
                            <div class="col s12 l3">
                                <label for="" class="txt-tamaño">
                                    Fecha fin
                                </label>
                                <input type="date" class="browser-default modal-end" name="contacto_fecha_fin_{{$count}}"
                                value="{{old('contacto_fecha_fin_'.$count, $edtprov->fecha_fin)}}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l12">
                                <label for="" class="txt-tamaño">
                                    Carga de cotizaciones <font class="asterisco">*</font>
                                </label>
                                <div class="flex" style="gap: 25px;">
                                    <div style="min-width: 300px;">Cotizacion actual:  <a href="{{ asset('storage/cotizaciones_requisiciones_proveedores/'. $edtprov->cotizacion) }}" style="text-decoration: underline; color: deepskyblue;" target="_blank">Descargar cotización <i class="fa-regular fa-circle-down"></i></a></div>
                                    <input  type="file" class="modal-cotizacion form-control-file" value="{{$edtprov->cotizacion}}" name="cotizacion_{{$count}}" wire:model="cotizaciones.{{$count}}" data-count="{{$count}}" accept=".pdf, .docx, .power .point, .xml, .jpeg, .jpg, .png">
                                </div>
                            </div>
                        </div>
                    </div>

                    @php
                        $count = $count+1;
                    @endphp
                @endforeach
                @for($i = $count; $i < $proveedores_count; $i++)
                    <div id="proveedor-card-{{$i}}" class="card card-content card-inner card-proveedor" data-count="{{$i}}">
                        <div class="row">
                            <div class="col s12 ">
                                <div class="flex" style="justify-content: space-between">
                                    <h3 class="sub-titulo-form">Captura del Proveedor</h3>
                                    {{-- <i class="fa-regular fa-trash-can btn-deleted-card btn-deletd-proveedor" title="Eliminar proveedor" onclick="deleteProveedor()"></i> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l12">
                                <label for="" class="txt-tamaño">

                                    Proveedor <font class="asterisco">*</font>
                                </label>
                                <input type="text" name="proveedor_{{$i}}" class="browser-default modal-proveedor"
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l6">
                                <label for="" class="txt-tamaño">

                                    Detalles del producto <font class="asterisco">*</font>
                                </label>
                                <input type="text" class="browser-default modal-detalles" name="detalles_{{$i}}" required>
                            </div>
                            <div class="col s12 l3">
                                <input type="radio" class="modal-tipo" name="tipo_{{$i}}" value="fisico" required>
                                <label for="tipo_{{$i}}" class="txt-tamaño">
                                    Proveedor Físico
                                </label>
                            </div>
                            <div class="col s12 l3">
                                <input type="radio" class="modal-tipo-2"  name="tipo_{{$i}}" value="online" required>
                                <label for="" class="txt-tamaño">
                                    Proveedor Online
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l12">
                                <label for="" class="txt-tamaño">

                                    Comentarios <font class="asterisco">*</font>
                                </label>
                                <textarea class="browser-default modal-comentario" name="comentarios_{{$i}}" required></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12 l12">
                                <h3 class="sub-titulo-form">Datos de contacto</h3>
                            </div>
                            <div class="col s12 l6">
                                <label for="" class="txt-tamaño">

                                    Nombre del contacto*
                                </label>
                                <input type="text" class="browser-default modal-nombre" name="contacto_{{$i}}" required>
                            </div>
                            <div class="col s12 l3">
                                <label for="" class="txt-tamaño">

                                    Teléfono*
                                </label>
                                <input type="tel" class="browser-default modal-telefono" name="contacto_telefono_{{$i}}"
                                    required>
                            </div>
                            <div class="col s12 l3">
                                <label for="" class="txt-tamaño">

                                    Correo Electrónico*
                                </label>
                                <input type="email" class="browser-default modal-correo" name="contacto_correo_{{$i}}"
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l6">
                                @if ($habilitar_url)
                                <label for="" class="txt-tamaño">

                                    URL*
                                </label>
                                <input type="url" class="browser-default modal-url" name="contacto_url_{{$i}}"  >
                                @else
                                <label for="" class="txt-tamaño">

                                    URL*
                                </label>
                                <input type="url" class="browser-default modal-url" name="contacto_url_{{$i}}" >
                                @endif
                            </div>
                            <div class="col s12 l3">
                                <label for="" class="txt-tamaño">

                                    Fecha inicio*
                                </label>
                                <input type="date" class="browser-default modal-start" name="contacto_fecha_inicio_{{$i}}"
                                    required>
                            </div>
                            <div class="col s12 l3">
                                <label for="" class="txt-tamaño">

                                    Fecha fin*
                                </label>
                                <input type="date" class="browser-default modal-end" name="contacto_fecha_fin_{{$i}}"
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l12">
                                <label for="" class="txt-tamaño">
                                    Carga de cotizaciones <font class="asterisco">*</font>
                                </label>
                                <input type="file" class="modal-cotizacion form-control-file" name="cotizacion_{{$i}}" wire:model="cotizaciones.{{$i}}" data-count="{{$i}}" accept=".pdf, .docx, .power .point, .xml, .jpeg, .jpg, .png" required>
                            </div>
                        </div>
                    </div>
                    @endfor


                @endif


                @if ($this->proveedores_indistintos_count)
                @foreach ($editrequisicion->provedores_indistintos_requisiciones as $edtprov)

                    <div id="proveedor-card-{{$count}}" class="card card-content card-inner card-proveedor" data-count="{{$count}}">
                        <div class="row">
                            <div class="col s12 ">
                                <div class="flex" style="justify-content: space-between">
                                    <h3 class="sub-titulo-form">Captura del Proveedor</h3>
                                    {{-- <i class="fa-regular fa-trash-can btn-deleted-card btn-deletd-proveedor" title="Eliminar proveedor" onclick="deleteProveedor()"></i> --}}
                                </div>
                            </div>
                        </div>
                        <div wire:ignore class="row">
                            <div class="col s12 l12">
                                <label for="" class="txt-tamaño">

                                    Proveedor <font class="asterisco">*</font>
                                </label>
                                <select class="model-producto browser-default not-select2" wire:model.lazy='selectedInput.{{$count}}'  name="proveedor_{{$count}}" required>
                                    <option  selected >Indistinto</option>
                                    @foreach ($proveedores as $proveedor)
                                        <option  value="{{ $proveedor->id }}">{{ $proveedor->nombre }} - {{ $proveedor->rfc }}</option>
                                    @endforeach
                                    <option selected  value="otro">Otro</option>
                                </select>
                                <div class="row">
                                    <div class="col s12 l6">
                                        <label for="" class="txt-tamaño">

                                            Fecha inicio*
                                        </label>
                                        <input type="date" value="{{old('contacto_fecha_inicio_'.$count, $edtprov->fecha_inicio)}}" class="browser-default modal-start" name="contacto_fecha_inicio_{{$count}}"
                                            required>
                                    </div>
                                    <div class="col s12 l6">
                                        <label for="" class="txt-tamaño">

                                            Fecha fin*
                                        </label>
                                        <input type="date" value="{{old('contacto_fecha_fin_'.$count, $edtprov->fecha_fin)}}" class="browser-default modal-end" name="contacto_fecha_fin_{{$count}}"
                                            required>
                                    </div>
                                    </div>
                                <div wire:loading>
                                   <div>
                                    <div class="preloader-wrapper big active">
                                        <div class="spinner-layer spinner-red">
                                            <div class="circle-clipper left">
                                              <div class="circle"></div>
                                            </div><div class="gap-patch">
                                              <div class="circle"></div>
                                            </div><div class="circle-clipper right">
                                              <div class="circle"></div>
                                            </div>
                                          </div>
                                      </div></div>
                                </div>
                            </div>
                        </div>
                        @isset($this->selectedInput[$count])
                            @if ($this->selectedInput[$count] == "otro")
                            <div class="row">
                                <div class="col s12 l12">
                                    <select class="model-producto browser-default not-select2" wire:model.lazy='selectOption.{{$count}}'
                                        name="proveedor_otro{{$count}}" required>
                                        <option selected value="indistinto">Indistinto</option>
                                        <option value="sugerido">Sugerido</option>
                                    </select>
                                </div>
                            </div>
                            @isset($this->selectOption[$count])
                            @if ($this->selectOption[$count] === "sugerido")
                            <div class="row">
                                <div class="col s12 l6">
                                    <label for="" class="txt-tamaño">

                                        Detalles del producto <font class="asterisco">*</font>
                                    </label>
                                    <input type="text" class="browser-default modal-detalles" name="detalles_{{$count}}" required>
                                </div>
                                <div class="col s12 l3">
                                    <input type="radio" class="modal-tipo" name="tipo_{{$count}}" value="fisico" required>
                                    <label for="tipo_{{$count}}" class="txt-tamaño">
                                        Proveedor Físico
                                    </label>
                                </div>
                                <div class="col s12 l3">
                                    <input type="radio" class="modal-tipo-2" name="tipo_{{$count}}" value="online" required>
                                    <label for="" class="txt-tamaño">
                                        Proveedor Online
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 l12">
                                    <label for="" class="txt-tamaño">

                                        Comentarios <font class="asterisco">*</font>
                                    </label>
                                    <textarea class="browser-default modal-comentario" name="comentarios_{{$count}}" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 l12">
                                    <h3 class="sub-titulo-form">Datos de contacto</h3>
                                </div>
                                <div class="col s12 l6">
                                    <label for="" class="txt-tamaño">

                                        Nombre del contacto*
                                    </label>
                                    <input type="text" class="browser-default modal-nombre" name="contacto_{{$count}}" required>
                                </div>
                                <div class="col s12 l3">
                                    <label for="" class="txt-tamaño">

                                        Teléfono*
                                    </label>

                                    <input id="phone" type="text" name="contacto_telefono_{{$count}}" class="browser-default modal-telefono"
                                        pattern="\x2b[0-9]+" size="20" placeholder="+54976284353" required>
                                </div>
                                <div class="col s12 l3">
                                    <label for="" class="txt-tamaño">

                                        Correo Electrónico*
                                    </label>
                                    <input type="email" id="foo" class="browser-default modal-correo" placeholder="example@example.com"
                                        name="contacto_correo_{{$count}}" required>

                                    <h1 id="emailV"></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 l12">
                                    <label for="" class="txt-tamaño">

                                        URL*
                                    </label>
                                    <input type="url" class="browser-default modal-url" name="contacto_url_{{$count}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 l12">
                                    <label for="" class="txt-tamaño">
                                        Carga de cotizaciones <font class="asterisco">*</font>
                                    </label>
                                    <input type="file" required class="modal-cotizacion form-control-file" name="cotizacion_{{$count}}"
                                        wire:model="cotizaciones.{{$count}}" data-count="{{$count}}"
                                        accept=".pdf, .docx, .pptx .point, .xml, .jpeg, .jpg, .png, .xlsx, .xlsm, .csv">
                                </div>
                            </div>
                            @else
                            @endif
                            @endisset
                            @endif
                        @endisset
                    </div>

                    @php
                        $count = $count+1;
                    @endphp
                @endforeach
                @for($i = $count; $i < $proveedores_indistintos_count; $i++)
                    <div id="proveedor-card-{{$i}}" class="card card-content card-inner card-proveedor" data-count="{{$i}}">
                        <div class="row">
                            <div class="col s12 ">
                                <div class="flex" style="justify-content: space-between">
                                    <h3 class="sub-titulo-form">Captura del Proveedor</h3>
                                    {{-- <i class="fa-regular fa-trash-can btn-deleted-card btn-deletd-proveedor" title="Eliminar proveedor" onclick="deleteProveedor()"></i> --}}
                                </div>
                                <select class="model-producto browser-default not-select2" wire:model.lazy='selectedInput.{{$i}}'  name="proveedor_{{$i}}" required>
                                    <option  selected >Indistinto</option>
                                    @foreach ($proveedores as $proveedor)
                                        <option  value="{{ $proveedor->id }}">{{ $proveedor->nombre }} - {{ $proveedor->rfc }}</option>
                                    @endforeach
                                    <option selected  value="otro">Otro</option>
                                </select>
                                <div class="row">
                                    <div class="col s12 l6">
                                        <label for="" class="txt-tamaño">

                                            Fecha inicio*
                                        </label>
                                        <input type="date" value="{{old('contacto_fecha_inicio_'.$count, $edtprov->fecha_inicio)}}" class="browser-default modal-start" name="contacto_fecha_inicio_{{$count}}"
                                            required>
                                    </div>
                                    <div class="col s12 l6">
                                        <label for="" class="txt-tamaño">

                                            Fecha fin*
                                        </label>
                                        <input type="date" value="{{old('contacto_fecha_fin_'.$count, $edtprov->fecha_fin)}}" class="browser-default modal-end" name="contacto_fecha_fin_{{$count}}"
                                            required>
                                    </div>
                                    </div>
                                    <div wire:loading>
                                        <div>
                                         <div class="preloader-wrapper big active">
                                             <div class="spinner-layer spinner-red">
                                                 <div class="circle-clipper left">
                                                   <div class="circle"></div>
                                                 </div><div class="gap-patch">
                                                   <div class="circle"></div>
                                                 </div><div class="circle-clipper right">
                                                   <div class="circle"></div>
                                                 </div>
                                               </div>
                                           </div></div>
                                     </div>
                                     @isset($this->selectedInput[$count])
                                     @if ($this->selectedInput[$count] == "otro")
                                     <div class="row">
                                         <div class="col s12 l12">
                                             <select class="model-producto browser-default not-select2" wire:model.lazy='selectOption.{{$count}}'
                                                 name="proveedor_otro{{$count}}" required>
                                                 <option selected value="indistinto">Indistinto</option>
                                                 <option value="sugerido">Sugerido</option>
                                             </select>
                                         </div>
                                     </div>
                                     @isset($this->selectOption[$count])
                                     @if ($this->selectOption[$count] === "sugerido")
                                     <div class="row">
                                         <div class="col s12 l6">
                                             <label for="" class="txt-tamaño">

                                                 Detalles del producto <font class="asterisco">*</font>
                                             </label>
                                             <input type="text" class="browser-default modal-detalles" name="detalles_{{$count}}" required>
                                         </div>
                                         <div class="col s12 l3">
                                             <input type="radio" class="modal-tipo" name="tipo_{{$count}}" value="fisico" required>
                                             <label for="tipo_{{$count}}" class="txt-tamaño">
                                                 Proveedor Físico
                                             </label>
                                         </div>
                                         <div class="col s12 l3">
                                             <input type="radio" class="modal-tipo-2" name="tipo_{{$count}}" value="online" required>
                                             <label for="" class="txt-tamaño">
                                                 Proveedor Online
                                             </label>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col s12 l12">
                                             <label for="" class="txt-tamaño">

                                                 Comentarios <font class="asterisco">*</font>
                                             </label>
                                             <textarea class="browser-default modal-comentario" name="comentarios_{{$count}}" required></textarea>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col s12 l12">
                                             <h3 class="sub-titulo-form">Datos de contacto</h3>
                                         </div>
                                         <div class="col s12 l6">
                                             <label for="" class="txt-tamaño">

                                                 Nombre del contacto*
                                             </label>
                                             <input type="text" class="browser-default modal-nombre" name="contacto_{{$count}}" required>
                                         </div>
                                         <div class="col s12 l3">
                                             <label for="" class="txt-tamaño">

                                                 Teléfono*
                                             </label>

                                             <input id="phone" type="text" name="contacto_telefono_{{$count}}" class="browser-default modal-telefono"
                                                 pattern="\x2b[0-9]+" size="20" placeholder="+54976284353" required>
                                         </div>
                                         <div class="col s12 l3">
                                             <label for="" class="txt-tamaño">

                                                 Correo Electrónico*
                                             </label>
                                             <input type="email" id="foo" class="browser-default modal-correo" placeholder="example@example.com"
                                                 name="contacto_correo_{{$count}}" required>

                                             <h1 id="emailV"></h1>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col s12 l12">
                                             <label for="" class="txt-tamaño">

                                                 URL*
                                             </label>
                                             <input type="url" class="browser-default modal-url" name="contacto_url_{{$count}}">
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col s12 l12">
                                             <label for="" class="txt-tamaño">
                                                 Carga de cotizaciones <font class="asterisco">*</font>
                                             </label>
                                             <input type="file" required class="modal-cotizacion form-control-file" name="cotizacion_{{$count}}"
                                                 wire:model="cotizaciones.{{$count}}" data-count="{{$count}}"
                                                 accept=".pdf, .docx, .pptx .point, .xml, .jpeg, .jpg, .png, .xlsx, .xlsm, .csv">
                                         </div>
                                     </div>
                                     @else
                                     @endif
                                     @endisset
                                     @endif
                                 @endisset
                            </div>
                        </div>
                    </div>

                @endfor
                @endif


                @if ($this->proveedores_count_catalogo)
                @foreach ($editrequisicion->provedores_requisiciones_catalogo as $edtprov)

                    <div wire:ignore id="proveedor-card-{{$count}}" class="card card-content card-inner card-proveedor" data-count="{{$count}}">
                        <div class="row">
                            <div class="col s12 ">
                                <div class="flex" style="justify-content: space-between">
                                    <h3 class="sub-titulo-form">Captura del Proveedor</h3>
                                    {{-- <i class="fa-regular fa-trash-can btn-deleted-card btn-deletd-proveedor" title="Eliminar proveedor" onclick="deleteProveedor()"></i> --}}
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id_catalogo_{{$count}}" value="{{ $edtprov->id }}">
                        <div  class="row">
                            <div class="col s12 l12">
                                <label for="" class="txt-tamaño">

                                    Proveedor <font class="asterisco">*</font>
                                </label>
                                <select class="model-producto browser-default not-select2" wire:model='selectedInput.{{$count}}'  name="proveedor_{{$count}}" required>
                                    <option value="{{$edtprov->provedores->id}}" selected > Actual: {{$edtprov->provedores->nombre}}</option>
                                    @foreach ($proveedores as $proveedor)
                                        <option  value="{{ $proveedor->id }}">  {{ $proveedor->nombre }} - {{ $proveedor->rfc }}</option>
                                    @endforeach
                                    <option selected  value="otro">Otro</option>
                                </select>
                                <div class="row">
                                    <div class="col s12 l6">
                                        <label for="" class="txt-tamaño">

                                            Fecha inicio*
                                        </label>
                                        <input type="date" value="{{ $edtprov->fecha_inicio }}" class="browser-default modal-start" name="contacto_fecha_inicio_{{$count}}"
                                            required>
                                    </div>
                                    <div class="col s12 l6">
                                        <label for="" class="txt-tamaño">

                                            Fecha fin*
                                        </label>
                                        <input type="date" value="{{ $edtprov->fecha_fin }}" class="browser-default modal-end" name="contacto_fecha_fin_{{$count}}"
                                            required>
                                    </div>
                                    </div>
                                <div wire:loading>
                                   <div>
                                    <div class="preloader-wrapper big active">
                                        <div class="spinner-layer spinner-red">
                                            <div class="circle-clipper left">
                                              <div class="circle"></div>
                                            </div><div class="gap-patch">
                                              <div class="circle"></div>
                                            </div><div class="circle-clipper right">
                                              <div class="circle"></div>
                                            </div>
                                          </div>
                                      </div></div>
                                </div>
                            </div>
                        </div>
                        @isset($this->selectedInput[$count])
                            @if ($this->selectedInput[$count] == "otro")
                            <div class="row">
                                <div class="col s12 l12">
                                    <select class="model-producto browser-default not-select2" wire:model.lazy='selectOption.{{$count}}'
                                        name="proveedor_otro{{$count}}" required>
                                        <option selected value="indistinto">Indistinto</option>
                                        <option value="sugerido">Sugerido</option>
                                    </select>
                                </div>
                            </div>
                            @isset($this->selectOption[$count])
                            @if ($this->selectOption[$count] === "sugerido")
                            <div class="row">
                                <div class="col s12 l6">
                                    <label for="" class="txt-tamaño">

                                        Detalles del producto <font class="asterisco">*</font>
                                    </label>
                                    <input type="text" class="browser-default modal-detalles" name="detalles_{{$count}}" required>
                                </div>
                                <div class="col s12 l3">
                                    <input type="radio" class="modal-tipo" name="tipo_{{$count}}" value="fisico" required>
                                    <label for="tipo_{{$count}}" class="txt-tamaño">
                                        Proveedor Físico
                                    </label>
                                </div>
                                <div class="col s12 l3">
                                    <input type="radio" class="modal-tipo-2" name="tipo_{{$count}}" value="online" required>
                                    <label for="" class="txt-tamaño">
                                        Proveedor Online
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 l12">
                                    <label for="" class="txt-tamaño">

                                        Comentarios <font class="asterisco">*</font>
                                    </label>
                                    <textarea class="browser-default modal-comentario" name="comentarios_{{$count}}" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 l12">
                                    <h3 class="sub-titulo-form">Datos de contacto</h3>
                                </div>
                                <div class="col s12 l6">
                                    <label for="" class="txt-tamaño">

                                        Nombre del contacto*
                                    </label>
                                    <input type="text" class="browser-default modal-nombre" name="contacto_{{$count}}" required>
                                </div>
                                <div class="col s12 l3">
                                    <label for="" class="txt-tamaño">

                                        Teléfono*
                                    </label>

                                    <input id="phone" type="text" name="contacto_telefono_{{$count}}" class="browser-default modal-telefono"
                                        pattern="\x2b[0-9]+" size="20" placeholder="+54976284353" required>
                                </div>
                                <div class="col s12 l3">
                                    <label for="" class="txt-tamaño">

                                        Correo Electrónico*
                                    </label>
                                    <input type="email" id="foo" class="browser-default modal-correo" placeholder="example@example.com"
                                        name="contacto_correo_{{$count}}" required>

                                    <h1 id="emailV"></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 l12">
                                    <label for="" class="txt-tamaño">

                                        URL*
                                    </label>
                                    <input type="url" class="browser-default modal-url" name="contacto_url_{{$count}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 l12">
                                    <label for="" class="txt-tamaño">
                                        Carga de cotizaciones <font class="asterisco">*</font>
                                    </label>
                                    <input type="file" required class="modal-cotizacion form-control-file" name="cotizacion_{{$count}}"
                                        wire:model="cotizaciones.{{$count}}" data-count="{{$count}}"
                                        accept=".pdf, .docx, .pptx .point, .xml, .jpeg, .jpg, .png, .xlsx, .xlsm, .csv">
                                </div>
                            </div>
                            @else
                            @endif
                            @endisset
                            @endif
                            @endisset

                    </div>

                    @php
                        $count = $count+1;
                    @endphp
                @endforeach
                @for($i = $count; $i < $proveedores_count_catalogo; $i++)
                    <div wire:ignore id="proveedor-card-{{$i}}" class="card card-content card-inner card-proveedor" data-count="{{$i}}">
                        <div class="row">
                            <div  class="col s12 ">
                                <div class="flex" style="justify-content: space-between">
                                    <h3 class="sub-titulo-form">Captura del Proveedor</h3>
                                    {{-- <i class="fa-regular fa-trash-can btn-deleted-card btn-deletd-proveedor" title="Eliminar proveedor" onclick="deleteProveedor()"></i> --}}
                                </div>
                                <select class="model-producto browser-default not-select2" wire:model='selectedInput.{{$i}}'  name="proveedor_{{$i}}" required>
                                    <option value="{{$editrequisicion->proveedoroc_id}}" selected > Actual1: {{$editrequisicion->proveedor_catalogo}}</option>
                                    @foreach ($proveedores as $proveedor)
                                        <option  value="{{ $proveedor->id }}">{{ $proveedor->nombre }} - {{ $proveedor->rfc }}</option>
                                    @endforeach
                                    <option selected  value="otro">Otro</option>
                                </select>
                                <div class="row">
                                    <div class="col s12 l6">
                                        <label for="" class="txt-tamaño">

                                            Fecha inicio*
                                        </label>
                                        <input type="date" value="{{old('contacto_fecha_inicio_'.$count, $edtprov->fecha_inicio)}}" class="browser-default modal-start" name="contacto_fecha_inicio_{{$count}}"
                                            required>
                                    </div>
                                    <div class="col s12 l6">
                                        <label for="" class="txt-tamaño">

                                            Fecha fin*
                                        </label>
                                        <input type="date" value="{{old('contacto_fecha_fin_'.$count, $edtprov->fecha_fin)}}" class="browser-default modal-end" name="contacto_fecha_fin_{{$count}}"
                                            required>
                                    </div>
                                    </div>
                                    <div wire:loading>
                                        <div>
                                         <div class="preloader-wrapper big active">
                                             <div class="spinner-layer spinner-red">
                                                 <div class="circle-clipper left">
                                                   <div class="circle"></div>
                                                 </div><div class="gap-patch">
                                                   <div class="circle"></div>
                                                 </div><div class="circle-clipper right">
                                                   <div class="circle"></div>
                                                 </div>
                                               </div>
                                           </div></div>
                                     </div>
                                     @isset($this->selectedInput[$count])
                                     @if ($this->selectedInput[$count] == "otro")
                                     <div class="row">
                                         <div class="col s12 l12">
                                             <select class="model-producto browser-default not-select2" wire:model.lazy='selectOption.{{$count}}'
                                                 name="proveedor_otro{{$count}}" required>
                                                 <option selected value="indistinto">Indistinto</option>
                                                 <option value="sugerido">Sugerido</option>
                                             </select>
                                         </div>
                                     </div>
                                     @isset($this->selectOption[$count])
                                     @if ($this->selectOption[$count] === "sugerido")
                                     <div class="row">
                                         <div class="col s12 l6">
                                             <label for="" class="txt-tamaño">

                                                 Detalles del producto <font class="asterisco">*</font>
                                             </label>
                                             <input type="text" class="browser-default modal-detalles" name="detalles_{{$count}}" required>
                                         </div>
                                         <div class="col s12 l3">
                                             <input type="radio" class="modal-tipo" name="tipo_{{$count}}" value="fisico" required>
                                             <label for="tipo_{{$count}}" class="txt-tamaño">
                                                 Proveedor Físico
                                             </label>
                                         </div>
                                         <div class="col s12 l3">
                                             <input type="radio" class="modal-tipo-2" name="tipo_{{$count}}" value="online" required>
                                             <label for="" class="txt-tamaño">
                                                 Proveedor Online
                                             </label>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col s12 l12">
                                             <label for="" class="txt-tamaño">

                                                 Comentarios <font class="asterisco">*</font>
                                             </label>
                                             <textarea class="browser-default modal-comentario" name="comentarios_{{$count}}" required></textarea>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col s12 l12">
                                             <h3 class="sub-titulo-form">Datos de contacto</h3>
                                         </div>
                                         <div class="col s12 l6">
                                             <label for="" class="txt-tamaño">

                                                 Nombre del contacto*
                                             </label>
                                             <input type="text" class="browser-default modal-nombre" name="contacto_{{$count}}" required>
                                         </div>
                                         <div class="col s12 l3">
                                             <label for="" class="txt-tamaño">

                                                 Teléfono*
                                             </label>

                                             <input id="phone" type="text" name="contacto_telefono_{{$count}}" class="browser-default modal-telefono"
                                                 pattern="\x2b[0-9]+" size="20" placeholder="+54976284353" required>
                                         </div>
                                         <div class="col s12 l3">
                                             <label for="" class="txt-tamaño">

                                                 Correo Electrónico*
                                             </label>
                                             <input type="email" id="foo" class="browser-default modal-correo" placeholder="example@example.com"
                                                 name="contacto_correo_{{$count}}" required>

                                             <h1 id="emailV"></h1>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col s12 l12">
                                             <label for="" class="txt-tamaño">

                                                 URL*
                                             </label>
                                             <input type="url" class="browser-default modal-url" name="contacto_url_{{$count}}">
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col s12 l12">
                                             <label for="" class="txt-tamaño">
                                                 Carga de cotizaciones <font class="asterisco">*</font>
                                             </label>
                                             <input type="file" required class="modal-cotizacion form-control-file" name="cotizacion_{{$count}}"
                                                 wire:model="cotizaciones.{{$count}}" data-count="{{$count}}"
                                                 accept=".pdf, .docx, .pptx .point, .xml, .jpeg, .jpg, .png, .xlsx, .xlsm, .csv">
                                         </div>
                                     </div>
                                     @else
                                     @endif
                                     @endisset
                                     @endif
                                 @endisset
                            </div>
                        </div>
                    </div>

                @endfor
                @endif

            </div>

            {{-- <div>
                <div class="btn btn-add-card" onclick="addCard('proveedor')"><i class="fa-regular fa-square-plus icon-prior"></i> AGREGAR PROVEEDOR</div>
            </div> --}}

            <div class="col s12 right-align">
                <button class="btn btn-primary" type="submit">
                    Siguiente <i class="fa-solid fa-chevron-right icon-next"></i>
                </button>
            </div>
        </form>
    </div>

    @if($habilitar_firma)
        <div id="paso-firma" class="tab-content">
            <div class="card card-item doc-requisicion">
                <div class="flex header-doc">
                    <div class="flex-item item-doc-img">
                        {{--  @if(isset($logotipo->logotipo))
                            <img src="{{ url('images/'.$logotipo->logotipo) }}">
                        @else
                            <img src="{{ url('img/Silent4Business-Logo-Color.png') }}">
                        @endif  --}}
                        <img class="img-doc" src="{{ $organizacion->logotipo }}">
                    </div>
                    <div class="flex-item info-med-doc-header">
                        {{$requi_firmar->sucursal->empresa }} <br>
                        {{$requi_firmar->sucursal->rfc }} <br>
                        {{$requi_firmar->sucursal->direccion }} <br>
                    </div>
                    <div class="flex-item item-header-doc-info" style="">
                        <h4 style="font-size: 18px; color:#49598A;">REQUISICIÓN DE ADQUISICIONES</h4>
                        <p>Folio: 00-00000{{ $requi_firmar->id}}</p>
                        <p>Fecha de solicitud:{{ date('d-m-Y', strtotime($requi_firmar->fecha))}} </p>
                    </div>
                </div>
                <div class="flex doc-blue">
                    <div class="flex-item">
                        <strong>Referencia:</strong><br>
                        {{$requi_firmar->referencia}}<br><br>
                        <strong>Contratos:</strong><br>
                        {{$contrato->no_contrato }}
                    </div>
                    <div class="flex-item">
                        <strong>Área que solicita:</strong><br>
                        {{$requi_firmar->area}}<br><br>
                        <strong>Comprador:</strong><br>
                        {{$requi_firmar->comprador->user->name}}
                    </div>
                    <div class="flex-item">
                        <strong>Solicita:</strong><br>
                        {{$requi_firmar->user}}<br><br>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex-item">
                        <strong> Producto o servicio:</strong>
                    </div>
                </div>
                @foreach ($productos_view as  $producto)
                    <div class="row">
                        <div class="col s12 l4" >
                            <strong> Cantidad:</strong><br><br>
                            <p>
                                {{ $producto->cantidad }}
                            </p>
                        </div>
                        <div class="col s12 l4" >
                            <strong> Producto o servicio:</strong><br><br>
                            <p>
                                {{ $producto->producto->descripcion }}
                            </p>
                        </div>
                        <div class="col s12 l4">
                            <strong> Especificaciones del producto o servicio:</strong><br><br>
                            <p>
                                {{ $producto->espesificaciones }}
                            </p>
                        </div>
                    </div>
                    <hr>
                @endforeach
                <hr style="width: 80%; margin:auto;">

                @foreach ($requi_firmar->provedores_requisiciones as  $proveedor)
                    <div class="proveedores-doc" style="">
                        <div class="flex header-proveedor-doc">
                            <div class="flex-item">
                                <strong>Proveedor: </strong> {{ $proveedor->proveedor }}
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-item">
                                <small> -Provea contexto detallado de su necesidad de Adquisición, es importante mencionar si es que la solicitud está ligada a algún proyecto en particular. -En caso de que no se brinde detalle suficiente que sustente la compra, es no procedera.s </small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l4">
                                <strong>Proveedor:</strong><br><br>
                                {{$proveedor->proveedor}}
                            </div>
                            <div class="col s12  l4">
                                <strong>Detalle del producto:</strong><br><br>
                                {{$proveedor->detalles}}
                            </div>
                            <div class="col s12 l4">
                                <strong>Comentarios:</strong><br><br>
                                {{ $proveedor->comentarios }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l4">
                                <strong>Nombre del contacto:</strong><br><br>
                                {{$proveedor->contacto}}
                            </div>
                            <div class="col s12 l4">
                                <strong>Fecha Inicio:</strong><br><br>
                                {{ date('d-m-Y', strtotime($proveedor->fecha_inicio)) }}
                            </div>
                            <div class="col s12 l4">
                                <strong>Teléfono:</strong><br><br>
                                {{$proveedor->cel}}
                            </div>
                            <div class="col s12 l4">
                                <br><br>
                                <strong>Correo Electrónico:</strong><br><br>
                                {{$proveedor->contacto_correo}}
                            </div>
                            <div class="col s12 l4">
                                <br><br>
                                <strong>Fecha Fin:</strong><br><br>
                                {{ date('d-m-Y', strtotime($proveedor->fecha_fin)) }}
                            </div>
                            <div class="col s12 l4">
                                <br><br>
                                <strong>URL:</strong><br><br>
                                {{$proveedor->url}}
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($requi_firmar->provedores_indistintos_requisiciones as  $proveedor_indistinto)
                    <div class="proveedores-doc" style="">
                        <div class="flex header-proveedor-doc">
                            <div class="flex-item">
                                <strong>Proveedor: </strong> Indistinto
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-item">
                                <small> -Provea contexto detallado de su necesidad de Adquisición, es importante mencionar si es que la solicitud está ligada a algún proyecto en particular. -En caso de que no se brinde detalle suficiente que sustente la compra, es no procedera.s </small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l4">
                                <strong>Fecha Inicio:</strong><br><br>
                                {{$proveedor_indistinto->fecha_inicio}}
                            </div>
                            <div class="col s12  l4">
                                <strong>Fecha Fin:</strong><br><br>
                                {{$proveedor_indistinto->fecha_fin}}
                            </div>
                        </div>
                    </div>
                @endforeach


                @foreach ($requi_firmar->provedores_requisiciones_catalogo as  $proveedor_catalogo)
                <div class="proveedores-doc" style="">
                    <div class="flex header-proveedor-doc">
                        <div class="flex-item">
                            <strong>Proveedor: </strong> Catalogo
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex-item">
                            <small> -Provea contexto detallado de su necesidad de Adquisición, es importante mencionar si es que la solicitud está ligada a algún proyecto en particular. -En caso de que no se brinde detalle suficiente que sustente la compra, es no procedera.s </small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l4">
                            <strong>Nombre:</strong><br><br>
                            {{$proveedor_catalogo->provedores->nombre}}
                        </div>
                        <div class="col s12  l4">
                            <strong>Razón Social:</strong><br><br>
                            {{$proveedor_catalogo->provedores->razon_social}}
                        </div>
                        <div class="col s12  l4">
                            <strong>RFC:</strong><br><br>
                            {{$proveedor_catalogo->provedores->rfc}}
                        </div>
                        <div class="col s12  l4">
                            <strong>Contacto:</strong><br><br>
                            {{$proveedor_catalogo->provedores->contacto}}
                        </div>
                        <div class="col s12  l4">
                            <strong>Facturación:</strong><br><br>
                            {{$proveedor_catalogo->provedores->facturacion}}
                        </div>
                        <div class="col s12  l4">
                            <strong>Dirección:</strong><br><br>
                            {{$proveedor_catalogo->provedores->direccion}}
                        </div>
                        <div class="col s12  l4">
                            <strong>Envio:</strong><br><br>
                            {{$proveedor_catalogo->provedores->envio}}
                        </div>
                        <div class="col s12  l4">
                            <strong>Credito:</strong><br><br>
                            {{$proveedor_catalogo->provedores->credito}}
                        </div>
                        <div class="col s12  l4">
                            <strong>Fecha Inicio:</strong><br><br>
                            {{$proveedor_catalogo->provedores->fecha_inicio}}
                        </div>
                        <div class="col s12  l4">
                            <strong>Fecha Fin:</strong><br><br>
                            {{$proveedor_catalogo->provedores->fecha_fin}}
                        </div>
                    </div>
                </div>
            @endforeach

                <div class="caja-firmas-doc">
                    <div class="flex" style="margin-top: 70px;">
                        <div class="flex-item">
                            @if ($requisicion->firma_solicitante)
                                 <img src="{{$requisicion->firma_solicitante}}" class="img-firma">
                                 <p>{{$requisicion->user}}</p>
                                 <p>{{ $requisicion->fecha_firma_solicitante_requi }}</p>
                            @else
                                <div style="height: 137px;"></div>
                            @endif
                            <hr>
                            <p>
                            <small>FECHA, FIRMA Y NOMBRE  DEL SOLICITANTE </small>
                            </p>
                        </div>
                        <div class="flex-item">
                            @if ($requisicion->firma_jefe)
                                <img src="{{$requisicion->firma_jefe}}" class="img-firma">
                                <p>{{$supervisor}}</p>
                                <p>{{ $requisicion->fecha_firma_jefe_requi }}</p>
                            @else
                                <div style="height: 137px;"></div>
                            @endif
                            <hr>
                            <p>
                            <small>FECHA, FIRMA Y NOMBRE  DEL JEFE INMEDIATO</small>
                            </p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex-item">
                            @if ($requisicion->firma_finanzas)
                                <img src="{{$requisicion->firma_finanzas}}" class="img-firma">
                                <p>Lourdes del Pilar Abadía Velasco </p>
                                <p>{{ $requisicion->fecha_firma_finanzas_requi }}</p>
                            @else
                                <div style="height: 137px;"></div>
                            @endif
                            <hr>
                            <p>
                            <small> FECHA, FIRMA Y NOMBRE  DE FINANZAS</small>
                            </p>
                        </div>
                        <div class="flex-item">
                            @if ($requisicion->firma_compras)
                                <img src="{{$requisicion->firma_compras}}" class="img-firma">
                                <p>{{$requisicion->comprador->user->name}} </p>
                                <p>{{ $requisicion->fecha_firma_comprador_requi }}</p>
                            @else
                                <div style="height: 137px;"></div>
                             @endif
                            <hr>
                            <p>
                            <small> FECHA, FIRMA Y NOMBRE   DE COMPRADORES</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex-item">
                        <small><i style="color: #2395AA;">-NOTA : En caso de ser capacitación se necesita el visto bueno de Gestión de talento.</i></small>
                    </div>
                </div>
            </div>
            <form method="POST" wire:submit.prevent="Firmar(Object.fromEntries(new FormData($event.target)))" enctype="multipart/form-data">
                <div class="card card-content">
                    <div class="">
                        <h5><strong>Firma*</strong></h5>
                        <p>
                            Indispensable firmar la requisición antes de guardar y enviarla a aprobación de lo contrario podrá ser rechazada por alguno de los colaboradores
                        </p>
                    </div>
                    <div class="flex caja-firmar" wire:ignore>
                        <div class="flex-item" style="display:flex; justify-content: center;">
                            <div id="firma_content" class="caja-space-firma">
                                <input type="hidden" name="firma" id="firma">
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex-item" style="display: flex; justify-content:center;">
                            <div class="btn" style="background: #959595 !important" id="clear">Limpiar</div>
                        </div>
                    </div>
                    <div class="flex" style="justify-content: end; gap:10px;">
                        <div class="btn btn-secundario" onclick="$('.tabs').tabs('select', 'paso-proveedores'); @this.set('habilitar_firma', false);  @this.set('habilitar_proveedores', true);" style="background: #959595 !important"><i class="fa-solid fa-chevron-left icon-prior"></i> Regresar </div>
                        <button onclick="validar()" class="btn btn-primary" type="submit"  >Firmar</button>
                    </div>
                </div>
            </form>
        </div>
    @endif

    @if ($habilitar_alerta)
    <b>  <H1>LA EXTENCIÓN DE ARCHIVO NO ES VALIDA</H1> </b>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var emailV = document.getElementById('emailV');
        $(function(){
        $(document).on('keyup','#foo',function(){
            var val = $(this).val().trim(),
                reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if( reg.test(val) == false ){
                emailV.innerHTML =  "email incorrecto";
            }

            else{
                emailV.innerHTML =  "";
            }
        });
        });
        function validar(params) {
            var x = $("#firma").val();
            if (x) {
                Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Registro guardado con éxito.',
                showConfirmButton: false,
                timer: 1500
                })
            }else{
                Swal.fire(
                 'Aun no ha firmado',
                 'Porfavor Intentelo nuevamente',
                 'error')
            }
        }
    </script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.signature.min.js') }}"></script>


    @section('scripts')
    <script>
        $(".not-select2").select2('destroy');
   </script>
    <script>
        Livewire.on('render_firma', (id_tab) => {
            var signaturePad = $('#firma_content').signature({
                syncField: '#firma',
                syncFormat: 'PNG',
                change: function(event, ui) {
                    if (signaturePad.signature().length > 0) {
                        // La firma está presente, lo que indica que se ha terminado de firmar
                        console.log("Firma completada");
                        // Ejecutar código adicional aquí
                        // ...
                        console.log('ferras');
                    } else {
                        // La firma está vacía, lo que indica que aún no se ha firmado
                        console.log("No se ha firmado");
                    }
                }
            });

            $('#clear').click(function(e) {
                e.preventDefault();
                signaturePad.signature('clear');
                $("#firma").val('');
            });
        });
    </script>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                @this.set('products_servs_count', 1);

                // $('.tabs').tabs();
                // Livewire.on('cambiarTab', (id_tab) => {
                //     $('.tabs').tabs('select', id_tab);
                //     $('.paso-tab[data-id="' + id_tab + '"]').addClass('active');
                // });

                // var fecha = new Date();
                // document.getElementById("fecha-solicitud-input").value = fecha.toJSON().slice(0, 10);
            });

            function printArea() {
                let area = $('#select_solicitante option:selected').attr("data-area");
                document.querySelector('#area_print').value = area;
            }

            function addCard(tipo_card) {
                if (tipo_card === 'servicio') {
                    let card = document.querySelector('.card-product');
                    let nueva_card = document.createElement("div");
                    nueva_card.classList.add("card");
                    nueva_card.classList.add("card-content");
                    nueva_card.classList.add("card-product");
                    let cards_count = document.querySelectorAll('.card-product').length + 1;
                    nueva_card.setAttribute("data-count", cards_count);
                    let id_nueva_card = 'product-serv-' + cards_count;
                    nueva_card.setAttribute('id', id_nueva_card);

                    let caja_cards = document.querySelector('.caja-card-product');
                    caja_cards.appendChild(nueva_card);
                    document.querySelector('.card-product:last-child').innerHTML += card.innerHTML;

                    document.querySelector('#' + id_nueva_card + ' .model-cantidad').setAttribute('name', 'cantidad_' + cards_count);
                    document.querySelector('#' + id_nueva_card + ' .model-producto').setAttribute('name', 'producto_' + cards_count);
                    document.querySelector('#' + id_nueva_card + ' .model-especificaciones').setAttribute('name', 'especificaciones_' + cards_count);
                    @this.set('products_servs_count', cards_count);
                }

                if (tipo_card === 'proveedor') {

                    //@this.set('proveedores_count', {{$proveedores_count + 1}});

                    Livewire.emit('actualizarCountProveedores');
                }
            }

            function deleteProduct(){
                document.querySelector('.card-product:hover').remove();
            }

            function deleteProveedor(){
                document.querySelector('.card-proveedor:hover').remove();
            }
        </script>

        <script>
            $('.select_contratos').select2({
             templateResult: productTemplate,
             escapeMarkup: function(m) { return m; }

             });

             function productTemplate(state) {
             var original = state.element;

             result =  ' <strong> '+  $(original).data('no') + ' </strong> '+ $(original).data('servicio') + ' <strong> '+ $(original).data('proveedor')+' </strong> ';

             return result;
           }
        </script>

        <script>
            // Livewire.on('select2', () => {
            //     setTimeout(() => {
            //         $('.select2').select2();
            //     }, 1000);
            // });
        </script>

    @endsection
</div>