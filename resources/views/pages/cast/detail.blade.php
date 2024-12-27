@extends('layout.master',['title' => 'Detail Data Cast'])

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail Cast</h3>
                    <p class="text-subtitle text-muted">We use 'simple-datatables' made by @fiduswriter. You can check the
                        full documentation <a href="https://github.com/fiduswriter/Simple-DataTables/wiki">here</a>.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Cast</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card-header text-end">
                <a href="{{ route('cast.index') }}" class="btn btn-sm btn-secondary ">Back</a>
            </div>

            <h1 class="text-primary">{{ $cast->name }}</h1>
            <h4 class="">Umur : {{ $cast->age}}</h4>
            <p class="text-justify">{{ $cast->bio }}</p>
        </section>
    </div>
@endsection
