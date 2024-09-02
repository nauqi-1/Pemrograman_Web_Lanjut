<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/article/{id?}', [ArticleController::class, 'article']);

Route::resource('photos', PhotoController::class);

Route::get('/greeting', [WelcomeController::class, 'greeting']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/user/{name?}', function($name='John') {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});


use App\Http\Controllers\POSHomeController;
Route::get('/home', [POSHomeController::class, 'home']);

use App\Http\Controllers\POSProductsController;
Route::get('/category/food_beverage', [POSProductsController::class, 'food_beverage']);
Route::get('/category/beauty_health', [POSProductsController::class, 'beauty_health']);
Route::get('/category/home_care', [POSProductsController::class, 'home_care']);
ROute::get('/category/baby_kid', [POSProductsController::class, 'baby_kid']);

use App\Http\Controllers\POSUserController;
Route::get('/user_pos/{id}/name/{name}', [POSUserController::class, 'user']);

use App\Http\Controllers\POSPenjualanController;
Route::get('/penjualan', [POSPenjualanController::class, 'penjualan']);
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
