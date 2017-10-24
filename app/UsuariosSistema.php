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


    public function perfiles(){
        return $this->belongsToMany('App\Perfiles','rap_perfiles_usuarios','id_usuario_fk','id_perfil_fk');
    }


    /**
     * Obtener region de usuario de sistema
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function region(){
        return $this->hasOne('App\Regiones','id_region', 'cd_region_fk_usuario_sistema');
    }


    public function establecimientos(){
        return $this->belongsToMany('App\Establecimientos','rap_establecimientos_usuario','cd_usuario_fk_eu','cd_establecimiento_fk_eu');
    }

}
