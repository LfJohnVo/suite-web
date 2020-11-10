@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.tipoactivo.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.tipoactivos.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.tipoactivo.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $tipoactivo->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.tipoactivo.fields.tipo') }}
                                    </th>
                                    <td>
                                        {{ $tipoactivo->tipo }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.tipoactivo.fields.subtipo') }}
                                    </th>
                                    <td>
                                        {{ $tipoactivo->subtipo }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.tipoactivos.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection