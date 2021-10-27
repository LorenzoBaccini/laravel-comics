@extends('layouts.app')

@section('title', "Comics")

@section('content')
    <h1>Sono il content di comics</h1>
    @foreach ($comics as $comic)
        {{ $comic["title"] }}
        <br/>
    @endforeach
@endsection