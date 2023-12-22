<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
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


Route::get('/', [PostController::class,'ShowPosts'])->name('home');
Route::get('/content/{post_id}', [PostController::class,'index'])->name('content');

Route::get('/login',function(){
    
    return view('auth.login');

})->name('login');

Route::post('/login_in',[LoginController::class,'authenticate'])->name('login_in');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');


Route::get('/register',function(){
    
    return view('auth.register');

})->name('register');


Route::post('/register_user',[RegisterController::class,'create'])->name('register_user');

Route::get('/dashboard',[Dashboard::class,'index'])->name("dashboard")->middleware("auth");


//Post controller

Route::post('/post_create',[PostController::class,'create'])->name('post_create')->middleware("auth");
Route::post('/post_update',[PostController::class,'update'])->name('post_update');
Route::post('/post_disable',[PostController::class,'disable'])->name('post_disable');
Route::get('/my_posts/{user_id}',[PostController::class,'my_posts'])->name('my_posts');
Route::get('/show_posts',[PostController::class,'showpots'])->name('show_posts');
Route::get('/search_post',[PostController::class,'search_post'])->name("search_post");


//Coment 
Route::post('/coment_update',[PostController::class,'update'])->name("coment_update");
Route::post('/coment_disable',[PostController::class,'disable_coment'])->name("coment_disable");
Route::post('/coment_save',[PostController::class,'create'])->name("coment_save");

//Category

Route::post('/category_create',[CategoryController::class,'create'])->name("category_create");
Route::post('/update_category/{id}',[CategoryController::class,'update'])->name("update_category");
Route::post('/category_disable/{id}',[CategoryController::class,'disable'])->name("category_create");
Route::get('/show_categories',[CategoryController::class,'showCategories'])->name("category_create");
Route::get('/show_category_from_post',[CategoryController::class,'show_category_from_post'])->name("show_category_from_post");
Route::get('/search_category',[CategoryController::class,'search']);


//Setting                            
Route::get('/dashboard/settings',[SettingController::class,'show'])->name('settings');
Route::post('settings_create',[SettingController::class,'create'])->name('settings_create')->middleware('auth');
