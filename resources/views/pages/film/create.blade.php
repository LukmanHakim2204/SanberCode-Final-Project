@extends('layout.master')

@section('content')

    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Create New Film</h3>
                    <p class="text-subtitle text-muted">Add Genre Data here !!</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create New Film</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Basic Vertical form layout section start -->
        <section id="basic-vertical-layouts">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card-body">
                                <form action="{{ route('film.store') }}" class="form form-vertical" method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Title</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="title" placeholder="Input Your Title" />
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-summary-vertical">Release Year</label>
                                                    <textarea name="summary" id="" cols="30" rows="10" class="form-control"
                                                        placeholder="Input Your Summary"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-release-year-vertical">Release Year</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="release_year" placeholder="Input Release Year Film" />
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-poster-vertical">Poster</label>
                                                    <input type="file" id="first-poster-vertical" class="form-control"
                                                        name="poster" placeholder="Input Poster Film" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-poster-vertical">Genre</label>
                                                    <select name="genre_id" id="first-poster-vertical" class="form-control">
                                                        <option value="">--> PILIH GENRE <--</option>
                                                        @foreach ($genre as $item)
                                                            <option value="{{ $item->id }}"> {{ $item->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <a href="{{ route('film.index') }}"
                                                    class="btn btn-light-secondary me-1 mb-1"> Cencel</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
