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

        $usuarios = UsuariosSistema::all();

        return view('rapsinet.mantenedores.usuarios.grilla', array('usuarios' => $usuarios));

    }

}
