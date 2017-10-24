<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'LoginController@index');

Route::post('/Login/validar', 'LoginController@loginUsuario');
Route::get('/Login/password', 'UsuarioController@solicitarPassword');
Route::get('/Login/cerrar', 'LoginController@logoutUsuario');

Route::get('/Autentificar/midasToken/{token}', 'LoginController@autentificarTokenMidas');

Route::get('/Home/index', 'HomeController@index');



/** rutas modulo Usuario */
Route::get('/Usuario/misDatos', 'UsuarioController@misDatos');
Route::post('/Usuario/guardarMisDatos', 'UsuarioController@guardarDatos');
Route::post('/Usuario/cambiarPassword', 'UsuarioController@actualizarPassword');