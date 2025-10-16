<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index()
    {
        $response = Http::get('https://explorationdumonde.be/api/films/2025');

        return view('home', [
            'films' => collect($response->object()),
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
