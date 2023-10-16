@extends('layouts.admin')
@section('content')
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap 5 JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    {{ Breadcrumbs::render('EV360-Evaluaciones-Create') }}

    <h5 class="col-12 titulo_general_funcion">Crear Evaluación</h5>


    <div class="row">
        <div class="col-12">
            @livewire('evaluaciones-steps-organizacion')
        </div>
    </div>
@endsection

@section('scripts')
@endsection
