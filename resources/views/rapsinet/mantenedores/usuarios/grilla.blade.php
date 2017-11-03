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
                <span class="btn-group">
                    <button class="btn btn-flat btn-success"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-flat btn-info"><i class="fa fa-user"></i></button>
                    <button class="btn btn-flat btn-danger"><i class="fa fa-remove"></i></button>
                </span>
            </td>
        </tr>
        @endforeach
    @endif
    </tbody>
</table>