<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Models\category;
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
    return view('index');
});

Route::resource('/produk',  ProdukController::class);
Route::get('/register',  [RegisterController::class, 'index']);
Route::post('/register',  [RegisterController::class, 'store']);
