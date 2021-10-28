@extends('layouts.app')

@section('title', "Comics")

@section('content')

    <section id="comics">

        <div class="container-card">

            @foreach ($comics as $comic)
            <div class="card">
                <img src="{{ $comic["thumb"] }}" alt="">
    
                <p>{{ $comic["title"] }}</p>
            </div>
            @endforeach

        </div>

    </section>

@endsection