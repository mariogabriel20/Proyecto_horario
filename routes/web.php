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
    return view('auth.login');
});

Auth::routes();

/*Route::get('/Ruta que se vera en el sitioweb', 'Controlador usado@funcion que tiene el controlador')->name('hnombre de la vista');*/

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/horarios','HomeController@vistahorarios')->name('horarios');

Route::get('/admin','HomeController@vistadmin')->name('admin');

Route::post('/admin','HomeController@modificar_usuario')->name('adm.modificar');

Route::get('/admin/{id}','HomeController@eliminar_usuario')->name('adm.eliminar');

Route::get('/horarios/redes','HomeController@vistaredes')->name('labs.redes');

Route::get('/horarios/programacion','HomeController@vistaprogramacion')->name('labs.programacion');

Route::get('/horarios/sistemas','HomeController@vistasistemas')->name('labs.sistemas');
