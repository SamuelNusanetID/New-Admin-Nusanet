@extends('auth.layouts.main')

@section('auth-wrapper')
    <h6 class="fw-light fw-bold text-center h3 mb-3">REGISTER</h6>
    <form class="pt-3" action="{{ URL::to('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" id="username"
                name="username" placeholder="Username" value="{{ old('username') }}">
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                id="password" name="password" placeholder="Password" value="{{ old('password') }}">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password"
                value="{{ old('password_confirmation') }}">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg @error('nama_user') is-invalid @enderror"
                id="nama_user" name="nama_user" placeholder="Nama Pengguna" value="{{ old('nama_user') }}">
            @error('nama_user')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email"
                name="email" placeholder="Email Pengguna" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mt-3 row">
            <button type="submit" class="btn btn-primary btn-lg">Submit Data</button>
        </div>
    </form>
@endsection
