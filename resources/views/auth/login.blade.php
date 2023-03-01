
@extends('layouts.app')

@section('content')
<div class="home-btn d-none d-sm-block">
    <!-- <a href="index.html"><i class="fas fa-home h2 text-dark"></i></a> -->
</div>
<div class="account-pages my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">

                    <div class="card-body p-4">
                        
                        <div class="text-center w-75 m-auto">
                            <a href="index.html">
                                <span><img src="{{ asset('admin/images/logo-dark.png')}}assets/" alt="" height="22"></span>
                            </a>
                            <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                        </div>

                        <form action="{{ route('login') }}" method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="emailaddress">{{ __('Email Address') }}</label>
                                <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="email" id="emailaddress" name="email" required="" autocomplete="email" placeholder="Enter your email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <a href="pages-recoverpw.html" class="text-muted float-right"><small></small></a>
                                <label for="password">{{ __('Password') }}</label>
                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required="" autocomplete="current-password" id="password" placeholder="Enter your password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                    <label class="custom-control-label" for="checkbox-signin">{{ __('Remember Me') }}</label>
                                </div>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"> {{ __('Login') }} </button>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        @if (Route::has('password.request'))
                        <p class="text-muted"> <a href="pages-register.html" class="text-muted ml-1">Forgot your password?</a></p>
                        @endif
                        <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-dark font-weight-medium ml-1">Sign Up</a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->
@endsection