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
@section('content')
    <!-- Bootstrap 5 JS CDN -->

    <style>
        .step-number-activo {
            width: 40px;
            height: 40px;
            background-color: #007bff;
            color: #fff;
            border-radius: 50%;
            border-color: #007bff;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .step-number {
            width: 40px;
            height: 40px;
            background-color: #fff;
            color: #007bff;
            border-radius: 50%;
            border-color: #007bff;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    {{ Breadcrumbs::render('EV360-Evaluaciones-Create') }}

    <h5 class="col-12 titulo_general_funcion">Crear Evaluación</h5>

    <div class="container mt-5">
        <ul class="list-inline d-flex justify-content-center">
            <li class="list-inline-item me-3 text-center">
                <div class="step-number-activo mb-2">1</div>
                <h4>Step 1</h4>
            </li>
            <li class="list-inline-item me-3 text-center">
                <div class="step-number mb-2">2</div>
                <h4>Step 2</h4>
            </li>
            <li class="list-inline-item text-center">
                <div class="step-number mb-2">3</div>
                <h4>Step 3</h4>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-12">
            @livewire('evaluaciones-steps-organizacion')
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
