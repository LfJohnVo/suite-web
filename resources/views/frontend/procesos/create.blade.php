@extends('layouts.frontend')
@section('content')

    <link rel="stylesheet" type="text/css" href="{{ asset('../css/colores.css') }}">

    <div class="mt-4 card">
        <div class="py-3 col-md-10 col-sm-9 card-body verde_silent align-self-center" style="margin-top: -40px;">
            <h3 class="mb-1 text-center text-white align-items-centera"><strong> Registrar: </strong>Procesos </h3>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('frontend.procesos.store') }}" class="row">
                @csrf
                <div class="col-md-12 col-sm-12">
                    <div class="card vrd-agua">
                        <p class="mb-1 text-center text-white">Crear proceso</p>
                    </div>
                </div>
                <div class="form-group col-sm-4">
                    <label class="required" for="codigo"><i class="fas fa-barcode iconos-crear"></i>
                        Código</label>
                    <input class="form-control {{ $errors->has('codigo') ? 'is-invalid' : '' }}" type="text" name="codigo"
                        id="codigo" value="{{ old('codigo', '') }}" required>
                    @if ($errors->has('codigo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('codigo') }}
                        </div>
                    @endif
                </div>
                <div class="form-group col-sm-4">
                    <label class="required" for="nombre"><i class="fas fa-file-signature iconos-crear"></i>
                        Nombre</label>
                    <input class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" type="text" name="nombre"
                        id="nombre" value="{{ old('nombre', '') }}" required>
                    @if ($errors->has('nombre'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nombre') }}
                        </div>
                    @endif
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="id_macroproceso"><i class="fas fa-cogs iconos-crear"></i>Macroproceso </label>
                    <select class="form-control select2 {{ $errors->has('id_macroproceso') ? 'is-invalid' : '' }}"
                        name="id_macroproceso" id="id_macroproceso" required>
                        <option value="">
                            Escoja un macroproceso
                        </option>
                        @foreach ($macroprocesos as $macroproceso)
                            <option value="{{ $macroproceso->id }}">
                               {{ $macroproceso->codigo }} / {{ $macroproceso->nombre }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('id_macroproceso'))
                        <div class="invalid-feedback">
                            {{ $errors->first('id_macroproceso') }}
                        </div>
                    @endif
                    <span class="help-block"></span>
                </div>
                <div class="form-group col-sm-12">
                    <label class="required" for="descripcion"><i class="fas fa-sticky-note iconos-crear"></i>
                        Descripción</label>
                    <textarea rows="3" class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}" type="text" name="descripcion"
                        id="descripcion" value="{{ old('descripcion', '') }}" required></textarea>
                    @if ($errors->has('descripcion'))
                        <div class="invalid-feedback">
                            {{ $errors->first('descripcion') }}
                        </div>
                    @endif
                </div>
                <div class="text-right form-group col-12">
                <a href="{{ redirect()->getUrlGenerator()->previous() }}" class="btn_cancelar">Cancelar</a>
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
