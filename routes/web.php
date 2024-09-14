<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [ArticleController::class, 'index']);
Route::get('/article/{id}', [ArticleController::class, 'show']);

Route::group(['middleware' => ['auth', 'role:admin|editor']], function () {
 
});


Route::get('/articles', [ArticleController::class, 'index']);


Route::get('/articles', [ArticleController::class, 'index']);
