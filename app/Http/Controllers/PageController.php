<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index()
    {
        // $films = Http::get('https://explorationdumonde.be/api/films/2025');
        $agendas = Http::get('https://explorationdumonde.be/api/agendas');

        return view('home', [
            // 'films' => collect($films->object()),
            'agendas' => collect($agendas->object()),
        ]);   
    }
    
    public function films()
    {
        $response = Http::get('https://explorationdumonde.be/api/films/2025');

        return view('films', [
            'films' => collect($response->object()),
        ]);   
    }
}
