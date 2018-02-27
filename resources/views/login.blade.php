@extends('layouts.blank')

@section('content')

<body class="login-page">

    <div class="login-box">
        <div class="login-logo">
            <img src="images/provitec/vision.png" alt="Visión Digital">
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Inicia Sesión</p>
            @if(Session::has('message'))
                <div class="help-block  error" style="color: red; width: 100%; text-align: center;">{{ Session::get('message') }}</div>
            @endif
            <form action="/handlelogin" method="post" class="form-element">
                {{-- csrf_field() --}}
                <!-- input type="hidden" name="_token" value="{{-- csrf_token() --}}" -->
                <div class="form-group has-feedback">
                    <input id="userEmail" name="userEmail" type="email" class="form-control" placeholder="Correo">
                    <span class="ion ion-email form-control-feedback"></span>
                    <span class="help-block  error" style="color: red">{{ $errors->first('userEmail') }}</span>
                </div>
                <div class="form-group has-feedback">
                    <input id="userPassword" name="userPassword" type="password" class="form-control" placeholder="Contraseña">
                    <span class="ion ion-locked form-control-feedback"></span>
                    <span class="help-block  error" style="color: red">{{ $errors->first('userPassword') }}</span>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-info btn-block btn-flat margin-top-10">ENTRAR</button>
                    </div>
                </div>
            </form>
            <div class="credits margin-top-30 text-center">
                <p>Visión Digital {{date('Y')}} | &copy; Derechos Reservados</p>
            </div>
        </div>
    </div>

@endsection
