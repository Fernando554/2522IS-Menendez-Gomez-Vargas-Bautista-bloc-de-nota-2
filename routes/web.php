<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\publicacionController;

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

//Principal
Route::get('/', [publicacionController::class,'index'])->name('index');

//Unidad 1
Route::get('/unidad1', [publicacionController::class,'unidad1'])->name('unidad1');
Route::get('/unidad1/{id}', [publicacionController::class,'T_unidad1'])->name('T_unidad1');

//Unidad 2
Route::get('/unidad2', [publicacionController::class,'unidad2'])->name('unidad2');
Route::get('/unidad2/{id}', [publicacionController::class,'T_unidad2'])->name('T_unidad2');


