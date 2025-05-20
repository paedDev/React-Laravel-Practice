<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100.900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0;1,100;1,200;1,300;1,400;1,500;&display=swap"
        rel="stylesheet">

</head>

<body class="bg-black font-hanken ">

    <div class="px-10 ">
        <nav class="flex items-center justify-between py-4 border-b border-white/20">
            <div>
                <a href="">
                    <img src="{{ Vite::asset('resources/images/logo.jpeg') }}" alt="Logo "
                        class="w-10 h-10 rounded-full text-center">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            <div>
                <a href="">Post a Job</a>
            </div>
        </nav>
        <main class="mt-10 max-w-5xl mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
