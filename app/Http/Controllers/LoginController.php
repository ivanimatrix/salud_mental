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


        //$usuario = new UsuariosSistema();
        $usuarios = new Usuarios();
        $usuario = $usuarios->where('gl_rut_usuario', mb_strtolower($rut))->first();
        $json = array();
        //$user = $usuario->validarLogin(mb_strtolower($rut),$pass);
        if($usuario->usuarioSistema()->where('gl_password_usuario_sistema',$pass)->first()){
            $json['estado'] = true;
            $json['redirect'] = 'Home/index';

            $perfil = \App\Perfiles::find($usuario->usuarioSistema->cd_perfil_fk_usuario_sistema);

            $funciones = $perfil->funciones;


            $request->session()->put('id', $usuario->usuarioSistema->id_usuario_sistema);
            $request->session()->put('nombre', $usuario->gl_nombres_usuario);
            $request->session()->put('apellido_paterno', $usuario->gl_apellido_paterno_usuario);
            $request->session()->put('apellido_materno', $usuario->gl_apellido_materno_usuario);
            $request->session()->put('email', $usuario->usuarioSistema->gl_email_usuario_sistema);
            $request->session()->put('perfil', $usuario->usuarioSistema->cd_perfil_fk_usuario_sistema);
            $request->session()->put('perfil_nombre', $perfil->gl_nombre_perfil);
            $request->session()->put('ultimo_ingreso', $usuario->usuarioSistema->fc_ultimo_login_usuario_sistema);
            $request->session()->put('funciones', $funciones);
            $request->session()->put('perfiles', $usuario->usuarioSistema->perfiles);

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
