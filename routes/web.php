<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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
Route::group(['middleware' => ['guest']], function () {
  Route::get('/',[AuthController::class,'showLogin'])->name('showLogin');
  Route::post('login',[AuthController::class,'login'])->name('login');
});
Route::group(['middleware' => ['auth']], function () {
  Route::get('home',function(){ return view('home'); })->name('home');
  Route::post('logout',[AuthController::class,'logout'])->name('logout');
});
