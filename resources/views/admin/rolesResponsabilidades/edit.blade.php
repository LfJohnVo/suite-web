@extends('layouts.admin')
@section('content')

<div class="card mt-4">
    <div class="col-md-10 col-sm-9 py-3 card-body azul_silent align-self-center" style="margin-top: -40px;">
         <h3 class="mb-1  text-center text-white"><strong> Editar: </strong> Roles y Responsabilidades</h3>
    </div>

    <div class="card-body">
        <form method="POST" class="row" action="{{ route("admin.roles-responsabilidades.update", [$rolesResponsabilidade->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group col-md-6">
                <label class="required" for="responsabilidad"><i class="fas fa-user-tag iconos-crear"></i>{{ trans('cruds.rolesResponsabilidade.fields.responsabilidad') }}</label>
                <input class="form-control {{ $errors->has('responsabilidad') ? 'is-invalid' : '' }}" type="text" name="responsabilidad" id="responsabilidad" value="{{ old('responsabilidad', $rolesResponsabilidade->responsabilidad) }}" required>
                @if($errors->has('responsabilidad'))
                    <div class="invalid-feedback">
                        {{ $errors->first('responsabilidad') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.rolesResponsabilidade.fields.responsabilidad_helper') }}</span>
            </div>
           <div class="form-group col-md-6">
                <label class="required" for="direccionsgsi"><i class="far fa-compass iconos-crear"></i>{{ trans('cruds.rolesResponsabilidade.fields.direccionsgsi') }}</label>
                <input class="form-control {{ $errors->has('direccionsgsi') ? 'is-invalid' : '' }}" type="text" name="direccionsgsi" id="direccionsgsi" value="{{ old('direccionsgsi', $rolesResponsabilidade->direccionsgsi) }}" required>
                @if($errors->has('direccionsgsi'))
                    <div class="invalid-feedback">
                        {{ $errors->first('direccionsgsi') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.rolesResponsabilidade.fields.direccionsgsi_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label for="comiteseguridad"><i class="fas fa-users iconos-crear"></i>{{ trans('cruds.rolesResponsabilidade.fields.comiteseguridad') }}</label>
                <input class="form-control {{ $errors->has('comiteseguridad') ? 'is-invalid' : '' }}" type="text" name="comiteseguridad" id="comiteseguridad" value="{{ old('comiteseguridad', $rolesResponsabilidade->comiteseguridad) }}">
                @if($errors->has('comiteseguridad'))
                    <div class="invalid-feedback">
                        {{ $errors->first('comiteseguridad') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.rolesResponsabilidade.fields.comiteseguridad_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label for="responsablesgsi"><i class="fas fa-user-tag iconos-crear"></i>{{ trans('cruds.rolesResponsabilidade.fields.responsablesgsi') }}</label>
                <input class="form-control {{ $errors->has('responsablesgsi') ? 'is-invalid' : '' }}" type="text" name="responsablesgsi" id="responsablesgsi" value="{{ old('responsablesgsi', $rolesResponsabilidade->responsablesgsi) }}">
                @if($errors->has('responsablesgsi'))
                    <div class="invalid-feedback">
                        {{ $errors->first('responsablesgsi') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.rolesResponsabilidade.fields.responsablesgsi_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label for="coordinadorsgsi"><i class="fas fa-user-tie iconos-crear"></i>{{ trans('cruds.rolesResponsabilidade.fields.coordinadorsgsi') }}</label>
                <input class="form-control {{ $errors->has('coordinadorsgsi') ? 'is-invalid' : '' }}" type="text" name="coordinadorsgsi" id="coordinadorsgsi" value="{{ old('coordinadorsgsi', $rolesResponsabilidade->coordinadorsgsi) }}">
                @if($errors->has('coordinadorsgsi'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coordinadorsgsi') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.rolesResponsabilidade.fields.coordinadorsgsi_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label for="rol"><i class="fas fa-user-tag iconos-crear"></i>{{ trans('cruds.rolesResponsabilidade.fields.rol') }}</label>
                <input class="form-control {{ $errors->has('rol') ? 'is-invalid' : '' }}" type="text" name="rol" id="rol" value="{{ old('rol', $rolesResponsabilidade->rol) }}">
                @if($errors->has('rol'))
                    <div class="invalid-feedback">
                        {{ $errors->first('rol') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.rolesResponsabilidade.fields.rol_helper') }}</span>
            </div>
            <div class="form-group col-12 text-right">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection