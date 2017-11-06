@extends('layouts.app')

@section('htmlheader_title')
    Mantenedores :: Usuarios
@endsection

@section('contentheader_title')
    Usuarios
@endsection
@section('contentheader_description')
    Mantenedores
@endsection

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    {{--<div class="box-title">Listado de Usuarios</div>--}}
                    <a class="btn btn-app btn-flat btn-primary pull-right" style="margin:0" href="javascript:void(0);" onclick="Usuarios.formUsuario();">
                        <i class="fa fa-user"></i> Nuevo Usuario
                    </a>
                </div>
                <div class="box-body">

                        <div class="table-responsive" id="contenedor-grilla-usuarios">

                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-code')
    <script type="text/javascript" src="{{ url ('public/js/plugins/dTables.js?' .uniqid()) }}" ></script>
    <script type="text/javascript" src="{{ url ('public/js/modulo/mantenedores/usuarios/usuarios.js?' .uniqid()) }}" ></script>
    <script type="text/javascript">
        Usuarios.cargarGrillaUsuarios();
    </script>
@endsection