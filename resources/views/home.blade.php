@extends('layout')
@section('content')

{{-- HERO --}}
<section class="flex flex-wrap lg:flex-nowrap bg-stone-900 gap-px">
    <div>
        <video src="{{ asset('teaser2025.mp4') }}" loop muted autoplay class="w-full h-full object-cover rounded-lg"></video>
    </div>
    <div class="flex flex-col gap-8 justify-end bg-cyan-100 rounded-lg p-8" x-data="{ shown: false }" x-intersect="shown = true">
        <div class="overflow-hidden">
            <h1 class="text-[clamp(3.5rem,7vw,7vw)] leading-[0.9] tracking-tight duration-1000 delay-300" x-bind:class="shown ? 'translate-y-none' : '-translate-y-full'">Saison 2025/2026</h1>
        </div>
        <div>
            <img src="{{ asset('75ans.svg') }}" class="max-h-10 float-left mt-2 mr-4" alt="Logo 75 ans">
            <p class="max-w-xl leading-relaxed">Le monde se découvre autrement quand il se raconte. Depuis 75 ans, Exploration du Monde fait voyager les esprits à travers les récits, les images et les émotions de celles et ceux qui partent à la rencontre de notre planète. Une invitation à voir plus loin, à écouter autrement, à renouer avec l'art du voyage humain.</p>
        </div>
    </div>
</section>

{{-- SEARCH --}}
<section class="border-y border-stone-900 py-4">
    <div class="flex flex-col sm:flex-row justify-between gap-4 sm:divide-x divide-stone-900 divide-dotted max-w-[1440px] mx-auto px-4">
        <div class="cursor-pointer w-full pr-4" x-data="{ open: false }" x-on:click="open = !open">
            <label for="film" class="text-sm text-stone-500 uppercase block">Films</label>
            <div class="flex items-center justify-between mt-2">
                <span>Tous</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-stone-500 duration-300" x-bind:class="open ? 'rotate-180' : 'rotate-0'"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
            </div>
        </div>
        <div class="cursor-pointer w-full pr-4" x-data="{ open: false }" x-on:click="open = !open">
            <label for="ville" class="text-sm text-stone-500 uppercase block">Villes</label>
            <div class="flex items-center justify-between mt-2">
                <span>Toutes</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-stone-500 duration-300" x-bind:class="open ? 'rotate-180' : 'rotate-0'"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
            </div>
        </div>
        <div class="cursor-pointer w-full pr-4" x-data="{ open: false }" x-on:click="open = !open">
            <label for="date" class="text-sm text-stone-500 uppercase block">Dates</label>
            <div class="flex items-center justify-between mt-2">
                <span>Toutes</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-stone-500 duration-300" x-bind:class="open ? 'rotate-180' : 'rotate-0'"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
            </div>
        </div>
        <button class="bg-stone-900 rounded text-white flex items-center justify-center gap-2 px-8 py-4 text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
            Rechercher
        </button>
    </div>
</section>

{{-- NEXT --}}
<section class="mt-16 space-y-8 max-w-[1440px] mx-auto px-4">
    <h1 class="text-4xl sm:text-6xl border-b-4 border-stone-900">Prochaines séances</h1>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        @foreach ($agendas->take(8) as $agenda)
        <div>
            <div class="border-b border-stone-900 pb-1">
                <span class="text-5xl">{{ \Carbon\Carbon::parse($agenda->date)->isoFormat('DD') }}</span>
                <span class="text-xl">{{ \Carbon\Carbon::parse($agenda->date)->isoFormat('MMM') }} à {{ $agenda->time }}</span>  
            </div>
            <a href="" class="text-lg mt-2 hover:underline block font-black">{{ $agenda->film->title }}</a>
            <div class="text-sm mt-2"><span class="bg-green-200">{{ $agenda->city }}</span>{{ ' | ' . $agenda->venue . ' | ' . $agenda->address }}</div>
            <div class="mt-2 border-b border-dotted border-stone-900 pb-1 text-sm">TICKETS: </div>
            <div class="text-sm mt-1">{!! $agenda->info !!}</div>
        </div>
        @endforeach
    </div>
