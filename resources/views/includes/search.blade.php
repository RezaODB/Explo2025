<section class="my-16 px-4">
    <h1 class="text-5xl font-light uppercase pb-4 flex items-center gap-2">
        <div class="text-2xl size-10 rounded-full bg-sky-800 flex items-center justify-center text-sky-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
        </div>
        Trouver une séance
    </h1>
    <div class="grid grid-cols-3 gap-4">
        <div class="py-2 border-y-2 space-y-8 border-sky-950">
            <label for="film" class="block uppercase">Films</label>
            <div class="flex">
                <select name="film" id="film" class="w-full text-sky-800 focus:outline-none bg-sky-100 p-2.5">
                    <option value="">Trouver un film</option>
                    @foreach ($films as $film)
                    <option value="">{{ $film->title }}</option>
                    @endforeach
                </select>
                <div class="bg-sky-100 w-2.5"></div>
            </div>
        </div>
        <div class="py-2 border-y-2 space-y-8 border-sky-950">
            <label for="city" class="block uppercase">Villes</label>
            <div class="flex">
                <select name="city" id="city" class="w-full text-sky-800 focus:outline-none bg-sky-100 p-2.5">
                    <option value="">Sélectionner une ville</option>
                    @foreach ($films as $film)
                    <option value="">{{ $film->title }}</option>
                    @endforeach
                </select>
                <div class="bg-sky-100 w-2.5"></div>
            </div>
        </div>
        <div class="py-2 border-y-2 space-y-8 border-sky-950">
            <label for="date" class="block uppercase">Dates</label>
            <div class="flex">
                <select name="date" id="date" class="w-full text-sky-800 focus:outline-none bg-sky-100 p-2.5">
                    <option value="">Choisir une date</option>
                    @foreach ($films as $film)
                    <option value="">{{ $film->title }}</option>
                    @endforeach
                </select>
                <div class="bg-sky-100 w-2.5"></div>
            </div>
        </div>
    </div>
</section>