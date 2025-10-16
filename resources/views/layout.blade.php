<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="text-stone-900">
        <header class="border-b">
            <nav class="max-w-7xl mx-auto p-4 flex items-end justify-between gap-12 uppercase font-bold">
                <img src="{{ asset('logo.svg') }}" class="h-20" alt="Logo Exploration du Monde">
                <div class="flex gap-12 items-center">
                    <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'bg-cyan-200' : 'hover:bg-cyan-200' }}">Home</a>
                    <a href="{{ route('films') }}" class="{{ request()->is('films') ? 'bg-pink-200' : 'hover:bg-pink-200' }}">Les films</a>
                    <a href="{{ route('home') }}" class="{{ request()->is('agenda') ? 'bg-green-200' : 'hover:bg-green-200' }}">Agenda</a>
                    <a href="{{ route('home') }}" class="{{ request()->is('about') ? 'bg-yellow-200' : 'hover:bg-yellow-200' }}">À propos</a>
                </div>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer class="py-96"></footer>
    </body>
</html>
