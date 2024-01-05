@extends('layouts.guest')

@section('title', 'Register')

@section('content')

<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <h1 class="auth-title">Sign Up</h1>
            <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        class="form-control form-control-xl @error('email') is-invalid @enderror"
                        placeholder="E-mail Address" />
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input id="name" type="text" name="name" value="{{ old('name') }}"
                        class="form-control form-control-xl @error('name') is-invalid @enderror"
                        placeholder="Full Name" />
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input id="password" type="password" name="password"
                        class="form-control form-control-xl @error('password') is-invalid @enderror"
                        placeholder="Password" />
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input id="password-confirm" type="password" name="password_confirmation"
                        class="form-control form-control-xl" placeholder="Confirm Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">{{ __('Sign Up') }}</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class='text-gray-600'>{{ __('Already have an account?') }} <a href="{{ route('login') }}"
                        class="font-bold">
                        Log in</a>.
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>
@endsection