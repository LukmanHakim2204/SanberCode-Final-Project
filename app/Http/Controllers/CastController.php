<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casts = Cast::all();
        return view('pages.cast.index', compact('casts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'age' => 'required|integer',
            'bio' => 'required|string|min:3',
        ]);

        $cast = new Cast;
        $cast->name = $request->input('name');
        $cast->age = $request->input('age');
        $cast->bio = $request->input('bio');
        $cast->save();

        return redirect()->route('cast.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = Cast::find($id);
        return view('pages.cast.detail', compact('cast'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = Cast::find($id);
        return view('pages.cast.update', compact('cast'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'age' => 'required|integer',
            'bio' => 'required|string|min:3',
        ]);
        $cast = Cast::find($id);
        $cast->name = $request->input('name');
        $cast->age = $request->input('age');
        $cast->bio = $request->input('bio');
        $cast->save();

        return redirect()->route('cast.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cast = Cast::find($id);
        $cast->delete();
        return redirect()->route('cast.index');
    }
}