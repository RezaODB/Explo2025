<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="max-w-7xl mx-auto p-4 space-y-4 text-slate-900">
        <header class="bg-slate-200 p-4">
            <a href="{{ route('home') }}"><img src="{{ asset('logo.svg') }}" class="max-w-3xs" alt="Logo Explo du Monde"></a>
        </header>
        <main>
            @yield('content')
        </main>
        <footer></footer>
    </body>
</html>
