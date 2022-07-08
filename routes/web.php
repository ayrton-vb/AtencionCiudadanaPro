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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/clientes/{id}/categoriasByArea','App\Http\Controllers\ClienteController@categoriasByArea');

Route::get('/requisitos/{id}/{id2}/editRequisitobyTramite','App\Http\Controllers\RequisitoController@editRequisitobyTramite');

Route::get('/tramites/{id}/requisitobyTramiteCreate','App\Http\Controllers\RequisitoController@requisitobyTramiteCreate');

Route::get('/tramites/{id}/requisitobyTramite','App\Http\Controllers\RequisitoController@requisitobyTramite');

Route::resource('requisitos','App\Http\Controllers\RequisitoController');

Route::resource('tramites','App\Http\Controllers\TramiteController');

Route::resource('categorias','App\Http\Controllers\CategoriaController');

Route::resource('areas','App\Http\Controllers\AreaController');

Route::resource('direcciones','App\Http\Controllers\DireccionController');

Route::resource('clientes','App\Http\Controllers\ClienteController');
