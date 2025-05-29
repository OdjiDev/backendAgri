<?php

use Illuminate\Support\Facades\Route;
Use \App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('welcome');
});
 Route::resource('categorie', CategorieController::class);

 use App\Http\Controllers\UserController;

 Route::resource('users', UserController::class);