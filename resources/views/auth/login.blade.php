@extends('auth.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 mx-auto">
                <div class="card pt-4">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <a href="{{ route('film.index') }}"><img
                                    src="{{ asset('assets/assets/images/filmku.png') }}" height="60"
                                    class='mb-4'></a>
                            <h3>FILMKU</h3>
                            <p>Mohon Masukan email dan password anda.</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group ">
                                <label for="email">Email Address</label>
                                <div class="position-relative">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="clearfix">
                                    <label for="password">Password</label>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class='float-end'>
                                            <small>Forgot password?</small>
                                        </a>
                                    @endif
                                </div>
                                <div class="position-relative">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class='form-check clearfix my-4'>
                                <div class="checkbox float-start">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">Remember me</label>
                                </div>
                                <div class="float-end">
                                    <a href="{{ route('register') }}">Don't have an account?</a>
                                </div>
                            </div>
                            <div class="clearfix">
                                <button type="submit" class="btn btn-primary float-end">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
