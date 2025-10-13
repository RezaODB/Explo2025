<a href="" class="flex flex-col gap-4 min-h-96 justify-between px-4 group {{ $loop->last && $loop->iteration !== 3 ? 'border-r-2 border-sky-950' : '' }}">
    <div class="space-y-1">
        <h2 class="text-3xl font-light uppercase group-hover:underline">{{ $film->title }}</h2>
        <h3 class="text-sm text-sky-800 font-medium">De {{ $film->real }}</h3>
    </div>
    <div class="space-y-2">
        <div class="flex justify-between items-baseline gap-2">
            <div class="flex items-center gap-2">
                <div class="text-sm size-6 shrink-0 rounded-full bg-sky-800 flex items-center justify-center text-sky-50">{{ $film->cycle === 'grand' ? 'G' : 'D' }}</div>
                <h3 class="text-sm">{{ data_get($film->agendas, '{first}.city') }}</h3>
            </div>
            <h3 class="text-5xl font-light">{{ Carbon\Carbon::parse(data_get($film->agendas, '{first}.date'))->isoFormat('DD.MM') }}</h3>
        </div>
        <img src="https://explorationdumonde.be/storage/{{ $film->banner }}" alt="{{ $film->title }}">
    </div>
</a>