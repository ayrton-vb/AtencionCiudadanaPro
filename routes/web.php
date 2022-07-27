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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/','App\Http\Controllers\ClienteController');

Route::resource('clientes','App\Http\Controllers\ClienteController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/clientes/{id}/servicioByServicio','App\Http\Controllers\TramiteController@serviciosByServicios');

Route::get('/clientes/{id}/tramiteByTramite','App\Http\Controllers\TramiteController@tramiteByTramite');

Route::get('/clientes/{id}/tramiteByArea','App\Http\Controllers\ClienteController@tramiteByArea');

Route::get('/clientes/{id}/tramiteByArea','App\Http\Controllers\ClienteController@tramiteByArea');

Route::get('/clientes/{id}/categoriasByArea','App\Http\Controllers\ClienteController@categoriasByArea');

Route::get('/requisitos/{id}/{id2}/editRequisitobyTramite','App\Http\Controllers\RequisitoController@editRequisitobyTramite');

Route::get('/requisitos/{id}/{id2}/editRequisitobyServicio','App\Http\Controllers\RequisitoController@editRequisitobyServicio');

Route::get('/tramites/{id}/requisitobyTramiteCreate','App\Http\Controllers\RequisitoController@requisitobyTramiteCreate');

Route::get('/servicios/{id}/requisitobyServicioCreate','App\Http\Controllers\RequisitoController@requisitobyServicioCreate');

Route::get('/tramites/{id}/requisitobyTramite','App\Http\Controllers\RequisitoController@requisitobyTramite');

Route::get('/servicios/{id}/requisitobyServicio','App\Http\Controllers\RequisitoController@requisitobyServicio');

Route::resource('requisitos','App\Http\Controllers\RequisitoController');

Route::resource('tramites','App\Http\Controllers\TramiteController');

Route::resource('categorias','App\Http\Controllers\CategoriaController');

Route::resource('areas','App\Http\Controllers\AreaController');

Route::resource('direcciones','App\Http\Controllers\DireccionController');

Route::resource('clientes','App\Http\Controllers\ClienteController');

Route::resource('servicios','App\Http\Controllers\ServicioController');

Route::get('/pdf/{id}/pdfrequisitobyTramite','App\Http\Controllers\PDFController@PDF');
