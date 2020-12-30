<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ trans('panel.site_title') }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet"/>-->
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet"/>-->
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css"
          rel="tylesheet"/>-->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/Silent4Business-Logo-Color.png') }}">
    <!--<link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet"/>-->
    <!--<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>-->
    <!--<link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet"/>-->
    <!--<link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet"/>-->
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dark_mode.css') }}">
    <!-- x-editable -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css"
          rel="stylesheet"/>
    <style type="text/css">
        .iconos-crear{
            font-size: 15pt;
            color: #9FA2A5;
            margin-right: 10px;
        }
        .verde_silent{
            background-color: #0CA193;
        }
        .iconos_cabecera{
            color: #fff;
            font-size:28px;
        }
        body.c-dark-theme .iconos_cabecera{
            color: #000;
        }

        body, .iconos_cabecera{
            transition: 0.2s;
        }
        #btnDark{
            cursor: pointer;
        }
        .iconos_cabecera:active{
            transform: scale(0.8);
            transition: 0.06s;
            opacity: 0.7;
        }
        

        .glyphicon-ok::before {
            content: "\f00c";
        }

        .glyphicon-remove::before {
            content: "\f00d";
        }

        .glyphicon {
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            font-style: normal;
        }

    </style>
    @yield('styles')
</head>

<body class="">
@include('partials.menu')
<div class="c-wrapper">
    <header class="c-header c-header-fixed px-3"
            style="background: linear-gradient(60deg, rgb(35,57,91) 40%, rgb(62,142,207) 70%, rgb(13,164,160) 100%) !important; border: none;">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
                data-class="c-sidebar-show">
            <i class="fas fa-fw fa-bars"></i>
        </button>


        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
                data-class="c-sidebar-lg-show" responsive="true">
            <i class="fas fa-fw fa-bars" style="color:white"></i>
        </button>


        <form class="form-inline">

            <select class="form-control mr-sm-2 searchable-field ">

            </select>
        </form>

        <ul class="c-header-nav ml-auto">
            @if(count(config('panel.available_languages', [])) > 1)
                <li class="c-header-nav-item dropdown d-md-down-none">
                    <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach(config('panel.available_languages') as $langLocale => $langName)
                            <a class="dropdown-item"
                               href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }}
                                ({{ $langName }})</a>
                        @endforeach
                    </div>
                </li>
            @endif

            <ul class="c-header-nav ml-auto">
                <li class="c-header-nav-item dropdown notifications-menu">
                    <a href="#" class="c-header-nav-link" data-toggle="dropdown">
                        <i class="fas fa-bell iconos_cabecera"></i>
                        @php($alertsCount = \Auth::user()->userUserAlerts()->where('read', false)->count())
                        @if($alertsCount > 0)
                            <span class="badge badge-warning navbar-badge">
                                        {{ $alertsCount }}
                                    </span>
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        @if(count($alerts = \Auth::user()->userUserAlerts()->withPivot('read')->limit(10)->orderBy('created_at', 'ASC')->get()->reverse()) > 0)
                            @foreach($alerts as $alert)
                                <div class="dropdown-item">
                                    <a href="{{ $alert->alert_link ? $alert->alert_link : "#" }}" target="_blank"
                                       rel="noopener noreferrer">
                                        @if($alert->pivot->read === 0) <strong> @endif
                                            {{ $alert->alert_text }}
                                            @if($alert->pivot->read === 0) </strong> @endif
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="text-center">
                                {{ trans('global.no_alerts') }}
                            </div>
                        @endif
                    </div>
                </li>
            </ul>
            <ul class="c-header-nav ml-auto">
                <li class="c-header-nav-item px-2 c-d-legacy-none">
                    <div id="btnDark">
                        <i class="fas fa-moon iconos_cabecera"></i>
                        </i>

                    </div>
                </li>
            </ul>


            <ul class="c-header-nav ml-auto">

                <li class="c-header-nav-item dropdown show"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
                                                               role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="c-avatar"><i class="fas fa-user-circle iconos_cabecera" style="font-size: 33px;"></i></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pt-0 hide">

                        <div class="dropdown-header bg-light py-2"><strong>Ajustes</strong></div>
                        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                            @can('profile_password_edit')

                                <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}"
                                   href="{{ route('profile.password.edit') }}">
                                    <i class="fas fa-user-circle c-sidebar-nav-icon">
                                    </i>
                                    Perfil
                                </a>

                            @endcan
                        @endif
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-fw fa-lock c-sidebar-nav-icon">
                            </i> Bloquear</a>
                        <a class="dropdown-item"
                           onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                            <i class="fas fa-fw fa-sign-out-alt c-sidebar-nav-icon">
                            </i> Cerrar sesión</a>
                    </div>
                </li>

            </ul>
        </ul>
    </header>

    <div class="c-body">
        <main class="c-main">


            <div class="container-fluid">
                @if(session('message'))
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                        </div>
                    </div>
                @endif
                @if($errors->count() > 0)
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('content')

            </div>


        </main>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <!-- incluir de footer -->
    @include('partials.footer')
