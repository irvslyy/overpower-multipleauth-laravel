@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifikasi Email Anda') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('link verifikasi yang baru telah terkirim.') }}
                        </div>
                    @endif

                    {{ __('Sebelum lanjut ke page user, mohon untuk periksa email untuk mem-verifikasi email anda.') }}
                    {{ __('jika email tidak kunjung masuk') }}, <a href="{{ route('verification.resend') }}">{{ __('klik disini untuk mengirim ulang') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
