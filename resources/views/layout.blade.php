<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <title>{{ config('app.name', 'Explo du monde') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
        @livewireStyles
    </head>
    <body class="text-stone-900" x-data="{ section: 'hero' }">
        <header class="border-b border-stone-900 pt-4 sticky top-0 bg-white z-10">
            <div class="flex flex-wrap gap-4 items-baseline justify-between max-w-[1440px] mx-auto px-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('logo.svg') }}" class="max-h-12 sm:max-h-16" alt="Logo Exploration du Monde">
                </a>
                <nav class="flex gap-8 items-center font-bold text-sm sm:text-base">
                    <a href="#hero" class="sm:px-2 border-b-4 pb-2 duration-300" x-bind:class="section === 'hero' ? 'border-stone-900' : 'border-transparent hover:border-stone-900'">Home</a>
                    <a href="#agenda" class="sm:px-2 border-b-4 pb-2 duration-300" x-bind:class="section === 'agenda' ? 'border-stone-900' : 'border-transparent hover:border-stone-900'">Agenda</a>
                    <a href="#films" class="sm:px-2 border-b-4 pb-2 duration-300" x-bind:class="section === 'films' ? 'border-stone-900' : 'border-transparent hover:border-stone-900'">Films</a>
                    <a href="#about" class="sm:px-2 border-b-4 pb-2 duration-300" x-bind:class="section === 'about' ? 'border-stone-900' : 'border-transparent hover:border-stone-900'">À propos</a>
                </nav>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer class="border-t border-stone-900 mt-16 text-sm">
            <div class="max-w-[1440px] mx-auto px-4 grid grid-cols-1 sm:grid-cols-2">
                <div class="p-8 pl-0 row-span-2 sm:border-r border-stone-900 flex gap-8 flex-wrap justify-between">
                    <a href="{{ route('home') }}"><img src="{{ asset('logo.svg') }}" class="max-h-24" alt="Logo Exploration du Monde"></a>
                    <div class="space-y-1">
                        <h1 class="font-black">Exploration du monde ASBL</h1>
                        <address class="not-italic">
                            Rue Gachard, 88 Bte 2<br>
                            1050 Bruxelles (BE)
                        </address>
                        <a href="tel:+3226483810" class="hover:underline block">+32 (0)2 648 38 10</a>
                        <a href="mailto:bureau@explorationdumonde.be" target="_blank" class="underline block">bureau@explorationdumonde.be</a>
                    </div>
                </div>
                <div class="py-8 sm:pl-8 border-b border-stone-900 flex flex-wrap gap-4 justify-between items-center">
                    <h1 class="font-black">Suivez-nous</h1>
                    <nav class="flex gap-8 items-center">
                        <a href="https://www.instagram.com/explorationdumonde/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="duration-300 hover:rotate-12"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M16.5 7.5v.01" /></svg>
                        </a>
                        <a href="https://www.facebook.com/explorationdumonde/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="duration-300 hover:rotate-12"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                        </a>
                        <a href="https://www.youtube.com/@explorationdumonde2979" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="duration-300 hover:rotate-12"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" /><path d="M10 9l5 3l-5 3z" /></svg>
                        </a>
                    </nav>
                </div>
                <div class="py-8 sm:pl-8 flex flex-wrap gap-4 justify-between items-center">
                    <h1 class="font-black">Sitemap</h1>
                    <nav class="flex gap-8 items-center">
                        <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'font-black' : '' }}">Home</a>
                        <a href="{{ route('films') }}" class="{{ request()->is('films') ? 'font-black' : '' }}">Films</a>
                        <a href="{{ route('agenda') }}" class="{{ request()->is('agenda') ? 'font-black' : '' }}">Agenda</a>
                        <a href="{{ route('about') }}" class="{{ request()->is('about') ? 'font-black' : '' }}">À propos</a>
                    </nav>
                </div>
                <div class="py-8 col-span-full border-t items-center flex flex-wrap gap-4 justify-between">
                    <h1>Avec le soutien de la Fédération Wallonie-Bruxelles et de la Loterie Nationale</h1>
                    <a href="https://flechette.be/" target="_blank" class="underline">Made with care by Fléchette</a>
                </div>
            </div>
        </footer>
        @livewireScripts
    </body>
</html>
