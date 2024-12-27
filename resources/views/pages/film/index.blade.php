@extends('layout.master',['title' => 'Data Films'])

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Film</h3>
                    <p class="text-subtitle text-muted">We use 'simple-datatables' made by @fiduswriter. You can check the
                        full documentation <a href="https://github.com/fiduswriter/Simple-DataTables/wiki">here</a>.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Film</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                @auth
                <div class="card-header text-end">
                    <a href="{{ route('film.create') }}" class="btn btn-sm btn-primary">Tambah Data Film</a>
                </div>
                @endauth
                <div class="card-body">
                    <div class="row">
                        @foreach ($films as $film)
                            <div class="col-md-3 col-sm-4 mb-4">
                                <div class="card" style="border: 1px solid #aaa8a8; border-radius: 5px;">
                                    <img class="card-img-top img-fluid" style="height: 200px; object-fit: cover;"
                                        src="{{ asset('uploads/' . $film->poster) }}" alt="Poster {{ $film->title }}">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $film->title }}</h4>
                                        <h6>Kategori: {{ $film->genre->name }}</h6>
                                        <p style="text-align: justify;">{{ Str::limit($film->summary, 150) }}</p>
                                        <a href="{{ route('film.show', ['film_id' => $film->id]) }}"
                                            class="btn btn-block btn-secondary">Detail</a>
                                        @auth
                                            <div class=" row gap-2 mt-2">
                                                <div class="col">
                                                    <a href="{{ route('film.edit', ['film_id' => $film->id]) }}"
                                                        class="btn btn-sm btn-success btn-block">Edit</a>
                                                </div>
                                                <div class="col">

                                                    <form action="{{ route('film.destroy', ['film_id' => $film->id]) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-block">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
