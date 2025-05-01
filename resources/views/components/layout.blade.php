<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} - Controle de Séries</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main class="w-full max-w-xs min-h-screen flex flex-col items-center justify-center mx-auto ">
        <h1 class="text-lg font-semibold mb-6">{{ $title }}</h1>
        {{ $slot }}
        <p class="text-center text-gray-500 text-xs mt-6">
            &copy;2025 Meriéli Manzano. All rights reserved.
        </p>
    </main>
</body>

</html>