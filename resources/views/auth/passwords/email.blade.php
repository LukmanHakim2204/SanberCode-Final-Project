@extends('auth.layouts.app')

@section('content')
    <div id="auth">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card py-4">
                        <div class="card-body">

                            <div class="text-center mb-5">
                                <img src="{{ asset('assets/assets/images/background/cover.png') }}" height="48" class="mb-4" />
                                <h3>Forgot Password</h3>
                                <p>Please enter your email to receive password reset link.</p>
                            </div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="clearfix">
                                    <button type="submit" class="btn btn-primary float-end">Send Password Reset
                                        Link</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
