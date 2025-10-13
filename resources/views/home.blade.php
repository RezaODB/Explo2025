@extends('layout')
@section('content')

<section class="my-16 space-y-4">
    <h1 class="text-5xl font-black text-[#C55C59] uppercase flex items-center gap-2 mx-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="size-10"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
        Trouver une séance
    </h1>
</section>

<section class="my-16 space-y-4">
    <h1 class="text-5xl font-light uppercase border-b-2 border-[#293548] pb-4 flex items-center gap-2 mx-4">
        <div class="text-2xl size-10 rounded-full bg-[#C55C59] flex items-center justify-center text-white">G</div>
        Le Grand Cycle
    </h1>
    <div class="grid grid-cols-3 divide-x-2 divide-[#293548]">
        @foreach ($films->where('cycle', 'grand')->take(3) as $film)
        @include('includes.card')
        @endforeach
    </div>
    <div class="bg-[#293548] h-0.5 mx-4"></div>
    <div class="grid grid-cols-3 divide-x-2 divide-[#293548]">
        @foreach ($films->where('cycle', 'grand')->skip(3)->take(3) as $film)
        @include('includes.card')
        @endforeach
    </div>
    <div class="bg-[#293548] h-0.5 mx-4"></div>
    @if ($films->where('cycle', 'grand')->count() > 6)
    <div class="grid grid-cols-3 divide-x-2 divide-[#293548]">
        @foreach ($films->where('cycle', 'grand')->skip(6)->take(3) as $film)
        @include('includes.card')        
        @endforeach
    </div>
    <div class="bg-[#293548] h-0.5 mx-4"></div>
    @endif
</section>

<section class="my-16 space-y-4">
    <h1 class="text-5xl font-light uppercase border-b-2 border-[#293548] pb-4 flex items-center gap-2 mx-4">
        <div class="text-2xl size-10 rounded-full bg-[#C55C59] flex items-center justify-center text-white">D</div>
        Le Cycle Découverte
    </h1>
    <div class="grid grid-cols-3 divide-x-2 divide-[#293548]">
        @foreach ($films->where('cycle', 'découverte')->take(3) as $film)
        @include('includes.card')    
        @endforeach
    </div>
    <div class="bg-[#293548] h-0.5 mx-4"></div>
    <div class="grid grid-cols-3 divide-x-2 divide-[#293548]">
        @foreach ($films->where('cycle', 'découverte')->skip(3)->take(3) as $film)
        @include('includes.card')
        @endforeach
    </div>
    <div class="bg-[#293548] h-0.5 mx-4"></div>
    @if ($films->where('cycle', 'découverte')->count() > 6)
    <div class="grid grid-cols-3 divide-x-2 divide-[#293548]">
        @foreach ($films->where('cycle', 'découverte')->skip(6)->take(3) as $film)
        @include('includes.card')
        @endforeach
    </div>
    <div class="bg-[#293548] h-0.5 mx-4"></div>
    @endif
</section>

@endsection