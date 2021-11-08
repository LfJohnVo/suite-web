@extends('layouts.frontend')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('amenazas.index') }}">Amenaza</a>
        </li>
        <li class="breadcrumb-item active">Detalles</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Details</strong>
                            <a href="{{ route('amenazas.index') }}" class="btn btn-light">Volver</a>
                        </div>
                        <div class="card-body">
                            @include('frontend.amenazas.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
