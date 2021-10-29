<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>@yield("title")</title>

	<!-- My css file -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/my.css') }}">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />

	<!-- reCAPTCHA -->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<div class="container-fluid" style="background-color:#17202A;">
		<div class="row">
			<div class="col-md-12" style=" color: white; padding-top:20px;">
				<marquee onmouseover="stop()" onmouseout="start()">
					<p>Smile Charities provides free Medical Help , Education & Poverty across Pakistan.
					</p>
				</marquee>
			</div>

			<!-- <div class="col-md-4" style="padding-top:7px;">
					<a href="login" class="primary-button causes-donate" navbar-left>Login</a>

					<a href="register" class="primary-button causes-donate" navbar-left>Sign Up</a>
			</div> -->
		</div>
		<!-- Logo -->
	</div>
	<!-- /HEADER -->

	<!-- HEADER -->
	<header id="home">
		<!-- NAVGATION -->
		<nav id="main-navbar">
			<div class="container">
				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">

						<h2 style=""><a class="logo" href="/"><img src="{{ asset('img/smile logo.png')}}" alt="logo" height="60">Smile Charities</a></h2>
						<!-- <img src="img/smile logo.png" alt="logo" style="margin-top: -40px; height: 150px;"> -->
					</div>
					<!-- Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle-btn">
						<i class="fa fa-bars"></i>
					</button>
					<!-- Mobile toggle -->

					<!-- Mobile Search toggle -->
					<!-- <button class="search-toggle-btn">
						<i class="fa fa-user" style="font-size:25px;color:#78ab0c"></i>
					</button> -->
					<!-- Mobile Search toggle -->
				</div>

				<!-- Search -->
				<!-- <div class="navbar-search">
					<button class="search-btn"><i class="fa fa-user" style="font-size:25px;color:#78ab0c"></i></button>
					<div class="search-form">
						<form>
							<input type="submit" style="background-color: #78ab0c; color: white;" class="input" name="" value="LOGIN" formaction="/login">
							<input type="submit" style="background-color: #78ab0c; color:white; " class="input" name="" value="REGISTER" formaction="/register">	

							<a href="login" class="primary-button">LOGIN NOW ►<i class="fa fa-arrow-right"></i></a>

							<a href="register" class="primary-button">REGISTER NOW ►<i class="fa fa-arrow-right"></i></a>

							<input class="input" type="text" name="search" placeholder="Username">

							<input class="input" type="text" name="search" placeholder="Password"> 
						</form>
					</div>
				</div> -->
				<!-- Search -->

				<!-- Nav menu -->
				<ul class="navbar-menu nav navbar-nav navbar-right">
					<li><a href="/">Home</a></li>
					<li><a href="/about">About</a></li>
					<li class="has-dropdown"><a href="/donation">Donations</a>
						<ul class="dropdown">
							<li><a href="/education">Education</a></li>
							<li><a href="/medical">Medical</a></li>
							<li><a href="/poverty">Poverty</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#">Events</a>
						<ul class="dropdown">
							<li><a href="/ongoingevent">Ongoing Events</a></li>
							<li><a href="/upcomingevent">Upcoming Events</a></li>
							<li><a href="/completedevent">Completed Events</a></li>
						</ul>
					</li>
					<li><a href="/blog">Blog</a></li>
					<li><a href="/contact">Contact Us</a></li>
					@if (Auth::guest())
						<li><a href="{{ route('login') }}">Login</a></li>
						<li><a href="{{ route('register') }}">Register</a></li>
					@else
						<li class="has-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								<img src="/uploads/{{Auth::user()->avatar }}" class="img-circle elevation-2" alt="User Image" style="height: 20px; width: 30px;">
									{{ Auth::user()->name }} 
                            </a>

                            <ul class="dropdown-menu" role="menu">
					          <!-- User image -->
					          <li class="user-header bg-primary" style="margin-top: -6px;">
					          	<br>
					            <img src="/uploads/{{Auth::user()->avatar }}" class="img-circle elevation-2 img-responsive center-block" alt="User Image" style="height: 100px; width: 100px; ">

					            <p class="text-center">
					              {{ Auth::user()->name }}
					            </p>
					          </li>
					          
					          <!-- Menu Footer-->
					          <li>
					            @role('Admin') {{-- Laravel-permission blade helper --}}
					              <a href="#"><i class="fa fa-btn fa-unlock"></i>Admin</a>
					            @endrole
					            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="font-size: 17px;">

					            	Logout 

					        	</a>
					             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					                {{ csrf_field() }}
					            </form>
					          </li>
					        </ul>
                        </li>
                        @if(Auth::user()->register_as == 'receiver' or Auth::user()->register_as == 'Receiver')
                        	<li><a href="{{ route('home') }}">Dashboard</a></li>
                        @elseif(Auth::user()->register_as == 'Donor' or Auth::user()->register_as == 'donor')
                        	<li><a href="{{ route('home') }}">Dashboard</a></li>
                        @else
                        	<li><a href="/admin">Dashboard</a></li>
                        @endif	
                    @endif
				</ul>
				<!-- Nav menu -->
			</div>
		</nav>
		<!-- /NAVGATION -->
	</header>
	<!-- /HEADER -->

	@yield("content")

	<!-- FOOTER -->
	<footer id="footer" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer contact -->
				<div class="col-md-4">
					<div class="footer">
						<div class="footer-logo" style="margin-top: -18px;">
							<a class="logo" href="/"><img src="{{ asset('./img/smile logo.png')}}" alt=""> <b style="font-size: 30px;">Smile Charities</b></a>
						</div>
						<p>Smile Charities provides free Medical Camp , Education Help & Poverty services across Pakistan to those who cannot afford.</p>
						<ul class="footer-contact">
							<li><i class="fa fa-map-marker"></i> Peshawar Road Rawalpindi Pakistan</li>
							<li><i class="fa fa-phone"></i> +92(43)-539-1592</li>
							<li><i class="fa fa-envelope"></i> <a href="#">SmileCharity786@gmail.com</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer contact -->

				<!-- footer galery -->
				<div class="col-md-4">
					<div class="footer">
						<h3 class="footer-title">Galery</h3>
						<ul class="footer-galery">
							<li><a href="#" class="disabled"><img src="{{ asset('./img/galery-1.jpg') }}" alt=""></a></li>
							<li><a href="#" class="disabled"><img src="{{ asset('./img/galery-2.jpg') }}" alt=""></a></li>
							<li><a href="#" class="disabled"><img src="{{ asset('./img/galery-3.jpg') }}" alt=""></a></li>
							<li><a href="#" class="disabled"><img src="{{ asset('./img/galery-4.jpg') }}" alt=""></a></li>
							<li><a href="#" class="disabled"><img src="{{ asset('./img/galery-5.jpg') }}" alt=""></a></li>
							<li><a href="#" class="disabled"><img src="{{ asset('./img/galery-6.jpg') }}" alt=""></a></li>
						</ul>
					</div>
				</div>
				<!-- /footer galery -->

				<!-- footer newsletter -->
				<div class="col-md-4">
					<div class="footer">
						<h3 class="footer-title">Newsletter</h3>
						<p>Smile charities supported Donation method!</p>
						<form class="footer-newsletter">
							<img src="{{ asset('./img/stripe.PNG')}}" alt="" class="responsive-stripe">
							<br>
							<br>
							<img style="height: 60px;border-radius: 8px; margin-left: 5px;" src="{{ asset('./img/easypaisa.PNG')}}" alt="" class="responsive-easypaisa">
						</form>
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- /footer newsletter -->
			</div>
			<!-- /row -->

			<!-- footer copyright & nav -->
			<div id="footer-bottom" class="row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="/">Home</a></li>
						<li><a href="about">About</a></li>
						<li><a href="donate">Online Donation</a></li>
						<li><a href="faqs">FAQ's</a></li>
						<li><a href="blog">Blog</a></li>
						<li><a href="contact">Contact</a></li>
					</ul>
				</div>

				<div class="col-md-6 col-md-pull-6">
					<div class="footer-copyright">
						<span><!-- Link back to Colorlib can't be removed. Template 	is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> Smile Charities. All Rights Reserved. 
						</span>
					</div>
				</div>
			</div>
			<!-- /footer copyright & nav -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<!-- less description show -->
	<script>
		$(document).ready(function() {
		var showChar = 140;
		var ellipsestext = ".....";
		var moretext = "more";
		var lesstext = "less";
		$('.more').each(function() {
			var content = $(this).html();

			if(content.length > showChar) {

				var c = content.substr(0, showChar);
				var h = content.substr(showChar-1, content.length - showChar);

				var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink" style="display: none;">' + moretext + '</a></span>';

				$(this).html(html);
			}

		});

		$(".morelink").click(function(){
			if($(this).hasClass("less")) {
				$(this).removeClass("less");
				$(this).html(moretext);
			} else {
				$(this).addClass("less");
				$(this).html(lesstext);
			}
			$(this).parent().prev().toggle();
			$(this).prev().toggle();
			return false;
		});
		});
	</script>
	<!-- less Title show -->
	<script>
		$(document).ready(function() {
		var showChar = 35;
		var ellipsestext = "...";
		var moretext = "morees";
		var lesstext = "less";
		$('.morees').each(function() {
			var content = $(this).html();

			if(content.length > showChar) {

				var c = content.substr(0, showChar);
				var h = content.substr(showChar-1, content.length - showChar);

				var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink" style="display: none;">' + moretext + '</a></span>';

				$(this).html(html);
			}

		});

		$(".morelink").click(function(){
			if($(this).hasClass("less")) {
				$(this).removeClass("less");
				$(this).html(moretext);
			} else {
				$(this).addClass("less");
				$(this).html(lesstext);
			}
			$(this).parent().prev().toggle();
			$(this).prev().toggle();
			return false;
		});
		});
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
</body>
</html>
