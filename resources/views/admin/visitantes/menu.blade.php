@extends('layouts.admin')
@section('content')
    {{-- menus horizontales --}}
    <style type="text/css">
        .caja_botones_menu {
            display: flex;
        }

        .caja_botones_menu a {
            width: 33.33%;
            text-decoration: none;
            display: inline-block;
            color: #345183;
            padding: 5px 0px;
            border-top: 1px solid #ccc !important;
            border-right: 1px solid #ccc;
            background-color: #f9f9f9;
            margin: 0;
            text-align: center;
            align-items: center;
        }

        .caja_botones_menu a:first-child {
            border-left: 1px solid #ccc;
        }

        .caja_botones_menu a:not(.caja_botones_menu a.btn_activo) {
            border-bottom: 1px solid #ccc;
        }

        .caja_botones_menu a i {
            margin-right: 7px;
            font-size: 15pt;
        }

        .caja_botones_menu a.btn_activo,
        .caja_botones_menu a.btn_activo:hover {
            background-color: #fff;
        }

        .caja_botones_menu a:hover {
            background-color: #f1f1f1;
        }

        .caja_caja_secciones {
            width: 100%;
        }

        .caja_secciones {
            width: 100%;
            display: flex;
        }

        .caja_secciones section {
            width: 0px;
            overflow: hidden;
            transition: 0.4s;
            opacity: 0;
        }

        .caja_tab_reveldada {
            width: 100% !important;
            overflow: none;
            opacity: 1 !important;
        }



        .seccion_div {
            overflow: hidden;
            width: 990px;
        }

        .caja_tab_reveldada .seccion_div {
            overflow: hidden;
            transition-delay: 0.5s;
            width: 100%;
        }
    </style>
    <style type="text/css">
        div.nav .nav-link {
            color: #345183;
        }

        .nav-tabs .nav-link.active {
            border-top: 2px solid #345183;
        }

        div.tab-pane ul {
            padding: 0;
            margin: 0;
            text-align: center;
        }

        div.tab-pane li {
            list-style: none;
            width: 150px;
            height: 150px;
            box-sizing: border-box;
            position: relative;
            margin: 10px;
            display: inline-block;
        }

        div.tab-pane li i {
            font-size: 30pt;
            margin-bottom: 10px;
            width: 100%;
        }

        div.tab-pane a {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #eee;
            color: #345183;
            border-radius: 6px;
            box-shadow: 0px 2px 3px 1px rgba(0, 0, 0, 0.2);
            transition: 0.1s;
            padding: 7px;
        }

        div.tab-pane a:hover {
            text-decoration: none !important;
            color: #345183;
            border: 1px solid #345183;
            box-shadow: 0px 2px 3px 1px rgba(0, 0, 0, 0.0);
            background-color: #fff;
        }

        a:hover {
            text-decoration: none !important;
        }



        @media(max-width: 648px) {
            .caja_secciones {
                min-height: 1000px;
            }
        }

        @media(max-width: 474px) {
            .caja_secciones {
                min-height: 2000px;
            }
        }

        .tabs {
            outline: none;
        }
    </style>
    <style>
        .ventana_menu {
            width: calc(100% - 40px);
            background-color: #fff;
            position: absolute;
            margin: auto;
            display: none;
            top: 10px;
            z-index: 3;
            height: calc(100% - 40px);

        }


        .btn_modal_video {
            width: 160px !important;
            transform: scale(0.7);
            position: absolute;
            right: 0;
            margin-top: -35px;
        }
    </style>
    <div class="modal fade" id="modal_guia_general" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="margin-top:150px;">
            <div class="modal-content"
                style="background-color: #1C274A; position:relative; min-width: 600px; width: 90% !important; border:1px solid rgba(255, 255, 255, 0.3);">
                <div class="text-right p-3" data-dismiss="modal" style="font-size: 20px; color:#fff; cursor: pointer;"><i
                        class="fas fa-times"></i></div>
                <div class="modal-body">
                    <video src="{{ asset('img/videos_guia/guia_general.mp4') }}" controls style="width:100%;"></video>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 card">
        <div class="card-body">
            <nav>
                <div class="nav nav-tabs" id="tabsIso27001" role="tablist">
                    <a class="nav-link active" id="nav-visitantes-tab" data-type="visitantes" data-toggle="tab"
                        href="#nav-visitantes" role="tab" aria-controls="nav-visitantes" aria-selected="true">
                        <i class="bi bi-body-text"></i>
                        Visitantes
                    </a>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane mb-4 fade show active" id="nav-visitantes" role="tabpanel"
                    aria-labelledby="nav-visitantes-tab">
                    <ul class="mt-4">
                        <li><a href="{{ route('admin.visitantes.aviso-privacidad.index') }}">
                                <div>
                                    <i class="bi bi-file-earmark-lock"></i><br>
                                    Aviso de Privacidad
                                </div>
                            </a></li>
                        <li><a href="{{ route('admin.visitantes.cita-textual.index') }}">
                                <div>
                                    <i class="bi bi-quote"></i><br>
                                    Cita Textual
                                </div>
                            </a></li>
                        <li><a href="{{ route('admin.visitantes.index') }}">
                                <div>
                                    <i class="bi bi-people"></i><br>
                                    Visitantes
                                </div>
                            </a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection
