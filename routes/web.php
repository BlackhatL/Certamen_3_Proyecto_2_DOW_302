<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\PublicoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home.index');



Route::get('/admin',[AdminController::class,'index'])->name('admin.index');

/*
Route::post('/admin/users',[AdminController::class,'edit'])->name('admin.users');
*/

Route::get('admin/users',[AdminController::class,'showuser'])->name('admin.users');
Route::get('/admin/images',[AdminController::class,'show'])->name('admin.images');
Route::delete('/admin/{cuentas}',[AdminController::class,'destroy'])->name('admin.destroy');




Route::get('/artista',[ArtistaController::class,'index'])->name('artista.index');
Route::post('/artista',[ArtistaController::class,'store'])->name('artista.store');



Route::get('/publico',[PublicoController::class,'index'])->name('publico.index');