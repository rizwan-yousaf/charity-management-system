@extends("front-end.layouts.master")

@Section("title","Smile Charities | Login")

@section('content')
    <!-- Page Header -->
    <div id="page-header">
        <!-- section background -->
        <div class="section-bg" style="background-image: url(./img/background-2.jpg);"></div>
        <!-- /section background -->

        <!-- page header content -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                        <div class="col-md-8"> 
                            <h1>Login</h1>
                                <ul class="breadcrumb">
                                    <li><a href="/">Home</a></li>
                                    <li class="active">Login</li>
                                </ul>
                        </div>
                    </div>

                    <div class="navbar-right" style="padding-top:30px;">
                        <a href="donate" class="primary-button causes-donate" navbar-left>Donate Now  <i class="fa fa-arrow-right"></i></a>
                    </div> 
                </div>
            </div>
        </div>
        <!-- /page header content -->
    </div>
    <!-- /Page Header -->

    <div id="about" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- section title -->
                    <div class="section-title text-center" style=" margin-top: -30px;">
                        <h5 class="sub-title" style="margin-bottom: 40px;">Login to Smile Charity that provides free Medical Help , Education & Poverty across Pakistan's</h5>
                    </div>
                    <!-- /section title -->

                    <div>              
                        @include ('admin.errors.list') {{-- Including error file --}}
                    </div>
                    
                    <div class="card abc13">
                        <div class="card-header abc14">{{ __('Login to start your session') }}</div>

                        <br>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row" style="margin-right: 4px; margin-left: 4px;">
                                    <label for="email" class="col-md-4 col-form-label text-md-right text-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <b><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus></b>

                                        @error('email')
                                            <span class="alert alert-danger invalid-feedback" role="alert" style="padding: 2px;">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-right: 4px; margin-left: 4px;">
                                    <label for="password" class="col-md-4 col-form-label text-md-right text-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <b><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"></b>

                                        @error('password')
                                            <span class="alert alert-danger invalid-feedback" role="alert" style="padding: 2px;">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="form-check" style="margin-left: 8px;">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="form-group row" style="margin-left: 4px;">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="g-recaptcha" data-sitekey="6LdtXBQaAAAAAJSO-ndlFKiKU_O8KsyRFi6nxMfV"></div>   
                                    </div>
                                </div> -->

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="primary-button" style="margin-left: 8px; background-color: #ff751a; outline:none;">
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
                            <div class="section-title text-center" style="margin-top: 20px;">
                                <p class="">Register A New Membership? <a href="register"><b>Register Now</b></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
@endsection
