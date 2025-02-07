@extends('layout.master',['title' => 'Create Data Genre'])

@section('content')

    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Create New Genre</h3>
                    <p class="text-subtitle text-muted">Add Genre Data here !!</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create New Genre</li>
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
                                <form action="{{ route('genre.store') }}" class="form form-vertical" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row ">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="genre-name-vertical">Name Genre</label>
                                                    <input type="text" id="genre-name-vertical" class="form-control"
                                                        name="name" placeholder="Input Your Genre "  value="{{ old('name') }}"/>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <a href="{{ route('genre.index') }}"
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
