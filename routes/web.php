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

Route::get('/prueba/{nombre?}', function($nombre = null){

    $texto = '<h2>Texto desde una ruta</h2>';
    $texto = 'Nombre:'.$nombre;
    return view('pruebas', array(
        'texto' -> $texto
    ));
});

 Route::get('/animales', 'PruebasController@index');
 Route::get('/test-orm', 'PruebasController@testOrm');

 //Metodos http comunes
 /*
    get: Conseguir datos o recursos
    Post: guardar datos o recuersos o hacer logica desde el formulario
    Put: actualizar datos o recursos 
    delete: eliminar datos 
 */
 
 //Rutas del API

 Route::get('/usuario/pruebas', 'UserController@pruebas');
 
 Route::get('/categoria/pruebas', 'CategoryController@pruebas');
 
 Route::get('/entrada/pruebas', 'PostController@pruebas');

 //Rutas del controlador de usuario

 Route::post('/api/register', 'UserController@register');
 Route::post('/api/login', 'UserController@login');