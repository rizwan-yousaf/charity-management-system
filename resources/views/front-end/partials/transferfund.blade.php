@extends("front-end.layouts.master")

@Section("title","Smile Charities | Transfer Fund")

@Section("content")
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
                            <h1>Transfer Fund</h1>
                                <ul class="breadcrumb">
                                    <li><a href="/view-completed-event">Completed Event</a></li>
                                    <li class="active">{{$transferfund->Title}}</li>
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

    <!-- ABOUT -->
    <div id="about" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- about video -->
                <div class="col-md-offset-1 col-md-4" style="margin-bottom: 100px;">
                    <a href="#" class="about-video">
                        <img src="/uploads/{{$transferfund->Image}}" alt="">
                    </a>


                    <br>
                    <br>
                    <?php
                        $percent= ($transferfund->raised_fund/$transferfund->Fund )*100;
                        $percentage=(int) $percent;
                    ?>

                    <div class="causes-progress" style="margin-right: 10px; margin-left: 15px;">
                        <div class="causes-progress-bar">
                            <div style="width: {{$percentage}}%">
                                <span>{{$percentage}}%</span>
                            </div>
                        </div>
                        <div>
                            <span class="causes-raised">Raised: <strong>{{$transferfund->raised_fund}}Rs</strong></span>
                            <span class="causes-goal">Goal: <strong>{{$transferfund->Fund}}Rs</strong></span>
                        </div>
                    </div>
                </div>
                <!-- /about video -->

                <!-- about content -->
                <div class="col-md-7" style="margin-top: -30px">
                    <div class="section-title">
                        <h3 class="abc9">Transfer fund Through </h3>
                        <!-- <hr style="border-top:2px dashed #78ab0c"> -->
                    </div> 

                    <script>                    
                        function myFunction() {
                            var x = document.getElementById("easypaisa");
                            var y = document.getElementById("card");
                            if (x.style.display === "none") {
                            x.style.display = "block";
                            y.style.display = "none";
                        }}
                        function myFunction2() {
                            var x = document.getElementById("card");
                            var y = document.getElementById("easypaisa");
                            if (x.style.display === "none") {
                            x.style.display = "block";
                            y.style.display = "none";
                        }} 
                    </script>

                    <div class="btn-groupabc" style="display: inline-block;">
                        <button class="buttonabc" style="border: 1px solid green; outline: none;" onclick="myFunction2()"><i class="fa fa-arrow-down"></i> CREDIT/DEBIT CARDS</button>
                        <button class="buttonabc" style="border: 1px solid green; outline: none;" onclick="myFunction()"><i class="fa fa-arrow-down"></i> EASYPAISA ACCOUNT</button>
                    </div>

                    <div id="easypaisa" style="display: none;">
                        <div class="section-title">
                            <img style="height: 60px;border-radius: 8px;" src="{{ asset('./img/easypaisa.PNG')}}" alt="">
                        </div>
                        <form action="{{route('transfer-by-easypaisa')}}" method="Post">
                            {{ csrf_field() }}
                            <div class="section-title">
                                <h3 class="abc9">Personal Information</h3>
                                <hr style="border-top:2px dashed #78ab0c">
                            </div>
                            <div class="form-group">
                                <input class="input" placeholder="Enter Full Name" type="hidden" name="event_id" required="true" style="outline: none;" value="{{$transferfund->id}}">
                            </div>
                            <div class="form-group">
                                <input class="input" placeholder="Enter Full Name" type="hidden" name="user_id" required="true" style="outline: none;" value="{{$transferfund->User_id}}">
                            </div>
                            <div class="form-group">
                                <input class="input" placeholder="Enter Email Adress" type="hidden"  name="admin_email" required="true" style="outline: none;" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="form-group">
                                <label class='control-label'>Your Name</label>
                                <input class="input" placeholder="Enter Full Name" type="text" name="name" required="true" style="outline: none;" value="{{ $transferfund->User_Name }}">
                            </div>
                            <div class="form-group">
                                <label class='control-label'>Your Email</label>
                                <input class="input" placeholder="Enter Email Adress" type="email"  name="email" required="true" style="outline: none;" value="{{ $transferfund->User_Email }}">
                            </div>
                            
                            <div class="section-title">
                                <h3 class="abc9">Donation Information</h3>
                                <hr style="border-top:2px dashed #78ab0c">
                            </div>
                            <div class="form-group">
                                <label class='control-label'>Pupose</label>
                                <input class="input" placeholder="For What Purpose" type="text" name="purpose" required="true" style="outline: none;" value="{{$transferfund->Title}}" >
                            </div> 
                            <div class="form-group">
                                <label class='control-label'>Amount(PKR)</label>
                                <input class="input" placeholder="Enter Your Donation" type="number" name="amount" required="true" style="outline: none;" value="{{$transferfund->Fund}}">
                            </div>

                            <div class="section-title">
                                <h3 class="abc9">Easypaisa Information</h3>
                                <img style="height: 60px;border-radius: 8px;" src="{{ asset('./img/easypaisa.PNG')}}" alt="">
                                <hr style="border-top:2px dashed #78ab0c">
                            </div>
                            <!-- <div class='form-group text-center'>
                                <div class='form-group'>
                                    <label class='control-label' style="color: blue;">Send donation in the below process, then right now commitment</label> 
                                </div>
                            </div> -->
                            <div class='form-group'>
                                <div class='form-group'>
                                    <label class='control-label'>Admin CNIC Number : </label> 
                                    <dfn> 37405-0987654-3</dfn>
                                </div>
                            </div>
                            <div class='form-group'>
                                <div class='form-group'>
                                    <label class='control-label'>Admin EasyPaisa Account No : </label> 
                                    <dfn> 0343-539159-2</dfn>
                                </div>
                            </div>
                            <div class='form-group'>
                                <div class='form-group'>
                                    <label class='control-label'>EasyPaisa Shop : </label> 
                                    <dfn> Every Easypaisa Shop Anywhere in Pakistan.</dfn>
                                </div>
                            </div>
                            <div class='form-group'>
                                <div class='form-group'>
                                    <p>In case of any query,regarding the commitment process, you may contact on the following:</p>
                                </div>
                            </div>
                            <div class='form-group'>
                                <div class='form-group'>
                                    <label class='control-label'>E-mail address : </label> 
                                    <dfn> smilrecharity786@gmail.com</dfn>
                                </div>
                            </div>
                            <div class='form-group'>
                                <div class='form-group'>
                                    <label class='control-label'>or call us : </label> 
                                    <dfn> +92 (43) 5391 592 <b>(Monday to Friday during 9am-5pm)</b></dfn>    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class='control-label'>Enter Your EasyPaisa Phone No.</label>
                                <input class="input" placeholder="Your EasyPasia Phone No." type="number" name="easypaisa_no" required="true" style="outline: none;">
                            </div>
                            
                            <input type="hidden" name="id" value="{{$transferfund->id}}">

                            <div class='form-group text-center'>
                                <div class='form-group ml-auto'>
                                    <input <?php if($transferfund->Transfer_Fund == 1){echo "checked";}?> type="checkbox" name="approve">

                                    <input class="primary-button" type="submit" Value="Transfer Fund" style=" margin-left: 10px; border-radius: 25px; outline: none;">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div id="card">
                        <div class="section-title">
                            <img src="{{ asset('./img/stripe.PNG')}}" alt="">
                        </div>
                        <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
                        <form accept-charset="UTF-8" action="{{route('transfer-by-card')}}" class="require-validation"
                        data-cc-on-file="false"
                        data-stripe-publishable-key="pk_test_51HwuCIBYduvu7eS0hSKyvfyJeLpv0UHnd5DmaKToNOBLM78NLhIaZKLA30R9jUWqrwXlQFBPVRwuwxquXBIPawDo00uIoqQ2Zu"
                        id="payment-form" method="post">
                        {{ csrf_field() }}
                            <div class="section-title">
                                <h3 class="abc9">Personal Information</h3>
                                <hr style="border-top:2px dashed #78ab0c">
                            </div>
                            <div class="form-group">
                                <input class="input" placeholder="Enter Full Name" type="hidden" name="event_id" required="true" style="outline: none;" value="{{$transferfund->id}}">
                            </div>
                            <div class="form-group">
                                <input class="input" placeholder="Enter Full Name" type="hidden" name="user_id" required="true" style="outline: none;" value="{{$transferfund->User_id}}">
                            </div>
                            <div class="form-group">
                                <input class="input" placeholder="Enter Email Adress" type="hidden"  name="admin_email" required="true" style="outline: none;" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="form-group">
                                <label class='control-label'>Your Name</label>
                                <input class="input" placeholder="Enter Full Name" type="text" name="name" required="true" style="outline: none;" value="{{ $transferfund->User_Name }}">
                            </div>
                            <div class="form-group">
                                <label class='control-label'>Your Email</label>
                                <input class="input" placeholder="Enter Email Adress" type="email"  name="email" required="true" style="outline: none;" value="{{ $transferfund->User_Email }}">
                            </div>

                            <div class="section-title">
                                <h3 class="abc9">Donation Information</h3>
                                <hr style="border-top:2px dashed #78ab0c">
                            </div>
                            <div class="form-group">
                                <label class='control-label'>Pupose</label>
                                <input class="input" placeholder="For What Purpose" type="text" name="purpose" required="true" style="outline: none;" value="{{$transferfund->Title}}" >
                            </div> 
                            <div class="form-group">
                                <label class='control-label'>Amount(PKR)</label>
                                <input class="input" placeholder="Enter Your Donation" type="number" name="amount" required="true" style="outline: none;" value="{{$transferfund->Fund}}">
                            </div>
                                                  
                            <div class="section-title">
                                <h3 class="abc9">Card Information</h3>
                                <img src="{{ asset('./img/stripe.PNG')}}" alt="">
                                <hr style="border-top:2px dashed #78ab0c">
                            </div> 
                            <div class='form-group'>
                                <div class='form-group required'>
                                    <label class='control-label'>Name on Card</label> 
                                    <input placeholder="Enter Your Card Name" class='input form-control' type='text' size='4' style="outline: none;">
                                </div>
                            </div>
                            <div class='form-group'>
                                <div class='form-group card required'>
                                    <label class='control-label'>Card Number</label> 
                                    <input placeholder="Enter Your Card Number" autocomplete='off' class='form-control card-number input' size='20' type='text' name="card_no">
                                </div>
                            </div>
                            <div class='form-group'>
                                <div class='col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label> 
                                    <input autocomplete='off' class='input form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                </div>
                                <div class='col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> 
                                    <input class='input form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                </div>
                                <div class='col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> 
                                    <input class='input form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                </div>
                            </div>
                            <div class='form-row' hidden="">
                                <div class='col-md-12'>
                                    
                                </div>
                            </div>
                           
                            <input type="hidden" name="id" value="{{$transferfund->id}}">

                            <div class='form-group text-center'>
                                <div class='form-group ml-auto'>
                                    <input <?php if($transferfund->Transfer_Fund == 1){echo "checked";}?> type="checkbox" name="approve">

                                    <input class="primary-button" type="submit" Value="Transfer Fund" style=" margin-left: 10px; border-radius: 25px; outline: none;">
                                </div>
                            </div>
                            <div class='form-row'>
                                <div class='col-md-12 error form-group hide'>
                                    <div class='alert-danger alert'>Please correct the errors and try again.
                                    </div>
                                </div>
                            </div>
                        </form>
                        @if ((Session::has('success-message')))
                            <div class="alert alert-success col-md-12">{{
                                Session::get('success-message') }}</div>
                        @endif @if ((Session::has('fail-message')))
                            <div class="alert alert-danger col-md-12">{{
                                Session::get('fail-message') }}</div>
                        @endif
                    </div>
                </div>
                <!-- /about content -->

                <div class='col-md-4'></div>
        
                <script src="https://code.jquery.com/jquery-1.12.3.min.js"
                integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
                crossorigin="anonymous"></script>
                <script
                src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
                integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
                crossorigin="anonymous"></script>
                <script>
                    $(function() {
                      $('form.require-validation').bind('submit', function(e) {
                        var $form         = $(e.target).closest('form'),
                            inputSelector = ['input[type=email]', 'input[type=password]',
                                             'input[type=text]', 'input[type=file]',
                                             'textarea'].join(', '),
                            $inputs       = $form.find('.required').find(inputSelector),
                            $errorMessage = $form.find('div.error'),
                            valid         = true;

                        $errorMessage.addClass('hide');
                        $('.has-error').removeClass('has-error');
                        $inputs.each(function(i, el) {
                          var $input = $(el);
                          if ($input.val() === '') {
                            $input.parent().addClass('has-error');
                            $errorMessage.removeClass('hide');
                            e.preventDefault(); // cancel on first error
                          }
                        });
                      });
                    });

                    $(function() {
                      var $form = $("#payment-form");

                      $form.on('submit', function(e) {
                        if (!$form.data('cc-on-file')) {
                          e.preventDefault();
                          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                          Stripe.createToken({
                            number: $('.card-number').val(),
                            cvc: $('.card-cvc').val(),
                            exp_month: $('.card-expiry-month').val(),
                            exp_year: $('.card-expiry-year').val()
                          }, stripeResponseHandler);
                        }
                      });

                      function stripeResponseHandler(status, response) {
                        if (response.error) {
                          $('.error')
                            .removeClass('hide')
                            .find('.alert')
                            .text(response.error.message);
                        } else {
                          // token contains id, last4, and card type
                          var token = response['id'];
                          // insert the token into the form so it gets submitted to the server
                          $form.find('input[type=text]').empty();
                          $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                          $form.get(0).submit();
                        }
                      }
                    })
                </script>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /ABOUT -->
@endSection
