<?php

use Illuminate\Support\Facades\Route;
Use \App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('welcome');
});
 Route::resource('categorie', CategorieController::class);
