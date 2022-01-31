@extends('layouts.main-layout')

@section('content')

    <h1>
        Movie number: {{ $movie -> id }}
    </h1>

    <h2>
        Title: {{ $movie -> title }}
    </h2>

    <h3>
        Genre: {{ $movie -> genre }}
    </h3>

    <h4>
        Release Date: {{ $movie -> release_date }}
    </h4>

    <a href="{{ route('home')}}">
        Return to Homepage
    </a>

@endsection