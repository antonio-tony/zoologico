<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\principalController;
use App\Http\Controllers\cursoController;
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

Route::get('/principal',principalController::class);


Route::get('mascotas',[cursoController::class,'index']);
Route::get('mascotas/raton',[cursoController::class,'create']);
Route::get('mascotas/gato', [cursoController::class,'show']);
Route::get('mascotas/chivo', [cursoController::class,'show2']);
