@extends('layout')
@section('content')

{{-- HERO --}}
<section class="grid grid-cols-[40%_60%] border-b">
    <div class="flex flex-col justify-end gap-4 p-8 bg-stone-900">
        <h1 class="text-[5vw] leading-none font-black text-stone-50">Saison 2025/2026</h1>
        <p class="leading-relaxed text-stone-100">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="float-left size-13 text-stone-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 8l-4 -4l-4 4" /><path d="M12 20v-16" /><path d="M18 18c-4 -1.333 -6 -4.667 -6 -10" /><path d="M6 18c4 -1.333 6 -4.667 6 -10" /></svg>
            Le monde se découvre autrement quand il se raconte. Depuis 75 ans, Exploration du Monde fait voyager les esprits à travers les récits, les images et les émotions de celles et ceux qui partent à la rencontre de notre planète. Une invitation à voir plus loin, à écouter autrement, à renouer avec l'art du voyage humain.
        </p>
    </div>
    <div>
        <video src="{{ asset('teaser2025.mp4') }}" class="w-full h-full aspect-video object-cover" muted autoplay loop></video>
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
        <button class="bg-stone-900 text-white flex items-center gap-2 px-8 py-4 uppercase text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
            Rechercher
        </button>
    </div>
</section>

{{-- NEXT FILMS --}}
<section class="max-w-7xl mx-auto px-4 mt-20">
    <h1 class="font-black text-5xl flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 size-12"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7l4 -4l4 4" /><path d="M12 3v5.394a6.737 6.737 0 0 1 -3 5.606a6.737 6.737 0 0 0 -3 5.606v1.394" /><path d="M12 3v5.394a6.737 6.737 0 0 0 3 5.606a6.737 6.737 0 0 1 3 5.606v1.394" /></svg>
        Prochains films à l'affiche
    </h1>
    <div class="grid grid-cols-2 gap-4 mt-8 border-y py-4">
        @foreach ($agendas->take(2) as $agenda)
        <a href="">
            <img src="https://explorationdumonde.be/storage/{{ $agenda->film->banner }}" alt="{{ $agenda->film->title }}">
            <h2 class="text-2xl font-bold uppercase mt-4">{{ $agenda->film->title }}</h2>
            <div class="flex gap-2 mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-stone-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" /><path d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" /></svg>
                {{ $agenda->film->real }}
            </div>
            <div class="flex gap-2 text-sm mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-stone-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.5 21h-4.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v3" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h10" /><path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M18 16.5v1.5l.5 .5" /></svg>
                {{ \Carbon\Carbon::parse($agenda->date)->isoFormat('D MMMM Y') }} à {{ $agenda->time }}
            </div>
            <div class="flex gap-2 text-sm mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-stone-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7l6 -3l6 3l6 -3v13l-6 3l-6 -3l-6 3v-13" /><path d="M9 4v13" /><path d="M15 7v13" /></svg>
                {{ $agenda->city . ' | ' . $agenda->venue . ' | ' . $agenda->address }}
            </div>
            <div class="flex gap-2 text-sm mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-stone-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M12 9h.01" /><path d="M11 12h1v4h1" /></svg>
                {!! $agenda->info !!}
            </div>
        </a>
        @endforeach
    </div>
</section>

{{-- GRAND CYCLE --}}
<section class="grid grid-cols-[60%_40%] border-y mt-20">
    <a href="" class="relative">
        <img src="https://explorationdumonde.be/storage/{{ $films->where('cycle', 'grand')->first()->banner }}" class="object-cover aspect-video w-full h-full" alt="{{ $films->where('cycle', 'grand')->first()->title }}">
        <div class="absolute inset-0 bg-gradient-to-t from-stone-900/50"></div>
        <h2 class="text-2xl font-bold absolute bottom-4 left-4 text-white">{{ $films->where('cycle', 'grand')->first()->title }}</h2>
    </a>
    <div class="flex flex-col justify-end gap-4 p-8 bg-stone-200">
        <h1 class="text-[5vw] leading-none font-black">Le Grand Cycle</h1>
        <p class="leading-relaxed">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="float-left size-13"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7l4 -4l4 4" /><path d="M18 21v.01" /><path d="M18 18.01v.01" /><path d="M17 15.02v.01" /><path d="M14 13.03v.01" /><path d="M12 3v5.394a6.737 6.737 0 0 1 -3 5.606a6.737 6.737 0 0 0 -3 5.606v1.394" /></svg>
            Le Grand Cycle, c'est la rencontre avec les grands voyageurs, ceux qui ont pris le temps d'explorer le monde en profondeur. Des films puissants, des récits vécus, des témoignages qui nous rappellent la beauté et la fragilité de notre planète. Une expérience immersive où chaque projection devient un moment de partage et d'émerveillement.
        </p>
    </div>
</section>

    {{-- @foreach ($films->where('cycle', 'grand') as $film)
    <a href="">
        <img src="https://explorationdumonde.be/storage/{{ $film->banner }}" class="object-cover w-full h-96" alt="{{ $film->title }}">
        <h2 class="text-xl font-bold">{{ $film->title }}</h2>
    </a>
    @endforeach --}}

@endsection