@extends('layouts.frontend')
@section('content')

    {{ Breadcrumbs::render('EV360-Evaluaciones-Create') }}

    {{-- <div class="mt-4 card">
        <div class="py-3 col-md-10 col-sm-9 card-body verde_silent align-self-center" style="margin-top: -40px;">
            <h3 class="mb-1 text-center text-white"><strong> Registrar: </strong> Evaluación </h3>
        </div>
        <div class="card-body">
            <form id="formGrupo" method="POST" action="{{ route('frontend.ev360-evaluaciones.store') }}"
                class="mt-3 row">
                @csrf
                @include('frontend.recursos-humanos.evaluacion-360.evaluaciones._form')
                <div class="d-flex justify-content-end w-100">
                    <a href="{{ redirect()->getUrlGenerator()->previous() }}" class="btn_cancelar">Cancelar</a>
                    <button type="submit" class="btn btn-danger">Guardar</button>
                </div>
            </form>
        </div>
    </div> --}}
    <div class="mt-4 card">
        <div class="py-3 col-md-10 col-sm-9 card-body verde_silent align-self-center" style="margin-top: -40px;">
            <h3 class="mb-1 text-center text-white"><strong> Registrar: </strong> Evaluación </h3>
        </div>
        <div class="row">
            <div class="col-12">
                @livewire('multi-step-form')
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
