@extends('layout.master')

@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Data Cast</h3>
          <p class="text-subtitle text-muted">We use 'simple-datatables' made by @fiduswriter. You can check the full documentation <a href="https://github.com/fiduswriter/Simple-DataTables/wiki">here</a>.</p>
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
            <a href="{{ route('cast.create') }}" class="btn btn-sm btn-primary">Tambah Data Cast</a>
        </div>
        <div class="card-body">
          <table class="table table-striped" id="table1">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Age</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $casts as $cast )
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $cast->name }}</td>
                <td>{{ $cast->age }}</td>
                <td>
                 <div class="d-flex gap-2">
                    <a href="{{ route('cast.edit',['cast_id' => $cast->id]) }}" class="btn btn-sm btn-success  ">Edit</a>
                    <a href="{{ route('cast.show',['cast_id' => $cast->id]) }}" class="btn btn-sm btn-secondary  ">Detail</a>

                    <form action="{{ route('cast.destroy', ['cast_id' => $cast->id]) }}" method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger ">Delete</button>
                    </form>
                 </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
@endsection
