@extends('auth.layouts.app', ['title' => 'Register'])



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12 mx-auto">
                <div class="card pt-4">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <a href="{{ route('film.index') }}"><img
                                    src="{{ asset('assets/assets/images/filmku.png') }}" height="60px"
                                    class='mb-4'></a>
                            <h3>Filmku</h3>
                            <p>Mohon isi Form Registrasi sesuai dengan form yang tersedia.</p>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap</label>
                                        <input type="text" id="name"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}"  autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}"  autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                             autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="password-confirm">Confirm Password</label>
                                        <input type="password" id="password-confirm" class="form-control"
                                            name="password_confirmation"  autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">
                                <button type="submit" class="btn btn-warning float-end">Submit</button>
                            </div>
                        </form>
                        <div class="text-center mt-3">
                            <a href="{{ route('login') }}">Have an account? Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
