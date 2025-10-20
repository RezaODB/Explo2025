<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="text-stone-900 space-y-4">
        <header class="border-b border-stone-900 pt-4 sticky top-0 bg-white z-10">
            <div class="flex flex-wrap gap-4 items-baseline justify-between max-w-[1440px] mx-auto px-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('logo.svg') }}" class="max-h-12 sm:max-h-16" alt="Logo Exploration du Monde">
                </a>
                <nav class="flex gap-8 items-center font-bold text-sm sm:text-base">
                    <a href="{{ route('home') }}" class="sm:px-2 border-b-4 pb-2 duration-300 {{ request()->is('/') ? 'border-stone-900' : 'border-transparent hover:border-stone-900' }}">Home</a>
                    <a href="{{ route('films') }}" class="sm:px-2 border-b-4 pb-2 duration-300 {{ request()->is('films') ? 'border-stone-900' : 'border-transparent hover:border-stone-900' }}">Films</a>
                    <a href="{{ route('agenda') }}" class="sm:px-2 border-b-4 pb-2 duration-300 {{ request()->is('agenda') ? 'border-stone-900' : 'border-transparent hover:border-stone-900' }}">Agenda</a>
                    <a href="{{ route('about') }}" class="sm:px-2 border-b-4 pb-2 duration-300 {{ request()->is('about') ? 'border-stone-900' : 'border-transparent hover:border-stone-900' }}">À propos</a>
                </nav>
            </div>
        </header>
        <main class="space-y-4">
            @yield('content')
        </main>
        <footer class="border-t pt-16 pb-4 mt-16">
            <div class="max-w-[1440px] mx-auto px-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('logo.svg') }}" class="max-h-24" alt="Logo Exploration du Monde">
                </a>
            </div>
        </footer>
    </body>
</html>
