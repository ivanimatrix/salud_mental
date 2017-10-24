<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariosSistema extends Model
{

    protected $table = 'rap_usuarios_sistema';

    protected $primaryKey = 'id_usuario_sistema';

    public $timestamps = false;

    /**
     * Obtener informacion de usuario de sistema por ID
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|mixed
     */
    public function usuario(){
        return $this->belongsTo('App\Usuarios', 'id_usuario_sistema', 'id_usuario');
        //return $this->hasOne('App\Usuarios','id_usuario','id_usuario_sistema');
    }

    /**
     * Validar login de usuario sistema
     * @param $id
     * @param $pass
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function validarLogin($id, $pass){
        return self::with('usuario')->where(array('gl_password_usuario_sistema' => $pass, 'gl_rut_usuario' => $id))->get()->first();
        //return $this->hasOne('App\Usuarios','id_usuario','id_usuario_sistema')->where(array('gl_pass_usuario_sistema' => $pass, 'gl_rut_usuario' => $id))->get()->first();
    }


    public function perfiles(){
        return $this->belongsToMany('App\Perfiles');
    }

}