</div>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
<script src="https://unpkg.com/@coreui/coreui@3.2/dist/js/coreui.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<!-- x editable -->
<script
    src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
<!-- x-editable -->
<script>
    $.fn.editable.defaults.mode = 'inline';
    $.fn.editable.defaults.ajaxOptions = {type: 'PUT'};

    @yield('x-editable')

</script>
<!-- x-editable -->

<script>

        const btnDark = document.querySelector('#btnDark');

        btnDark.addEventListener('click', () => {
            document.body.classList.toggle('c-dark-theme');

            if (document.body.classList.contains('c-dark-theme')) {
                localStorage.setItem('dark-mode', 'true');
            }
            else{
                localStorage.setItem('dark-mode', 'false');
            }
        });

        if (localStorage.getItem('dark-mode') === 'true') {
            document.body.classList.add('c-dark-theme');
        }
        else{
            document.body.classList.remove('c-dark-theme');
        }

</script>
<script>
    $(function () {
        let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
        let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
        let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
        let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
        let printButtonTrans = '{{ trans('global.datatables.print') }}'
        let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'
        let selectAllButtonTrans = '{{ trans('global.select_all') }}'
        let selectNoneButtonTrans = '{{ trans('global.deselect_all') }}'

        let languages = {
            'es': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
        };

        $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, {className: 'btn'})
        $.extend(true, $.fn.dataTable.defaults, {
            language: {
                url: languages['{{ app()->getLocale() }}']
            },
            columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0
            }, {
                orderable: false,
                searchable: false,
                targets: -1
            }],
            select: {
                style: 'multi+shift',
                selector: 'td:first-child'
            },
            order: [],
            scrollX: true,
            pageLength: 100,
            dom: 'lBfrtip<"actions">',
            buttons: [
                {
                    extend: 'selectAll',
                    className: 'btn-primary',
                    text: selectAllButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    },
                    action: function (e, dt) {
                        e.preventDefault()
                        dt.rows().deselect();
                        dt.rows({search: 'applied'}).select();
                    }
                },
                {
                    extend: 'selectNone',
                    className: 'btn-primary',
                    text: selectNoneButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'copy',
                    className: 'btn-default',
                    text: copyButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'csv',
                    className: 'btn-default',
                    text: csvButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'excel',
                    className: 'btn-default',
                    text: excelButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdf',
                    className: 'btn-default',
                    text: pdfButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'print',
                    className: 'btn-default',
                    text: printButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'colvis',
                    className: 'btn-default',
                    text: colvisButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                }
            ]
        });

        $.fn.dataTable.ext.classes.sPageButton = '';
    });

</script>
<script>
    $(document).ready(function () {
        $(".notifications-menu").on('click', function () {
            if (!$(this).hasClass('open')) {
                $('.notifications-menu .label-warning').hide();
                $.get('/admin/user-alerts/read');
            }
        });
    });

</script>
<script>
    $(document).ready(function () {
        $('.searchable-field').select2({
            minimumInputLength: 3,
            ajax: {
                url: '{{ route("admin.globalSearch") }}',
                dataType: 'json',
                type: 'GET',
                delay: 200,
                data: function (term) {
                    return {
                        search: term
                    };
                },
                results: function (data) {
                    return {
                        data
                    };
                }
            },
            escapeMarkup: function (markup) {
                return markup;
            },
            templateResult: formatItem,
            templateSelection: formatItemSelection,
            placeholder: '{{ trans('global.search') }}...',
            language: {
                inputTooShort: function (args) {
                    var remainingChars = args.minimum - args.input.length;
                    var translation = '{{ trans('global.search_input_too_short') }}';

                    return translation.replace(':count', remainingChars);
                },
                errorLoading: function () {
                    return '{{ trans('global.results_could_not_be_loaded') }}';
                },
                searching: function () {
                    return '{{ trans('global.searching') }}';
                },
                noResults: function () {
                    return '{{ trans('global.no_results') }}';
                },
            }

        });

        function formatItem(item) {
            if (item.loading) {
                return '{{ trans('global.searching') }}...';
            }
            var markup = "<div class='searchable-link' href='" + item.url + "'>";
            markup += "<div class='searchable-title'>" + item.model + "</div>";
            $.each(item.fields, function (key, field) {
                markup += "<div class='searchable-fields'>" + item.fields_formated[field] + " : " + item[field] + "</div>";
            });
            markup += "</div>";

            return markup;
        }

        function formatItemSelection(item) {
            if (!item.model) {
                return '{{ trans('global.search') }}...';
            }
            return item.model;
        }

        $(document).delegate('.searchable-link', 'click', function () {
            var url = $(this).attr('href');
            window.location = url;
        });
    });

</script>
@yield('scripts')
</body>

</html>
