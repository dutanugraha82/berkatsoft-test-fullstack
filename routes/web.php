<?php

use App\Http\Controllers\BioskopController;
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

Route::get('/', [BioskopController::class,'index']);
Route::get('/popular', [BioskopController::class,'popular']);
Route::get('/top-rated', [BioskopController::class,'topRated']);
Route::get('/upcoming', [BioskopController::class,'upcoming']);
Route::get('/movies/{id}',[BioskopController::class,'detail']);
