<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuarios;
use App\UsuariosSistema;


class UsuarioController extends Controller
{
    //

    public function solicitarPassword(){

        return view('rapsinet.usuario.password.solicitar_password');

    }


    public function misDatos(){

        $usuario = Usuarios::find(session()->get('id'));

        $datos = array(
            'usuario' => $usuario
        );

        return view('rapsinet.usuario.cuenta.mis_datos', $datos);
    	
    }


    public function actualizarPassword(Request $request){
        $json = array();
        $pass = $request->get('nueva_pass');

        $pass_sha = hash('sha512',$pass);

        $usuario = UsuariosSistema::find(session()->get('id'));
        $usuario->gl_password_usuario_sistema = $pass_sha;

        if($usuario->save()){
            $json['estado'] = true;
            $json['mensaje'] = 'Su contraseña ha sido actualizada';
        }else{
            $json['estado'] = false;
            $json['mensaje'] = 'Hubo un problema al actualizar su contraseña. Intente nuevamente';
        }

        return response()->json($json);
    }


    public function guardarDatos(Request $request){
        $params = $request->all();

        $usuario = Usuarios::find(session()->get('id'));
        $usuario->gl_rut_usuario = $params['rut_usuario'];
        $usuario->gl_nombres_usuario = $params['nombres_usuario'];
        $usuario->gl_apellido_paterno_usuario = $params['apellido_paterno_usuario'];
        $usuario->gl_apellido_materno_usuario = $params['apellido_materno_usuario'];
        $usuario->usuario_sistema->gl_email_usuario_sistema = $params['email_usuario'];
        $usuario->usuario_sistema->gl_fono_usuario_sistema = $params['telefono_usuario'];
        $usuario->usuario_sistema->gl_celular_usuario_sistema = $params['celular_usuario'];

        $json = array();
        if($usuario->usuario_sistema->save() && $usuario->save()){
            $json['correcto'] = true;
            $json['mensaje'] = 'Datos actualizados';

            $request->session()->put('nombre', $params['nombres_usuario']);
            $request->session()->put('apellido_paterno', $params['apellido_paterno_usuario']);
            $request->session()->put('apellido_materno', $params['apellido_materno_usuario']);
            $request->session()->put('email', $params['email_usuario']);
        }else{
            $json['correcto'] = false;
            $json['mensaje'] = 'Hubo un problema al actualizar los datos. Intente nuevamente';
        }

        return response()->json($json);

    }

}
