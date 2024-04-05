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

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="flex">

            <div class="">
                @include('layouts.navigation')
                @if (isset($header))
                    <header class="bg-white dark:bg-gray-800 shadow min-h-screen ">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                            <p><a href="#" class="link text-white font-bold">Yangi arizalar</a></p>
                            <p><a href="#" class="link text-white font-bold">Hamkorlar</a></p>
                            <p><a href="#" class="link text-white font-bold">Javob berilganlar</a></p>
                            <p><a href="#" class="link text-white font-bold">Javob berilmaganlar.</a></p>
                            <p><a href="#" class="link text-white font-bold">Umumiy Arizalar</a></p>
                        </div>
                    </header>
                @endif
            </div>
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>
