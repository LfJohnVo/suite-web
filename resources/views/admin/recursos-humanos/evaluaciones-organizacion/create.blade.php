@extends('layouts.admin')
@section('content')
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
