<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
// GET|HEAD        posts posts.index › PostsController@ind…  
//   POST            posts posts.store › PostsController@sto…  
//   GET|HEAD        posts/create posts.create › PostsContro…  
//   GET|HEAD        posts/{post} posts.show › PostsControll…  
//   PUT|PATCH       posts/{post} posts.update › PostsContro…  
//   DELETE          posts/{post} posts.destroy › PostsContr…  
//   GET|HEAD        posts/{post}/edit posts.edit › PostsCon…  
// Route::resource('posts', PostsController::class);
Route::get("/posts", [PostsController::class, 'index']);
Route::get("/posts/create", [PostsController::class, 'create']);
Route::post("/posts", [PostsController::class, 'store']);
Route::get("/posts/{post}", [PostsController::class, 'show'])->name('post.show');
Route::get("/posts/{post}/edit",   [PostsController::class, 'edit']);
// ->middleware(['auth', 'can:edit,post'])
// ->name('posts.edit');

Route::patch("/posts/{post}",         [PostsController::class, 'update']);
// ->middleware(['auth', 'can:update,post'])
// ->name('posts.update');

Route::delete("/posts/{post}",         [PostsController::class, 'destroy']);
// ->middleware(['auth', 'can:delete,post'])
// ->name('posts.destroy');

Route::get("/register", [RegisterUserController::class, 'create']);
Route::post("/register", [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
