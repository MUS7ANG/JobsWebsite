<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salikh</title>
    @vite(['../resources/css/app.css', '../resources/js/app.js'])
</head>
<body class="bg-black text-white mx-5">
    <div class="py-5">
        <nav class="flex justify-between items-center border-b border-white/10">
            <div class="">
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="/">Jobs</a>
                <a href="/">Salaries</a>
                <a href="/">Companies</a>
                <a href="/">Careers</a>
            </div>

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/login">Log In</a>
                    <a href="/register">Register</a>
                </div>
            @endguest

            @auth
                <div class="space-x-6 font-bold flex">

                    <a href="/jobs/create">Post a job</a>
                    <form method="POST" action="/logout">
                        @csrf
                        @method('DElETE')

                        <x-form.button>Log Out</x-form.button>
                    </form>
                </div>
            @endauth

        </nav>
    </div>

    <main class="mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>

</body>
</html>
