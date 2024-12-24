<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home.index');
});

Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
Route::get('/genre/create', [GenreController::class, 'create'])->name('genre.create');
Route::post('/genre', [GenreController::class, 'store'])->name('genre.store');
Route::get('/genre/{genre_id}/edit', [GenreController::class, 'edit'])->name('genre.edit');
Route::put('/genre/{genre_id}', [GenreController::class, 'update'])->name('genre.update');
Route::delete('/genre/{genre_id}', [GenreController::class, 'destroy'])->name('genre.destroy');


Route::get('/film', [FilmController::class, 'index'])->name('film.index');
Route::get('/film/create', [FilmController::class, 'create'])->name('film.create');
Route::post('/film', [FilmController::class, 'store'])->name('film.store');
Route::get('/film/{film_id}/edit', [FilmController::class, 'edit'])->name('film.edit');
Route::put('/film/{film_id}', [FilmController::class, 'update'])->name('film.update');
Route::delete('/film/{film_id}', [FilmController::class, 'destroy'])->name('film.destroy');