<?php
use GuzzleHttp\Middleware;

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

//cargando Clases

use App\Http\Middleware\ApiAuthMiddleware;

// RUTAS DE PRUEBA
Route::get('/', function () {
    return '<h1>hola mundo con laravel </h1>';
});

Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/pruebas/{nombre?}', function($nombre = null){

    $texto = '<h2>Texto desde una ruta</h2>';
    $texto .= 'nombre: '.$nombre;

    return view('pruebas',array(
        'texto' => $texto
    ));
});

Route::get('/animales' , 'Pruebascontroller@index');
Route::get('/test-orm' , 'Pruebascontroller@testOrm');

// RUTAS DE API


/* Metodos HTTP comunes
  *  GET: Conseguir datos o recursos
  *  POST: Guardar datos o recurso o hacer logica o desde un formulario
  *  PUT:  Actualizar datos o recursos
  *  DELETE: ELIMNAR DATOS O RECURSOS
*/

//rutas de  pruebas
        Route::get('/usuario/pruebas', 'UserController@pruebas');
        Route::get('/categoria/pruebas', 'CategoryController@pruebas');
        Route::get('/entrada/pruebas', 'PostController@pruebas');


        // Rutas de controlados de usuario

        Route::post('/api/register', 'UserController@register');
        Route::post('/api/login', 'UserController@login');
        Route::put('/api/user/update', 'UserController@update');
        Route::post('/api/user/upload',  'UserController@upload')->middleware(ApiAuthMiddleware::class);


