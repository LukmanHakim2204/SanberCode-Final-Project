@extends('layout.master')

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail Film</h3>
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
            <div class="card-header text-end">
                <a href="{{ route('film.index') }}" class="btn btn-sm btn-secondary ">Back</a>
            </div>
            <div class="d-flex justify-content-center m-4">
                <img src="{{ asset('uploads/' . $films->poster) }}" style="width: 65%">
            </div>
            <h1 class="text-primary">{{ $films->title }}</h1>
            <h4 class="">{{ $films->genre->name }}</h4>
            <p class="text-justify">{{ $films->summary }}</p>


            {{-- <div class="mt-5">
            <h3>Review Pengguna</h3>
            @foreach ($films->reviews as $review)
                <div class="border p-3 mb-3">
                    <p><strong>{{ $review->user->name }}</strong> -
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $review->point)
                                <i class="fas fa-star text-warning"></i> <!-- Bintang terisi -->
                            @else
                                <i class="far fa-star text-muted"></i> <!-- Bintang kosong -->
                            @endif
                        @endfor
                    </p>
                    <p>{{ $review->content }}</p>
                </div>
            @endforeach
        </div> --}}

        <div class="mt-5">
            <h3>Berikan Review Anda</h3>
            {{-- {{ route('film.reviews.store', ['film_id' => $films->id]) }} --}}
            @auth
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="content" class="form-label">Komentar</label>
                        <textarea name="content" id="content" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="point" class="form-label">Rating (1-5)</label>
                        <div id="rating-stars" class="d-flex gap-1">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="far fa-star text-warning star-input" data-value="{{ $i }}"></i>
                            @endfor
                        </div>
                        <input type="hidden" name="point" id="rating-point" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Review</button>
                </form>
            @else
                <p>Silakan <a href="{{ route('login') }}" class="text-primary">login</a> untuk memberikan review.</p>
            @endauth
        </div>
        </section>
    </div>

    <script>
        document.querySelectorAll('.star-input').forEach((star) => {
            star.addEventListener('click', function () {
                const rating = this.getAttribute('data-value');
                document.getElementById('rating-point').value = rating;

                document.querySelectorAll('.star-input').forEach((s) => {
                    s.classList.remove('fas');
                    s.classList.add('far');
                });

                for (let i = 1; i <= rating; i++) {
                    document.querySelector(`.star-input[data-value="${i}"]`).classList.remove('far');
                    document.querySelector(`.star-input[data-value="${i}"]`).classList.add('fas');
                }
            });
        });
    </script>
@endsection
