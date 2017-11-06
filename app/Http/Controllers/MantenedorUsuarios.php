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

        return view('rapsinet.mantenedores.usuarios.grilla', ['usuarios' => $usuarios]);

    }


    public function formUsuarios($id){

        $regiones = \App\Regiones::all();
        $perfiles = \App\Perfiles::all();

        $usuario = null;
        $perfiles_usuario = [];

        if($id > 0){
            $usuario = \App\Usuarios::find($id);
            foreach($usuario->usuarioSistema->perfiles as $perfil){
                $perfiles_usuario[] = $perfil->id_perfil;
            }
        }

        return view(
            'rapsinet.mantenedores.usuarios.form',
            [
                'regiones' => $regiones,
                'perfiles' => $perfiles,
                'usuario' => $usuario,
                'perfiles_usuario' => $perfiles_usuario
            ]
        );
    }

}
