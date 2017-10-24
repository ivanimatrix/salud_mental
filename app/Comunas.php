<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comunas extends Model
{

    protected $table = 'rap_comunas';

    protected $primaryKey = 'id_comuna';


    public function establecimientos(){
        return $this->hasMany('App\Establecimientos', 'cd_comuna_fk_establecimiento','id_comuna');
    }

}
