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

Route::get('/commands', 'App\Http\Controllers\CommandController@index');
Route::post('/commands', 'App\Http\Controllers\CommandController@store');
Route::get('/commands/{command}', 'App\Http\Controllers\CommandController@show');
Route::put('/command', 'App\Http\Controllers\CommandController@update');
Route::delete('/commands/{command}', 'App\Http\Controllers\CommandController@destroy');