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

Route::get('/', function () {
    return view('welcome');
});
        //Rutas de Api


        //Rutas de pruebas
        Route::get('/test-orm', 'PruebasController@testOrm');
        Route::get('/prueba-user', 'UserController@pruebas');
        Route::get('/prueba-cita', 'CitaController@pruebas');
        Route::get('/prueba-empleado', 'EmpleadoController@pruebas');
        Route::get('/prueba-servicios', 'ServicioController@pruebas');

        //Ruta de controlador de usuario
        Route::post('/api/register','UserController@registro');
        Route::post('/api/login',   'UserController@login');



