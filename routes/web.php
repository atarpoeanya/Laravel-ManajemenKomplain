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

//kategori
Route::get('/kategori', 'App\Http\Controllers\KategoriController@index');
Route::get('/kategori/create', 'App\Http\Controllers\KategoriController@create');
Route::post('/kategori', 'App\Http\Controllers\KategoriController@store');

//complain
Route::get('/complain', 'App\Http\Controllers\ComplainController@index');
Route::get('/complain/create', 'App\Http\Controllers\ComplainController@create');
Route::post('/complain', 'App\Http\Controllers\ComplainController@store');

//complain komentar
Route::get('/complainkomentar', 'App\Http\Controllers\ComplainKomentarController@index');
Route::get('/complainkomentar/create', 'App\Http\Controllers\ComplainKomentarController@create');
Route::post('/complainkomentar', 'App\Http\Controllers\ComplainKomentarController@store');

//pertanyaan rating
