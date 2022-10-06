@extends('auth.layouts.main')

@section('auth-wrapper')
    <h6 class="fw-light fw-bold text-center h3 mb-3">Konfirmasi Password</h6>
    <p style="text-align: justify;">
        Laman ini aman. Silahkan konfirmasi password anda sebelum melanjutkan.
    </p>
    <form method="POST" action="{{ route('password.confirm') }}" class="row">
        @csrf
        <!-- Password -->
        <div class="form-group">
            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password"
                name="password" placeholder="Masukkan password anda disini..." required>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button class="btn btn-success">Konfirmasi Password</button>
    </form>
@endsection
