<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;


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

Route::get('/', function(){
    return view('welcome');
});



Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/produk',  ProdukController::class)->middleware('auth');
Route::get('/register',  [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',  [RegisterController::class, 'store']);

Route::resource('/produk/create',  CreateController::class)->middleware('auth');


