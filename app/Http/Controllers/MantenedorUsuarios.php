<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsuariosSistema;

class MantenedorUsuarios extends Controller
{

    public function index(){

        return view('rapsinet.mantenedores.usuarios.index');
    }

    public function grillaUsuarios(){

        $usuarios = UsuariosSistema::get();

        foreach($usuarios as $user){
            echo($user->usuario->gl_rut_usuario);
        }
        die;
        return view('rapsinet.mantenedores.usuarios.grilla', ['usuarios' => $usuarios]);

    }

}
