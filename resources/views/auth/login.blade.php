<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Login
        </title>
        <meta name="description" content="Login">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
        <link rel="stylesheet" media="screen, print" href="{{asset('cssadmin/vendors.bundle.css')}}">
        <link rel="stylesheet" media="screen, print" href="{{asset('cssadmin/app.bundle.css')}}">
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/favicon-32x32.png')}}">
        <link rel="mask-icon" href="{{asset('img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
        <!-- Optional: page related CSS-->
        <link rel="stylesheet" media="screen, print" href="{{asset('cssadmin/page-login.css')}}">
    </head>
    <body>
        <div class="blankpage-form-field">
            <div class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                    <img src="img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                    <span class="page-logo-text mr-1">SmartAdmin</span>
                    <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                </a>
            </div>
            <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="username">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="your id or email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                        @error('email')
                                    <!-- <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> -->
                                    <span class="help-block invalid-feedback" role="alert">
                                    {{ $message }}
                                   </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <!-- <input type="password" id="password" class="form-control" placeholder="password" value="password123"> -->
                      
                                 @error('password')
                                    <span class="help-block invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    {{-- <div class="form-group text-left">
                        <div class="custom-control custom-checkbox">
                            <!-- <input type="checkbox" class="custom-control-input" id="rememberme"> -->
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="rememberme"> {{ __('Remember Me') }}</label>
                        </div>
                    </div> --}}
                    <button type="submit" class="btn btn-default float-right">{{ __('Login') }}</button>
                </form>
            </div>
            <div class="blankpage-footer text-center">
            @if (Route::has('password.request')) <a href="#"><strong> {{ __('Forgot Your Password?') }}</strong></a> @endif| <a href="{{ route('register') }}"><strong>Register Account</strong></a>
            </div>
        </div>
        <div class="login-footer p-2">
            <div class="row">
                <div class="col col-sm-12 text-center">
                    <i><strong>System Message:</strong> You were logged out from 198.164.246.1 on Saturday, March, 2017 at 10.56AM</i>
                </div>
            </div>
        </div>
        <video poster="{{asset('img/backgrounds/clouds.png')}}" id="bgvid" playsinline autoplay muted loop>
            <source src="{{asset('media/video/cc.webm')}}" type="video/webm">
            <source src="{{asset('media/video/cc.mp4')}}" type="video/mp4">
        </video>
     
        <script src="{{asset('js/vendors.bundle.js')}}"></script>
        <script src="{{asset('js/app.bundle.js')}}"></script>
        <!-- Page related scripts -->
    </body>
</html>
