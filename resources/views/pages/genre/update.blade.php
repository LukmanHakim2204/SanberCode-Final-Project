@extends('layout.master')

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
                <form action="{{ route('genre.update', $genre->id) }}" class="form form-vertical" method="POST">
                   @csrf
                   @method('PUT')
                  <div class="form-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="first-name-vertical">Name Genre</label>
                          <input type="text" id="first-name-vertical" class="form-control" name="name" placeholder="First Name" />
                        </div>
                      </div>
                      <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                        <a href="{{ route('genre.index') }}" class="btn btn-light-secondary me-1 mb-1"> Cencel</a>
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
