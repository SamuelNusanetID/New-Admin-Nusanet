@extends('auth.layouts.main')

@section('auth-wrapper')
    @error('errorMessage')
        <div class="alert alert-danger" role="alert" style="text-align: justify;">
            {{ $message }}
        </div>
    @enderror
    <h6 class="fw-light fw-bold text-center h3 mb-4">Reset Password</h6>
    <form method="POST" action="{{ route('password.update') }}" class="row">
        @csrf
        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="form-group">
            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email"
                name="email" placeholder="Masukkan email anda disini..." value="{{ old('email', $request->email) }}"
                required>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <!-- Password -->
        <div class="form-group">
            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                id="password" name="password" placeholder="Masukkan password anda disini..." required>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <input type="password" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror"
                id="password_confirmation" name="password_confirmation" placeholder="Masukkan ulang password anda disini..."
                required>
            @error('password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">
            Reset Password
        </button>
    </form>
@endsection
