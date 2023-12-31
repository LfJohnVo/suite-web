@extends('layouts.frontend')
@section('content')




<div class="card mt-5">
  <div class="col-md-10 col-sm-9 py-3 card card-body bg-primary align-self-center " style="margin-top:-40px; ">
      <h3 class="mb-2  text-center text-white"><i class="fas fa-paper-plane" style="margin-right: 15px;"></i> <strong> Implementación de ISO 27001</strong></h3>
  </div>

    <div class="card-body">
    <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-fill" id="myTabJust" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab"
                           aria-controls="home-just"
                           aria-selected="true"><font class="letra_blanca">Introducción</font></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab"
                           aria-controls="profile-just"
                           aria-selected="false"><font class="letra_blanca">Guía
                            de Implementación</font></a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" id="plan-tab-just" data-toggle="tab" href="#plan-just" role="tab"
                           aria-controls="plan-just"
                           aria-selected="false"><font class="letra_blanca">Plan
                            de Trabajo Base</font></a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab-just" data-toggle="tab" href="#just" role="tab"
                           aria-controls="contact-just"
                           aria-selected="false"><font class="letra_blanca">Consultoría
                            en línea</font></a>
                    </li>
                </ul>

                <div class="tab-content card" id="myTabContentJust">

                    <div class="tab-pane fade show active" id="home-just" role="tabpanel" aria-labelledby="home-tab-just" style="margin-top: 30px; padding: 0 30px;">
                      
                        @include('frontend.implementacions.introduccion')
                    </div>



                    <div class="tab-pane fade" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just" style="margin-top: 30px;">
                       @include('frontend.implementacions.guia')
                    </div>

                    
                    
                    {{-- <div class="tab-pane fade" id="plan-just" role="tabpanel" aria-labelledby="plan-tab-just">
                         @include('frontend.implementacions.plantrabajo')
                    </div> --}}



                    <div class="tab-pane fade" id="just" role="tabpanel" aria-labelledby="contact-tab-just" style="margin-top: 30px;">
                        @include('frontend.implementacions.consultoria')
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
        
    const ejecutar = document.querySelector('#profile-tab-classic');
    ejecutar.addEventListener('click', () => {
        document.getElementById('profile-tab-just').classList.add('active');
        document.getElementById('profile-just').classList.add('active');
        document.getElementById('profile-just').classList.add('show');


        document.getElementById('home-tab-just').classList.remove('active');
        document.getElementById('home-just').classList.remove('active');
        document.getElementById('home-just').classList.remove('show');
    });
      
</script>

@endsection



