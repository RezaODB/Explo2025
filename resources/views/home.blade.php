@extends('layout')
@section('content')

{{-- HERO --}}
<section class="flex gap-4">
    <div>
        <video src="{{ asset('teaser2025.mp4') }}" loop muted autoplay class="w-full h-full object-cover rounded"></video>
    </div>
    <div class="flex flex-col gap-8 justify-end">
        <h1 class="text-[7vw] leading-[0.8] tracking-tight">Saison 2025/2026</h1>
        <div>
            <img src="{{ asset('75ans.svg') }}" class="max-h-10 float-left mt-2 mr-4" alt="Logo 75 ans">
            <p class="max-w-xl text-stone-600 leading-relaxed text-sm">Le monde se découvre autrement quand il se raconte. Depuis 75 ans, Exploration du Monde fait voyager les esprits à travers les récits, les images et les émotions de celles et ceux qui partent à la rencontre de notre planète. Une invitation à voir plus loin, à écouter autrement, à renouer avec l'art du voyage humain.</p>
        </div>
    </div>
</section>

{{-- SEARCH --}}
<section class="border-y border-stone-900 py-4 flex justify-between gap-4 divide-x divide-stone-900">
    <div class="cursor-pointer w-full pr-4" x-data="{ open: false }" x-on:click="open = !open">
        <label for="film" class="text-sm text-stone-400 uppercase block">Films</label>
        <div class="flex items-center justify-between mt-2">
            <span>Tous</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-stone-400 duration-300" x-bind:class="open ? 'rotate-180' : 'rotate-0'"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
        </div>
    </div>
    <div class="cursor-pointer w-full pr-4" x-data="{ open: false }" x-on:click="open = !open">
        <label for="ville" class="text-sm text-stone-400 uppercase block">Villes</label>
        <div class="flex items-center justify-between mt-2">
            <span>Toutes</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-stone-400 duration-300" x-bind:class="open ? 'rotate-180' : 'rotate-0'"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
        </div>
    </div>
    <div class="cursor-pointer w-full pr-4" x-data="{ open: false }" x-on:click="open = !open">
        <label for="date" class="text-sm text-stone-400 uppercase block">Dates</label>
        <div class="flex items-center justify-between mt-2">
            <span>Toutes</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-stone-400 duration-300" x-bind:class="open ? 'rotate-180' : 'rotate-0'"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
        </div>
    </div>
    <button class="bg-stone-900 rounded text-white flex items-center gap-2 px-8 py-4 text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
        Rechercher
    </button>
</section>



@endsection