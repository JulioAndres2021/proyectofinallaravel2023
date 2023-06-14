@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Iniciar Sesión') }}</div>
                    <!--FORMULARIO ORIGINAL-->
                 <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Dirección de Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

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

                                    {{-- <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label> --}}
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Entrar al Sistema') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div> 
                <!--FIN FORMULARIO ORIGINAL-->
                
                <!--FORMULARIO NUEVO-->
                {{-- <div class="limiter">
                    <div class="container-login100">
                        <div class="wrap-login100">
                            <form class="login100-form validate-form">
                                <span class="login100-form-title p-b-43">
                                    Login to continue
                                </span>
                                
                                
                                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                    <input class="input100" type="text" name="email">
                                    <span class="focus-input100"></span>
                                    <span class="label-input100">Email</span>
                                </div>
                                
                                
                                <div class="wrap-input100 validate-input" data-validate="Password is required">
                                    <input class="input100" type="password" name="pass">
                                    <span class="focus-input100"></span>
                                    <span class="label-input100">Password</span>
                                </div>
            
                                <div class="flex-sb-m w-full p-t-3 p-b-32">
                                    <div class="contact100-form-checkbox">
                                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                        <label class="label-checkbox100" for="ckb1">
                                            Remember me
                                        </label>
                                    </div>
            
                                    <div>
                                        <a href="#" class="txt1">
                                            Forgot Password?
                                        </a>
                                    </div>
                                </div>
                        
            
                                <div class="container-login100-form-btn">
                                    <button class="login100-form-btn">
                                        Login
                                    </button>
                                </div>
                                
                                <div class="text-center p-t-46 p-b-20">
                                    <span class="txt2">
                                        or sign up using
                                    </span>
                                </div>
            
                                <div class="login100-form-social flex-c-m">
                                    <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                                    </a>
            
                                    <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </form>
            
                            <div class="login100-more" style="background-image: url('images/bg-01.jpg');">
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!--FIN FORMULARIO NUEVO-->
            </div>
        </div>
    </div>
</div>
@endsection

