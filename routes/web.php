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

Route::view('login','auth.login')->name('login');
Route::view('register','auth.register')->name('register');
Route::post('deflogin', [AuthController::class,'login'])->name('deflogin');
Route::post('defregister', [AuthController::class,'register'])->name('defregister');
Route::get('deflogout', [AuthController::class,'logout'])->name('deflogout');

// Route::resource('auth', AuthController::class);

Route::middleware(['auth'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    
    Route::resource('users', UserController::class);
    
    Route::resource('produtos', ProdutoController::class);
    Route::get('produto/destroy/{produto}',[ProdutoController::class,'destroy'])->name('produto.destroy');
    
    Route::resource('categorias', CategoriaController::class);
});
