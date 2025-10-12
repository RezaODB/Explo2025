@extends('layout')
@section('content')

<section class="my-16 space-y-4">
    <h1 class="text-5xl font-light uppercase border-b-2 border-slate-900 pb-4 flex items-center gap-2 mx-4">
        <div class="text-2xl size-10 rounded-full bg-slate-900 flex items-center justify-center text-white">G</div>
        Le Grand Cycle
    </h1>
    <div class="grid grid-cols-3 divide-x-2 divide-slate-800">
        @foreach ($films->where('cycle', 'grand')->take(3) as $film)
        <a href="" class="flex flex-col gap-4 min-h-96 justify-between px-4 group">
            <h2 class="text-2xl font-light leading-tight uppercase group-hover:underline">{{ $film->title }}</h2>
            <div class="space-y-2">
                <div class="flex items-baseline gap-1">
                    <div class="text-sm size-6 shrink-0 rounded-full bg-slate-900 flex items-center justify-center text-white">G</div>
                    <h3 class="text-sm">{{ $film->real }}</h3>
                    <h3 class="ml-auto text-5xl font-light">{{ Carbon\Carbon::parse(data_get($film->agendas, '{first}.date'))->isoFormat('DD.MM') }}</h3>
                </div>
                <img src="https://explorationdumonde.be/storage/{{ $film->banner }}" class="w-full h-52 object-cover" alt="{{ $film->title }}">
            </div>
        </a>
        @endforeach
    </div>
    <div class="bg-slate-800 h-0.5 mx-4"></div>
    <div class="grid grid-cols-3 divide-x-2 divide-slate-800">
        @foreach ($films->where('cycle', 'grand')->skip(3)->take(3) as $film)
        <a href="" class="flex flex-col gap-4 min-h-96 justify-between px-4 group {{ $loop->last && $loop->iteration !== 3 ? 'border-r-2 border-slate-900' : '' }}">
            <h2 class="text-2xl font-light leading-tight uppercase group-hover:underline">{{ $film->title }}</h2>
            <div class="space-y-2">
                <div class="flex items-baseline gap-1">
                    <div class="text-sm size-6 shrink-0 rounded-full bg-slate-900 flex items-center justify-center text-white">G</div>
                    <h3 class="text-sm">{{ $film->real }}</h3>
                    <h3 class="ml-auto text-5xl font-light">{{ Carbon\Carbon::parse(data_get($film->agendas, '{first}.date'))->isoFormat('DD.MM') }}</h3>
                </div>
                <img src="https://explorationdumonde.be/storage/{{ $film->banner }}" class="w-full h-52 object-cover" alt="{{ $film->title }}">
            </div>
        </a>
        @endforeach
    </div>
    <div class="bg-slate-800 h-0.5 mx-4"></div>
    @if ($films->where('cycle', 'grand')->count() > 6)
    <div class="grid grid-cols-3 divide-x-2 divide-slate-800">
        @foreach ($films->where('cycle', 'grand')->skip(6)->take(3) as $film)
        <a href="" class="flex flex-col gap-4 min-h-96 justify-between px-4 group {{ $loop->last && $loop->iteration !== 3 ? 'border-r-2 border-slate-900' : '' }}">
            <h2 class="text-2xl font-light leading-tight uppercase group-hover:underline">{{ $film->title }}</h2>
            <div class="space-y-2">
                <div class="flex items-baseline gap-1">
                    <div class="text-sm size-6 shrink-0 rounded-full bg-slate-900 flex items-center justify-center text-white">G</div>
                    <h3 class="text-sm">{{ $film->real }}</h3>
                    <h3 class="ml-auto text-5xl font-light">{{ Carbon\Carbon::parse(data_get($film->agendas, '{first}.date'))->isoFormat('DD.MM') }}</h3>
                </div>
                <img src="https://explorationdumonde.be/storage/{{ $film->banner }}" class="w-full h-52 object-cover" alt="{{ $film->title }}">
            </div>
        </a>
        @endforeach
    </div>
    <div class="bg-slate-800 h-0.5 mx-4"></div>
    @endif
