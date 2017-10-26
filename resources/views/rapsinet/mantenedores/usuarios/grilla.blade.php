<table class="table-bordered table-striped table-condensed" id="grilla-usuarios" data-export="1" width="100%">
    <thead>
    <tr>
        <td>RUN</td>
        <td>Nombres</td>
        <td>Apellido Paterno</td>
        <td>Apellido Materno</td>
        <td>Email</td>
        <td>Región</td>
        <td>Perfiles</td>
        <td></td>
    </tr>
    </thead>
    <tbody>
    @if($usuarios)
        @foreach($usuarios as $user)
        <tr>
            <td>{{ $user->usuario->gl_rut_usuario }}</td>
            <td>{{ $user->usuario['gl_nombres_usuario'] }}</td>
            <td>{{ $user->usuario['gl_apellido_paterno_usuario'] }}</td>
            <td>{{ $user->usuario['gl_apellido_materno_usuario'] }}</td>
            <td>{{ $user->gl_email_usuario_sistema }}</td>
            <td>{{ $user->region->gl_nombre_region }}</td>
            <td>
                @foreach($user->perfiles as $perfil)
                <label class="label label-primary">{{ $perfil->gl_nombre_perfil }}</label>
                @endforeach
            </td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-flat btn-success"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-flat btn-info"><i class="fa fa-user"></i></button>
                    <button class="btn btn-flat btn-danger"><i class="fa fa-remove"></i></button>
                </div>
            </td>
        </tr>
        @endforeach
    @endif
    </tbody>
</table>