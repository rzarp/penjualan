{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="name" class="form-control @error('name') is-invalid @enderror" name="user" value="{{ old('user') }}" required autocomplete="user" autofocus>

                                @error('user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('base-login')
@section('login')
@section('title', 'Login')
<body class="login">
	<div class="wrapper wrapper-login wrapper-login-full p-0" style=" background-image: url('assets/img/umkm-3.jpg');background-size: cover;background-repeat: no-repeat;background-position: center center;">
		<div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center"  >
			<h1 class="title fw-bold text-light mb-3">Penjualan</h1>
			<p class="subtitle fw-bold text-light op-7">Lorem Ipsum</p>
		</div>
		<div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
			<div class="container container-login container-transparent animated fadeIn">
                {{-- <img src="{{asset('assets/img/icon.ico')}}"  width="300" height="80" alt="navbar brand" class="navbar-brand center"> --}}
                <br><br>
				<h3 class="text-center">Silahkan Login</h3>



                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="login-form">
                        <div class="form-group">
                            <label for="username" class="placeholder"><b>Username</b></label>
                            <input id="username" name="user" type="text" class="form-control">

                            @error('user')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="placeholder"><b>Password</b></label>
                            <div class="position-relative">
                                <input id="password" name="password" type="password" class="form-control" autocomplete="current-password">
                                <div class="show-password">
                                    <i class="icon-eye"></i>
                                </div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        <div class="form-group form-action-d-flex mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="rememberme">
                                <label class="custom-control-label m-0" for="rememberme">Remember Me</label>
                            </div>
                            <button class="btn btn-success col-md-5 float-right mt-3 mt-sm-0 fw-bold">Login</button>
                        </div>

                    </div>
                </form>
			</div>
		</div>
	</div>
</body>
@endsection


@push('script')

@endpush
