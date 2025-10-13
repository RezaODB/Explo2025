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
}
