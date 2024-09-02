<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function() {
    return 'Hello World';
});
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
Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang!';
});

Route::get('/about', function() {
    return 'Nama saya Muhammad Naufal Assyauqi Ardyawan <br> NIM saya adalah 2241760046';
});

Route::get('/user/{name?}', function($name='John') {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/article/{id}', function ($id) {
    return 'Halaman artikel dengan ID ' . $id;
});
