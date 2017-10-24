<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimientos extends Model
{

    protected $table = 'rap_establecimientos';

    protected $primaryKey = 'id_establecimiento';


    public function usuarios_sistema(){
        return $this->belongsToMany('App\UsuariosSistema','rap_establecimientos_usuario','cd_establecimiento_fk_eu','cd_usuario_fk_eu');
    }


    /**
     * Obtener comuna de establecimiento
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comuna(){
        return $this->hasOne('App\Comunas', 'id_comuna','cd_comuna_fk_establecimiento');
    }

}
