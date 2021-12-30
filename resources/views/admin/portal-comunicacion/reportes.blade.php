@extends('layouts.admin')
@section('content')
	
	@section('styles')
		<style type="text/css">
			.caja_titulo{
				position: relative;
				width: 100%;
				height: 150px;
			}
			.logo_organizacion_politica{
				height: 150px;
				position: absolute;
				right: 50px;
				bottom: 0;
			}
			.caja_titulo h1{
				position: absolute;
				width: 300px;
				font-weight: bold;
				color: #00abb2;
				bottom: 0;
			}

@section('styles')
    <style type="text/css">

        .logo_organizacion_politica {
            width: 60%;
            float: right;
            margin-right: 20%;
        }

			.cards_reportes{
		        width: 250px;
		        padding: 20px 0px;
		        padding-left: 30px;
		        border: 1px solid #ccc;
		        border-radius: 5px;
		        text-align: left;
		        display:inline-block;
		        margin: 10px;
		        cursor: pointer;
		        color: #888888;
		    }
		    .cards_reportes i{
		        font-size: 16pt;
		        margin-right: 10px;
		    }
		    .cards_reportes:hover{
		        color: #00abb2;
		        border: 1px solid #00abb2;
		    }
		</style>
	@endsection
	{{ Breadcrumbs::render('admin.portal-comunicacion.reportes') }}
	<div class="card card-body" style="margin-top: -50PX;">
		<div class="row" style="border-bottom: 2px solid #ccc;">
			<div class="col-12 caja_titulo">
				<h1>Generar Reporte</h1>

        .a_reporte{
            display: inline-block !important;
            background-color: #001B44;
            color: #fff;
            margin-top:120px;
            text-align: center;
            transition: 0.1s;
            position: relative;
            padding-bottom: 60px;
        }
        .a_reporte:hover{
            color: #fff;
            text-decoration: none;
            opacity: 0.9;
        }
        .a_reporte:before{
            content: "";
            position: absolute;
            right: 0;
            width: 1px;
            height: 70%;
            top: 15%;
            background-color: #fff;
            opacity: 0.8;
        }
        .a_reporte i{
            width: 100px;
            height: 100px;
            margin: auto;
            margin-top: -50px;
            background-color: #00abb2;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 100px;
            font-size: 30pt;
            transition: 0.1s;
        }
        .a_reporte:hover i{
            font-size: 40pt;
        }
        .a_reporte h4{
            margin-top: 15px;
            font-weight: bold;
        }
        .a_reporte p{
            text-align: justify;
            font-size: 9pt;
        }
        .btn_g_r{
            position: absolute;
            right: calc(50% - 69px);
            bottom: 15px;
        }


    </style>
@endsection
{{ Breadcrumbs::render('admin.portal-comunicacion.reportes') }}

