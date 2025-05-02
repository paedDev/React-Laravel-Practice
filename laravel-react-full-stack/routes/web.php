<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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
    $jobs = [
        ['id' => '1', 'title' => 'Director',   'Salary' => '$50,000'],
        ['id' => '2', 'title' => 'Programmer', 'Salary' => '$10,000'],
        ['id' => '3', 'title' => 'Teacher',    'Salary' => '$40,000'],
    ];

    return view('pages.jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        ['id' => '1', 'title' => 'Director',   'Salary' => '$50,000'],
        ['id' => '2', 'title' => 'Programmer', 'Salary' => '$10,000'],
        ['id' => '3', 'title' => 'Teacher',    'Salary' => '$40,000'],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] === $id);
    
    return view('pages.job', ['job' => $job]);
});
Route::get("/contact", function () {
    return view('pages.contact');
});
