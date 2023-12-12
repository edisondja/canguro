<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
    return view('welcome');

});

Route::get('/login',function(){
    
    return view('auth.login');

})->name('login');

Route::post('/login_in',[LoginController::class,'authenticate'])->name('login_in');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');


Route::get('/register',function(){
    
    return view('auth.register');

})->name('register');


Route::post('/register_user',[RegisterController::class,'create'])->name('register_user');