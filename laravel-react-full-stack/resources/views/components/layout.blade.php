<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Tutorials</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Add this line -->
    <script src="https://cdn.tailwindcss"></script>


</head>

<body class="h-full">
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    <div class="">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img class="size-8 rounded-full"
                                src=https://static.vecteezy.com/system/resources/previews/047/656/219/non_2x/abstract-logo-design-for-any-corporate-brand-business-company-vector.jpg
                                alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                @auth
                                    <x-nav-links href="/" :active="request()->is('/')">Home</x-nav-links>
                                    <x-nav-links href="/jobs" :active="request()->is('jobs')">Jobs </x-nav-links>
                                    <x-nav-links href="/languages" :active="request()->is('languages')">Language</x-nav-links>
                                    <x-nav-links href="/posts" :active="request()->is('posts')">Posts</x-nav-links>

                                @endauth
                                {{-- <a href="/posts" 
                class="{{request() ->is('posts') ?'bg-gray-900 text-white' :'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md  px-3 py-2 text-sm font-medium ' }}">Posts</a>
              --}}

                            </div>
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


                            <!-- Profile dropdown -->



                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button"
                        class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            @auth
                <a href="/"
                    class="{{ request()->is('/') ? 'bg-gray-900 text-white ' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md  px-3 py-2 text-base font-medium "
                    aria-current="page">Home</a>
                <a href="/jobs"
                    class="{{ request()->is('jobs') ? 'bg-gray-900 text-white ' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md  px-3 py-2 text-base font-medium ">Jobs</a>
                <a href="/languages"
                    class="{{ request()->is('languages') ? 'bg-gray-900 text-white ' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md  px-3 py-2 text-base font-medium ">Language</a>
                <a href="/posts"
                    class="{{ request()->is('posts') ? 'bg-gray-900 text-white ' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md  px-3 py-2 text-base font-medium ">Posts</a>
            @endauth

        </div>

    </div>
    </nav>

    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between sm:items-center">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
            {{-- if statement for different create section on each nav bar links --}}
            @if (request()->is('jobs') || request()->is('jobs/create'))
                <x-button href='/jobs/create'
                    class="{{ request()->is('/jobs/create') ? 'bg-gray-900 text-white ' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Create Job
                </x-button>
            @elseif (request()->is('/languages/create') || request()->is('languages'))
                <x-button href='/languages/create'
                    class="{{ request()->is('languages/create') ? 'bg-gray-900 text-white ' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Create a Language
                </x-button>
            @elseif(request()->is('posts') || request()->is('posts/create'))
                <x-button href="/posts/create"
                    class="{{ request()->is('languages/create') ? 'bg-gray-900 text-white ' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Create a post
                </x-button>
            @endif


        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{-- Slotted content goes here --}}
            {{ $slot }}
        </div>
    </main>
    </div>

    {{-- <header class="text-white w-4/5 mx-auto">
    <nav class="flex justify-between items-center px-6 h-20 bg-gray-700 shadow-2xl rounded-xl">
      <h1>Laravel Tutorials </h1>
      <div class="space-x-4 ">
        <x-nav-links href="/" class="hover:text-gray-400">Home</x-nav-links>
        <x-nav-links href="/about" class="text-green-600">About</x-nav-links>
        <x-nav-links href="/contact">Contact</x-nav-links>
      </div>

    </nav>
    <nav class="bg-red-200 p-4"> <!-- Added bg-red-200 here -->
      <h1 class="text-3xl font-bold text-white">Laravel Tutorial</h1>
      <div class="space-x-4 mt-2">
        <a href="/ninjas" class="text-white hover:text-gray-200">All Ninjas</a>
        <a href="/ninjas/create" class="text-white hover:text-gray-200">Create New Ninjas</a>
      </div>
    </nav> --}}
    {{--
  </header> --}}


</body>

</html>
