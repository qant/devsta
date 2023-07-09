<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Devsta - @yield('title')</title>
    @vite("./resources/css/app.css")
</head>
<body class="bg-gray-100">

<header class="p-5 border-b bg-white shadow">
    <div class="container mx-auto flex justify-between items-center">
        <h3 class="text-3xl font-black">Devsta</h3>
        <nav class="flex gap-2 items-center">
            <a class="font-bold uppercase text-gray-600 text-sm" href="/login">Login</a>
            <a class="font-bold uppercase text-gray-600 text-sm" href="/register">Register</a>
        </nav>
    </div>
</header>

<main class="container mx-auto mt-10">
    <h1 class="font-black text-center text-3xl mb-10">@yield('title')</h1>
    <div>@yield('content')</div>
</main>

<footer class="text-center text-gray-500 font-semibold p-5 mt-10">
    &copy; Devsta {{now()->year}}
</footer>

@vite("./resources/js/app.js")
</body>
</html>
