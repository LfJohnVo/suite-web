@extends('layouts.admin')
@section('content')


    <style>
        .titulo{
            text-align: left;
            font: normal normal 600 24px Segoe UI;
            letter-spacing: 0px;
            color: #2567AE;
            opacity: 1;
            margin-left: 5px;
            margin-bottom: 12px;
        }
    </style>

    @include('partials.flashMessages')

    <h5 class="titulo">Formulario</h5>

@endsection