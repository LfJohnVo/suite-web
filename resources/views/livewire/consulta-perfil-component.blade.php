<div>
    {{-- The Master doesn't talk, he acts. --}}

        <style>
            .timeline-header .userimage {
                float: inherit;
                /* width: 34px; */
                height: 250px;
                border-radius: 40px;
                overflow: hidden;
                margin: -2px 10px -2px 0;
                z-index: 1;
            }

            .medidas {
                max-height: 1200px;
                overflow: auto;
                margin-top: 30px;
                z-index: 1;
            }

            .wrapper {
                display: flex;
                overflow-x: auto;
                max-height: 150px;
            }

            /* width */
            .wrapper::-webkit-scrollbar {
                width: 7px;
                height: 5px;
            }

            /* Track */
            .wrapper::-webkit-scrollbar-track {
                background: rgba(0, 0, 0, 0);
            }

            /* Handle */
            .wrapper::-webkit-scrollbar-thumb {
                background: rgba(0, 0, 0, 0.2);
                border-radius: 50px;
            }

            /* Handle on hover */
            .wrapper::-webkit-scrollbar-thumb:hover {
                background: rgba(0, 0, 0, 0.5);
            }

            .wrapper .item {
                border: 1px solid #ddd;
                padding: 10px;
                border-radius: 5px;
                width: 120px;
                text-align: center;
                cursor: pointer;
            }

            .wrapper .item:hover {
                border: 1px solid rgb(61, 128, 252);
            }

            .mask-item {
                height: 150px;
                position: absolute;
                top: 0;
                width: 98%;
                left: 0;
                line-height: 134px;
                background: #1bb0b0;
                color: white;
                font-weight: 500;
            }

            .list-border-y {
                border-top: solid 1px #e3e3e3;
                border-bottom: solid 1px #e3e3e3;
            }

            .texto{

            text-transform: lowercase;

            }

            .texto:first-letter {

            text-transform: uppercase;

            }
        </style>

        @php
            use App\Models\Organizacion;
            $organizacion = Organizacion::first();
            $logotipo = $organizacion->logotipo;
        @endphp

        @if (!$isPersonal)
            <div class="text-center form-group" style="background-color:#1BB0B0; border-radius: 100px; color: white;">
                PERFILES DE PUESTO
            </div>
        @else
            <div class="d-flex justify-content-end">
                <button data-toggle="modal" data-target="#modalDocumentos" data-backdrop="static" data-keyboard="false"
                    class="btn btn-danger btn-md"><i class="fas fa-plus mr-1"></i>Documento</button>
                <button onclick="$('#modalCertificaciones').modal('show');" class="btn btn-danger btn-md"><i
                        class="fas fa-plus mr-1"></i>Certificación</button>
                <button onclick="$('#modalCursoIt').modal('show');" class="btn btn-danger btn-md"><i
                        class="fas fa-plus mr-1"></i>Documento</button>
                <a class="btn btn-danger btn-md " href="{{ route('admin.editarCompetencias', $empleadoModel) }}">Editar</a>

            </div>
        @endif

        <div class="row">
            @if (!$isPersonal)
                <div class="col-sm-3 col-3 col-md-3" style="border-right: 1px solid #dadada;">
                    <div class="row" style="margin-bottom:30px;">
                        <div class="col-12">
                            <p class="text-muted"><i class="fas fa-filter mr-2"></i>BÚSQUEDA</p>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="text-muted" for=""><i class="fas fa-font mr-2"></i>Palabra Clave</label>
                            <input type="text" class="form-control input-tags" id="general" data-role="tagsinput"
                                placeholder="Búsca en todos los perfiles" wire:model.debounce.800ms="general">
                        </div>

                        <div class="col-sm-12 col-md-12 mb-3">
                            <label class="text-muted" for="tipoactivo_id"><i class="fas fa-briefcase mr-2"></i>Puesto</label>
                            <select class="form-control {{ $errors->has('area') ? 'is-invalid' : '' }}"
                                wire:model.debounce.800ms="puesto_id">
                                <option value="">-- Seleccionar --</option>
                                @foreach ($puestos as $puesto)
                                    <option value="{{ $puesto->id }}">
                                        {{ $puesto->puesto }}</option>
                                @endforeach
                                <option value="">Ver todas</option>
                            </select>
                        </div>



                    </div>
                    <div class="row">
                        {{-- <div class="col-12">
                            <p class="text-muted"><i class="fas fa-filter mr-2"></i>BÚSQUEDA ESPECÍFICA</p>
                        </div>
                        <div class="col-12">
                            <p class="text-muted" style="border-bottom: 2px solid #1BB0B0">CERTIFICACIONES</p>
                        </div>
                        <div class="col-12">
                            <label class="text-muted" for=""><i class="fas fa-award mr-2"></i>Certificación</label>
                            <input type="text" class="form-control input-tags" id="certificacion" data-role="tagsinput"
                                placeholder="Certificación" wire:model.debounce.800ms="certificacion">
                        </div>
                        <div class="col-12 mt-3">
                            <p class="text-muted" style="border-bottom: 2px solid #1BB0B0">CURSOS / DIPLOMADOS</p>
                        </div>
                        <div class="col-12">
                            <label class="text-muted" for=""><i class="fas fa-chalkboard-teacher mr-2"></i>Curso</label>
                            <input type="text" class="form-control" placeholder="Curso" wire:model.debounce.800ms="curso">
                        </div> --}}
                        {{-- <div class="col-12 mt-3">
                            <p class="text-muted" style="border-bottom: 2px solid #1BB0B0">EXPERIENCIA</p>
                        </div>
                        <div class="col-12 mt-2">
                            <label class="text-muted" for=""><i class="fas fa-briefcase mr-2"></i>Puesto</label>
                            <input type="text" class="form-control" placeholder="Puesto"
                                wire:model.debounce.800ms="puestoExperiencia">
                        </div> --}}
                        {{-- <div class="col-12 mt-2">
                            <label class="text-muted" for=""><i class="fas fa-pen-square mr-2"></i>Descripción</label>
                            <input type="text" class="form-control" placeholder="Descripción"
                                wire:model.debounce.800ms="descripcionExperiencia">
                        </div> --}}
                    </div>
                </div>
            @endif


            <div class="{{ $isPersonal ? 'col-sm-12 col-md-12 col-12' : 'col-sm-9 col-md-9 col-9' }}"
                x-data="{open:true}">

                @if ($perfilesInfo->count())
                    @if (!$isPersonal)
                        <div class="text-center" wire:loading>
                            <i class="fas fa-circle-notch fa-spin mr-2" ></i> Buscando Coincidencias
                        </div>
                        <div class="row col-sm-12 col-md-12 align-items-center mx-md-m5" x-show="open">

                            @foreach ($perfilesInfo as $item)
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div style="cursor: pointer; border:1px solid #ccc!important;  border-radius: 5px; height: 80px;" class="p-2 shadow-sm mb-3"
                                        x-on:click="open = false" wire:click="mostrarPuestos({{ $item->id }})">
                                        <div class="row" >
                                            <div class="col-sm-2 col-md-2 col-lg-2">
                                                <i class="fas fa-user-tie mt-2" style="font-size:25px; color:rgb(160, 158, 158)"></i>
                                            </div>
                                            <div class="col-sm-10 col-md-10 col-lg-10 mt-2">
                                                <p class="m-0 texto" style="font-size:10px; font-weight:bold; "><span
                                                        > {{ $item->puesto}}</span></p>
                                                <p class="m-0 text-muted" style="font-size:10px "><span
                                                    > {{ $item->area?$item->area->area:"Sin definir"}}</span></p>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                            <div class=" col-12 d-flex justify-content-end">
                                {{ $perfilesInfo->links() }}
                            </div>
                        </div>

                    @endif
                @else

                    <div class="px-1 py-2 mx-3 rounded shadow"
                        style="background-color: #DBEAFE; border-top:solid 3px #3B82F6;">

                        <div class="row w-100">
                            <div class="text-center col-1 align-items-center d-flex justify-content-center">
                                <div class="w-100">
                                    <i class="fas fa-info-circle" style="color: #3B82F6; font-size: 22px"></i>
                                </div>
                            </div>
                            <div class="col-11">
                                <p class="m-0" style="font-size: 16px; font-weight: bold; color: #1E3A8A">
                                    Atención</p>
                                <p class="m-0" style="font-size: 14px; color:#1E3A8A ">No se encontraron
                                    coincidencias.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('img/cv.png') }}" class="mt-3" style="height: 400px;">
                    </div>
                @endif
                @if ($puestoModel)
                    @if (!$isPersonal)
                        <div x-show="!open">

                        @else
                            <div>
                    @endif
                    <div class="row justify-content-center">
                        @if (!$isPersonal)
                            <div class="col-12">
                                <button class="btn btn-sm btn_cancelar" x-on:click="open = true"><i
                                        class="fas fa-arrow-left"></i> Regresar</button>

                                <button onclick="javascript:imprim1(imp1);" class="btn btn-sm btn-success">
                                    <i class="mr-2 fas fa-print"></i>
                                    Imprimir
                                </button>


                            </div>
                        @endif
                        <div class="mt-4 col-sm-12 col-md-12">
                            <div id="imp1" class="card" style="background-color:#EDEEF0"
                                style="position-relative; height:auto">
                                <style type="text/css">
                                    @media print {
                                        body {
                                            font-family: arial;
                                        }

                                        .caja_logo {
                                            width: 50%;
                                        }

                                        .h5 {
                                            padding: 20px !important;
                                        }

                                        .medidas {
                                            display: flex;
                                            justify-content: space-between;
                                        }

                                        .datos_iz_cv {
                                            width: 68%;
                                        }

                                        .datos_der_cv {
                                            margin-top: 20px;
                                            width: 30%;
                                            color: #fff;
                                        }

                                        .dato_mairg {
                                            margin-top: 25px;
                                        }
                                    }

                                </style>
                                <div class="caja_img_logo">
                                    <img src="{{ asset($logotipo) }}" class="mt-2 ml-4" style="width: 20%;">
                                </div>
                                <div class="row medidas">
                                    <div class="mt-4 ml-4 col-md-7 datos_iz_cv">
                                        <h5 class="py-2 pl-2"
                                            style="color:#fff; font-weight:bold; background-color:#7F7F7F; width:100%">
                                            {{ $puestoModel->puesto }}</h5>
                                        <div class="mt-4 mb-3 w-100 dato_mairg" style="border-bottom: solid 2px #0CA193;">
                                            <span style="font-size: 17px; font-weight: bold;">
                                                Descripción</span>
                                        </div>
                                        <p style="text-align:justify">
                                            {{ html_entity_decode(strip_tags( $puestoModel->descripcion ), ENT_QUOTES, 'UTF-8')}}
                                        <div class="mt-4 mb-3 w-100 dato_mairg" style="border-bottom: solid 2px #0CA193;">
                                            <span style="font-size: 17px; font-weight: bold;">
                                                Responsabilidades</span>
                                        </div>

                                        <strong style="color:#00A57E;text-transform: uppercase">
                                        <br>
                                        <span style="text-transform:capitalize; font-weight:bold"></span>
                                        <p style="text-align:justify"></p>

                                        <div class="mt-4 mb-3 w-100 dato_mairg" style="border-bottom: solid 2px #0CA193;">
                                            <span style="font-size: 17px; font-weight: bold;">
                                                Experiencia Profesional</span>
                                        </div>
                                        <p style="text-align:justify">
                                            {{ html_entity_decode(strip_tags ($puestoModel->experiencia ), ENT_QUOTES, 'UTF-8')}}
                                        </p>
                                        <div class="mt-4 mb-3 w-100 dato_mairg" style="border-bottom: solid 2px #0CA193;">
                                            <span style="font-size: 17px; font-weight: bold;">
                                                Educación Académica</span>
                                        </div>
                                        <p style="text-align:justify">
                                            {{ html_entity_decode(strip_tags ($puestoModel->estudios ), ENT_QUOTES, 'UTF-8')}}
                                        </p>
                                        <div class="mt-4 mb-3 w-100 dato_mairg" style="border-bottom: solid 2px #0CA193;">
                                            <span style="font-size: 17px; font-weight: bold;">
                                                Conocimientos</span>
                                        </div>
                                        <p style="text-align:justify">
                                            {{ html_entity_decode(strip_tags ($puestoModel->conocimientos ), ENT_QUOTES, 'UTF-8')}}
                                        </p>
                                        <div class="mt-4 mb-3 w-100 dato_mairg" style="border-bottom: solid 2px #0CA193;">
                                            <span style="font-size: 17px; font-weight: bold;">
                                                Certificaciones</span>
                                        </div>
                                        <p style="text-align:justify">
                                            {{ $puestoModel->certificaciones }}
                                        </p>
                                        {{-- @foreach ($empleadoModel->empleado_experiencia as $experiencia)
                                            <div>
                                                <strong style="color:#00A57E;text-transform: uppercase">
                                                    {{ $experiencia->empresa }}</strong>
                                                <br>
                                                <span
                                                    style="text-transform:capitalize; font-weight:bold">{{ $experiencia->puesto }}
                                                </span>
                                                <br>
                                                <span>
                                                    Del
                                                    <strong>{{ \Carbon\Carbon::parse($experiencia->inicio_mes)->format('d/m/Y') }}</strong>
                                                    al
                                                    <strong>{{ \Carbon\Carbon::parse($experiencia->fin_mes)->format('d/m/Y') }}</strong>
                                                </span>
                                                <span style="text-transform:capitalize; text-align:justify">
                                                    <br>
                                                    <p style="text-align:justify">{{ $experiencia->descripcion }}</p>
                                            </div>
                                        @endforeach
     --}}
                                        {{-- <div class="mt-4 mb-3 w-100 dato_mairg " style="border-bottom: solid 2px #0CA193;">
                                            <span style="font-size: 17px; font-weight: bold;">
                                                Certificaciones</span>
                                        </div> --}}
                                        {{-- @foreach ($empleadoModel->empleado_certificaciones as $certificaciones)
                                            <div>
                                                <strong style="color:#00A57E;text-transform: uppercase">
                                                    {{ $certificaciones->nombre }}</strong>
                                                <br>
                                                @if ($certificaciones->vigencia && $certificaciones->estatus)
                                                    <span>{{ $certificaciones->estatus }}
                                                        {{ Str::lower($certificaciones->estatus) == 'vencida' ? 'el' : 'al' }}
                                                        <strong>{{ \Carbon\Carbon::parse($certificaciones->vigencia)->format('d/m/Y') }}</strong>
                                                    </span>
                                                @else
                                                    <span>Permanente - Sin Vigencia</span>
                                                @endif
                                            </div>
                                        @endforeach --}}

                                        {{-- <div class="mt-4 mb-3 w-100 dato_mairg " style="border-bottom: solid 2px #0CA193;">
                                            <span style="font-size: 17px; font-weight: bold;">
                                                Capacitaciones</span>
                                        </div> --}}
                                        {{-- @foreach ($empleadoModel->empleado_cursos as $cursos)
                                            <div>
                                                <strong class="font-weight-bold"
                                                    style="color:#00A57E;text-transform: uppercase">
                                                    {{ $cursos->curso_diploma }}</strong>
                                                <br>
                                                <span>{{ $cursos->tipo }}</span>
                                                <br>
                                                <span>Del
                                                    <strong>{{ \Carbon\Carbon::parse($cursos->año)->format('d/m/Y') }}</strong>
                                                    al
                                                    <strong>{{ \Carbon\Carbon::parse($cursos->fecha_fin)->format('d/m/Y') }}</strong></span>
                                                <br>
                                                <span>{{ $cursos->duracion }} Día(s)</span>
                                            </div>
                                        @endforeach
     --}}
                                        {{-- <div class="mt-4 mb-3 w-100 dato_mairg " style="border-bottom: solid 2px #0CA193;">
                                            <span style="font-size: 17px; font-weight: bold;">
                                                Educación Académica</span>
                                        </div> --}}
                                        {{-- @foreach ($empleadoModel->empleado_educacion as $educacion)
                                            <div>
                                                <strong class="font-weight-bold"
                                                    style="color:#00A57E;text-transform: uppercase">
                                                    {{ $educacion->institucion }}</strong>
                                                <br>
                                                <span style="text-transform:capitalize">{{ $educacion->nivel }}</span>
                                                <br>
                                                <span>
                                                    Del
                                                    <strong>{{ \Carbon\Carbon::parse($educacion->año_inicio)->format('d/m/Y') }}</strong>
                                                    al
                                                    <strong>{{ \Carbon\Carbon::parse($educacion->año_fin)->format('d/m/Y') }}</strong>
                                                </span>
                                            </div>
                                        @endforeach --}}
                                        <div class="mt-4 mb-3 w-100 dato_mairg " style="border-bottom: solid 2px #0CA193;">
                                            <span style="font-size: 17px; font-weight: bold;">
                                                Idiomas</span>
                                        </div>
                                        {{-- @foreach ($empleadoModel->idiomas as $idioma)
                                            <div>
                                                <strong class="font-weight-bold"
                                                    style="color:#00A57E;text-transform: uppercase">
                                                    {{ $idioma->nombre }}</strong>
                                                <br>
                                                <span style="text-transform:capitalize">
                                                    <strong>Nivel:</strong> {{ $idioma->nivel }}
                                                </span>
                                                <br>
                                                <span style="text-transform:capitalize">
                                                    <strong>Porcentaje:</strong> {{ $idioma->porcentaje }} %
                                                </span>
                                            </div>
                                        @endforeach --}}
                                        </ul>
                                    </div>
                                    <div class="mt-4 col-md-4 datos_der_cv">
                                        <div
                                            style="background: linear-gradient(0deg, rgba(69,125,182,1) 0%, rgba(8,170,157,1) 60%); height:100%; padding:10px;">
                                            {{-- <div class="text-center w-100"><img class="mt-3"
                                                    style="height: 100px; clip-path: circle(50px at 50% 50%); margin:auto"
                                                    src="{{ asset('storage/empleados/imagenes/') . '/' . $empleadoModel->Avatar }}"
                                                    alt=""></div> --}}
                                            <div class="mt-3 mb-4 w-100" style="border-bottom: solid 2px #fff;">
                                                <span class="text-white " style="font-size: 14px; font-weight: bold;">
                                                   Datos Generales</span>
                                            </div>

                                            <strong><i class="ml-2 mr-2 text-white fas fa-user-tie"></i>Edad</strong>
                                            <br>
                                            @if(is_null($puestoModel->edad_de) && is_null($puestoModel->edad_a))
                                            <label class="ml-4">Sin registro</label>
                                            @else
                                            <div style="margin-left:28px;">
                                                <span>{{ $puestoModel->edad_de}}</span>-<span>{{ $puestoModel->edad_a}}</span>
                                            </div>
                                            @endif
                                            <br>
                                            <strong><i class="ml-2 mr-2 text-white fas fa-restroom"></i>Género</strong>
                                            <br>
                                            @if (is_null($puestoModel->genero))
                                            <label class="ml-4">Sin registro</label>
                                            @else
                                            <div style="margin-left:28px;">
                                                <span>{{ $puestoModel->genero}}</span>
                                            </div>
                                            @endif
                                            <br>
                                            <strong><i class="ml-2 mr-2 fas fa-heart text-white"></i>Estado Civil</strong>
                                            <br>
                                            @if (is_null($puestoModel->estado_civil))
                                            <label class="ml-4">Sin registro</label>
                                            @else
                                            <div style="margin-left:28px;">
                                                <span>{{ $puestoModel->estado_civil}}</span>
                                            </div>
                                            @endif
                                            <br>
                                            <strong><i class="ml-2 mr-2 fas fa-dollar-sign text-white"></i>Sueldo</strong>
                                            <br>
                                            @if (is_null($puestoModel->sueldo))
                                            <label class="ml-4">Sin registro</label>
                                            @else
                                            <div style="margin-left:28px;">
                                                <span>{{ $puestoModel->sueldo}}</span>
                                            </div>
                                            @endif
                                            <br>
                                            <strong><i class="ml-2 mr-2 far fa-building text-white"></i>Lugar de Trabajo</strong>
                                            <br>
                                            @if (is_null($puestoModel->lugar_trabajo))
                                            <label class="ml-4">Sin registro</label>
                                            @else
                                            <div style="margin-left:28px;">
                                                <span>{{ $puestoModel->lugar_trabajo}}</span>
                                            </div>
                                            @endif
                                            <br>
                                            <strong><i class="ml-2 mr-2 fas fa-clock text-white"></i>Horario</strong>
                                            <br>
                                            @if (is_null($puestoModel->horario_inicio) && is_null($puestoModel->horario_termino))
                                            <label class="ml-4">Sin registro</label>
                                            @else
                                            <div style="margin-left:28px;">
                                                <span>{{ $puestoModel->horario_inicio}}-{{ $puestoModel->horario_termino}}</span>
                                            </div>
                                             @endif
                                            <br>
                                            <div class="mt-3 mb-4 w-100" style="border-bottom: solid 2px #fff;">
                                                <span class="text-white " style="font-size: 14px; font-weight: bold;">
                                                   Competencias</span>
                                            </div>
                                            <div style="margin-left:28px;">
                                               @foreach($puestoModel->competencias as $competencia)
                                                <li>{{$competencia->competencia->nombre}}</li>
                                                @endforeach
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            @endif
        </div>

    </div>
    <script src="https://unpkg.com/@yaireo/tagify"></script>
    <script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.livewire.on('tagify', function(e) {
                var input = document.querySelector('#certificacion')
                var tagify = new Tagify(input, {
                    dropdown: {
                        enabled: 0
                    },
                })
                tagify.on('change', (e) => {
                    let values = [];
                    if (e.detail.value) {
                        values = JSON.parse(e.detail.value);
                    }
                    let string = "";
                    values.forEach(element => {
                        string += `${element.value},`;
                    });

                    if (e.detail.value) {
                        let result = string.slice(0, -1);
                        console.log(result);
                        @this.set('certificacion', result)
                    } else {
                        @this.set('certificacion', null)
                    }
                })
            })
            var input = document.querySelector('#certificacion')
            if (input) {
                var tagify = new Tagify(input, {
                    dropdown: {
                        enabled: 0
                    },
                })

                tagify.on('change', (e) => {
                    let values = [];
                    if (e.detail.value) {
                        values = JSON.parse(e.detail.value);
                    }
                    let string = "";
                    values.forEach(element => {
                        string += `${element.value},`;
                    });
                    if (e.detail.value) {
                        let result = string.slice(0, -1);
                        console.log(result);
                        @this.set('certificacion', result)
                    } else {
                        @this.set('certificacion', null)
                    }
                })
            }
        })
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.limpiarForm = () => {
                limpiarErrores();
                document.getElementById('vencio_alta').style.border = 'none'
                document.getElementById('formCargarCertificacion').reset();
            }
            window.limpiarFormCurso = () => {
                limpiarErrores();
                document.getElementById('formCargarCurso').reset();
            }
            const btnCargarCertificado = document.getElementById('btnCargarCertificado');
            btnCargarCertificado.addEventListener('click', async (e) => {
                e.preventDefault();
                limpiarErrores();
                console.log('click');
                const formCargarCertificacion = document.getElementById('formCargarCertificacion');
                const formData = new FormData(formCargarCertificacion);
                const aplicaVigencia = document.getElementById('aplicaVigencia');
                const url = formCargarCertificacion.getAttribute('action');
                const method = formCargarCertificacion.getAttribute('method');
                formData.append('esVigente', aplicaVigencia.checked)
                const response = await fetch(url, {
                    method: method,
                    body: formData,
                    headers: {
                        Accept: 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content'),
                    },
                });
                const data = await response.json();
                if (data.errors) {
                    $.each(data.errors, function(indexInArray,
                        valueOfElement) {
                        document.querySelector(`span.${indexInArray}_error`)
                            .innerHTML =
                            `<i class="mr-2 fas fa-info-circle"></i> ${valueOfElement[0]}`;
                    });
                }
                if (data.status === "success") {
                    Swal.fire(
                        data.message,
                        '',
                        'success'
                    )
                    setTimeout(() => {
                        location.reload();
                    }, 1000);
                }
            });

            const inputCargarCertificacion = document.getElementById('cargarCertificacion');
            inputCargarCertificacion.addEventListener('change', function(e) {
                document.getElementById('infoSelectedCertificacion').innerHTML = `
                    ${this.files.length} documento(s) seleccionados
                    <label title="Remover selección" style="cursor: pointer;color:red;">&times;</label>
                    `
            });

            const infoSelectedCertificacionElement = document.getElementById('infoSelectedCertificacion');
            infoSelectedCertificacionElement.addEventListener('click', function(e) {
                e.preventDefault();
                if (e.target.tagName == 'LABEL') {
                    this.innerHTML = "";
                    console.log(inputCargarCertificacion.files);
                    inputCargarCertificacion.value = null;
                    console.log(inputCargarCertificacion.files);
                }
            })

            function limpiarErrores() {
                document.querySelectorAll('.errors').forEach(item => {
                    item.innerHTML = ""
                })
            }

            const vigenciaCertificado = document.getElementById('vigencia');
            vigenciaCertificado.addEventListener('change', function(e) {
                const vigencia = this.value;
                const estatus = document.getElementById('vencio_alta');
                if (Date.parse(vigencia) >= Date.now()) {
                    estatus.value = "Vigente"
                    estatus.style.border = "2px solid #57e262";
                } else {
                    estatus.value = 'Vencida'
                    estatus.style.border = "2px solid #FF9C08";
                }
            })

            const btnCargarCurso = document.getElementById('btnCargarCurso');
            btnCargarCurso.addEventListener('click', async (e) => {
                e.preventDefault();
                limpiarErrores();
                console.log('click');
                const formCargarCurso = document.getElementById('formCargarCurso');
                const formData = new FormData(formCargarCurso);
                const url = formCargarCurso.getAttribute('action');
                const method = formCargarCurso.getAttribute('method');
                const response = await fetch(url, {
                    method: method,
                    body: formData,
                    headers: {
                        Accept: 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content'),
                    },
                });
                const data = await response.json();
                if (data.errors) {
                    $.each(data.errors, function(indexInArray,
                        valueOfElement) {
                        document.querySelector(`span.${indexInArray}_error`)
                            .innerHTML =
                            `<i class="mr-2 fas fa-info-circle"></i> ${valueOfElement[0]}`;
                    });
                }
                if (data.status === "success") {
                    Swal.fire(
                        data.message,
                        '',
                        'success'
                    )
                    setTimeout(() => {
                        location.reload();
                    }, 1000);
                }
            });

            const inputCargarCurso = document.getElementById('cargarCurso');
            inputCargarCurso.addEventListener('change', function(e) {
                document.getElementById('infoSelectedCurso').innerHTML = `
                    ${this.files.length} documento(s) seleccionados
                    <label title="Remover selección" style="cursor: pointer;color:red;">&times;</label>
                    `
            });

            const infoSelectedArchivoCursoElemento = document.getElementById('infoSelectedCurso');
            infoSelectedArchivoCursoElemento.addEventListener('click', function(e) {
                e.preventDefault();
                if (e.target.tagName == 'LABEL') {
                    this.innerHTML = "";
                    console.log(inputcargarCurso.files);
                    inputcargarCurso.value = null;
                    console.log(inputcargarCurso.files);
                }
            })

            const btnCargarDocumento = document.getElementById('btnCargarDocumento');
            btnCargarDocumento.addEventListener('click', async (e) => {
                e.preventDefault();
                limpiarErrores();
                console.log('click');
                const formCargarDocumento = document.getElementById('formCargarDocumento');
                const formData = new FormData(formCargarDocumento);
                const url = formCargarDocumento.getAttribute('action');
                const method = formCargarDocumento.getAttribute('method');
                const response = await fetch(url, {
                    method: method,
                    body: formData,
                    headers: {
                        Accept: 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content'),
                    },
                });
                const data = await response.json();
                if (data.errors) {
                    $.each(data.errors, function(indexInArray,
                        valueOfElement) {
                        document.querySelector(`span.${indexInArray}_error`)
                            .innerHTML =
                            `<i class="mr-2 fas fa-info-circle"></i> ${valueOfElement[0]}`;
                    });
                }
                if (data.status === "success") {
                    Swal.fire(
                        data.message,
                        '',
                        'success'
                    )
                    setTimeout(() => {
                        location.reload();
                    }, 1000);
                }
            });

            const inputCargarDocumento = document.getElementById('cargarDocumento');
            inputCargarDocumento.addEventListener('change', function(e) {
                document.getElementById('infoSelectedDocumento').innerHTML = `
                    ${this.files.length} documento(s) seleccionados
                    <label title="Remover selección" style="cursor: pointer;color:red;">&times;</label>
                    `
            });

            const infoSelectedDocumentoElement = document.getElementById('infoSelectedDocumento');
            infoSelectedDocumentoElement.addEventListener('click', function(e) {
                e.preventDefault();
                if (e.target.tagName == 'LABEL') {
                    this.innerHTML = "";
                    console.log(inputCargarDocumento.files);
                    inputCargarDocumento.value = null;
                    console.log(inputCargarDocumento.files);
                }
            })


            const inputFile = document.getElementById('cargarDocumentos');
            inputFile.addEventListener('change', function(e) {
                document.getElementById('infoSelected').innerHTML = `
                    ${this.files.length} documento(s) seleccionados
                    `
                Swal.fire({
                    title: '¿Desea almacenar estos documentos?',
                    text: "",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Cargar',
                    cancelButtonText: 'No',
                }).then(async (result) => {
                    if (result.isConfirmed) {
                        const formulario = document.getElementById('formCargaDocumentos');
                        const url = formulario.getAttribute('action');
                        const method = formulario.getAttribute('method');
                        const formData = new FormData(formulario);
                        const response = await fetch(url, {
                            method: method,
                            body: formData,
                            headers: {
                                Accept: "application/json",
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content'),
                            },
                        })
                        const data = await response.json();
                        if (data.status === "success") {
                            Swal.fire(
                                data.message,
                                '',
                                'success'
                            )
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        }
                    } else {
                        document.getElementById('infoSelected').innerHTML = ""
                    }
                })
            })
        })
    </script>

    <script>
        function imprim1(imp1) {
            var printContents = document.getElementById('imp1').innerHTML;
            w = window.open();
            w.document.write(printContents);
            w.document.close(); // necessary for IE >= 10
            w.focus(); // necessary for IE >= 10
            w.print();
            w.close();
            return true;
        }
    </script>

    </div>
