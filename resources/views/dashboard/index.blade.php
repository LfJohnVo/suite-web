@extends('layouts.admin')
@section('content')

{{ Breadcrumbs::render('admin.analisis-brechas.index') }}
    <div class="content">
        <div class="row">
            <div class="col-lg-12">

                <div class="mt-5 card">
                    <div class="py-3 col-md-10 col-sm-9 card card-body bg-primary align-self-center "
                         style="margin-top:-40px; ">
                        <h3 class="mb-2 text-center text-white"><strong>Análisis de Brechas ISO 27001</strong></h3>
                    </div>

                    <div class="card-body">
                        @if(session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="container">

                            <div class="row">
                                <div class="col">
                                    <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                               role="tab" aria-controls="home" aria-selected="true">INTRODUCCIÓN</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#gapuno"
                                               role="tab" aria-controls="gapuno" aria-selected="false">GAP 01</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#gapdos"
                                               role="tab" aria-controls="gapdos" aria-selected="false">GAP 02</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#gaptres"
                                               role="tab" aria-controls="gaptres" aria-selected="false">GAP03</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#dashboard"
                                               role="tab" aria-controls="dashboard" aria-selected="false">DASHBOARD</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                             aria-labelledby="home-tab">
                                            <!--introduccion-->
                                        @include('dashboard.introduccion')
                                        <!--introduccion-->
                                        </div>
                                        <div class="tab-pane fade" id="gapuno" role="tabpanel"
                                             aria-labelledby="profile-tab">
                                            <div class="container">
                                                <!--gap uno-->
                                            @include('dashboard.gapuno')
                                            <!--gap uno-->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="gapdos" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            <div class="container">
                                                <!--gap dos -->
                                            @include('dashboard.gapdos')
                                            <!--gap dos -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="gaptres" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            <div class="container">
                                                <!--gap tres-->
                                            @include('dashboard.gaptres')
                                            <!--gap tres -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="dashboard" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            @include('dashboard.tablero')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<script>

    const ejecutar = document.querySelector('#btn_ejecutar');
    ejecutar.addEventListener('click', () => {
        document.getElementById('profile-tab').classList.add('active');
        document.getElementById('gapuno').classList.add('active');
        document.getElementById('gapuno').classList.add('show');


        document.getElementById('home-tab').classList.remove('active');
        document.getElementById('home').classList.remove('active');
        document.getElementById('home').classList.remove('show');
    });
</script>

@endsection

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="https://unpkg.com/gauge-chart@latest/dist/bundle.js"></script>
<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>


