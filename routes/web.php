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

//Login y registrar
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

//Materias
Route::get('/materias', 'MateriasController@index');

//Maestros
Route::get('/maestros', 'MaestroController@index');
Route::post('/maestros/guardar', 'MaestroController@guardar');
Route::put('/maestros/actualizar/{maestro}','MaestroController@actualizar');
Route::delete('/maestros/eliminar/{maestro}', 'MaestroController@eliminar');

//Salones
Route::get('/salones', 'SalonesController@index');
Route::post('/salones/guardar', 'SalonesController@guardar');
Route::put('/salones/actualizar/{salon}','SalonesController@actualizar');
Route::delete('/salones/eliminar/{salon}', 'SalonesController@eliminar');

//Grupos
Route::get('/grupos', 'GruposController@index');
Route::post('/grupos/guardar', 'GruposController@guardar');
Route::put('/grupos/actualizar/{grupo}','GruposController@actualizar');
Route::delete('/grupos/eliminar/{grupo}', 'GruposController@eliminar');

//Reportes
Route::get('/reportes', 'ReportesController@index');