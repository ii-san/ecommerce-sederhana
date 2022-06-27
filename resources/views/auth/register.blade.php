@extends('layouts.app')

@section('content')
@include('components.navbar')
<div class="row">
    <div class="col-lg-5 mx-auto">
        <div class="p-5">
            @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error')}}
            </div>
            @endif
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form action="{{ route('register') }}" method="POST">
            @csrf
                <div class="form-group mb-3">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" 
                    placeholder="Full name" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                    placeholder="Email Address" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group row mb-3">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        placeholder="Password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                    <div class="col-sm-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        placeholder="Confirm Password" required autocomplete="new-password">
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Register</button>
                </div>
            </form>
            <hr>
            <div class="text-center">
                <a class="small text-decoration-none" href="">Forgot Password?</a>
            </div>
            <div class="text-center">
                @if (Route::has('login'))
                    <a class="small text-decoration-none" href="{{ route('login') }}">Already have an account? Login Here!</a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
