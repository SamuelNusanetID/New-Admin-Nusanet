@extends('auth.layouts.main')

@section('auth-wrapper')
    <h6 class="fw-light fw-bold text-center h3 mb-3">Verifikasi Email</h6>
    <p style="text-align: justify;">
        Terima kasih telah mendaftar! Sebelum memulai, apakah anda memverifikasi email anda dengan mengklik link yang kami
        kirimkan? Jika kamu belum menerima email dari kami, kami akan membantu anda untuk membuat link verifikasi baru.
    </p>
    @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success" role="alert">
            Link verifikasi email yang terbaru telah kami kirimkan. Silahkan cek email anda.
        </div>
    @endif
    <form method="POST" action="{{ route('verification.send') }}" class="row mb-2">
        @csrf
        <button type="submit" class="btn btn-success">
            Kirim Ulang Email Verifikasi
        </button>
    </form>

    <form method="POST" action="{{ route('logout') }}" class="row">
        @csrf
        <button type="submit" class="btn btn-secondary">
            Kembali ke halaman login
        </button>
    </form>
@endsection
