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
Route::get('/facturas', function(){
    return view('facturas.iniciofacturas');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users','UsuarioController');
Route::resource('productos','ProductoController');
Route::resource('facturas','FacturaController');

Route::get('/datafacturas','ReporteController@getBills');
Route::get('/datauser','ReporteController@getBillsByUser');
Route::get('/dataproducto','ReporteController@getBillsByProduct');
