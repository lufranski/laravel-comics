@extends('layouts.main')

@section('content')

    <div class="d-flex mx-auto w-50">
        
        <img src="{{ Vite :: asset('/resources/img/dc-logo.png') }}" alt="">

        <nav class="align-self-center text-secondary">
            <ul class="d-flex gap-2">
                <li>CHARACTERS</li>
                <li>COMICS</li>
                <li>MOVIES</li>
                <li>TV</li>
                <li>GAMES</li>
                <li>COLLECTIBLES</li>
                <li>VIDEOS</li>
                <li>FANS</li>
                <li>NEWS</li>
                <li>SHOP</li>
            </ul>
        </nav>
    </div>

@endsection