@extends('layouts.admin')

@section('content')
    <ol class="breadcrumb">
        {{-- <li class="breadcrumb-item">
            <a href="{{ route('admin.amenazas.index') }}">Amenaza</a>
        </li>
        <li class="breadcrumb-item active">Detalles</li> --}}
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Calendario Oficial</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <a class="btn btn-default" href="{{ route('admin.calendario-oficial.index') }}">
                                    {{ trans('global.back_to_list') }}
                                </a>
                            </div>
                            @include('admin.calendario-oficial.show_fields')
                            <div class="form-group">
                                <a class="btn btn-default" href="{{ route('admin.calendario-oficial.index') }}">
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
