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
        Route::get('/', 'index')->name('site.home');
        Route::get('/{userName}', 'show')->name('site.show');
    });

Route::controller(\App\Http\Controllers\ActivityController::class)
    ->prefix('/atividade')
    ->group(function (){
        Route::get('/', 'create')->name('site.atividade.create');
        Route::post('/', 'form')->name('site.atividade.create.form');
        Route::get('/{id}', 'show')->name('site.atividade.show');
    });

Route::controller(\App\Http\Controllers\LoginController::class)
    ->prefix('/login')
    ->group(function (){
        Route::get('/', 'index')->name('site.login.get');
        Route::post('/', 'index')->name('site.login.post');
    });

Route::controller(\App\Http\Controllers\SinginController::class)
    ->prefix('/singin')
    ->group(function (){
        Route::get('/', 'index')->name('site.singin.get');
        Route::post('/', 'form')->name('site.singin.post');
    });