@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
    <body class="hold-transition login-page">
    <div id="app" v-cloak>
        <div class="login-box">
            <div class="login-logo">
                <p>Salud Mental</p>
            </div><!-- /.login-logo -->

            <div class="login-box-body">
                <p class="login-box-msg"> Ingrese RUN y contraseña para ingresar </p>

                <form role="form">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="rut" id="rut" placeholder="ej: 12345678-9" />
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="pass" id="pass" />
                        <span class="fa fa-lock form-control-feedback"></span>
                    </div>

                    <div class="form-group text-right">
                        <button type="button" class="btn btn-flat btn-primary" onclick="Login.validarLogin(this.form, this);" >Entrar</button>
                    </div>
                </form>

                <a href="javascript:void(0)" onclick="Login.solicitarPassword();">¿Olvidó su contraseña?</a><br>


            </div>

        </div>
    </div>
    @include('adminlte::layouts.partials.scripts_auth')
    </body>

@endsection
