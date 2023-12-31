@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} Categoría de los Activos
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.tipoactivos.index') }}">
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
                            Categoría
                        </th>
                        <td>
                            {{ $tipoactivo->tipo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Subcategoría
                        </th>
                        <td>
                            {{ $tipoactivo->subtipo }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.tipoactivos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
