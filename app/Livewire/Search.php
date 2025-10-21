<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Search extends Component
{
    public $films = [];
    public $film = 'Tous';

    public $villes = [];
    public $ville = 'Toutes';

    public $agendas = [];

    public function mount()
    {
        $agendas = Http::get('https://explorationdumonde.be/api/agendas');
        $this->agendas = collect($agendas->object());
    }

    public function render()
    {
        $this->villes = collect($this->agendas)
            ->where('film.title', $this->film === 'Tous' ? '!=' : '=', $this->film)
            ->pluck('city')->unique()->sort();

        $this->films = collect($this->agendas)
            ->where('city', $this->ville === 'Toutes' ? '!=' : '=', $this->ville)
            ->pluck('film.title')->unique()->sort();

        $seances = collect($this->agendas)
            ->where('city', $this->ville === 'Toutes' ? '!=' : '=', $this->ville)
            ->where('film.title', $this->film === 'Tous' ? '!=' : '=', $this->film);

        return view('livewire.search', [
            'seances' => $seances->take(8)
        ]);
    }
}
