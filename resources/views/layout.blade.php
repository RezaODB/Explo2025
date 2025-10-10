<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="max-w-7xl mx-auto sm:my-4 text-blue-950 bg-blue-50">
        <header class="p-4">
            <a href="{{ route('home') }}" class="inline-block">
                <img src="{{ asset('logo.svg') }}" alt="Logo Explo du Monde" class="max-h-16">
            </a>
        </header>
        <div class="bg-blue-950 h-0.5 delay-300 duration-1000" x-data="{ shown: false }" x-intersect="shown = true" x-bind:class="shown ? 'w-full' : 'w-0'"></div>
        <main>
            @yield('content')
        </main>
        <footer></footer>
    </body>
</html>
