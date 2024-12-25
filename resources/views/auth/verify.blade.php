@extends('layouts.app', ['title' => 'Verifikasi Email'])

@section('content')
    <section class="pb-6">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-primary text-white">{{ __('Verifikasi Alamat Email Anda') }}</div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
                                </div>
                            @endif

                            <p>{{ __('Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi.') }}</p>
                            <p>{{ __('Jika Anda tidak menerima email tersebut') }},</p>
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit"
                                    class="btn btn-primary">{{ __('klik di sini untuk meminta yang lain') }}</button>.
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
