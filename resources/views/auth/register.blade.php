@extends("front-end.layouts.master")

@section("title","Smile Charities | Registeration")

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
                            <h1>Registeration Page</h1>
                                <ul class="breadcrumb">
                                    <li><a href="/">Home</a></li>
                                    <li class="active">Sign Up</li>
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
            <div class="row justify-content-center">
                <div class="col-md-8 col-md-offset-2">
                    <!-- section title -->
                    <div class="section-title text-center" style=" margin-top: -30px;">
                        <h5 class="sub-title" style="margin-bottom: 40px;">Register to  Smile Charity that provides free Medical Help , Education & Poverty across Pakistan's</h5>
                    </div>
                    <!-- /section title -->
                    
                    <div>              
                        @include ('admin.errors.list') {{-- Including error file --}}
                    </div>
    
                    <div class="card abc13">
                        <div class="card-header abc14">{{ __('Register a new membership') }}</div>

                        <br>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row" style="margin-right: 4px; margin-left: 4px;">
                                    <label for="name" class="col-md-4 col-form-label text-md-right text-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <b><input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus></b>

                                        @error('name')
                                            <span class="alert alert-danger invalid-feedback" role="alert" style="padding: 2px;">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-right: 4px; margin-left: 4px;">
                                    <label for="email" class="col-md-4 col-form-label text-md-right text-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <b><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"></b>

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
                                        <b><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"></b>

                                        @error('password')
                                            <span class="alert alert-danger invalid-feedback" role="alert" style="padding: 2px;">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-right: 4px; margin-left: 4px;">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right text-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <b><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"><b>
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-right: 4px; margin-left: 4px;">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right text-right">{{ __('Register As') }}</label>

                                    <div class="col-md-6">
                                        <select name="register_as" class="form-control @error('register_as') is-invalid @enderror" required autocomplete="register_as" autofocus>
                                            <option value="" selected disabled>-- Register As* --</option>
                                            <option value="admin">Admin</option>
                                            <option value="donor">Donor</option>
                                            <option value="receiver">Receiver</option>
                                        </select>

                                        @error('register_as')
                                            <span class="alert alert-danger invalid-feedback" role="alert" style="padding: 2px;">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <p style="text-align: center; margin-right: 4px; margin-left: 4px;">By Create an account you agree to our <a href="termofuse"><b>Terms of Use</b></a> and <a href="privacy&policy"><b>Privacy Policy.</b></a></p>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="primary-button" style="margin-left: 8px; background-color: #ff751a; outline:none;">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="section-title text-center" style="margin-top: 20px;">
                                <p class="">Already a member? <a href="login"><b>Login Now</b></a>
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
