<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        $genres = Genre::all();
        return view('pages.film.index', compact('films', 'genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = Genre::all();
        return view('pages.film.create', compact('genre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:3',
            'summary' => 'required',
            'release_year' => 'required|integer',
            'poster' => 'required|image|mimes:png,jpg,jpeg',
            'genre_id' => 'required|exists:genres,id',
        ]);

        $newPosterName = time() . '.' . $request->poster->extension();
        $request->poster->move(public_path('uploads'), $newPosterName);

        $film = new Film;
        $film->title = $request->input('title');
        $film->summary = $request->input('summary');
        $film->release_year = $request->input('release_year');
        $film->poster = $newPosterName;
        $film->genre_id = $request->input('genre_id');
        $film->save();

        return redirect()->route('film.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $film = Film::find($id);
        $genre = Genre::all();
        return view('pages.film.update', compact('film', 'genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|min:3',
            'summary' => 'required',
            'release_year' => 'required|integer',
            'poster' => 'image|mimes:png,jpg,jpeg',
            'genre_id' => 'required|exists:genres,id',
        ]);

        $film = Film::find($id);
        $film->title = $request->input('title');
        $film->summary = $request->input('summary');
        $film->release_year = $request->input('release_year');
        if ($request->has('poster')) {
            File::delete('uploads/' . $film->poster);
            $newPosterName = time() . '.' . $request->poster->extension();
            $request->poster->move(public_path('uploads'), $newPosterName);
            $film->poster = $newPosterName;
        }
        $film->genre_id = $request->input('genre_id');
        $film->save();

        return redirect()->route('film.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = Film::find($id);
        if ($film->poster) {
            File::delete('uploads/' . $film->poster);
        }
        $film->delete();


        return redirect()->route('film.index');
    }
}
