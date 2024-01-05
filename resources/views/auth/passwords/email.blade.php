@extends('layouts.guest')

@section('title', 'Reset Password')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <h1 class="auth-title">Reset Password.</h1>
            <p class="auth-subtitle mb-5">Forgotten password can be reset here.</p>
            
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="email" class="form-control form-control-xl @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" placeholder="E-mail Address" autofocus>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-1">
                    {{ __('Send Password Reset Link') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection