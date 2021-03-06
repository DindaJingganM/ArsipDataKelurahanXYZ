<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/arsip', 'ArsipController@index');
Route::get('/user', 'UserController@index');
Route::get('/inputarsip', 'InputArsipController@index');
Route::post('/arsip', 'ArsipController@input');
Route::delete('/arsip/{id}', 'ArsipController@delete');
Route::get('/lihat', 'LihatController@index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
