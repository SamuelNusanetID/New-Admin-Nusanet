@extends('auth.layouts.main')

@section('auth-wrapper')
    @if (session()->has('successMessage'))
        <div class="alert alert-success" role="alert" style="text-align: justify;">
            {{ session('successMessage') }}
        </div>
    @else
        @error('errorMessage')
            <div class="alert alert-danger" role="alert" style="text-align: justify;">
                {{ $message }}
            </div>
        @enderror
    @endif
    <h6 class="fw-light fw-bold text-center h3 mb-3">LOGIN</h6>
    <form class="pt-3" action="{{ URL::to('login') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control form-control-lg @error('username') is-invalid @enderror"
                id="username" name="username" placeholder="Username" value="{{ old('username') }}">
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                id="password" name="password" placeholder="Password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
                <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember">
                    Ingat saya
                </label>
            </div>
            <a href="{{ URL::to('forgot-password') }}" class="auth-link text-black">Lupa password?</a>
        </div>
        <div class="mt-3 row">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Masuk</button>
        </div>
    </form>
@endsection
