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
class Job
{
    public static function all(): array
    {
        return [
            ['id' => '1', 'title' => 'Director',   'Salary' => '$50,000'],
            ['id' => '2', 'title' => 'Programmer', 'Salary' => '$10,000'],
            ['id' => '3', 'title' => 'Teacher',    'Salary' => '$40,000'],
        ];
    }
}

Route::get('/jobs', function () {
    return view('pages.jobs', ['jobs' => Job::all()]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Arr::first(Job::all(), function ($job) use ($id) {
        return $job['id'] === $id;
    });
    // $job = Arr::first(Job::all(), fn($job) => $job['id'] === $id);
    return view('pages.job', ['job' => $job]);
});
Route::get("/contact", function () {
    return view('pages.contact');
});
$languages = [
    ['id' => '1', 'title' => 'Japan', 'description' => 'Japan is an island country in East Asia, located in the Pacific Ocean off the northeast coast of the Asian mainland, comprising four main islands—Hokkaido, Honshu, Shikoku, and Kyushu—and thousands of smaller islands. '],
    ['id' => '2', 'title' => 'Filipino', 'description' => 'The Philippines, officially the Republic of the Philippines, is an archipelagic country in Southeast Asia, consisting of over 7,600 islands in the western Pacific Ocean and divided into three main geographical regions: Luzon, Visayas, and Mindanao.'],
    ['id' => '3', 'title' => 'Korea', 'description' => ' South Korea, officially the Republic of Korea, is a country in East Asia occupying the southern half of the Korean Peninsula, bordered by North Korea to the north, the Yellow Sea to the west, and the Sea of Japan to the east. '],
    ['id' => '4', 'title' => 'China', 'description' => ' China, officially the People’s Republic of China, is a country in East Asia with over 1.4 billion people—making it the world’s most populous nation—spanning nearly 9.6 million km² across diverse landscapes from mountains to plains.'],
    ['id' => '5', 'title' => 'Vietnam', 'description' => 'Vietnam, officially the Socialist Republic of Vietnam, is a country at the eastern edge of mainland Southeast Asia, stretching along an S-shaped coastline of about 1,650 km and home to over 100 million people.']

];
Route::get('/languages', function () use ($languages) {
    return view('language.languages', ['languages' => $languages]);
});

Route::get('/languages/{id}', function ($id) use ($languages) {

    // other way to use function and arrow function
    $language = Arr::first($languages, function ($language) use ($id) {
        return $language['id'] === $id;
    });

    // $language = Arr::first($languages, fn($language) => $language['id'] === $id);
    return view('language.language', ['language' => $language]);
});