</section>

<section class="my-16 space-y-4">
    <h1 class="text-5xl font-light uppercase border-b-2 border-slate-900 pb-4 flex items-center gap-2 mx-4">
        <div class="text-2xl size-10 rounded-full bg-slate-900 flex items-center justify-center text-white">D</div>
        Le Cycle Découverte
    </h1>
    <div class="grid grid-cols-3 divide-x-2 divide-slate-800">
        @foreach ($films->where('cycle', 'découverte')->take(3) as $film)
        <a href="" class="flex flex-col gap-4 min-h-96 justify-between px-4 group">
            <h2 class="text-2xl font-light leading-tight uppercase group-hover:underline">{{ $film->title }}</h2>
            <div class="space-y-2">
                <div class="flex items-baseline gap-1">
                    <div class="text-sm size-6 shrink-0 rounded-full bg-slate-900 flex items-center justify-center text-white">D</div>
                    <h3 class="text-sm">{{ $film->real }}</h3>
                    <h3 class="ml-auto text-5xl font-light">{{ Carbon\Carbon::parse(data_get($film->agendas, '{first}.date'))->isoFormat('DD.MM') }}</h3>
                </div>
                <img src="https://explorationdumonde.be/storage/{{ $film->banner }}" class="w-full h-52 object-cover" alt="{{ $film->title }}">
            </div>
        </a>
        @endforeach
    </div>
    <div class="bg-slate-800 h-0.5 mx-4"></div>
    <div class="grid grid-cols-3 divide-x-2 divide-slate-800">
        @foreach ($films->where('cycle', 'découverte')->skip(3)->take(3) as $film)
        <a href="" class="flex flex-col gap-4 min-h-96 justify-between px-4 group {{ $loop->last && $loop->iteration !== 3 ? 'border-r-2 border-slate-900' : '' }}">
            <h2 class="text-2xl font-light leading-tight uppercase group-hover:underline">{{ $film->title }}</h2>
            <div class="space-y-2">
                <div class="flex items-baseline gap-1">
                    <div class="text-sm size-6 shrink-0 rounded-full bg-slate-900 flex items-center justify-center text-white">D</div>
                    <h3 class="text-sm">{{ $film->real }}</h3>
                    <h3 class="ml-auto text-5xl font-light">{{ Carbon\Carbon::parse(data_get($film->agendas, '{first}.date'))->isoFormat('DD.MM') }}</h3>
                </div>
                <img src="https://explorationdumonde.be/storage/{{ $film->banner }}" class="w-full h-52 object-cover" alt="{{ $film->title }}">
            </div>
        </a>
        @endforeach
    </div>
    <div class="bg-slate-800 h-0.5 mx-4"></div>
    @if ($films->where('cycle', 'découverte')->count() > 6)
    <div class="grid grid-cols-3 divide-x-2 divide-slate-800">
        @foreach ($films->where('cycle', 'découverte')->skip(6)->take(3) as $film)
        <a href="" class="flex flex-col gap-4 min-h-96 justify-between px-4 group {{ $loop->last && $loop->iteration !== 3 ? 'border-r-2 border-slate-900' : '' }}">
            <h2 class="text-2xl font-light leading-tight uppercase group-hover:underline">{{ $film->title }}</h2>
            <div class="space-y-2">
                <div class="flex items-baseline gap-1">
                    <div class="text-sm size-6 shrink-0 rounded-full bg-slate-900 flex items-center justify-center text-white">D</div>
                    <h3 class="text-sm">{{ $film->real }}</h3>
                    <h3 class="ml-auto text-5xl font-light">{{ Carbon\Carbon::parse(data_get($film->agendas, '{first}.date'))->isoFormat('DD.MM') }}</h3>
                </div>
                <img src="https://explorationdumonde.be/storage/{{ $film->banner }}" class="w-full h-52 object-cover" alt="{{ $film->title }}">
            </div>
        </a>
        @endforeach
    </div>
    <div class="bg-slate-800 h-0.5 mx-4"></div>
    @endif
</section>

@endsection