</section>

{{-- GRAND CYCLE --}}
<section class="mt-16 space-y-8 max-w-[1440px] mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-px border border-stone-900 bg-stone-900">
        @foreach ($films->where('cycle', 'grand') as $film)
        @if ($loop->first)
        <div class="sm:col-span-2 bg-pink-100 rounded-lg p-8 flex flex-col gap-8 justify-end">
            <div class="overflow-hidden" x-data="{ shown: false }" x-intersect="shown = true">
                <h1 class="text-[clamp(3.5rem,7vw,7vw)] leading-[0.9] tracking-tight duration-1000 delay-300 py-2" x-bind:class="shown ? 'translate-y-none' : '-translate-y-full'">Le Grand Cycle</h1>
            </div>
            <p class="leading-relaxed max-w-xl">Le Grand Cycle, c'est la rencontre avec les grands voyageurs, ceux qui ont pris le temps d'explorer le monde en profondeur. Des films puissants, des récits vécus, des témoignages qui nous rappellent la beauté et la fragilité de notre planète. Une expérience immersive où chaque projection devient un moment de partage et d'émerveillement.</p>
        </div>
        @else
        <a href="" class="bg-white space-y-4 p-8 rounded-lg group" x-data="{ shown: false }" x-intersect="shown = true">
            <div class="border rounded-full px-2 py-1 inline-block text-sm">{{ $film->real }}</div>
            <h2 class="text-2xl group-hover:underline font-black tracking-tight">{{ $film->title }}</h2>
            <img src="https://explorationdumonde.be/storage/{{ $film->banner }}" class="w-full h-96 object-cover" x-show="shown" x-transition.delay.300.duration.1000 alt="{{ $film->title }}">
            <p class="text-sm leading-relaxed">{{ $film->intro }}</p>
            <div class="underline font-bold">En savoir plus</div>
        </a>
        @endif
        @endforeach
    </div>
</section>

{{-- DISCOVERY CYCLE --}}
<section class="mt-16 space-y-8 max-w-[1440px] mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-px border border-stone-900 bg-stone-900">
        @foreach ($films->where('cycle', 'découverte') as $film)
        @if ($loop->first)
        <div class="col-span-full bg-sky-100 rounded-lg p-8 flex flex-col gap-8 justify-end">
            <div class="overflow-hidden" x-data="{ shown: false }" x-intersect="shown = true">
                <h1 class="text-[clamp(3.5rem,7vw,7vw)] leading-[0.9] tracking-tight duration-1000 delay-300 py-2" x-bind:class="shown ? 'translate-y-none' : '-translate-y-full'">Le Cycle Découverte</h1>
            </div>
            <p class="leading-relaxed max-w-xl">Le Cycle Découverte ouvre la porte à de nouvelles voix, de nouveaux regards sur le monde. Des explorateurs d'aujourd'hui, curieux, engagés, qui racontent leur époque et leurs chemins singuliers. Des histoires courtes mais intenses, pour éveiller la curiosité et donner envie d'aller plus loin.</p>
        </div>
        @else
        <a href="" class="bg-white space-y-4 p-8 rounded-lg group" x-data="{ shown: false }" x-intersect="shown = true">
            <div class="border rounded-full px-2 py-1 inline-block text-sm">{{ $film->real }}</div>
            <h2 class="text-2xl group-hover:underline font-black tracking-tight">{{ $film->title }}</h2>
            <img src="https://explorationdumonde.be/storage/{{ $film->banner }}" class="w-full h-96 object-cover" x-show="shown" x-transition.delay.300.duration.1000 alt="{{ $film->title }}">
            <p class="text-sm leading-relaxed">{{ $film->intro }}</p>
            <div class="underline font-bold">En savoir plus</div>
        </a>
        @endif
        @endforeach
    </div>
</section>

@endsection