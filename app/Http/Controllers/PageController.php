<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index()
    {
        $films = Http::get('https://explorationdumonde.be/api/films/2025');

        return view('home', [
            'films' => collect($films->object()),
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
