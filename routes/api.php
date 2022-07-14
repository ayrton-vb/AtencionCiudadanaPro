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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/tramites/{id}/requisito','App\Http\Controllers\RequisitoController@byTramite');

Route::get('/tramites/{id}/direccion','App\Http\Controllers\AreaController@byDireccion');

Route::get('/tramites/{id}/area','App\Http\Controllers\CategoriaController@byArea');

Route::get('/tramites/{id}/area2','App\Http\Controllers\TramiteController@byArea');
