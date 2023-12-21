{{-- @extends('layouts.admin')
@section('content') --}}
<div>
    <style>

        .btn:focus{
            box-shadow: none !important;
            outline: none !important;
        }
        .select2-search.select2-search--inline {
            margin-top: -20px !important;
        }

        .titulo-matriz {
            text-align: left;
            font: 20px Roboto;
            letter-spacing: 0px;
            color: #606060;
            opacity: 1;
        }

        .radius {
            border-radius: 16px;
            box-shadow: none;
        }

        .titulo-card {
            text-align: left;
            font: 20px Roboto;
            color: #306BA9;
        }

        .boton-cancelar {
            background-color: white;
            border-color: #057BE2;
            font: 14px Roboto;
            color: #057BE2;
            border-radius: 4px;
            width: 148px;
            height: 48px;
            align-content: center;
        }

        .boton-cancel {
            background-color: white;
            border-color: #057BE2;
            font: 14px Roboto;
            color: #057BE2;
            border-radius: 4px;
            width: 148px;
            height: 48px;
            align-content: center;
        }

        .boton-enviar {
            background-color: #057BE2;
            border-color: #057BE2;
            font: 14px Roboto;
            color: white;
            border-radius: 4px;
            width: 148px;
            height: 48px;
        }

        .borde-color {
            border-radius: 8px;
            border-color: black;
            background-color: white;
        }

        .form {
            background: #F8FAFC;
            border-radius: 4px;
            opacity: 1;
        }

        .letra-etiqueta-flotante {
            font: 14px Roboto;
            color: #606060;
            text-align: left;
        }
    </style>
    {{ Breadcrumbs::render('admin.matriz-requisito-legales.create') }}
    <h5 class="col-12 titulo-matriz">Matriz de Requisitos Legales y Regulatorios</h5>
    <br>
    <div class="card radius" style="background-color: #5397D5;">
        <div class="row">
            <div class="col-md-2">
                <img src="{{ asset('assets/Imagen 2@2x.png') }}" alt="jpg" style="width:150px; height:137px;"
                    class="mt-3 mb-3 ml-3 img-fluid">
            </div>
            <div class="col-md-10 mt-3">
                <div style="font:20px Segoe UI;color:white;" class="mr-2">
                    ¿Qué es? Matriz de Requisitos Legales y Regulatorios
                </div>
                <div style="font: 14px Segoe UI;color:white;"class="mt-3 mr-2">
                    Es una herramienta utilizada en el ámbito empresarial y de gestión para
                    rastrear y gestionar los requisitos legales y regulaciones aplicables a una organización.
                </div>
                <div style="font: 12px Segoe UI;color:white;"class="mr-5 mt-3 mb-3">
                    Esta matriz tiene como objetivo principal ayudar a las empresas a garantizar que están
                    cumpliendo con todas las leyes, regulaciones y normativas relevantes que se aplican a sus
                    operaciones.
                </div>
            </div>
        </div>
    </div>
    <form wire:submit.prevent='save'>
        <div class="mt-4 card" style="border-radius: 8px;">
            <div class="card-body pb-0">
                <div class="row">
                    <div class="form-group col-11" style="margin-bottom:0px;">
                        <p class="titulo-card" style="margin-bottom:0px;">
                            Requisito Legal
                        </p>
                    </div>
                    <div class="mb-3">
                        <hr>
                    </div>
                    <div class="form-group col-12 anima-focus">
                            <input required
                                class="form-control {{ $errors->has('nombrerequisito') ? 'is-invalid' : '' }} form "
                                type="text" name="nombrerequisito" id="nombrerequisito"
                                value="{{ old('nombrerequisito', '') }}"
                                placeholder=""
                                wire:model.defer='alcance.nombrerequisito'
                                maxlength="255"
                                >
                                {!! Form::label('nombrerequisito', 'Nombre del requisito legal, regulatorio, contractual o estatutario*', ['class' => 'asterisco']) !!}
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="form-group col-sm-6 anima-focus">
                            <input type="text"
                                class="form-control {{ $errors->has('formacumple') ? 'is-invalid' : '' }} form"
                                name="formacumple" id="formacumple" value="{{ old('formacumple', '') }}"
                                aria-describedby="textExample1" placeholder=""
                                wire:model.defer='alcance.formacumple' required maxlength="255"/>
                                {!! Form::label('formacumple', 'Cláusula,
                                sección o
                                apartado
                                aplicable*', ['class' => 'asterisco']) !!}
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="col-12">
                        <div class="row" >
                            <div class="form-group col-sm-6 anima-focus">
                                    <input class="form-control {{ $errors->has('fechaexpedicion') ? 'is-invalid' : '' }} form"
                                        type="date" name="fechaexpedicion" id="fechaexpedicion" min="1945-01-01"
                                        value="{{ old('fechaexpedicion') }}"
                                        wire:model.defer='alcance.fechaexpedicion' required>
                                        {!! Form::label('fechaexpedicion', 'Fecha de
                                        publicación*', ['class' => 'asterisco']) !!}
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="form-group col-sm-6 anima-focus">
                                    <input class="form-control date {{ $errors->has('fechavigor') ? 'is-invalid' : '' }} form"
                                        type="date" name="fechavigor" id="fechavigor" min="1945-01-01"
                                        value="{{ old('fechavigor') }}"
                                        wire:model.defer='alcance.fechavigor' required>
                                        {!! Form::label('fechavigor', 'Fecha de
                                        publicación*', ['class' => 'asterisco']) !!}
                            </div>
                        </div>

                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="form-group col-sm-12 mt-4 anima-focus h-300">
                        <textarea required class="form-control {{ $errors->has('requisitoacumplir') ? 'is-invalid' : '' }} form"
                                  style="height: 200px; width: 100%;" name="requisitoacumplir" placeholder=""
                                  id="requisitoacumplir" wire:model.defer='alcance.requisitoacumplir'
                        >{{ old('requisitoacumplir') }}</textarea>
                        {!! Form::label('requisitoacumplir', 'Descripción del requisito a cumplir*', ['class' => 'asterisco']) !!}
                    </div>
                    <div id="miDiv">
                        <button type="button" class="btn mb-3" onclick="ocultarDiv()" id="miFormulario"
                        style="color: #057BE2; width:15rem; position: relative; right: .5rem;"
                        wire:click.prevent="addAlcance1">
                        Añadir nuevo Requisito
                        <i class="fa-solid fa-plus" style="color: #057BE2;"></i>
                     </button>
                    </div>
                </div>
            </div>
        </div>



        @foreach ($alcance_s1 as $key => $p )
            <div class="mt-4 card" style="border-radius: 8px;">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="form-group col-11" style="margin-bottom:0px;">
                            <p class="titulo-card" style="margin-bottom:0px;">
                                Requisito Legal
                            </p>
                        </div>
                        <div class="form-group col-1"style="margin-bottom:0px;">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn" style="background-color: white; box-shadow:none;"
                                data-bs-toggle="modal" data-bs-target="#exampleModal_{{$key}}">
                                <i class="fa-regular fa-trash-can fa-2xl" style="color: #606060;"></i>
                            </button>
                        </div>
                        <div class="mb-3">
                            <hr>
                        </div>
                        <div class="form-group col-12 anima-focus">
                                <input required
                                    class="form-control {{ $errors->has('nombrerequisito') ? 'is-invalid' : '' }} form "
                                    type="text" name="nombrerequisito.{{$key}}" id="nombrerequisito.{{$key}}"
                                    value="{{ old('nombrerequisito', '') }}"
                                    placeholder=" "
                                    wire:model.defer='alcance_s1.{{$key}}.nombrerequisito'
                                    maxlength="255"
                                    >
                                    {!! Form::label('nombrerequisito', 'Nombre del requisito legal, regulatorio, contractual o estatutario*', ['class' => 'asterisco']) !!}
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="form-group col-sm-6 anima-focus">
                                <input type="text"
                                    class="form-control {{ $errors->has('formacumple') ? 'is-invalid' : '' }} form"
                                    name="formacumple" id="formacumple" value="{{ old('formacumple', '') }}"
                                    aria-describedby="textExample1" placeholder=" "
                                    style="height:55px;"
                                    wire:model.defer='alcance_s1.{{$key}}.formacumple' required maxlength="255"/>
                                    {!! Form::label('formacumple', 'Cláusula,
                                    sección o
                                    apartado
                                    aplicable*', ['class' => 'asterisco']) !!}
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="col-12">
                            <div class="row" >
                                <div class="form-group col-sm-6 anima-focus">
                                        <input class="form-control {{ $errors->has('fechaexpedicion') ? 'is-invalid' : '' }} form"
                                            type="date" name="fechaexpedicion" id="fechaexpedicion" min="1945-01-01"
                                            value="{{ old('fechaexpedicion') }}"
                                            wire:model.defer='alcance_s1.{{$key}}.fechaexpedicion' required>
                                            {!! Form::label('fechaexpedicion', 'Fecha de
                                            publicación*', ['class' => 'asterisco']) !!}
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="form-group col-sm-6 anima-focus">
                                        <input class="form-control date {{ $errors->has('fechavigor') ? 'is-invalid' : '' }} form"
                                            type="date" name="fechavigor" id="fechavigor" min="1945-01-01"
                                            value="{{ old('fechavigor') }}"
                                            wire:model.defer='alcance_s1.{{$key}}.fechavigor' required>
                                            {!! Form::label('fechavigor', 'Fecha de
                                            publicación*', ['class' => 'asterisco']) !!}
                                </div>
                            </div>

                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="form-group col-sm-12 mt-4 anima-focus h-300">
                            <textarea required class="form-control {{ $errors->has('requisitoacumplir') ? 'is-invalid' : '' }} form"
                                style="height: 200px;" name="requisitoacumplir.{{$key}}" placeholder=""
                                id="requisitoacumplir.{{$key}}" wire:model.defer='alcance_s1.{{$key}}.requisitoacumplir'
                            >{{ old('requisitoacumplir') }}</textarea>
                            {!! Form::label('requisitoacumplir', 'Descripción del requisito a cumplir*', ['class' => 'asterisco']) !!}
                        </div>

                        <button type="button" class="btn mb-3"
                        style="color: #057BE2; width:15rem; position: relative; right: .5rem;"
                        wire:click.prevent="addAlcance1">
                        Añadir nuevo Requisito
                        <i class="fa-solid fa-plus" style="color: #057BE2;"></i>
                     </button>


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal_{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" style="margin-top: 150px;">
                                <div class="modal-content text-center">
                                    <div class="modal-body">
                                        <div class="mt-5 mb-3" style="font:20px Segoe UI;color:#306BA9;">
                                            ¿Estás seguro que deseas eliminar este elemento?
                                        </div>
                                        <i class="mt-5 mb-5 fa-regular fa-trash-can fa-2xl" style="color: #606060;"></i>
                                        <div class="row mb-5 mt-2">
                                            <div class="col-md-6" style="padding-left: 50px;">
                                                <button type="button" class="btn btn-outline-primary"
                                                    style="width: 175px;
                                                        height: 39px;font:14px Roboto;border: 1px solid;color:#057BE2;border-radius:6px;"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                            </div>
                                            <div class="col-md-6"
                                                style="
                                                padding-right: 50px;">
                                                <button type="button" data-bs-dismiss="modal" class="btn btn-primary"
                                                    style="width: 175px;
                                                        height: 39px;box-shadow:none;border-radius:6px;" wire:click.prevent="removeAlcance1({{$key}})">Eliminar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <button type="button" class="btn btn-light mr-auto mb-3 "
        style="color: #057BE2; width:15rem; position: relative; right: 1rem;" wire:click.prevent="addAlcance1">
            Añadir nuevo Requisito
            <i class="fa-solid fa-plus" style="color: #057BE2;"></i>
        </button> --}}

        <div class="text-right form-group col-12">
            <span class="help-block">{{ trans('cruds.matrizRequisitoLegale.fields.requisitoacumplir_helper') }}
            </span>
            <a href="#" class="btn boton-cancelar" onclick="confirmCancellation('{{ route('admin.matriz-requisito-legales.index') }}')">
                <div class="mt-2">Cancelar</div>
            </a>
            <button class="btn boton-enviar" type="submit">
               Guardar  y Notificar
            </button>
        </div>
    </form>
</div>

<script>
    function confirmCancellation(redirectUrl) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'Esta acción cancelará la operación. ¿Quieres continuar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirige solo si el usuario confirma
                window.location.href = redirectUrl;
            }
        });
    }
</script>

<script>
     function ocultarDiv() {
        var miDiv = document.getElementById("miDiv");
        miDiv.style.display = "none";
        return false;
    }
</script>

{{-- @endsection --}}



