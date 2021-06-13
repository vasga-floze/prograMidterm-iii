<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//rutas para API
//listar
Route::get('recetas', 'App\Http\Controllers\RecetasController@index');
//listar por id
Route::get('receta/{id}', 'App\Http\Controllers\RecetasController@show');
//guardar
Route::post('receta', 'App\Http\Controllers\RecetasController@store');
//update
Route::put('receta', 'App\Http\Controllers\RecetasController@store');
//eliminar
Route::delete('receta/{id}', 'App\Http\Controllers\RecetasController@destroy');