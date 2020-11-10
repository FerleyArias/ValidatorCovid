<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/api/personas', 'PersonasController@index')->name('index');
Route::post('/api/personas/guardar', 'PersonasController@store')->name('guardar');
Route::put('/api/personas/actualizar', 'PersonasController@update')->name('actualizar');
Route::delete('/api/personas/eliminar', 'PersonasController@destroy')->name('eliminar');
