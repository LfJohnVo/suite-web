@extends('layouts.admin')
@section('content')

<div class="card mt-4">
    <div class="col-md-10 col-sm-9 py-3 card-body verde_silent align-self-center" style="margin-top: -40px;">
        <h3 class="mb-1  text-center text-white"><strong> Registrar: </strong> Acción Correctiva </h3>
    </div>
    @include('layouts.errors')
    @include('flash::message')
    <div class="card-body">
        <div class="container">
            <div class="row">

                <div class="col-md-12 mt-5">
                <button id="acollapseExample" data-toggle="collapse" onclick="closetabcollap1()" data-target="#collapseExample" class="btn btn-danger">Acción Correctiva</button>
                <button id="acollapseplan" data-toggle="collapse" onclick="closetabcollap2()" data-target="#collapseplan" class="btn btn-primary">Análisis de causa raíz</button>
                <button id="acollapseactividad" data-toggle="collapse" onclick="" data-target="#" class="btn btn-primary">Plan de acción</button>
           
                    </p>
                    <div class="collapse show" id="collapseExample">
                        <div class="card card-body">
                            <div id="test-nl-1" class="content">
                            @include('admin.accionCorrectivas.createform1')

                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="collapseplan">
                        <div class="card card-body">
                        @include('admin.accionCorrectivas.createform2')
                        </div>
                    </div>
                    <div class="collapse" id="collapseactividad">
                        <div class="card card-body">
                          


                            <button id="botonNext" class="btn btn-primary" onclick="stepper2.next()">Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>



</div>

@endsection

@section('scripts')
<script>



$("#acollapseExample").click(function(){
  
  $("#acollapseExample").removeClass('btn btn-primary').addClass("btn btn-danger");
  $("#acollapseplan").removeClass('btn btn-danger').addClass("btn btn-primary");
});

$("#acollapseplan").click(function(){
    $("#acollapseExample").removeClass('btn btn-danger').addClass("btn btn-primary");
  $(this).toggleClass("btn btn-danger");
  $("#acollapseplan").removeClass('btn btn-primary').addClass("btn btn-danger");
});
$("#form-siguienteaccion").click(function(){
    $("#acollapseExample").removeClass('btn btn-danger').addClass("btn btn-primary");
  $("#acollapseplan").removeClass('btn btn-primary').addClass("btn btn-danger");
});



    function closetabcollap1() {
        $('#collapseExample').collapse('show');
        $('#collapseplan').collapse('hide');
        $('#collapseactividad').collapse('hide');
    }

    function closetabcollap1next() {
        $('#collapseExample').collapse('hide');
        $('#collapseplan').collapse('show');
        $('#collapseactividad').collapse('hide');
    }

    function closetabcollap2() {
        $('#collapseExample').collapse('hide');
        $('#collapseplan').collapse('show');
        $('#collapseactividad').collapse('hide');
    }

    function closetabcollap3() {
        $('#collapseExample').collapse('hide');
        $('#collapseplan').collapse('hide');
        $('#collapseactividad').collapse('show');
    }
</script>
@endsection