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
    //latest here is to add a recennt created
    $jobs = JobListing::with('employer')->latest()->simplePaginate(10);
    // $jobs = JobListing::with('employer')->cursorPaginate(10);
    return view('jobs.index', ['jobs' => $jobs]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});
Route::get('/jobs/{id}', function ($id) {
    // $job = Arr::first(Job::all(), function ($job) use ($id) {
    //     return $job['id'] === $id;
    // });
    $job = JobListing::find($id);
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
    //validation skip
    //dd(request()->all());
    // dd(request('title'));
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'min:4']
    ]);
    JobListing::create([
        'title' => request('title'),
        'salary' =>  request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});

Route::get("/contact", function () {
    return view('pages.contact');
});


Route::get('/languages', function () {
    $languages = Language::latest()->simplePaginate(12);
    return view('language.index', ['languages' => $languages]);
});

Route::get("/languages/create", function () {
    return view("language.create");
});
Route::post("/languages", function () {
    // dd(request()->all());
    request()->validate([
        'title' => ['required', 'min:3'],
        'description' => ['required', 'max:255']
    ]);
    Language::create([
        'title' => request('title'),
        'description' => request('description')
    ]);
    return redirect('/languages');
});
Route::get('/languages/{id}', function ($id) {

    // other way to use function and arrow function
    // $language = Arr::first(Language::getAllLanguage(), function ($language) use ($id) {
    //     return $language['id'] === $id;
    // });

    // $language = Arr::first($languages, fn($language) => $language['id'] === $id);
    $language = Language::find($id);
    return view('language.show', ['language' => $language]);
});

// Post area
Route::get('/posts', function () {
    $posts = Post::latest()->paginate(10);
    return view('posts.index', ['posts' => $posts]);
});
Route::get("/posts/create", function () {
    return view('posts.create');
});

Route::post("/posts", function () {
    // always validate
    request()->validate([
        'title' => ['required', 'min:5'],
        'body' => ['required', 'max:255']
    ]);

    Post::create([
        'title' => request('title'),
        'body' => request('body')
    ]);
    return redirect('/posts')->with('success', 'Post created successfully!');
});
Route::get("/posts/{id}", function ($id) {
    $post = Post::find($id);
    return view('posts.show', ['post' => $post]);
});
