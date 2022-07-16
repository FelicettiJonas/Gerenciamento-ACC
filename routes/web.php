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

Route::controller(\App\Http\Controllers\HomeController::class)
    ->prefix('/home')
    ->group(function (){
        Route::get('/', 'index');
        Route::get('/{userName}', 'show');
    });

Route::controller(\App\Http\Controllers\ActivitiesController::class)
    ->prefix('/atividade')
    ->group(function (){
        Route::get('/', 'index');
    });

Route::controller(\App\Http\Controllers\LoginController::class)
    ->prefix('/login')
    ->group(function (){
        Route::get('/', 'index');
        Route::post('/', 'index');
    });

Route::controller(\App\Http\Controllers\SinginController::class)
    ->prefix('/singin')
    ->group(function (){
        Route::get('/', 'index');
        Route::post('/', 'index');
    });

Route::controller(\App\Http\Controllers\AccController::class)
    ->prefix('/acc')
    ->group(function (){
        Route::get('/', 'index');
    });