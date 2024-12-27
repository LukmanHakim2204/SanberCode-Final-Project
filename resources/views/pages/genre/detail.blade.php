@extends('layout.master')

@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Detail Genre: {{ $genre->name }}</h3>
                <p class="text-subtitle text-muted">Daftar film yang termasuk dalam genre ini.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('genre.index') }}">Genre</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Film Berdasarkan Genre: {{ $genre->name }}</h4>
            </div>
            <div class="card-body">
                @if ($genre->films->isEmpty())
                    <p class="text-muted text-center">Film dengan genre ini tidak ada.</p>
                @else
                    <div class="row">
                        @foreach ($genre->films as $film)
                        <div class="col-md-3 col-sm-4 mb-4">
                            <div class="card" style="border: 1px solid #000000; border-radius: 5px;">
                                <img class="card-img-top img-fluid" style="height: 200px; object-fit: cover;"
                                    src="{{ $film->poster ? asset('uploads/' . $film->poster) : asset('images/default-poster.png') }}"
                                    alt="Poster {{ $film->title }}">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $film->title }}</h4>
                                    @if ($film->genre)
                                        <h6>Kategori: {{ $film->genre->name }}</h6>
                                    @else
                                        <h6 class="text-muted">Kategori tidak ditemukan</h6>
                                    @endif
                                    <p style="text-align: justify;">{{ Str::limit($film->summary, 150) }}</p>
                                    <a href="{{ route('film.show', ['film_id' => $film->id]) }}"
                                        class="btn btn-block btn-secondary">Detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>
</div>
@endsection