<div class="card">

    <div class="py-3 col-md-10 col-sm-9 card card-body bg-primary align-self-center " style="margin-top:-40px; ">
        <h3 class="mb-2 text-center text-white"><strong>Generar Reportes</strong></h3>
    </div>
    <div class=" card-body">
        <div class="row">

            <div class="col-md-12">
                <div class="px-1 py-2 rounded" style="background-color: #DBEAFE; border-top:solid 3px #3B82F6; margin: auto;">
                    <div class="row w-100">
                        <div class="text-center col-1 align-items-center d-flex justify-content-center">
                            <div class="w-100">
                                <i class="fas fa-info-circle" style="color: #3B82F6; font-size: 22px"></i>
                            </div>
                        </div>
                        <div class="col-11">
                            <p class="m-0" style="font-size: 16px; font-weight: bold; color: #1E3A8A">Instrucciones</p>
                            <p class="m-0" style="font-size: 14px; color:#1E3A8A; text-align: justify; ">Esta sección es un canal de comunicación para que los colaboradores de la organización puedan
                            reportarnos un incidente de seguridad, un riesgo identificado o compartirnos sus sugerencias, quejas o denuncias.
                            {{-- cuando se tengan ideas de mejora, se identifiquen casos que estén fuera de lo indicado en el manual de conducta y
                            código de ética, o bien, fuera de los valores de la Organización. --}}
                            </p>

                        </div>
                    </div>
                </div>
            </div>

             {{-- <div class="col-md-3 caja_titulo">
                @php
                    use App\Models\Organizacion;
                    $organizacion = Organizacion::first();
                    $logotipo = $organizacion->logotipo;
                @endphp
                <img src="{{ asset($logotipo) }}" class="logo_organizacion_politica">

            </div> --}}
            <div style="margin: auto; text-align: center; margin-top: -40px !important;" class="col-12 row mt-4 justify-content-center">


                <a href="{{ asset('admin/inicioUsuario/reportes/sugerencias') }}" class="a_reporte col-center col-lg-4 col-md-4 col-sm-12">
                    <i class="fas fa-lightbulb"></i>
                    <h4>Sugerencia</h4>
                    <p>
                        Si quieres aportar alguna idea o
                        propuesta para la Organización o área en
                        particular, ¡Te escuchamos!
                    </p>
                    <p>
                        Una sugerencia es un planteamiento,
                        idea o recomendación que se presenta
                        con el objetivo de proponer una o
                        más acciones.

                    </p>
                    <p>
                        Las sugerencias se canalizarán a las áreas correspondientes.
                    </p>
                    <div href="" class="btn btn-success btn_g_r">Generar Reporte</div>
                </a>
                <a href="{{ asset('admin/inicioUsuario/reportes/mejoras') }}" class="a_reporte col-center col-lg-4 col-md-4 col-sm-12">
                    <i class="fas fa-rocket"></i>
                    <h4>Mejora</h4>
                    <p>
                        Puedes proponer mejoras en los
                        procesos y servicios actuales de la organización, para lo
                        cual se establecen las siguientes
                        categorías de mejora:
                    </p>
                    <p>
                        Mejoras Estratégicas: Son aquellas
                        mejoras que impactan directamente a
                        las estrategias y objetivos del negocio.
                        Mejoras de Procesos: Son aquellas
                        mejoras donde su impacto se ve
                        reflejado en los procesos de la
                        organización.
                        Mejoras Operativas: Son aquellas
                        mejoras donde su impacto se ve
                        reflejado en la operación del día a día.
                    </p>
                    <div href="" class="btn btn-success btn_g_r">Generar Reporte</div>
                </a>
                <a href="{{ asset('admin/inicioUsuario/reportes/quejas') }}" class="a_reporte col-center col-lg-4 col-md-4 col-sm-12">
                    <i class="fas fa-frown"></i>
                    <h4>Queja</h4>
                    <p>
                        Podrás levantar una queja cuando exista cualquier tipo de
                        reclamación generada por
                        descontentos o disgustos por alguna
                        situación vivida dentro de la organización
                        y que se considere injusta.
                        Normalmente se incumple con algún
                        punto del Código de Conducta y Ética
                        de la organización y/o del Manual de
                        Políticas.
                    </p>
                    <div href="" class="btn btn-success btn_g_r">Generar Reporte</div>
                </a>
                <a href="{{ asset('admin/inicioUsuario/reportes/denuncias') }}" class="a_reporte col-center col-lg-4 col-md-4 col-sm-12">
                    <i class="fas fa-hand-paper"></i>
                    <h4>Denuncia</h4>
                    <p>
                        Podrás levantar una denuncia cuando desees hacer una acusación
                        en contra de un colaborador de
                        la organización. Se dará seguimiento
                        específico y se tomarán las acciones pertinentes según sea el caso
                        pudiendo llegar hasta la terminación del
                        contrato y cuando se considere
                        necesario se elevara a las autoridades
                        competentes.
                    </p>
                    <p>
                        Podrás externar temas sensibles los
                        cuales serán tratados con extricta
                        confidencialidad. Son casos graves
                        que no se podrán dejar pasar por
                        ninguna circunstancia.

                    </p>
                    <div href="" class="btn btn-success btn_g_r">Generar Reporte</div>
                </a>
                <a href="{{ asset('admin/inicioUsuario/reportes/seguridad') }}" class="a_reporte col-center col-lg-4 col-md-4 col-sm-12">
                    <i class="fas fa-exclamation-triangle"></i>
                    <h4>Incidente de Seguridad</h4>
                    <p>
                        Aquí podrás reportar un incidente de
                        seguridad de la información el cual
                        podría ser un intento de acceso, uso,
                        divulgación, modificación o
                        destrucción no autorizada de
                        información; un impedimento en la
                        operación normal de las redes,
                        sistemas o recursos informáticos; o
                        una violación a una Política de
                        Seguridad de la Información de la
                        Organización. La notificación de los
                        incidentes permite responder de
                        forma sistemática, minimizar su
                        ocurrencia e impacto y facilitar una
                        recuperación rápida y eficiente de
                        las actividades minimizando la pérdida
                        de información y la interrupción de los
                        Servicios.
                    </p>
                    <div href="" class="btn btn-success btn_g_r">Generar Reporte</div>
                </a>
                <a href="{{ asset('admin/inicioUsuario/reportes/riesgos') }}" class="a_reporte col-center col-lg-4 col-md-4 col-sm-12">
                   <i class="fas fa-shield-virus"></i>
                    <h4>Riesgo</h4>
                    <p>
                        Aquí podrás reportar un riesgo en caso de presentarse un evento que
                        pueda afectar los objetivos de la
                        organización o que ponga en peligro la
                        integridad física de los colaboradores.
                    </p>
                    <div href="" class="btn btn-success btn_g_r">Generar Reporte</div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
