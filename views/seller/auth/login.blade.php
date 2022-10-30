<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>login - {{ env('APP_NAME') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/favicon.ico') }}">
    <!-- General CSS Files -->

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <!-- ar -->
    <link rel="stylesheet" href="{{ asset('assets/css/loginAr.css') }}">
</head>

<body>
<div id="app">
    <section class="section login">
        <div class="svg">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800"><defs><filter id="bbblurry-filter" x="-100%" y="-100%" width="400%" height="400%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
	        <feGaussianBlur stdDeviation="40" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" edgeMode="none" result="blur"></feGaussianBlur></filter></defs><g filter="url(#bbblurry-filter)"><ellipse rx="150" ry="150" cx="602.6749801236297" cy="419.58226276817123" fill="hsl(38, 99%, 67%)"></ellipse><ellipse rx="150" ry="150" cx="469.4076710646066" cy="328.58482065250735" fill="hsl(316, 73%, 52%)"></ellipse><ellipse rx="150" ry="150" cx="627.300217873139" cy="213.03582747694085" fill="hsl(185, 100%, 57%)"></ellipse></g></svg>       
        </div>
        <div class="container mt-5">
            <div class="row login_caro">
                <div class="col-xs-12 col-sm-14 col-md-5 col-lg-6 testimonials">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        <div class="carousel-item active">                            
                            <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quae quis, magnam laudantium corporis.</p>
                            <p class="name">- <b>Mohamed Sharaqi</b></p>
                            </div>
                            <div class="carousel-item">
                            <p>2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quae quis, magnam laudantium corporis.</p>
                            <p class="name">- <b>Mohamed Sharaqi</b></p>                                                        
                            </div>
                            <div class="carousel-item">
                            <p>3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quae quis, magnam laudantium corporis.</p>
                            <p class="name">- <b>Mohamed Sharaqi</b></p>                                                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-14 col-md-7 col-lg-6 loginForm">
                    <!-- <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4"> -->
                    <div class="card card-primary"><div class="login-brand">
                        <img src="{{ asset('uploads/logo.png') }}" alt="logo" width="100" class="shadow-light">
                    </div>
                        <div class="card-header"><h4>{{ __('Login') }}</h4></div>

                        <div class="card-body">

                            <form method="POST" class="loginform" class="needs-validation"
                                  action="{{ route('seller.dashboard.login') }}">
                                @csrf

                                @method('POST')
                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">{{ __('Password') }}</label>
                                        @if (Route::has('password.request'))
                                            <div class="float-right">
                                                <a href="{{ route('password.request') }}" class="text-small">
                                                    {{ __(' Forgot Password?') }}
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                    <input id="password" type="password"
                                           class="form-control  @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input"
                                                   tabindex="3" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label"
                                                   for="remember-me">{{ __('Remember Me') }}</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block basicbtn"
                                                tabindex="4">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                            </form>


                            <div class="simple-footer">
                                {{ __('Copyright') }} &copy; {{ env('APP_NAME') }} {{ date('Y') }}
                            </div>

                        </div>
                    <!-- </div>-->
                </div>
                 </section>
</div>

<!-- General JS Scripts -->
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
<!-- Template JS File -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/form.js') }}"></script>
</body>
</html>
