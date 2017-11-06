<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadosSolicitudes extends Model
{
    protected $table = 'rap_estados_solicitudes';

    protected $primaryKey = 'id_estado';
}
