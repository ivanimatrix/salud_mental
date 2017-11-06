@extends('layouts.app')

@section('htmlheader_title')
    Búsquedas :: Solicitudes
@endsection

@section('contentheader_title')
    Solicitudes
@endsection
@section('contentheader_description')
    Búsquedas
@endsection

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="box-title">Búsqueda de Solicitudes</div>
                </div>
                <div class="box-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label for="codigo_solicitud">Código Solicitud</label>
                                    <input type="text" class="form-control" name="codigo_solicitud" id="codigo_solicitud" />
                                </div>
                                <div class="form-group">
                                    <label for="codigo_solicitud">Tipo Solicitud</label>
                                    <select class="form-control" name="tipo_solicitud" id="tipo_solicitud">
                                        <option value="">Seleccione...</option>
                                        @foreach($tipo_solicitudes as $tipo_solicitud)
                                            <option value="{{ $tipo_solicitud->id_tipo_solicitud }}">{{ $tipo_solicitud->gl_nombre_tipo_solicitud }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="estado_solicitud">Estado Solicitud</label>
                                    <select class="form-control" name="estado_solicitud" id="estado_solicitud">
                                        <option value="">Seleccione...</option>
                                        @foreach($estados_solicitudes as $estado_solicitud)
                                            <option value="{{ $estado_solicitud->id_solicitud}}">{{ $estado_solicitud->gl_descripcion_estadosol}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label for="region_solicitud">Región</label>
                                    <select class="form-control" name="region_solicitud" id="region_solicitud">
                                        <option value="">Seleccione...</option>
                                        @foreach($regiones as $region)
                                            <option value="{{ $region->id_region}}">{{ $region->gl_nombre_region}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ss_solicitud">Servicio de Salud</label>
                                    <select class="form-control" name="ss_solicitud" id="ss_solicitud">
                                        <option value="">Seleccione...</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="establecimiento_solicitud">Establecimiento</label>
                                    <select class="form-control" name="establecimiento_solicitud" id="establecimiento_solicitud">
                                        <option value="">Seleccione...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label for="codigo_resolucion">Código Resolución</label>
                                    <input type="text" class="form-control" name="codigo_resolucion" id="codigo_resolucion" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection