<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('posts', PostsController::class);

Route::get("/projects", function () {
    return view("welcome");
});
