<table class="table-bordered table-striped table-condensed table-hover" id="grilla-usuarios" data-export="1" data-rows="5" data-name="ListadoUsuarios" width="100%">
    <thead>
    <tr>
        <th>RUN</th>
        <th>Nombres</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Email</th>
        <th>Región</th>
        <th>Perfiles</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @if($usuarios)
        @foreach($usuarios as $user)
        <tr>
            <td>{{ $user->usuario['gl_rut_usuario'] }}</td>
            <td>{{ $user->usuario['gl_nombres_usuario'] }}</td>
            <td>{{ $user->usuario['gl_apellido_paterno_usuario'] }}</td>
            <td>{{ $user->usuario['gl_apellido_materno_usuario'] }}</td>
            <td>{{ $user->gl_email_usuario_sistema }}</td>
            <td class="text-center">{{ $user->region->gl_nombre_region }}</td>
            <td>
                @foreach($user->perfiles as $perfil)
                <label class="label label-primary">{{ $perfil->gl_nombre_perfil }}</label><br/>
                @endforeach
            </td>
            <td class="text-center">
                <div class="dropdown">
                    <button class="btn btn-flat dropdown-toggle btn-sm bg-olive" type="button" id="dropdownMenu1" data-toggle="dropdown">
                        <i class="fa fa-gears"></i> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation" class="dropdown-header">Acciones</li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0);" onclick="BootModal.open(url_base + '/MantenedorUsuarios/formUsuario/{{ $user->id_usuario_sistema }}','Formulario para {{ $user->usuario['gl_nombres_usuario'] }} {{ $user->usuario['gl_apellido_paterno_usuario'] }}');"><i class="fa fa-edit"></i> Editar</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-user"></i> Cargar</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-lock"></i> Nueva clave</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-remove"></i> Eliminar</a></li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach
    @endif
    </tbody>
</table>