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

/*Index*/
Route::get('/', 'LoginController@index')->name('index');
//Route::get('/evaluaciones', 'LoginController@evaluations')->name('evaluations');
Route::get('/evaluaciones', 'LoginController@evaluation_basic')->name('evaluations');
Route::get('/evaluacion-basica', 'LoginController@evaluation_basic')->name('evaluation-basic');


//Auth::routes();
Route::get('/log', 'LoginController@login')->name('login');
Route::get('/restablecer-password', 'LoginController@restablecer')->name('restablecer');
Route::get('/nuevo-password', 'LoginController@nuevo')->name('nuevo');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::post('/handlelogin', 'LoginController@handlelogin')->name('handlelogin');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => 'is-admin'], function(){

	Route::get('/calendario', 'RafaController@calendar')->name('calendar');
	Route::get('/mapa-eventos', 'RafaController@map')->name('map');
	Route::get('/mapa-usuarios', 'RafaController@user_map')->name('usermap');
	Route::get('/evento', 'RafaController@event')->name('event');


	Route::get('/usuarios', 'RafaController@users')->name('users');
	Route::get('/categorias', 'RafaController@categories')->name('categories');
	Route::get('/actividades', 'RafaController@activities')->name('activities');

	Route::get('/chat', 'RafaController@chat')->name('chat');

});


	
Route::get('/estadisticas', 'RafaController@statistics')->name('statistics');
Route::get('/operacion', 'RafaController@operation')->name('operation');
Route::get('/eventos', 'RafaController@events')->name('events');
