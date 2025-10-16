@extends('layout')
@section('content')

{{-- HERO --}}
<section class="grid grid-cols-[40%_60%] border-b">
    <div class="flex flex-col justify-end items-center gap-4 p-8 bg-stone-900">
        <h1 class="text-[5vw] leading-none font-black text-stone-50">Saison 2025/2026</h1>
        <p class="leading-relaxed text-stone-100">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="float-left size-13 text-stone-600"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 8l-4 -4l-4 4" /><path d="M12 20v-16" /><path d="M18 18c-4 -1.333 -6 -4.667 -6 -10" /><path d="M6 18c4 -1.333 6 -4.667 6 -10" /></svg>
            Le monde se découvre autrement quand il se raconte. Depuis 75 ans, Exploration du Monde fait voyager les esprits à travers les récits, les images et les émotions de celles et ceux qui partent à la rencontre de notre planète. Une invitation à voir plus loin, à écouter autrement, à renouer avec l'art du voyage humain.
        </p>
    </div>
    <div>
        <video src="{{ asset('teaser2025.mp4') }}" class="w-full h-full object-cover" muted autoplay loop></video>
    </div>
</section> 

{{-- SEARCH --}}
<section class="border-b">
    <div class="max-w-7xl mx-auto p-4 flex justify-between gap-8 divide-x divide-stone-200">
        <div class="cursor-pointer w-full pr-8" x-data="{ open: false }" x-on:click="open = !open">
            <label for="film" class="text-sm text-stone-400 font-medium uppercase block">Films</label>
            <div class="flex items-center justify-between mt-4">
                <span>Tous</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-stone-400 duration-300" x-bind:class="open ? 'rotate-180' : 'rotate-0'"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
            </div>
        </div>
        <div class="cursor-pointer w-full pr-8" x-data="{ open: false }" x-on:click="open = !open">
            <label for="ville" class="text-sm text-stone-400 font-medium uppercase block">Villes</label>
            <div class="flex items-center justify-between mt-4">
                <span>Toutes</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-stone-400 duration-300" x-bind:class="open ? 'rotate-180' : 'rotate-0'"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
            </div>
        </div>
        <div class="cursor-pointer w-full pr-8" x-data="{ open: false }" x-on:click="open = !open">
            <label for="date" class="text-sm text-stone-400 font-medium uppercase block">Dates</label>
            <div class="flex items-center justify-between mt-4">
                <span>Toutes</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-stone-400 duration-300" x-bind:class="open ? 'rotate-180' : 'rotate-0'"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
            </div>
        </div>
        <button class="bg-stone-900 text-stone-50 flex items-center gap-2 px-8 py-4 uppercase text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
            Rechercher
        </button>
    </div>
</section>

{{-- NEXT FILMS --}}
<section class="max-w-7xl mx-auto px-4 mt-20">
    <h1 class="font-black text-4xl flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 size-10 text-stone-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7l4 -4l4 4" /><path d="M12 3v5.394a6.737 6.737 0 0 1 -3 5.606a6.737 6.737 0 0 0 -3 5.606v1.394" /><path d="M12 3v5.394a6.737 6.737 0 0 0 3 5.606a6.737 6.737 0 0 1 3 5.606v1.394" /></svg>
        Prochains films à l'affiche
    </h1>
    <div class="grid grid-cols-2 gap-4 mt-8">
        @foreach ($agendas->take(2) as $agenda)
        <a href="">
            <img src="https://explorationdumonde.be/storage/{{ $agenda->film->banner }}" alt="">
        </a>
        @endforeach
    </div>
</section>

@endsection