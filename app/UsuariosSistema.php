<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariosSistema extends Model
{

    protected $table = 'rap_usuarios_sistema';

    protected $primaryKey = 'id_usuario_sistema';

    /**
     * Obtener informacion de usuario de sistema por ID
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|mixed
     */
    public function infoUsuario($id){
        return $this->belongsTo('App\Usuarios')->find($id);
    }

    /**
     * Validar login de usuario sistema
     * @param $id
     * @param $pass
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function validarLogin($id, $pass){
        return self::where(array('gl_password_usuario_sistema' => $pass, 'id_usuario_sistema' => $id))->get()->first();
    }


    public function perfiles(){
        return $this->belongsToMany('App\Perfiles');
    }

}
