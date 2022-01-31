@extends('layouts.main-layout')

@section('content')

    <h3>
        <a href="{{ route('create') }}">Create new Movie</a>
    </h3>

    <h3>Movie List:</h3>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="{{ route('show', $movie -> id) }}">
                    {{ $movie -> title }} ({{ $movie -> release_date }})
                </a>
                - <a href="{{ route('edit', $movie -> id) }}">[Edit]</a>
                - <a href="{{ route('delete', $movie -> id) }}">[Delete]</a>
            </li>
        @endforeach
    </ul>

@endsection