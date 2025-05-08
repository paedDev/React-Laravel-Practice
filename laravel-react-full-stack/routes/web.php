<?php

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


Route::get('/jobs', function () {
    // Eager loading together with Employer table
    // $jobs = JobListing::with('employer')->get();
    // paginate with links in the jobs.blade

    // Paginations
    // $jobs = JobListing::with('employer')->paginate(10);
    $jobs = JobListing::with('employer')->simplePaginate(10);
    // $jobs = JobListing::with('employer')->cursorPaginate(10);
    return view('pages.jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {
    // $job = Arr::first(Job::all(), function ($job) use ($id) {
    //     return $job['id'] === $id;
    // });
    $job = JobListing::find($id);
    return view('pages.job', ['job' => $job]);
});
Route::get("/contact", function () {
    return view('pages.contact');
});

Route::get('/languages', function () {
    $languages = Language::simplePaginate(12);
    return view('language.languages', ['languages' => $languages]);
});

Route::get('/languages/{id}', function ($id) {

    // other way to use function and arrow function
    // $language = Arr::first(Language::getAllLanguage(), function ($language) use ($id) {
    //     return $language['id'] === $id;
    // });

    // $language = Arr::first($languages, fn($language) => $language['id'] === $id);
    $language = Language::find($id);
    return view('language.language', ['language' => $language]);
});

// Post area
Route::get('/posts', function () {
    return view('posts.posts', ['posts' => Post::all()]);
});
Route::get("/posts/{id}", function ($id) {
    $post = Post::find($id);
    return view('posts.post', ['post' => $post]);
});
