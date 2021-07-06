@extends('layouts.admin')
@section('content')

<style>
.menulogin{
	width: 40%;
	height: 300px;
	position: fixed;
	z-index: 30;
	top: 160px;
	left:35%;
	background-color:#ffff;
	background-color:rgba(255,255,255,0.9);
	border-radius: 20px;    /* redondear bordes (esquinas)*/
	box-shadow: 3px 3px 3px #707070; /*sombra del elemento-desplazamiento x-desplazamiento y-desenfoque-color*/

}

.btnCerrar{
	width: 25px;
	height:25px;
	color:#ffffff;
	font-size:13pt;
	background-color:#707070;1;
	text-align: center;
	line-height: 1.5;
	float:right;
	margin-right: 30px;
	margin-top:10px;
	cursor: pointer;

}

</style>


    <div class="mt-5 card">

        <div class="py-3 col-md-10 col-sm-9 card card-body bg-primary align-self-center " style="margin-top:-40px; ">
            <h3 class="mb-2 text-center text-white"><strong>Áreas</strong></h3>
        </div>








        @if ($numero_grupos > 0)

            <div class="row justify-content-center">
                @foreach ($grupos as $grupo)
                     <div class="col-10">
                        <div class="mt-3 card justify-content-center" style="box-shadow: 0px 0px 0px 2px rgb(163, 163, 163);">
                            <div class="row justify-content-center">
                                <div class="col-3 card justify-content-center" style="margin-top:-18px; background-color:{{$grupo->color}}!important">
                                    <p class="text-center text-dark">{{$grupo->nombre}}</p>
                                </div>
                            </div>

                            <div class="container">
                                <div class="row justify-content-center">
                                    @foreach($grupo->areas as $area)
                                    <div class="mb-3 ml-2 mr-2 bg-white rounded shadow-sm col-3 sesioninicio" style="height:40px;" onclick="renderModal(this,'{{$area->area}}', '{{$area->descripcion}}', '{{$grupo->color}}')">
                                   <p class="text-center" style="cursor:pointer"> {{$area->area}} </p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                         </div>

                         <div class="menulogin d-none">
                            <div class="btnCerrar">X</div>
                            <div class="row justify-content-center">
                                <div class="ml-5 col-10 card justify-content-center" style="margin-top:60px; background-color:{{$grupo->color}}!important">
                                    <p class="text-center text-dark"> {{$area->area}} </p>
                                </div>

                            </div>
                            <p class="text-center" style="margin-top:20px;">{{$area->descripcion}}</p>

                        </div>

                    </div>
                @endforeach
            </div>


        @else

            <div class="px-1 py-2 mx-3 rounded shadow" style="background-color: #DBEAFE; border-top:solid 3px #3B82F6;">

                <div class="row w-100">
                    <div class="text-center col-1 align-items-center d-flex justify-content-center">
                        <div class="w-100">
                            <i class="fas fa-info-circle" style="color: #3B82F6; font-size: 22px"></i>
                        </div>
                    </div>
                    <div class="col-11">
                        <p class="m-0" style="font-size: 16px; font-weight: bold; color: #1E3A8A">Atención</p>
                        <p class="m-0" style="font-size: 14px; color:#1E3A8A ">Aún no se han agregado áreas a la
                            organización
                            <a href="{{ route('admin.sedes.create') }}"><i class="fas fa-share"></i></a>
                        </p>
                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-center">
                <img src="{{ asset('img/areas.jpg') }}" class="mt-3"
                    style="height: 400px;">
            </div>
        @endif




    </div>





@endsection


@section('scripts')

<script>


    //  $(".sesioninicio").click(function(){
	// 		$(".menulogin").toggleClass("d-none d-block");

	// 	});

    //     $(".btnCerrar").click(function(){
	// 		$(".menulogin").toggleClass( "d-none d-block");

	// 	});

        function renderModal(element,nombre,descripcion,color){
            element.style.border=`2px solid ${color!=null?color:"black"}`;

            let contenedor=document.querySelector(".menulogin");
            contenedor.classList.remove("d-none")
            contenedor.classList.add("d-block")
            contenedor.innerHTML=`
            <div class="btnCerrar">X</div>
                            <div class="row justify-content-center">
                                <div class="ml-5 col-10 card justify-content-center" style="margin-top:60px; background-color:{{$grupo->color}}!important">
                                    <p class="text-center text-dark"> ${nombre} </p>
                                </div>

                            </div>
                            <p class="text-center" style="margin-top:20px;">${descripcion}</p>
                            `;
            let btnCerrar=document.querySelector(".btnCerrar");
            btnCerrar.addEventListener("click",function(e){
                e.preventDefault();
                element.style.border="none";
                contenedor.classList.remove("d-block")
                contenedor.classList.add("d-none")
            });

        }


</script>

@endsection

