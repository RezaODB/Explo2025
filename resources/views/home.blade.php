@extends('layout')
@section('content')

<section class="grid grid-cols-1 md:grid-cols-3 border-b-2 border-blue-950">
    <div class="relative md:col-span-2">
        <video src="{{ asset('teaser2025.mp4') }}" muted loop autoplay class="w-full h-full object-cover"></video>
        <div class="absolute inset-0 flex justify-center items-center mix-blend-overlay">
            <img src="{{ asset('logo75.svg') }}" class="max-w-xs">
        </div>
    </div>
    <div class="self-end space-y-4 p-4">
        <h1 class="text-[6vw] font-black tracking-tighter leading-[0.8]">Explo Saison 2025/26</h1>
        <p class="font-medium text-slate-600 leading-relaxed">Le monde se découvre autrement quand il se raconte. Depuis 75 ans, Exploration du Monde fait voyager les esprits à travers les récits, les images et les émotions de celles et ceux qui partent à la rencontre de notre planète. Une invitation à voir plus loin, à écouter autrement, à renouer avec l'art du voyage humain.</p>
    </div>
</section>

<section class="grid grid-cols-1 md:grid-cols-3 gap-8 border-b-2 border-blue-950 py-4" x-data="{ current: 0 }">
    <div class="space-y-4">
        <h2 class="text-5xl font-black tracking-tighter leading-[0.8] flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 size-16"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 8l-4 -4l-4 4" /><path d="M12 20v-16" /><path d="M18 18c-4 -1.333 -6 -4.667 -6 -10" /><path d="M6 18c4 -1.333 6 -4.667 6 -10" /></svg>
            Le Grand Cycle
        </h2>
        <ul class="divide-y divide-blue-950">
            @foreach ($films->where('cycle', 'grand') as $film)
            <li class="py-2 hover:bg-blue-100" x-bind:class="current === {{ $loop->iteration }} ? 'bg-blue-100' : ''"><a href="" class="flex gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="shrink-0"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" /></svg>
                <span class="text-slate-600 font-medium">{{ $film->title }}</span>
            </a></li>   
            @endforeach
        </ul>
    </div>
    <div class="md:col-span-2">
        <div class="flex gap-2 overflow-hidden">
            @foreach ($films->where('cycle', 'grand') as $film)
            <a href="">
                <img src="https://explorationdumonde.be/storage/{{ $film->banner }}" alt="{{ $film->title }}" class="h-[600px] object-cover" x-on:mouseover="current = {{ $loop->iteration }}">
            </a>
            @endforeach
        </div>
    </div>
</section>



@endsection