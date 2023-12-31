@extends('layouts.frontend')
@section('content')

    {{-- {{ Breadcrumbs::render('frontend.alcance-sgsis.create') }} --}}

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.alcanceSgsi.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('alcance-sgsis.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.alcanceSgsi.fields.id') }}
                        </th>
                        <td>
                            {{ $alcanceSgsi->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.alcanceSgsi.fields.alcancesgsi') }}
                        </th>
                        <td>
                            {{ $alcanceSgsi->alcancesgsi }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('alcance-sgsis.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
