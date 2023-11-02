@extends('layouts.admin')

<head> <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css"
        integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    .step-number-completado {
        width: 40px;
        height: 40px;
        background-color: #007bff;
        border: 2px solid #007bff;
        color: #fff;
        border-radius: 50%;
        font-size: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 20px;
    }

    .step-number-completado div {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        /* Make sure the child div fills the parent */
    }

    .step-number {
        width: 40px;
        height: 40px;
        background-color: #fff;
        border: 2px solid #007bff;
        color: #007bff;
        border-radius: 50%;
        font-size: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 20px;
    }

    .step-number div {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        /* Make sure the child div fills the parent */
    }

    .line {
        position: absolute;
        width: 34px;
        height: 1px;
        background-color: #7b7b7b;
        top: 25%;
        left: 80%;
        transform: translate(10%, 100%);
    }

    ul li p {
        min-width: 80px;
        max-width: 80px;
        /* Adjust the width to your preference */
        margin: 0 auto;
        /* Center the text within the defined width */
        overflow: hidden;
        /* Hide any overflowing text */
        text-overflow: ellipsis;
        /* Add an ellipsis (...) to indicate truncated text */
        white-space: nowrap;
        /* Prevent wrapping */
    }

    ul li {
        margin-right: 50px;
        /* Adjust the value to control the spacing */
    }

    .larger-icon {
        font-size: 2em;
        /* Adjust the font size as needed */
    }
</style>

@section('content')
    {{ Breadcrumbs::render('EV360-Evaluaciones-Create') }}

    <h5 class="col-12 titulo_general_funcion">Crear Evaluación</h5>

    {{-- <div class="container mt-12">
        <ul class="list-inline d-flex justify-content-center">
            <li class="list-inline-item me-2 text-center position-relative">
                <div class="step-number-completado mb-2">1</div>
                <p>Inicio</p>
                <div class="line"></div>
            </li>
            <li class="list-inline-item me-2 text-center position-relative">
                <div class="step-number mb-2">2</div>
                <p>Periodos</p>
                <div class="line"></div>
            </li>
            <li class="list-inline-item me-2 text-center position-relative">
                <div class="step-number mb-2">3</div>
                <p>Perspectiva</p>
                <div class="line"></div>
            </li>
            <li class="list-inline-item me-2 text-center position-relative">
                <div class="step-number mb-2">4</div>
                <p class="text-center">Público</p>
                <div class="line"></div>
            </li>
            <li class="list-inline-item me-2 text-center position-relative">
                <div class="step-number mb-2">5</div>
                <p>Reglas</p>
                <div class="line"></div>
            </li>
            <li class="list-inline-item me-2 text-center position-relative">
                <div class="step-number mb-2">6</div>
                <p>Evaluadores Objetivos</p>
                <div class="line"></div>
            </li>
            <li class="list-inline-item me-2 text-center">
                <div class="step-number mb-2">7</div>
                <p>Evaluadores Competencias</p>
            </li>
        </ul>
    </div> --}}

    @livewire('evaluaciones-steps-organizacion')
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
