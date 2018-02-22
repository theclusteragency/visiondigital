@extends('layouts.blank')

@section('content')

<body class="login-page">

    <div class="login-box">
        <div class="login-logo">
            <img src="images/logo_rafa.png">
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Ingresa tu correo electrónico</p>
            @if(Session::has('message'))
                <div class="help-block  error" style="color: red; width: 100%; text-align: center;">{{ Session::get('message') }}</div>
            @endif
            <form method="post" class="form-element">
                {{-- csrf_field() --}}
                <!-- input type="hidden" name="_token" value="{{-- csrf_token() --}}" -->
                <div class="form-group has-feedback">
                    <input id="userEmail" name="userEmail" type="email" class="form-control" placeholder="Correo">
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-info btn-block btn-flat margin-top-10">Enviar email de recuperación</button>
                    </div>
                </div>
            </form>
            <div class="credits margin-top-30 text-center">
                <p>FOM 2018 | &copy; Derechos Reservados</p>
            </div>
        </div>
    </div>

@endsection
