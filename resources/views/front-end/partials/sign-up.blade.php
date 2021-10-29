@extends("front-end.layouts.master")

@section("title","Smile Charities | Registeration")

@section("content")
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
			<!-- row -->
			<div class="row">
				<!-- footer newsletter -->
				<div class="col-md-12">
					<div class="footer">
						<!-- section title -->
						<!-- <div class="col-md-8 col-md-offset-2"> -->
						<div class="section-title text-center" style=" margin-top: -20px;">
							<h5 class="sub-title" style="margin-bottom: 40px;">Register to  Smile Charity that provides free Medical Help , Education & Poverty across Pakistan's</h5>
						</div>
						<!-- /sectin title -->

						<form class="footer-newsletter">
							<div class="form-group">
								<input class="input" placeholder="Enter Full Name*" type="text">
							</div>

							<div class="form-group">
								<input class="input" placeholder="Enter Email Adress*" type="text">
							</div>

							<div class="form-group">
								<input class="input" placeholder="Enter Password*" type="text">
							</div>

							<div class="form-group">
								<input class="input" placeholder="Confirmed Password*" type="text">
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<select name="" class="form-control sel-dropdown">
								      <option value="register As*">Register As*</option>
								      <option value="admin">Admin</option>
								      <option value="donor">Donor</option>
								      <option value="receiver">Receiver</option>
									</select>
								</div>
							</div>	

							<div class="col-md-6">
								<div class="form-group">
									<input class="input" type="text" placeholder="Phone No*">
								</div>
							</div>

							<p style="text-align: center;">By Create an account you agree to our <a href="termofuse"><b>Terms of Use</b></a> and <a href="privacy&policy"><b>Privacy Policy.</b></a></p>

							<button class="primary-button"style=" margin-bottom: 10px;">Create an account</button><br>

							<hr class="H1">

							<div class="vl">
		        				<span class="vl-innertext"><b>OR</b></span>
		      				</div><br>

	        				<div class="col-md-4">
								<div class="form-group">
									<button class="primary-button fb"><i class="fa fa-facebook fa-fw"></i>Register Using Facebook</button>
								</div>
							</div>
											
							<div class="col-md-4">
								<div class="form-group">
									<button class="primary-button twitter"><i class="fa fa-twitter fa-fw"></i>Register Using Twitter</button>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<button class="primary-button google"><i class="fa fa-google fa-fw"></i>Register Using Google+</button>
								</div>
							</div>
						</form>

						<div class="col-md-8 col-md-offset-2">
							<div class="section-title text-center" style="margin-top: 20px;">
								<p class="sub-title">Already a member? <a href="register"><b>Login Now</b></a>
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

@endsection