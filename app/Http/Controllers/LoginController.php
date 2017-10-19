<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\UsuariosSistema;
use App\Usuarios;


class LoginController extends Controller
{

    public function index(){

        return view("rapsinet/login/login_usuario");

    }

    public function loginUsuario(Request $request){

        $rut = $request->get('rut');
        $pass = hash('sha512',$request->get('pass'));

        $usuario = new Usuarios();
        $json = array();
        $user = $usuario->validarLogin(mb_strtolower($rut),$pass);
        if($user){
            $json['estado'] = true;
            $json['redirect'] = 'Home/index';
            $dataUsuario = $usuario->find($user->id_usuario_sistema);

            $perfil = \App\Perfiles::find($user->cd_perfil_fk_usuario_sistema)->first();

            $request->session()->put('id', $user->id_usuario_sistema);
            $request->session()->put('nombre', $dataUsuario->gl_nombres_usuario);
            $request->session()->put('apellido_paterno', $dataUsuario->gl_apellido_paterno_usuario);
            $request->session()->put('apellido_materno', $dataUsuario->gl_apellido_materno_usuario);
            $request->session()->put('email', $user->gl_email_usuario_sistema);
            $request->session()->put('perfil', $perfil->gl_nombre_perfil);
            $request->session()->put('ultimo_ingreso', $user->fc_ultimo_login_usuario_sistema);
        }else{
            $json['estado'] = false;
            $json['mensaje'] = 'Credenciales no correctas. Intente nuevamente';
        }

        return response()->json($json);
        //return redirect(url('Home/index'));
    }


    /**
     * Cerrar sesion de usuario
     * @param Request $request
     */
    public function logoutUsuario(Request $request){
        $request->session()->flush();
        return redirect(url('/'));
    }

    /**
     * Validar usuario desde MIDAS usuando rut
     * @param $rut
     */
    public function autentificarMidas($rut){

    }

    /**
     * Validar usuario desde MIDAS usando Token
     * @param $token
     */
    public function autentificarTokenMidas($token){

    }
}
