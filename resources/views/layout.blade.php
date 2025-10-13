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
    <body class="p-4 bg-[#293548] text-[#293548]">
        <div class="bg-[#F3E9E4] max-w-[1440px] mx-auto py-4">
            <header class="grid grid-cols-[auto_2fr_1fr] gap-4 px-4">
                <a href="{{ route('home') }}"><img src="{{ asset('logo_sideway.svg') }}" class="min-w-[180px]" alt="Logo Explo du Monde"></a>
                <div class="relative">
                    <video src="{{ asset('teaser2025.mp4') }}" muted loop autoplay class="h-full w-full object-cover"></video>
                    <div class="absolute inset-4 flex items-center justify-center">
                        <img src="{{ asset('logo75.svg') }}" class="mix-blend-overlay">
                    </div>
                </div>
                <div class="space-y-4 self-end">
                    <h1 class="text-7xl font-black uppercase">Saison 2025/2026</h1>
                    <p class="text-slate-500 font-medium pr-4">Le monde se découvre autrement quand il se raconte. Depuis 75 ans, Exploration du Monde fait voyager les esprits à travers les récits, les images et les émotions de celles et ceux qui partent à la rencontre de notre planète. Une invitation à voir plus loin, à écouter autrement, à renouer avec l'art du voyage humain.</p>
                </div>
            </header>
            <main>
                @yield('content')
            </main>
            <footer></footer>
        </div>
    </body>
</html>
