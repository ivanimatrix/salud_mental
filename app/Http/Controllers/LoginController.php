<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index(){

        return view("rapsinet/login/login_usuario");

    }

    public function loginUsuario(Request $request){
        return redirect(url('Home/index'));
    }


    /**
     * Cerrar sesion de usuario
     * @param Request $request
     */
    public function logoutUsuario(Request $request){
        $request->session()->flush();
        redirect('/');
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
