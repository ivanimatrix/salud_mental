@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Usuario :: Mi cuenta
@endsection

@section('contentheader_title')
    Mi Cuenta
@endsection
@section('contentheader_description')
    Usuario
@endsection

@section('main-content')
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="box-title">
                        Datos personales
                    </div>
                </div>
                <div class="box-body">
                    <form role="form" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-4 control-label">Nombres</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <input type="text" value="{{ $usuario->gl_nombres_usuario }}" class="form-control" name="nombres_usuario" id="nombres_usuario" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="box-title">Mi contraseña</div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="callout callout-info text-bold">
                            <p>Para cambiar su contraseña, escriba la nueva clave que desea tener, y luego escríbala nuevamente</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-8">
                            <form role="form">
                                <div class="form-group">
                                    <label>Nueva contraseña</label>
                                    <input type="password" name="nueva_pass" id="nueva_pass" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Repita la contraseña</label>
                                    <input type="password" name="repetir_pass" id="repetir_pass" clasS="form-control" />
                                </div>
                                <div class="text-right">
                                    <button type="button" class="btn btn-success btn-flat" onclick="Usuarios.cambiarPassword(this.form, this)">Actualizar</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="box-footer"></div>
            </div>

        </div>
    </div>
@endsection

@section('js-code')
    <script type="text/javascript" src="{{ url ('public/js/modulo/usuarios/usuarios.js') }}" ></script>
@endsection