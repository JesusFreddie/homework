<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased flex flex-col justify-between min-h-screen">
    <header class="p-5">
    </header>
    <main class="max-w-5xl mx-auto">
        @yield('content')
    </main>
    <footer class="flex items-center p-5">
        <p class="text-2xl mx-auto font-semibold">©Jesus 0000.00.00</p>
    </footer>
    </body>
</html>
