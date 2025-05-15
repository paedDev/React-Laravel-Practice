<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Login/Register Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- If using Laravel Mix or Vite --}}
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center ">
                        <div class="shrink-0">
                            <img class="size-8"
                                src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                                alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav-links href="/" :active="request()->is('/')">
                                    Home
                                </x-nav-links>
                                <x-nav-links href="/posts" :active="request()->is('posts')">
                                    Posts
                                </x-nav-links>
                                <x-nav-links href="/projects" :active="request()->is('projects')">
                                    Projects
                                </x-nav-links>

                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">
                                @guest
                                    <x-nav-links href="/login" :active="request()->is('login')">Log in</x-nav-links>
                                    <x-nav-links href="/register" :active="request()->is('register')">Register</x-nav-links>
                                @endguest
                                @auth
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <x-form-button>Log out</x-form-button>
                                    </form>
                                @endauth




                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/"
                        class="{{ request()->is('/') ? 'bg-gray-900 text-white ' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md  px-3 py-2 text-base font-medium ">Home</a>
                    <a href="/posts"
                        class="{{ request()->is('posts') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md  px-3 py-2 text-base font-medium ">Posts</a>
                    <a href="/projects"
                        class="{{ request()->is('projects') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md  px-3 py-2 text-base font-medium ">Projects</a>

                </div>

            </div>
    </div>
    </nav>

    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
            @if (request()->is('posts'))
                <x-button href="/posts/create">
                    Create Post
                </x-button>
            @endif
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
    </div>

</body>

</html>
