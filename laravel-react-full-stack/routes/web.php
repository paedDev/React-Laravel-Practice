<?php

use App\Http\Controllers\JobListingController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\JobListing;
use App\Models\Language;
use App\Models\Post;

Route::get('/', function () {
    return view('pages.home');
});

Route::get("/ninjas", function () {
    $ninjas = [
        ["name" => "mario", "skill" => 75, "id" => "1"],
        ["name" => "luigi", "skill" => 45, "id" => "2"],
    ];
    return view("ninjas.index", ["greeting" => "hello", "ninjas" => $ninjas]);
});

Route::get('/ninjas/create', function () {
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function ($id) {
    //fetch record with id
    return view("ninjas.show", ["id" => $id]);
});
Route::get("/contact", function () {
    return view('pages.contact');
});

// Route::resource('posts', PostController::class);
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'post');
Route::patch('/posts/{post}', [PostController::class, 'update'])
    ->middleware('auth')
    ->can('update', 'post');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])
    ->middleware('auth')
    ->can('delete', 'post');

Route::get('/jobs', [JobListingController::class, 'index']);
Route::get('/jobs/create', [JobListingController::class, 'create']);
Route::get("/jobs/{job}", [JobListingController::class, 'show']);
Route::post('/jobs', [JobListingController::class, 'store'])->middleware('auth');
Route::get("/jobs/{job}/edit", [JobListingController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');
Route::patch('/jobs/{job}', [JobListingController::class, 'update'])
    ->middleware('auth')
    ->can('update', 'job');;
Route::delete('/jobs/{job}', [JobListingController::class, 'destroy'])
    ->middleware('auth')
    ->can('delete', 'job');;


Route::resource("languages", LanguageController::class);

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get("/login", [LoginUserController::class, 'create'])->name('login');
Route::post("/login", [LoginUserController::class, 'store']);
Route::post("/logout", [LoginUserController::class, 'destroy']);


// index

// Route::get('/jobs', function () {
//     // Eager loading together with Employer table
//     // $jobs = JobListing::with('employer')->get();
//     // paginate with links in the jobs.blade

//     // Paginations
//     // $jobs = JobListing::with('employer')->paginate(10);
//     //latest here is to add a recennt created
//     $jobs = JobListing::with('employer')->latest()->simplePaginate(10);
//     // $jobs = JobListing::with('employer')->cursorPaginate(10);
//     return view('jobs.index', ['jobs' => $jobs]);
// });
// render create
// Route::get('/jobs/create', function () {
//     return view('jobs.create');
// });
// show
// Route::get('/jobs/{id}', function ($id) {
//     // $job = Arr::first(Job::all(), function ($job) use ($id) {
//     //     return $job['id'] === $id;
//     // });
//     $job = JobListing::find($id);
//     return view('jobs.show', ['job' => $job]);
// });
// // 
// Route::post('/jobs', function () {
//     //validation skip
//     //dd(request()->all());
//     // dd(request('title'));
//     request()->validate([
//         'title' => ['required', 'min:3'],
//         'salary' => ['required', 'min:4']
//     ]);
//     JobListing::create([
//         'title' => request('title'),
//         'salary' =>  request('salary'),
//         'employer_id' => 1
//     ]);
//     return redirect('/jobs');
// });

// // edit
// Route::get('/jobs/{id}/edit', function ($id) {

//     $job = JobListing::find($id);
//     return view('jobs.edit', ['job' => $job]);
// });
// // update
// // edit
// Route::patch('/jobs/{id}', function ($id) {
//     // validate never trust the user
//     request()->validate([
//         'title' => ['required', 'min:3'],
//         'salary' =>  ['required']
//     ]);
//     // authorize permssion to update this (on hold)
//     // update 
//     $job = JobListing::find($id);
//     // there are two ways to update
//     // 1
//     // $job->title = request('title');
//     // $job->title = request('salary');
//     // $job->save();
//     // 2
//     $job->update([
//         'title' => request('title'),
//         'salary' => request('salary')
//     ]);
//     // persist
//     // redirect back to jobs page
//     return redirect('/jobs/' . $job->id);
// });
// // destroy or delete
// Route::delete('/jobs/{id}', function ($id) {
//     // or u can inline it
//     JobListing::findOrFail($id)->delete();
//     // $job = JobListing::findOrFail($id);
//     // $job->delete();
//     return redirect('/jobs');
// });

// Route::get('/languages', function () {
//     $languages = Language::latest()->simplePaginate(12);
//     return view('language.index', ['languages' => $languages]);
// });

// Route::get("/languages/create", function () {
//     return view("language.create");
// });
// Route::post("/languages", function () {
//     // dd(request()->all());
//     request()->validate([
//         'title' => ['required', 'min:3'],
//         'description' => ['required', 'max:255']
//     ]);
//     Language::create([
//         'title' => request('title'),
//         'description' => request('description')
//     ]);
//     return redirect('/languages');
// });
// Route::get('/languages/{id}', function ($id) {

//     // other way to use function and arrow function
//     // $language = Arr::first(Language::getAllLanguage(), function ($language) use ($id) {
//     //     return $language['id'] === $id;
//     // });

//     // $language = Arr::first($languages, fn($language) => $language['id'] === $id);
//     $language = Language::find($id);
//     return view('language.show', ['language' => $language]);
// });

// Post area
// Route::get('/posts', function () {
//     $posts = Post::latest()->paginate(10);
//     return view('posts.index', ['posts' => $posts]);
// });
// Route::get("/posts/create", function () {
//     return view('posts.create');
// });

// Route::post("/posts", function () {
//     // always validate
//     request()->validate([
//         'title' => ['required', 'min:5'],
//         'body' => ['required', 'max:255']
//     ]);

//     Post::create([
//         'title' => request('title'),
//         'body' => request('body')
//     ]);
//     return redirect('/posts')->with('success', 'Post created successfully!');
// });
// Route::get("/posts/{id}", function ($id) {
//     $post = Post::find($id);
//     return view('posts.show', ['post' => $post]);
// });


// JOB Route Controller starts here
// Route::get('/jobs', [JobListingController::class, 'index']);
// Route::get('/jobs/create', [JobListingController::class, 'create']);
// Route::get("/jobs/{id}", [JobListingController::class, 'show']);
// Route::post('/jobs', [JobListingController::class, 'store']);
// Route::get("/jobs/{id}/edit", [JobListingController::class, 'edit']);
// Route::patch('/jobs/{id}', [JobListingController::class, 'update']);
// Route::delete('/jobs/{id}', [JobListingController::class, 'destroy']);

// language route here
// Route::get("/languages", [LanguageController::class, 'index']);
// Route::get("/languages/create", [LanguageController::class, 'create']);


// post here
// Route::get('/posts', [PostController::class, 'index']);
// Route::get('/posts/create', [PostController::class, 'create']);
// Route::post('/posts', [PostController::class, 'store']);
// Route::get('/posts/{id}', [PostController::class, 'show']);
// Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
// Route::patch('/posts/{id}', [PostController::class, 'update']);
// Route::delete('/posts/{id}', [PostController::class, 'destroy']);