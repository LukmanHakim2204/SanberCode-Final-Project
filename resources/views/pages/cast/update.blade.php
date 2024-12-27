@extends('layout.master',['title' => 'Update Data Cast'])

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
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('cast.update', $cast->id) }}" class="form form-vertical"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="cast-name-vertical">Name Cast</label>
                                                    <input type="text" id="cast-name-vertical" class="form-control"
                                                        name="name" value="{{ $cast->name }}"
                                                        placeholder="First Name" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="age-name-vertical">Age Cast</label>
                                                    <input type="text" id="age-name-vertical" class="form-control"
                                                        name="age" placeholder=" Input Age Cast" value="{{ $cast->age }}"/>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-bio-vertical">Bio</label>
                                                    <textarea name="bio" id="" cols="30" rows="10" class="form-control"
                                                        placeholder="Input Your bio">{{ $cast->bio }}</textarea>
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
