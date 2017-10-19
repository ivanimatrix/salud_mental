<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{

    protected $table = 'rap_usuarios';

    protected $primaryKey = 'id_usuario';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuarioSistema(){
        return $this->hasOne('App\UsuariosSistema','id_usuario_sistema','id_usuario')->get();
    }


    public function usuarioSistemaPass($pass){
        return $this->hasOne('App\UsuariosSistema','id_usuario_sistema','id_usuario')->where('gl_password_usuario_sistema',$pass)->get();
    }


    public function  validarLogin($rut, $pass){
        $usuario = self::where('gl_rut_usuario', $rut)->get()->first();
        if($usuario){
            $usuarioSistema = new \App\UsuariosSistema();
            return $usuarioSistema->validarLogin($usuario->id_usuario,$pass);
        }
        return null;

    }


}
