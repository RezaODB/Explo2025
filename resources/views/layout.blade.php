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
            <nav class="max-w-7xl mx-auto p-4 pb-0 flex items-end justify-between gap-12 uppercase font-bold">
                <img src="{{ asset('logo.svg') }}" class="h-24 pb-4" alt="Logo Exploration du Monde">
                <div class="flex gap-12 items-center">
                    <a href="{{ route('home') }}" class="flex items-center gap-2 pb-2 border-b-4 {{ request()->is('/') ? 'border-stone-900' : 'border-transparent' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M3.6 9h16.8" /><path d="M3.6 15h16.8" /><path d="M11.5 3a17 17 0 0 0 0 18" /><path d="M12.5 3a17 17 0 0 1 0 18" /></svg>
                        Home
                    </a>
                    <a href="{{ route('films') }}" class="flex items-center gap-2 pb-2 border-b-4 {{ request()->is('films') ? 'border-stone-900' : 'border-transparent' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M8 4l0 16" /><path d="M16 4l0 16" /><path d="M4 8l4 0" /><path d="M4 16l4 0" /><path d="M4 12l16 0" /><path d="M16 8l4 0" /><path d="M16 16l4 0" /></svg>
                        Les films
                    </a>
                    <a href="{{ route('home') }}" class="flex items-center gap-2 pb-2 border-b-4 {{ request()->is('agenda') ? 'border-stone-900' : 'border-transparent' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.5 21h-4.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v3" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h10" /><path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M18 16.5v1.5l.5 .5" /></svg>
                        Agenda
                    </a>
                    <a href="{{ route('home') }}" class="flex items-center gap-2 pb-2 border-b-4 {{ request()->is('about') ? 'border-stone-900' : 'border-transparent' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 21l12 -9" /><path d="M6 12l12 9" /><path d="M5 12h14" /><path d="M6 3v9" /><path d="M18 3v9" /><path d="M6 8h12" /><path d="M6 5h12" /></svg>
                        À propos
                    </a>
                </div>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer class="py-96"></footer>
    </body>
</html>
