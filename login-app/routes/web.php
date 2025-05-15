<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('posts', PostsController::class);

Route::get("/projects", function () {
    return view("welcome");
});

Route::get("/register", [RegisterUserController::class, 'create']);
Route::post("/register", [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
