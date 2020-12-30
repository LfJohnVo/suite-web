@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-5">
                    <div class="col-md-10 col-sm-9 py-3 card card-body bg-primary align-self-center"
                         style="margin-top: -40px;">
                        <h3 class="mb-2 text-center text-white"><strong>Tablero de Control</strong></h3>
                    </div>

                    <div class="row">
                        <div class="{{$chart1->options['column_class']}}">
                            <h3>{!! $chart1->options['chart_title'] !!}</h3>
                            {!! $chart1->renderHtml() !!}
                        </div>
                        <div class="{{$chart2->options['column_class']}}">
                            <h3>{!! $chart2->options['chart_title'] !!}</h3>
                            {!! $chart2->renderHtml() !!}
                        </div>
                        <div class="{{$chart2->options['column_class']}}">
                            <h3>{!! $chart2->options['chart_title'] !!}</h3>
                            {!! $chart1->renderHtml() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/lib/Charts.js/2.5.0/Chart.min.js"></script>
{!! $chart1->renderJs() !!}
    {!! $chart2->renderJs() !!}
    {!! $chart3->renderJs() !!}
