@extends('layouts.admin')
@section('content')
    <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    {{ Breadcrumbs::render('expedientes-profesionales') }}

    <div class="mt-5 card">
        <div class="py-3 col-md-10 col-sm-9 card card-body bg-primary align-self-center " style="margin-top:-40px; ">
            <h3 class="mb-2 text-center text-white"><strong>Perfiles de Puestos</strong></h3>
        </div>

        <div class="card-body">
            @livewire('consulta-perfil-component', ['areas' => $areas,'isPersonal'=>false])
        </div>
    </div>
@endsection
