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


Route::get('prueba',function(){
    return 'Hola desde web.php';
});

Route::get('edad/{edad?}',function($edad = 24){
    return 'Mi edad es ' . $edad;
});

Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');


/*
 * Resources 
 */
Route::resource('movie', 'MovieController');

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');