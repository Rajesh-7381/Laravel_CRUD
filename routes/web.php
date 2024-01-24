<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/',)

Route::get('categories',[MainController::class,'index']);
Route::get('categories/create',[MainController::class,'create']);
Route::post('categories/create',[MainController::class,'store']);
Route::get('categories/{id}/edit',[MainController::class,'edit']);
Route::put('categories/{id}/edit',[MainController::class,'update']);
Route::get('categories/{id}/delete',[MainController::class,'delete']);


