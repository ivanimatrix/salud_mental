<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{

    protected $table = 'rap_usuarios';

    protected $primaryKey = 'id_usuario';

    public $timestamps = false;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuarioSistema(){
        //return $this->belongsTo('App\UsuariosSistema','id_usuario_sistema','id_usuario');
        return $this->hasOne('App\UsuariosSistema', 'id_usuario_sistema', 'id_usuario');
    }


    public function usuarioSistemaPass($pass){
        return $this->hasOne('App\UsuariosSistema','id_usuario_sistema','id_usuario')->where('gl_password_usuario_sistema',$pass)->get();
    }


}
