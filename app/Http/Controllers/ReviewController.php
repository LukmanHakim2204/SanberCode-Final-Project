<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $film_id)
    {
        $request->validate([
            'content' => 'required|string|min:3',
            'point' => 'required|integer',
        ]);
        $review = new Review;
        $review->user_id = auth()->id();
        $review->film_id = $film_id;
        $review->content = $request->input('content');
        $review->point = $request->input('point');
        $review->save();
        return redirect()->route('film.show',['film_id' => $film_id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $films = Film::with('reviews.user')->find($id); 
        if (!$films) {
            abort(404, 'Film tidak ditemukan');
        }
        return view('pages.film.detail', compact('films'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}