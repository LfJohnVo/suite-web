@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.implementacion.title') }}
    </div>

    <div class="card-body">
    <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-fill" id="myTabJust" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab"
                           aria-controls="home-just"
                           aria-selected="true">Introducción</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab"
                           aria-controls="profile-just"
                           aria-selected="false">Guía
                            de Implementación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab-just" data-toggle="tab" href="#contact-just" role="tab"
                           aria-controls="contact-just"
                           aria-selected="false">Plan
                            de Trabajo Base</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab-just" data-toggle="tab" href="#just" role="tab"
                           aria-controls="contact-just"
                           aria-selected="false">Consultoría
                            en línea</a>
                    </li>
                </ul>

                <div class="tab-content card pt-5" id="myTabContentJust">
                    <div class="tab-pane fade show active" id="home-just" role="tabpanel"
                         aria-labelledby="home-tab-just">
                        <!-- Introduccion>-->

                    <!-- Introduccion -->
                    </div>
                    <div class="tab-pane fade" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                            Exercitation +1
                            labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko
                            farm-to-table craft
                            beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts
                            ullamco ad
                            vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.
                            Keytar
                            helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio
                            cillum wes
                            anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson
                            biodiesel. Art party
                            scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                    </div>
                    <div class="tab-pane fade" id="contact-just" role="tabpanel" aria-labelledby="contact-tab-just">
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic
                            lomo retro
                            fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft
                            beer, iphone
                            skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                            Leggings
                            gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles
                            pitchfork
                            biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of
                            them, vinyl
                            craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div class="tab-pane fade" id="just" role="tabpanel" aria-labelledby="contact-tab-just">
                        <p>asd</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection
