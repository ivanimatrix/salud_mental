<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funciones extends Model
{

    protected $table = 'rap_funciones';

    protected $primaryKey = 'id_funcion';


    public function perfiles(){
        return $this->belongsToMany('App\Perfiles','rap_perfil_funciones','cd_funcion_fk_pf','cd_perfil_fk_pf');
    }


    public function subfunciones($id){
        return self::where('cd_padre_funcion', $id)->get();
    }


}
