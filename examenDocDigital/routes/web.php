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

Route::get('/', 'MainController@home');

Auth::routes();

Route::resource('empleados', 'EmpleadosController');

Route::resource('sucursales', 'SucursalesController');

/*
	GET /empleados => index
	POST /empleados => store
	GET /empleados/create => Formulario para crear

	GET /empleados/:id => Mostrar un producto con ID
	GET /empleados/:id/edit
	PUT/PTCH /empleados/:id
	DELETE /empleados/:id
*/
Route::get('/home', 'HomeController@index');
