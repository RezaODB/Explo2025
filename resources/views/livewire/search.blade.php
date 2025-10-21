<div>

<section class="border-y border-stone-900 py-4 scroll-mt-24" id="agenda" x-intersect="section = 'agenda'">
    <div class="flex flex-col sm:flex-row justify-between gap-4 sm:divide-x divide-stone-900 divide-dotted max-w-[1440px] mx-auto px-4">
        <div class="cursor-pointer w-full pr-4 relative" x-data="{ open: false }" x-on:click="open = !open">
            <label for="film" class="text-sm text-stone-500 uppercase block">Films</label>
            <div class="flex items-center justify-between mt-2">
                <span>{{ $film }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-stone-500 duration-300" x-bind:class="open ? 'rotate-180' : 'rotate-0'"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
            </div>
            <div class="absolute z-10 top-8 p-2 left-0 bg-white text-sm border uppercase" x-show="open" x-transition x-on:click.outside="open = false">
                <div>
                    <div class="p-2 {{ $film === 'Tous' ? 'bg-pink-200' : 'hover:bg-pink-100' }}" wire:click="$set('film', 'Tous')">Tous les films</div>
                    @foreach ($films as $movie)
                    <div class="p-2 {{ $film === $movie ? 'bg-pink-200' : 'hover:bg-pink-100' }}" wire:click="$set('film', '{{ $movie }}')">{{ $movie }}</div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="cursor-pointer w-full pr-4 relative" x-data="{ open: false }" x-on:click="open = !open">
            <label for="ville" class="text-sm text-stone-500 uppercase block">Villes</label>
            <div class="flex items-center justify-between mt-2">
                <span>{{ $ville }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-stone-500 duration-300" x-bind:class="open ? 'rotate-180' : 'rotate-0'"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
            </div>
            <div class="absolute z-10 top-8 p-2 left-0 bg-white text-sm border uppercase" x-show="open" x-transition x-on:click.outside="open = false">
                <div class="columns-2 gap-4">
                    <div class="p-2 {{ $ville === 'Toutes' ? 'bg-green-200' : 'hover:bg-green-100' }}" wire:click="$set('ville', 'Toutes')">Toutes les villes</div>
                    @foreach ($villes as $city)
                    <div class="p-2 {{ $ville === $city ? 'bg-green-200' : 'hover:bg-green-100' }}" wire:click="$set('ville', '{{ $city }}')">{{ $city }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-16 space-y-8 max-w-[1440px] mx-auto px-4">
    <h1 class="text-4xl sm:text-6xl border-b-4 border-stone-900">Prochaines séances</h1>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        @foreach ($seances->take(8) as $agenda)
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

</div>