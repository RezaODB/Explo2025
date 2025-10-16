@extends('layout')
@section('content')

{{-- HERO --}}
<section class="grid grid-cols-[36%_64%]">
    <div class="flex flex-col justify-end gap-4 p-8 bg-stone-900">
        <h1 class="text-[5vw] leading-none font-bold text-stone-50">Saison 2025/2026</h1>
        <p class="leading-relaxed text-stone-100">Le monde se découvre autrement quand il se raconte. Depuis 75 ans, Exploration du Monde fait voyager les esprits à travers les récits, les images et les émotions de celles et ceux qui partent à la rencontre de notre planète. Une invitation à voir plus loin, à écouter autrement, à renouer avec l'art du voyage humain.</p>
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
<section class="max-w-7xl mx-auto px-4 mt-24">
    <h1 class="font-bold text-5xl border-b-4 pb-4">Prochains films à l'affiche</h1>
    <div class="grid grid-cols-3 gap-4 mt-8">
        @foreach ($agendas->take(6) as $agenda)
        <a href="">
            <img src="https://explorationdumonde.be/storage/{{ $agenda->film->banner }}" alt="{{ $agenda->film->title }}">
            <h2 class="text-xl font-bold uppercase mt-4">{{ $agenda->film->title }}</h2>
            <div class="space-y-2 mt-4 text-sm">
                <div class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.5 21h-4.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v3" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h10" /><path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M18 16.5v1.5l.5 .5" /></svg>
                    <span class="bg-green-200 font-bold">{{ \Carbon\Carbon::parse($agenda->date)->isoFormat('D MMMM Y') }}</span> à {{ $agenda->time }}
                </div>
                <div class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7l6 -3l6 3l6 -3v13l-6 3l-6 -3l-6 3v-13" /><path d="M9 4v13" /><path d="M15 7v13" /></svg>
                    {{ $agenda->city . ' | ' . $agenda->venue . ' | ' . $agenda->address }}
                </div>
                <div class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 5l0 2" /><path d="M15 11l0 2" /><path d="M15 17l0 2" /><path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" /></svg>
                    {!! $agenda->info !!}
                </div>
            </div>
        </a>
        @endforeach
    </div>
</section>

{{-- GRAND CYCLE --}}
<section class="max-w-7xl mx-auto px-4 mt-24">
    <h1 class="font-bold text-5xl border-b-4 pb-4">Le Grand Cycle</h1>
    <div class="mt-8 space-y-4">
        @foreach ($films->where('cycle', 'grand') as $film)
        <a href="" class="grid grid-cols-[50%_50%] gap-4 group {{ $loop->first ? 'col-span-2' : '' }}">
            <div>
                <img src="https://explorationdumonde.be/storage/{{ $film->banner }}" class="w-full h-full object-cover" alt="{{ $film->title }}">
            </div>
            <div class="pr-4">
                <h2 class="text-2xl font-bold uppercase group-hover:underline">{{ $film->title }}</h2>
                <h3>De <span class="bg-pink-200 italic">{{ $film->real }}</span></h3>
                <p class="mt-4 leading-relaxed text-sm">{{ $film->intro }}</p>
            </div>
        </a>
        @endforeach
    </div>
</section>

@endsection