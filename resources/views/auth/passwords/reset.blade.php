@extends("front-end.layouts.master")

@Section("title","Smile Charities | Reset Password")

@section('content')
    <!-- Page Header -->
    <div id="page-header">
        <!-- section background -->
        <div class="section-bg" style="background-image: url('{{ asset('./img/background-2.jpg')}}');"></div>
        <!-- /section background -->

        <!-- page header content -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                        <div class="col-md-8"> 
                            <h1>Reset Password</h1>
                                <ul class="breadcrumb">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/login">Login</a></li>
                                    <li class="active">Reset Password</li>
                                </ul>
                        </div>
                    </div>

                    <div class="navbar-right" style="padding-top:30px;">
                        <a href="/donate" class="primary-button causes-donate" navbar-left>Donate Now  <i class="fa fa-arrow-right"></i></a>
                    </div> 
                </div>
            </div>
        </div>
        <!-- /page header content -->
    </div>
    <!-- /Page Header -->

    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">              
                @include ('admin.errors.list') {{-- Including error file --}}
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card abc13">
                    <div class="card-header abc14">{{ __('Reset Password') }}</div>

                    <div class="card-body" style="margin-top: 20px;margin-right: 10px; margin-left: 10px;">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right text-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="alert alert-danger invalid-feedback" role="alert" style="padding: 2px;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right text-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="alert alert-danger invalid-feedback" role="alert" style="padding: 2px;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right text-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="primary-button" style="margin-left: 8px; background-color: #ff751a; outline:none;">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection
