<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;

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
Route::view('/','welcome');

Route::view('login','auth.login');
Route::view('register','auth.register');

Route::resource('auth', AuthController::class);

// Route::middleware(['auth', 'second'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    
    Route::resource('users', UserController::class);
    
    Route::resource('produtos', ProdutoController::class);
    
    Route::resource('categorias', CategoriaController::class);
// });
