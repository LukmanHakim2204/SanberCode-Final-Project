@extends('layout.master',['title' => 'Create Data Cast'])

@section('content')

    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Create New Cast</h3>
                    <p class="text-subtitle text-muted">Add Cast Data here !!</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create New Cast</li>
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
                                <form action="{{ route('cast.store') }}" class="form form-vertical" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row ">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="cast-name-vertical">Name Cast</label>
                                                    <input type="text" id="cast-name-vertical" class="form-control"
                                                        name="name" value="{{ old('name') }}" placeholder=" Input Name Cast" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="age-name-vertical">Age Cast</label>
                                                    <input type="text" id="age-name-vertical" class="form-control"
                                                        name="age"  value="{{ old('age') }}" placeholder=" Input Age Cast" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-bio-vertical">Bio</label>
                                                    <textarea name="bio" id="" cols="30" rows="10" class="form-control"
                                                        placeholder="Input Your bio">{{ old('bio') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <a href="{{ route('cast.index') }}"
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
