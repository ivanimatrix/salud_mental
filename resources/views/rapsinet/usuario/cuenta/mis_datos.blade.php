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
                            <label class="col-xs-12 col-sm-6 col-md-4 control-label">RUN</label>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <input type="text" value="{{ $usuario->gl_rut_usuario }}" class="form-control" name="rut_usuario" id="rut_usuario" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-4 control-label">Nombres</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <input type="text" value="{{ $usuario->gl_nombres_usuario }}" class="form-control" name="nombres_usuario" id="nombres_usuario" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-4 control-label">Apellido paterno</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <input type="text" value="{{ $usuario->gl_apellido_paterno_usuario }}" class="form-control" name="apellido_paterno_usuario" id="apellido_paterno_usuario" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-4 control-label">Apellido materno</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <input type="text" value="{{ $usuario->gl_apellido_materno_usuario }}" class="form-control" name="apellido_materno_usuario" id="apellido_materno_usuario" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-4 control-label">Email</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <input type="text" value="{{ $usuario->usuario_sistema->gl_email_usuario_sistema }}" class="form-control" name="email_usuario" id="email_usuario" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-4 control-label">Teléfono</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <input type="text" value="{{ $usuario->usuario_sistema->gl_fono_usuario_sistema }}" class="form-control" name="telefono_usuario" id="telefono_usuario" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-4 control-label">Celular</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <input type="text" value="{{ $usuario->usuario_sistema->gl_celular_usuario_sistema }}" class="form-control" name="celular_usuario" id="celular_usuario" />
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="button" class="btn btn-success btn-flat" onclick="Usuarios.guardarMisDatos(this.form, this);">Actualizar datos</button>
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
                                <div class="text-center">
                                    <i class="fa fa-lock fa-4x"></i>
                                </div>
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