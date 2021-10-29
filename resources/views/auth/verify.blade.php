@extends("front-end.layouts.master")

@Section("title","Smile Charities | Verify Email")

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
                            <h2 style="color: white;">
                                Dear {{ Auth::user()->name }}, Please Verify Your Email
                            </h2>
                            <ul class="breadcrumb">
                                <li><a href="/">Home</a></li>
                                <li class="active">Verification</li>
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
    <br><br><br>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card abc13">
                    <div class="card-header abc14">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body" style="margin: 20px; font-size: 15px; font-weight: bold;">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="font-size: 17px; margin-left: -10px; outline:none;">{{ __('click here to request another.') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <br><br><br>
@endsection
