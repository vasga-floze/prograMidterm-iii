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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');
Route::get('/recetario', [App\Http\Controllers\RecetarioController::class, 'index'])->name('recetario');
Route::get('/favorite', [App\Http\Controllers\FavoriteController::class, 'index'])->name('favorite');
