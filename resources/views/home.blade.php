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
        <p class="font-medium text-slate-500">Le monde se découvre autrement quand il se raconte. Depuis 75 ans, Exploration du Monde fait voyager les esprits à travers les récits, les images et les émotions de celles et ceux qui partent à la rencontre de notre planète. Une invitation à voir plus loin, à écouter autrement, à renouer avec l'art du voyage humain.</p>
    </div>
</section>

<section class="grid grid-cols-1 md:grid-cols-4 border-b-2 border-blue-950">
    <div class="p-4 flex items-end">
        <h2 class="text-[6vw] font-black tracking-tighter leading-[0.8]">Le Grand Cycle</h2>
    </div>
    <div class="md:col-span-3 md:border-l-2 border-blue-950">
        <div class="flex gap-2 overflow-hidden">
            @foreach ($films->where('cycle', 'grand') as $film)
            <a href="" class="relative">
                <img src="https://explorationdumonde.be/storage/{{ $film->banner }}" alt="{{ $film->title }}" class="h-[600px] object-cover">
                <div class="absolute inset-4">
                    <h3 class="text-white font-black text-[5vw]" style="writing-mode: sideways-lr">{{ $film->country }}</h3>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>



@endsection