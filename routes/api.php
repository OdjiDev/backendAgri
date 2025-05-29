<?php

use Illuminate\Support\Facades\Route;
Use \App\Http\Controllers\CategorieController;
use App\Http\Controllers\UserController;

Route::apiResource('users', UserController::class);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// }); 