@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.rolesResponsabilidade.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.roles-responsabilidades.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="responsabilidad">{{ trans('cruds.rolesResponsabilidade.fields.responsabilidad') }}</label>
                            <input class="form-control" type="text" name="responsabilidad" id="responsabilidad" value="{{ old('responsabilidad', '') }}" required>
                            @if($errors->has('responsabilidad'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('responsabilidad') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.rolesResponsabilidade.fields.responsabilidad_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="direccionsgsi">{{ trans('cruds.rolesResponsabilidade.fields.direccionsgsi') }}</label>
                            <input class="form-control" type="text" name="direccionsgsi" id="direccionsgsi" value="{{ old('direccionsgsi', '') }}" required>
                            @if($errors->has('direccionsgsi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('direccionsgsi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.rolesResponsabilidade.fields.direccionsgsi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="comiteseguridad">{{ trans('cruds.rolesResponsabilidade.fields.comiteseguridad') }}</label>
                            <input class="form-control" type="text" name="comiteseguridad" id="comiteseguridad" value="{{ old('comiteseguridad', '') }}">
                            @if($errors->has('comiteseguridad'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('comiteseguridad') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.rolesResponsabilidade.fields.comiteseguridad_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="responsablesgsi">{{ trans('cruds.rolesResponsabilidade.fields.responsablesgsi') }}</label>
                            <input class="form-control" type="text" name="responsablesgsi" id="responsablesgsi" value="{{ old('responsablesgsi', '') }}">
                            @if($errors->has('responsablesgsi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('responsablesgsi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.rolesResponsabilidade.fields.responsablesgsi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="coordinadorsgsi">{{ trans('cruds.rolesResponsabilidade.fields.coordinadorsgsi') }}</label>
                            <input class="form-control" type="text" name="coordinadorsgsi" id="coordinadorsgsi" value="{{ old('coordinadorsgsi', '') }}">
                            @if($errors->has('coordinadorsgsi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('coordinadorsgsi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.rolesResponsabilidade.fields.coordinadorsgsi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="rol">{{ trans('cruds.rolesResponsabilidade.fields.rol') }}</label>
                            <input class="form-control" type="text" name="rol" id="rol" value="{{ old('rol', '') }}">
                            @if($errors->has('rol'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('rol') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.rolesResponsabilidade.fields.rol_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection