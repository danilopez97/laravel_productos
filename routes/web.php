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
Route::get('/home', 'productosController@index');
Route::get('producto/create', 'productosController@create');
Route::post('producto/store', 'productosController@store');
//Route::get('producto/mostrar/{idproducto}', 'productosController@show');
Route::get('producto/edit/{idproducto}', 'productosController@edit');
Route::post('producto/update/{idproducto}', 'productosController@update');

Route::get('producto/delete/{idproducto}', 'productosController@delete');
Route::get('producto/show/{idproducto}', 'productosController@show');

Route::get('/mostrartipo', 'tipoproductoController@index');
Route::get('tipo/create', 'tipoproductoController@create');
Route::post('tipo/store', 'tipoproductoController@store');
Route::get('tipo/delete/{id_tipo_producto}', 'tipoproductoController@delete');
Route::get('tipo/edit/{id_tipo_producto}', 'tipoproductoController@edit');
Route::post('tipo/update/{id_tipo_producto}', 'tipoproductoController@update');


Route::get('/', function () {
    return view('welcome');
});
