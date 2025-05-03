<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\JobListing;
use App\Models\Language;

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
    return view('pages.jobs', ['jobs' => JobListing::all()]);
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

    return view('language.languages', ['languages' => Language::getAllLanguage()]);
});

Route::get('/languages/{id}', function ($id) {

    // other way to use function and arrow function
    // $language = Arr::first(Language::getAllLanguage(), function ($language) use ($id) {
    //     return $language['id'] === $id;
    // });

    // $language = Arr::first($languages, fn($language) => $language['id'] === $id);
    $language = Language::findLanguage($id);
    return view('language.language', ['language' => $language]);
});
