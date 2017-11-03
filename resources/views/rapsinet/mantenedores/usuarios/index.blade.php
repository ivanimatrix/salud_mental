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
                    <div class="box-title">Listado de Usuarios</div>
                </div>
                <div class="box-body">

                        <div class="table-responsive col-xs-12 small" id="contenedor-grilla-usuarios">

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