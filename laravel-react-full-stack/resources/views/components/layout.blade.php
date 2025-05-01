<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Tutorials</title>
    @vite(['resources/css/app.css']) <!-- Add this line -->
 

</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>
        {{-- <nav class="bg-red-200 p-4"> <!-- Added bg-red-200 here -->
            <h1 class="text-3xl font-bold text-white">Laravel Tutorial</h1>
            <div class="space-x-4 mt-2">
                <a href="/ninjas" class="text-white hover:text-gray-200">All Ninjas</a>
                <a href="/ninjas/create" class="text-white hover:text-gray-200">Create New Ninjas</a>
            </div>
        </nav> --}}
    </header>

    <main class="container">
        {{$slot}}
    </main>
    
</body>
</html>