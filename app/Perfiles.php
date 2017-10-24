<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{


    protected $table = 'rap_perfiles';

    protected $primaryKey = 'id_perfil';


    public function usuarios(){
        return $this->belongsToMany('App\UsuariosSistema','rap_perfiles_usuarios','id_perfil_fk','id_usuario_fk');
    }


    public function funciones(){
        return $this->belongsToMany('App\Funciones','rap_perfil_funciones','cd_perfil_fk_pf','cd_funcion_fk_pf')->where('cd_padre_funcion',0);
    }


    public function subfunciones($id_padre){
        return $this->belongsToMany('App\Funciones','rap_perfil_funciones','cd_perfil_fk_pf','cd_funcion_fk_pf')->where('cd_padre_funcion',$id_padre);
    }

}
