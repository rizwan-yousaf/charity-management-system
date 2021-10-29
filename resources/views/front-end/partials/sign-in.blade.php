@extends("front-end.layouts.master")

@Section("title","Smile Charities | Login")

@Section("content")
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
			<!-- row -->
			<div class="row">
				<!-- footer newsletter -->
				<div class="col-md-12">
					<div class="footer">
						<!-- section title -->
						<!-- <div class="col-md-8 col-md-offset-2"> -->
						<div class="section-title text-center" style=" margin-top: -20px;">
							<h5 class="sub-title" style="margin-bottom: 40px;">Login to Smile Charity that provides free Medical Help , Education & Poverty across Pakistan's</h5>
						</div>
						<!-- /section title -->
						
						<form class="footer-newsletter" action="/donor" method="post" enctype="multipart/form-data">
							  @csrf

							<div class="form-group">
								<input class="input" placeholder="Enter UserName/Email" type="text" name="fname">
							</div>

							<div class="form-group">
								<input class="input" placeholder="Enter Password" type="text" name="psw">
							</div>

							<button class="primary-button">Login</button>

							<div style="margin-top: 10px;">
						    	<input type="checkbox" checked="checked" name="remember"> Remember Me

						    	<span class="navbar-right">Forgot <a href="#">Password?</a></span>
						    </div><br>

							<hr class="H1">

							<div class="vl">
		        				<span class="vl-innertext"><b>OR</b></span>
		      				</div><br>

	        				<div class="col-md-4">
								<div class="form-group">
									<button class="primary-button fb"><i class="fa fa-facebook fa-fw"></i>Login With Facebook</button>
								</div>
							</div>
											
							<div class="col-md-4">
								<div class="form-group">
									<button class="primary-button twitter"><i class="fa fa-twitter fa-fw"></i>Login With Twitter</button>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<button class="primary-button google"><i class="fa fa-google fa-fw"></i>Login With Google+</button>
								</div>
							</div>
						</form>

						<div class="col-md-8 col-md-offset-2">
							<div class="section-title text-center" style="margin-top: 20px;">
								<p class="sub-title">Need New Account? <a href="register"><b>Register Now</b></a>
								</p>
							</div>
						</div>
					</div>
				</div>
					<!-- /footer newsletter -->
			</div>
			<!-- /row -->
		</div>
	</div>
@endSection()