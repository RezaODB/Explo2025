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
    public $dates = [];
    public $date = 'Toutes';
    public $agendas = [];

    public function mount()
    {
        $agendas = Http::get('https://explorationdumonde.be/api/agendas');
        $this->agendas = collect($agendas->object());

        $this->villes = collect($this->agendas)->pluck('city')->unique()->sort();
        $this->films = collect($this->agendas)->pluck('film.title')->unique()->sort();
        $this->dates = collect($this->agendas)->pluck('date')->unique()->sort();
    }

    public function render()
    {
        $seances = collect($this->agendas)
            ->where('city', $this->ville === 'Toutes' ? '!=' : '=', $this->ville)
            ->where('date', $this->date === 'Toutes' ? '!=' : '=', $this->date)
            ->where('film.title', $this->film === 'Tous' ? '!=' : '=', $this->film);

        return view('livewire.search', [
            'seances' => $seances
        ]);
    }
}
