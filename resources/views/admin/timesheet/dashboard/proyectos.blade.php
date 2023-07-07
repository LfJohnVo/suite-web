<div class="row">
    <div class="col-12">
        <div class="card-body card">
            <h5 class="titulo-grafica d-flex justify-content-between">
                <span>
                    <i class="fa-solid fa-circle mr-3" style="color:#8BE578;"></i>Horas invertidas por proyecto activo
                </span>
            </h5>
            <div class="row p-3">
                <div class="form-group col-md-3">
                    <label for="">Estatus</label>
                    <select class="form-control" id="estatus-select">
                        <option value="todos">Todos</option>
                        <option value="proceso">En proceso </option>
                        <option value="terminado">Terminados </option>
                        <option value="cancelado">Cancelados</option>
                    </select>
                </div>
                <div class="form-group col-md-5 caja-select-proyects">
                    <label for="">Proyectos</label>
                    <select class="form-control select2" id="proyectos-en-proceso">
                        <option value="" selected disabled></option>
                        @foreach ($proyectos['proyectos_lista']['proceso'] as $proyecto)
                            <option value="{{ $proyecto['proyecto'] }}" data-estatus="{{ $proyecto['estatus'] }}">{{ $proyecto['proyecto'] }}</option>
                        @endforeach
                        @foreach ($proyectos['proyectos_lista']['terminados'] as $proyecto)
                            <option value="{{ $proyecto['proyecto'] }}" data-estatus="{{ $proyecto['estatus'] }}">{{ $proyecto['proyecto'] }}</option>
                        @endforeach
                        @if (isset($proyectos['proyectos_lista']['cancelados']))
                            @foreach ($proyectos['proyectos_lista']['cancelado'] as $proyecto)
                                <option value="{{ $proyecto['proyecto'] }}" data-estatus="{{ $proyecto['estatus'] }}">{{ $proyecto['proyecto'] }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                {{-- <div class="form-group col-4 caja-select-areasproy" >
                    <label for="">Areas</label>
                    <select class="form-control select" id="areas-proyecto-select">
                        @foreach ($proyectos['areas_proyecto'] as $area)
                            <option value="{{ $area['area'] }}" data-proy="{{ $area['proyecto_area'] }}">{{ $area['area'] }}</option>
                        @endforeach
                    </select>
                </div> --}}
                {{--
                @if (isset($proyectos['proyectos_lista']['cancelados']))
                    <div class="form-group col-6">
                        <label for="">Cancelado</label>
                        <select class="form-control" id="proyectos-cancelados">
                            @foreach ($proyectos['proyectos_lista']['cancelado'] as $proyecto)
                                <option value="{{ $proyecto['proyecto'] }}">{{ $proyecto['proyecto'] }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif --}}
            </div>
            <canvas id="graf-proyectos-times-general"></canvas>
        </div>
    </div>
</div>

<div class="row">
    <div class=" col-md-6">
        <div class="card card-body">
            <h4 class="titulo-grafica d-flex justify-content-between">Horas invertidas en proyectos <a
                    href="{{ asset('admin/timesheet/reportes') }}">Ver&nbsp;detalle</a></h4>
            <canvas id="horas-totales-proyectos" width="400" height="400"></canvas>

            <div class="d-flex mt-4">
                Horas invertidas totales:
                <strong class="ml-3">
                    {{ $proyectos['horas_totales'] }}
                </strong>
            </div>
        </div>
    </div>

    <div class=" col-md-6">
        <div class="card card-body">
            <h4 class="titulo-grafica d-flex justify-content-between">Proyectos <a
                    href="{{ asset('admin/timesheet/reportes') }}">Ver&nbsp;detalle</a></h4>
            <canvas id="graf-proyectos-estatus" width="400" height="400"></canvas>
            <div class="d-flex mt-4">
                Proyectos totales:
                <strong class="ml-3">
                    {{ $proyectos['total_proyectos'] }}
                </strong>
            </div>
        </div>
    </div>
</div>
@section('scripts')
    <script>

        function formatOption(option) {
            if (!option.id) {
                return option.text;
            }

            var attribute = $(option.element).data('estatus');
            var $option = $('<span class="' + attribute + '">' + option.text + ' </span>');

            return $option;
        }

        $('.select2').select2({
            theme: "bootstrap4",
            templateResult: formatOption
        });

        $('#estatus-select').on('change', function() {
            var selectedOption = $(this).children("option:selected");
            var estatus = selectedOption.val();
            console.log(estatus);

            //$('#proyectos-en-proceso option:not(.' + estatus + ')').attr('disabled', 'true');
        });

        $('.caja-select-proyects .select2.select2-container').click(function(){
                let estatus = $('#estatus-select option:selected').val();
                if(estatus != 'todos'){
                    $('.select2-results__options li span:not(.' + estatus + ')').closest('li').remove();
                }
        });
    </script>

    <script>

        function formatOption(option2) {
            if (!option2.id) {
                return option2.text;
            }

            var attribute2 = $(option2.element).data('proy');
            var $option2 = $('<span class="' + attribute2 + '">' + option2.text + ' </span>');

            return $option2;
        }

        $('.select').select({
            theme: "bootstrap4",
            templateResult: formatOption
        });

        $('#proyectos-en-proceso').on('change', function() {
            var selectedOption2 = $(this).children("option:selected");
            var proy = selectedOption2.val();
            console.log(proy);

            //$('#proyectos-en-proceso option:not(.' + estatus + ')').attr('disabled', 'true');
        });

        $('.caja-select-areasproy .select2.select2-container').click(function(){
                let proy = $('#areas-proyecto-select:selected').val();
                if(proy != 'todos'){
                    $('.select2-results__options li span:not(.' + proy + ')').closest('li').remove();
                }
        });
    </script>

    <script>
        console.log(proyectos.proyectos_lista.proceso)
        new Chart(document.getElementById('graf-proyectos-estatus'), {
            type: 'doughnut',
            data: {
                labels: ['En proceso', 'Cancelados', 'Terminados'],
                datasets: [{
                    data: [
                        proyectos.proyectos_en_proceso,
                        proyectos.proyectos_cancelados,
                        proyectos.horas_terminados
                    ],
                    backgroundColor: [
                        '#F48C16',
                        '#bbb',
                        '#61CB5C',
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <script>
        new Chart(document.getElementById('horas-totales-proyectos'), {
            type: 'doughnut',
            data: {
                labels: ['En proceso', 'Cancelados', 'Terminados'],
                datasets: [{
                    label: 'Horas',
                    data: [
                        proyectos.horas_proceso,
                        proyectos.horas_cancelados,
                        proyectos.horas_terminados
                    ],
                    backgroundColor: [
                        '#F48C16',
                        '#bbb',
                        '#61CB5C',
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <script>
        new Chart(document.getElementById('graf-areas'), {
            type: 'doughnut',
            data: {
                labels: ['En proceso', 'Cancelados', 'Terminados'],
                datasets: [{
                    label: 'Horas',
                    data: [],
                    backgroundColor: [
                        '#F48C16',
                        '#bbb',
                        '#61CB5C',
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <script>
        let grafica_proyectos = new Chart(document.getElementById('graf-proyectos-times-general'), {
            type: "bar",
            data: {
                labels: [proyectos.proyectos_lista.proceso[0].proyecto],
                datasets: [{
                        backgroundColor: "#61CB5C",
                        label: "Horas totales",
                        data: [proyectos.proyectos_lista.proceso[0].horas_totales],
                        lineTension: 0,
                        fill: true,
                        options: {
                            indexAxis: 'y',
                        }
                    },
                    {
                        backgroundColor: "#EA7777",
                        label: "Tareas totales",
                        data: [proyectos.proyectos_lista.proceso[0].tareas_count],
                        lineTension: 0,
                        fill: true,
                        options: {
                            indexAxis: 'y',
                        }
                    },
                ]
            },
            options: {
                yAxis: {
                    title: {
                        text: 'Total tipo contrato'
                    },
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Áreas',
                            fontSize: 15,
                            fontColor: "#345183"
                        },
                        gridLines: {
                            color: "#ccc"
                        },
                    }],
                    xAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Registros de Timesheet',
                            fontSize: 15,
                            fontColor: "#345183"
                        },
                        gridLines: {
                            color: "#ccc"
                        },
                    }]
                },
                plugins: {
                    datalabels: {
                        color: '#000',
                        display: true,
                        font: {
                            size: 8
                        },
                        formatter: function(value, index, values) {
                            if (value > 0) {
                                return value;
                            }
                            return '';
                        }
                    },
                },
            },
        });
    </script>


@endsection
