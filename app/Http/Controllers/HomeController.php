<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class HomeController extends Controller
{
    
    public function home() {

        $movies = Movie::all();

        return view('pages.home', compact('movies'));
    }

    public function show($id) {

        $movie = Movie::findOrFail($id);

        return view('pages.show', compact('movie'));
    }

    public function create() {

        return view('pages.create');
    }

    public function store(Request $request) {

        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'release_date' => 'required|date'
        ]);

        $movie = Movie::create($data);

        return redirect() -> route('show', $movie -> id);
    }
    
    public function edit($id) {

        $movie = Movie::findOrFail($id);

        return view('pages.edit', compact('movie'));
    }

    public function update(Request $request, $id) {

        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'release_date' => 'required|date'
        ]);

        $movie = Movie::findOrFail($id);

        $movie -> update($data);

        return redirect() -> route('show', $movie -> id);
    }

    public function delete($id) {

        $movie = Movie::findOrFail($id);

        $movie -> delete();

        return redirect() -> route('home');
    }
}