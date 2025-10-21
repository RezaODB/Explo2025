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

@livewire('search')

{{-- GRAND CYCLE --}}
<section class="mt-16 space-y-8 max-w-[1440px] mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px border border-stone-900 bg-stone-900">
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
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px border border-stone-900 bg-stone-900">
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