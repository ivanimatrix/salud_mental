<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regiones extends Model
{

    protected $table = 'rap_regiones';

    protected $primaryKey = 'id_region';

    /**
     * Obtener usuarios de sistema
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuarios_sistema(){
        return $this->belongsTo('App\UsuariosSistema', 'cd_region_fk_usuario_sistema', 'id_region');
    }


}
