@extends('layout.master')

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
                            <li class="breadcrumb-item active" aria-current="page">Datatable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header text-end">
                    <a href="{{ route('film.create') }}" class="btn btn-sm btn-primary">Tambah Data Film</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($films as $film)
                            <div class="col-md-3 col-sm-4 mb-4">
                                <div class="card">
                                    <img class="card-img-top img-fluid" style="height: 200px; object-fit: cover;"
                                        src="{{ asset('uploads/' . $film->poster) }}" alt="Poster {{ $film->title }}">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $film->title }}</h4>
                                        <h6>Kategori: {{ $film->genre->name }}</h6>
                                        <p class="text-justify">{{ Str::limit($film->summary,400) }}</p>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="" class="btn btn-sm btn-secondary">Detail</a>
                                            <a href="{{ route('film.edit', ['film_id' => $film->id]) }}"
                                                class="btn btn-sm btn-success">Edit</a>
                                            <form action="{{ route('film.destroy', ['film_id' => $film->id]) }}" method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </div>
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
