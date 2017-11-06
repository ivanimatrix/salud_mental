<div class="row">
    <div class="col-xs-12 ">
        <div class="callout callout-info">
            (*) Campos obligatorios
        </div>
        <form role="form">
            <div class="nav-tabs-custom">
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="active"><a href="#datos-personales" role="tab" data-toggle="tab">Datos Personales</a></li>
                <li><a href="#perfiles" role="tab" data-toggle="tab">Perfiles</a></li>
                <li><a href="#establecimientos" role="tab" data-toggle="tab">Establecimientos</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="datos-personales">
                    <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>RUN</label>
                                <input type="text" class="form-control" name="run" id="run" value="@if($usuario){{ $usuario->gl_rut_usuario }}@endif"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>Nombres</label>
                                <input type="text" class="form-control" name="nombres" id="nombres" value="@if($usuario){{ $usuario->gl_nombres_usuario }}@endif" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>Apellido Paterno</label>
                                <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" value="@if($usuario){{ $usuario->gl_apellido_paterno_usuario }}@endif" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>Apellido Materno</label>
                                <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" value="@if($usuario){{ $usuario->gl_apellido_materno_usuario }}@endif" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="@if($usuario){{ $usuario->usuarioSistema->gl_email_usuario_sistema }}@endif" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono" value="@if($usuario){{ $usuario->usuarioSistema->gl_fono_usuario_sistema }}@endif" />
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- fin datos personales -->

                <!-- perfiles -->
                <div class="tab-pane" id="perfiles">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="col-xs-12">Seleccione perfiles</label>
                            @foreach($perfiles as $perfil)
                            <div class="col-xs-12 col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="perfiles[]" id="perfil_{{ $perfil->id_perfil }}" value="{{ $perfil->id_perfil }}" @if(in_array($perfil->id_perfil, $perfiles_usuario)) checked @endif /> {{ mb_strtoupper($perfil->gl_nombre_perfil) }}
                                    </label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- fin perfiles -->

                <!-- establecimientos -->
                <div class="tab-pane" id="establecimientos">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="region">Región de usuario</label>
                            <select class="form-control" name="region" id="region">
                                <option value="">Seleccione...</option>
                                @foreach($regiones as $region)
                                    <option value="{{ $region->id_region }}" @if($usuario and $usuario->usuarioSistema->region->id_region == $region->id_region) selected @endif >{{ $region->gl_nombre_region }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!-- fin establecimientos -->
            </div>
            </div>


        </form>
    </div>
</div>