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
        $info = UsuariosSistema::find(session()->get('id'));
        $datos = array(
            'usuario' => $usuario,
            'info' => $info
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

}
