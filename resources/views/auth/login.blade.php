@extends('layouts.app')
@section('content')

<div class="row" style="height: 100%; width: 100%; position: absolute; top: 0; background-color: #fff;">
    <div class="col-md-8 d-flex align-items-center justify-content-center" style="background-image: url(img/auth-bg2.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div style="">
            <span class="db"><img src="{{ asset('img/Silent4Business-Logo-Color.png') }}" style="width: 350px;" alt="logo"/></span><br><br>
            <h3 class="font-light m-t-30">Bienvenido al <span style="font-weight: bold;"> Sistema de Gestión Normativa </span><br><br><font style="font-weight: bolder; font-size: 35pt;">TABANTAJ</font>
            </h3>
        </div>
    </div>
    <div class="col-md-4"  style="background-color: #fff; box-shadow: 0px 0px 11px -3px #888">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5" style="text-align: right;">{{ trans('global.login') }}</h1>

                @if(session('message'))
                    <div class="alert alert-info" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>

                        <input id="email" name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">

                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>

                        <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">

                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-4">
                        <div class="form-check checkbox">
                            <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                            <label class="form-check-label" for="remember" style="vertical-align: middle;">
                                {{ trans('global.remember_me') }}
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary mb-4" style="width: 90%;">
                                {{ trans('global.login') }}
                            </button>
                        </div>
                        <div class="col-6 text-right">
                            @if(Route::has('password.request'))
                                <a class="btn btn-link px-0" href="{{ route('password.request') }}" style="float: left;">
                                    {{ trans('global.forgot_password') }}
                                </a><br>
                            @endif
                            <a class="btn btn-link px-0" href="{{ route('register') }}" style="float: left;">
                                {{ trans('global.register') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{ TawkTo::widgetCode() }}

@endsection
