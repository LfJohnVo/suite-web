@extends('layouts.admin')
@section('content')
    <h5 class="col-12 titulo_general_funcion">Bitácora de Visitantes</h5>
    <div class="card rounded">
        <div class="card-body">

            @livewire('visitantes.bitacora-accesos')
        </div>
        <div class="row p-4 print-none">
            <div class="col-12" style="text-align: end">
                <a href="{{ route('admin.visitantes.menu') }}" class="btn btn-success">Regresar</a>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
@endsection
