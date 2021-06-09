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
Route::get('dasboard', 'UserController@dashboard')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// ====== tables ======

//ref_layanan
Route::get('/layanan', 'App\Http\Controllers\refLayananController@index');
Route::get('/layanan/create', 'App\Http\Controllers\refLayananController@create');
Route::post('/layanan', 'App\Http\Controllers\refLayananController@store');

//ref_unit
Route::get('/unit', 'App\Http\Controllers\refUnitController@index');
Route::get('/unit/create', 'App\Http\Controllers\refUnitController@create');
Route::post('/unit', 'App\Http\Controllers\refUnitController@store');

//layanan_unit
Route::get('/layananunit', 'App\Http\Controllers\LayananUnitController@index');
Route::get('/layananunit/create', 'App\Http\Controllers\LayananUnitController@create');
Route::post('/layananunit', 'App\Http\Controllers\LayananUnitController@store');