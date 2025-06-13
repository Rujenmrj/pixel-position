<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
    rel="stylesheet">
    @vite(['resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotesk pb-20">

    <div class="px-10">
        <nav class="flex font-bold items-center justify-between mx-10 border-b border-white/10 py-4">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="font-bold space-x-6">
                <a href="/">Jobs</a>
                <a href="/salaries">Salaries</a>
                <a href="/companies">Companies</a>
            </div>

            @auth
            <div class="flex items-center space-x-6">
            <div>
                <a href="/jobs/create">Post a Job</a>
            </div>

                <form action="/logout" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Log Out</button>
                </form>
            @endauth

            @guest
                <div class="font-bold space-x-6">
                    <a href="/register">Register</a>
                    <a href="/login">Log In</a>
            @endguest
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>
</html>
