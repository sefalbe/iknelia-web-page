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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'CargarProductosController@index')->name('home')->middleware('auth')->middleware('cors');
Route::get('/', 'WelcomeController@index')->name('init')->middleware('cors');

Route::get('/administracion', 'CargarProductosController@index')->name('carga')->middleware('auth')->middleware('cors');
Route::post('/administracion/update', 'CargarProductosController@update')->name('update')->middleware('auth')->middleware('cors');
Route::post('/administracion/insert', 'CargarProductosController@insert')->name('insert')->middleware('auth')->middleware('cors');
Route::post('/administracion/delete', 'CargarProductosController@delete')->name('delete')->middleware('auth')->middleware('cors');

Route::get('/cuenta', 'CargarProductosController@cuenta')->name('cuenta')->middleware('auth');


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
