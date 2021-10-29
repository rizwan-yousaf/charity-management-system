@extends("front-end.layouts.master")

@section("title","Smile Charities | About_US")

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
							<h1>About Us Page</h1>
								<ul class="breadcrumb">
									<li><a href="/">Home</a></li>
									<li class="active">About Us</li>
								</ul>
						</div>
					</div>

					<div class="navbar-right" style="padding-top:30px;">
						<a href="donate" class="primary-button causes-donate" navbar-left>Donate Now <i class="fa fa-arrow-right"></i></a>
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
				<!-- about content -->
				<div class="col-md-8 col-md-offset-2" style="margin-top: -40px;">
						<div class="section-title text-center">
							<h2 class="title">Fundraising for the People in Need in Pakistan</h2>
							<p class="sub-title">Donate your funds in the fields of Education, Health and Poverty and show your sympathy with the people bleonging from the lower class in different areas of Pakistan</p>
						</div>
				</div>
            
            	<!-- /about content -->
	            <div class="col-md-5">
					<div class="section-title">
						<h2 class="title">Brief Description</h2>
					</div>
					<div class="about-content linespace">
						<p>Smile Charities is the largest technology platform for crowdfunding in the healthcare , poverty and eduction sector of Pakistan. We offer a complete range of free services including medical and surgical treatments, educational expenses, solving families financial issues facility to the underprivileged community of Pakistan. Our goal is to reach the millions of needy patients all over Pakistan who are suffering because of lack of their basic living  facilities. We continue to serve the humanity at large by providing the best services in Pakistan.</p>
						<a href="donate" class="primary-button">Donate Now</a>
					</div>
				</div>
                 <!-- /about content -->

				<!-- about video -->
				<div class="col-md-offset-1 col-md-6" style="margin-top: 30px;">
					<iframe class="about-video" style="width: 100%; height: 340px; vertical-align: middle; border:0;" src="https://www.youtube.com/embed/DPqEUISyZdw">
					</iframe>
				</div>
				<!-- /about video -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- ABOUT -->

	<!-- TESTIMONIAL -->
	<div id="testimonial" class="section" style="margin-top: 70px;">
		<!-- background section -->
		<div class="section-bg" style="background-image: url(./img/background-2.jpg);" data-stellar-background-ratio="0.5"></div>
		<!-- /background section -->

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- Testimonial owl -->
				<div class="col-md-12">
					<div id="testimonial-owl" class="owl-carousel owl-theme">
						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/avatar-1.jpg" alt="">
								</div>
								<h3>Sami Khan</h3>
								<span>Volenteer</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>Be a little wise , look for the needy and offer your charity-
                                      Adore the poor who extended you such noble opportunity.</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/avatar-2.jpg" alt="">
								</div>
								<h3>Muhammad Rizwan Yousaf</h3>
								<span>Volunteer</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>If you want to know a person’s true character, observe how he treats those who don’t matter.</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/avatar-1.jpg" alt="">
								</div>
								<h3>Mamoon Khan</h3>
								<span>Volunteer</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>Compassion is a seed, empathy is the root, kindness is the stem, charity is the tree, and love is the fruit.</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/avatar-2.jpg" alt="">
								</div>
								<h3>Sufyan Ahmed</h3>
								<span>Volunteer</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>In a world starving for validity, the truth, when spoken at the right moment, can be one of the purest and most helpful forms of charity.</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->
					</div>
				</div>
				<!-- /Testimonial owl -->
			</div>
			<!-- /Row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /TESTIMONIAL -->
            
	<!-- NUMBERS -->
	<div id="numbers" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">We Served</h2>
					</div>
				</div>

				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-smile-o"></i>
						<h3>{{$total_donors}}</h3>
						<span>Donors</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-heartbeat"></i>
						<h3>{{$total_events}}</h3>
						<span>Total Events</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-money"></i>
						<h3>Rs. {{$event_donations}}</h3>
						<span>Donated</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-handshake-o"></i>
						<h3>{{$successfully_completed}}</h3>
						<span>Successfully Completed</span>
					</div>
				</div>
				<!-- /number -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NUMBERS -->

	<!-- NUMBERS -->
	<div id="numbers" class="section" style="margin-top: -50px;">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<div class="col-md-12">

					<!-- number -->
					<div class="">
						<div class="number">
							<i class="fa fa-handshake-o" style="font-size: 80px;"></i>
							<h3>Your time and skills could help us in saving a precious life!</h3>
							<a href="donate" class="primary-button">Become a Donor</a>
						</div>
					</div>
					<!-- /number -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NUMBERS -->
@endsection
