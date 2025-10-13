@extends('layout')
@section('content')

@include('includes.search')

<section class="my-16 space-y-4">
    <h1 class="text-5xl font-light uppercase border-b-2 border-sky-950 pb-4 flex items-center gap-2 mx-4">
        <div class="text-2xl size-10 rounded-full bg-sky-800 flex items-center justify-center text-sky-50">G</div>
        Le Grand Cycle
    </h1>
    <div class="grid grid-cols-3 divide-x-2 divide-sky-950">
        @foreach ($films->where('cycle', 'grand')->take(3) as $film)
        @include('includes.card')
        @endforeach
    </div>
    <div class="bg-sky-950 h-0.5 mx-4"></div>
    <div class="grid grid-cols-3 divide-x-2 divide-sky-950">
        @foreach ($films->where('cycle', 'grand')->skip(3)->take(3) as $film)
        @include('includes.card')
        @endforeach
    </div>
    <div class="bg-sky-950 h-0.5 mx-4"></div>
    @if ($films->where('cycle', 'grand')->count() > 6)
    <div class="grid grid-cols-3 divide-x-2 divide-sky-950">
        @foreach ($films->where('cycle', 'grand')->skip(6)->take(3) as $film)
        @include('includes.card')        
        @endforeach
    </div>
    <div class="bg-sky-950 h-0.5 mx-4"></div>
    @endif
</section>

<section class="my-16 space-y-4">
    <h1 class="text-5xl font-light uppercase border-b-2 border-sky-950 pb-4 flex items-center gap-2 mx-4">
        <div class="text-2xl size-10 rounded-full bg-sky-800 flex items-center justify-center text-sky-50">D</div>
        Le Cycle Découverte
    </h1>
    <div class="grid grid-cols-3 divide-x-2 divide-sky-950">
        @foreach ($films->where('cycle', 'découverte')->take(3) as $film)
        @include('includes.card')    
        @endforeach
    </div>
    <div class="bg-sky-950 h-0.5 mx-4"></div>
    <div class="grid grid-cols-3 divide-x-2 divide-sky-950">
        @foreach ($films->where('cycle', 'découverte')->skip(3)->take(3) as $film)
        @include('includes.card')
        @endforeach
    </div>
    <div class="bg-sky-950 h-0.5 mx-4"></div>
    @if ($films->where('cycle', 'découverte')->count() > 6)
    <div class="grid grid-cols-3 divide-x-2 divide-sky-950">
        @foreach ($films->where('cycle', 'découverte')->skip(6)->take(3) as $film)
        @include('includes.card')
        @endforeach
    </div>
    <div class="bg-sky-950 h-0.5 mx-4"></div>
    @endif
</section>

@endsection