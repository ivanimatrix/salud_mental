<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Busquedas extends Controller
{

    public function buscarSolicitudes(){

        $tipo_solicitudes = \App\TipoSolicitudes::all();
        $regiones = \App\Regiones::all();
        $estados_solicitudes = \App\EstadosSolicitudes::all();

        return view(
            'rapsinet.busquedas.solicitudes.solicitudes',
            [
                'tipo_solicitudes' => $tipo_solicitudes,
                'regiones' => $regiones,
                'estados_solicitudes' => $estados_solicitudes
            ]
        );
    }
}
