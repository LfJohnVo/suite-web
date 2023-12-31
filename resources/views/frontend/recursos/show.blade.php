@extends('layouts.admin')
@section('content')

    {{ Breadcrumbs::render('admin.recursos.create') }}

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.recurso.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.recursos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.recurso.fields.id') }}
                        </th>
                        <td>
                            {{ $recurso->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.recurso.fields.cursoscapacitaciones') }}
                        </th>
                        <td>
                            {{ $recurso->cursoscapacitaciones }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.recurso.fields.fecha_curso') }}
                        </th>
                        <td>
                            {{ $recurso->fecha_curso }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.recurso.fields.participantes') }}
                        </th>
                        <td>
                            @foreach($recurso->participantes as $key => $participantes)
                                <span class="label label-info">{{ $participantes->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.recurso.fields.instructor') }}
                        </th>
                        <td>
                            {{ $recurso->instructor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.recurso.fields.certificado') }}
                        </th>
                        <td>
                            @foreach($recurso->certificado as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.recursos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection