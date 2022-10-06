@extends('auth.layouts.main')

@section('auth-wrapper')
    <h6 class="fw-light fw-bold text-center h3 mb-3">Lupa Password</h6>
    <p style="text-align: justify;">
        Lupa password anda? Tidak masalah. Biarkan kami tau alamat email anda dan kami akan mengirimkan link untuk reset
        password ke email anda.
    </p>
    @if (session()->has('status'))
        <div class="alert alert-info" role="alert" style="text-align: justify;">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}" class="row">
        @csrf
        <div class="mb-4">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email"
                name="email" value="{{ old('email') }}" placeholder="Masukkan alamat email anda disini...">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">
            Kirim Link Reset Password
        </button>
    </form>
@endsection
