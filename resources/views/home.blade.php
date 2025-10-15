@extends('layout')
@section('content')

<div class="rounded-2xl relative overflow-hidden">
    <video src="{{ asset('teaser2025.mp4') }}" class="w-full" muted autoplay loop></video>
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900 opacity-50"></div>
    <p class="text-white max-w-xl font-medium leading-relaxed absolute right-4 top-4">Le monde se découvre autrement quand il se raconte. Depuis 75 ans, Exploration du Monde fait voyager les esprits à travers les récits, les images et les émotions de celles et ceux qui partent à la rencontre de notre planète. Une invitation à voir plus loin, à écouter autrement, à renouer avec l'art du voyage humain.</p>
</div>

@endsection