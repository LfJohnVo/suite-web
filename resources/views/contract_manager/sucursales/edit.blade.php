
@extends('layouts.admin')
@section('content')
<h5 class="col-12 titulo_general_funcion">Actualizar:  Razón Social</h5>
<div class="mt-4 card">
    <div class="card-body">
        <form method="POST" action="{{ route('contract_manager.sucursales.update', [$sucursales->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
          <div class="row">
            <div class="form-group col-md-6 col-sm-6">
                <label class="required" for="clave"><i class="fa-solid fa-key fa-lg"></i>&nbsp;&nbsp;Clave</label>
                <input  value="{{ old("clave", $sucursales->clave) }}" class="form-control  {{ $errors->has('clave') ? 'is-invalid' : '' }}" type="clave" name="clave" id="clave" value="{{ old('clave') }}" required>
                @if($errors->has('clave'))
                    <div class="invalid-feedback">
                        {{ $errors->first('clave') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div>
            <div class="form-group col-md-6 col-sm-6">
                <label class="required" for="descripcion"><i class="fa-solid fa-file-lines fa-lg"></i>&nbsp;&nbsp;Descripción</label>
                <input value="{{old("descripcion",  $sucursales->descripcion)}}"  class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}" type="descripcion" name="descripcion" id="descripcion" required>
                @if($errors->has('descripcion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('descripcion') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div>
            <div class="form-group col-md-6 col-sm-6">
                <label class="required" for="rfc"><i class="fa-solid fa-fingerprint fa-lg"></i>&nbsp;&nbsp;RFC</label>
                <input value="{{old("rfc",  $sucursales->rfc)}}"  class="form-control {{ $errors->has('rfc') ? 'is-invalid' : '' }}" type="rfc" name="rfc" id="rfc" required>
                @if($errors->has('rfc'))
                    <div class="invalid-feedback">
                        {{ $errors->first('rfc') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div>
            <div class="form-group col-md-6 col-sm-6">
                <label class="required" for="empresa"><i class="fa-solid fa-building-ngo fa-lg"></i>&nbsp;&nbsp;Empresa</label>
                <input value="{{old("empresa",  $sucursales->empresa)}}"  class="form-control {{ $errors->has('empresa') ? 'is-invalid' : '' }}" type="empresa" name="empresa" id="empresa" required>
                @if($errors->has('empresa'))
                    <div class="invalid-feedback">
                        {{ $errors->first('empresa') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div>
            <div class="form-group col-md-6 col-sm-6">
                <label class="required" for="cuenta_contable"><i class="fa-solid fa-calculator fa-lg"></i>&nbsp;&nbsp;Cuenta Contable</label>
                <input value="{{old("cuenta_contable",  $sucursales->cuenta_contable)}}"  class="form-control {{ $errors->has('cuenta_contable') ? 'is-invalid' : '' }}" type="cuenta_contable" name="cuenta_contable" id="cuenta_contable" required>
                @if($errors->has('cuenta_contable'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cuenta_contable') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div>
            <div class="form-group col-md-6 col-sm-6">
                <label class="required" for="zona"><i class="fa-solid fa-location-arrow fa-lg"></i>&nbsp;&nbsp;Zona</label>
                <input value="{{old("zona",  $sucursales->zona)}}"  class="form-control {{ $errors->has('zona') ? 'is-invalid' : '' }}" type="zona" name="zona" id="zona" required>
                @if($errors->has('zona'))
                    <div class="invalid-feedback">
                        {{ $errors->first('zona') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div>
            <div class="form-group col-md-6 col-sm-6">
                <label class="required" for="direccion"><i class="fa-regular fa-address-book fa-lg"></i>&nbsp;&nbsp;Dirección</label>
                <input value="{{old("direccion",  $sucursales->direccion)}}"  class="form-control {{ $errors->has('direccion') ? 'is-invalid' : '' }}" type="direccion" name="direccion" id="direccion" required>
                @if($errors->has('direccion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('direccion') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div>
            <div class="col s12 l6 distancia">
                <label for="myfile">Selecciona el logotipo: <font class="asterisco">*</font></label>
                <input type="file" id="myfile" class="form-control" name="mylogo" required  accept="image/png,image/jpeg"  >
                @if ($errors->has('mylogo'))
                    <div class="invalid-feedback red-text">
                        {{ $errors->first('mylogo') }}
                    </div>
                @endif

            </div>
          </div>

            <div class="text-right form-group col-12" style="margin-left:15px;">
                <a href="{{ redirect()->getUrlGenerator()->previous() }}" class="btn_cancelar">Cancelar</a>
                <button class="btn btn-danger" type="submit">
                    Actualizar
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
@section('scripts')
<script>
        $(document).ready(function() {
        $("#roles").select2({
            theme: "bootstrap4",
        });
    });
</script>
@endsection