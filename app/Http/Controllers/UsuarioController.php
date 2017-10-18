<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //

    public function solicitarPassword(){

        return view('rapsinet.usuario.password.solicitar_password');
    }
}
