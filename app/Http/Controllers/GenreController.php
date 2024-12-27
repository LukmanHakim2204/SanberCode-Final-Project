<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $genres = Genre::all();
        return view('pages.genre.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
        ]);

        $genre = new Genre;
        $genre->name = $request->input('name');
        $genre->save();

        return redirect()->route('genre.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $genre = Genre::findOrFail($id);
        return view('pages.genre.detail', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genre = Genre::find($id);
        return view('pages.genre.update', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|min:3',
        ]);
        $genre = Genre::find($id);
        $genre->name = $request->input('name');
        $genre->save();

        return redirect()->route('genre.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genre = Genre::find($id);
        $genre->delete();
        return redirect()->route('genre.index');
    }
}