@extends("front-end.layouts.master")

@section("title","Welcome To Smile Charities")

@section("content")
	<!-- HOME OWL -->
	<div id="about" class="section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<div id="home-owl" class="owl-carousel owl-theme">
						<!-- home item -->
						<div class="home-item">
							<!-- section background -->
							<div class="section-bg" style="background-image: url(./img/background-1.jpg);">
							</div>
							<!-- /section background -->

							<!-- home content -->
							<div class="home">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<div class="home-content">
												<h1>Save The Humanity</h1>
												<p class="lead">Join hands with us in improving the health and well-being
				                                of people by providing them best</p>
												<a href="donate" class="primary-button">Donate Now!</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /home content -->
						</div>
						<!-- /home item -->

						<!-- home item -->
						<div class="home-item">
							<!-- Background Image -->
							<div class="section-bg" style="background-image: url(./img/background-2.jpg);">
							</div>
							<!-- /Background Image -->

							<!-- home content -->
							<div class="home">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<div class="home-content">
												<h1>Become A Donor</h1>
												<p class="lead">Smile Charity is always looking for the talented people with various skills and backgrounds. If you want to create a real difference in the lives of underprivileged people of Pakistan, we welcome you among our team. Our objective is to offer rewarding volunteer programs to those who have time and commitment to support our community. Smile Charity is committed to providing meaningful volunteer experience to the individuals with skills and education to support our noble cause.</p>
												<a href="donate" class="primary-button">Join Us Now!</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /home content -->
						</div>
						<!-- /home item -->
					</div>
				</div>
				<!-- about video -->
				<div class="col-md-4">
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
                        <button class="buttonabc" style="border: 1px solid green; outline: none;" onclick="myFunction2()">Education Event</button>

                        <button class="buttonabc" style="border: 1px solid green; outline: none;" onclick="myFunction()">Medical/poverty Event</button>
                   </div>

                    <div id="easypaisa" style="display: none;">
                    	<!-- event -->
                    	@foreach($side_medical_event as $row)
							@if($row->raised_fund < $row->Fund)
								<?php
									$percent= ($row->raised_fund/$row->Fund )*100;
									$percentage=(int) $percent;
								?>
								<marquee direction="up" behavior="alternate" onmouseover="stop()" onmouseout="start()"><div class="event">
									<div class="event-img">
										<a href="medicaldetail/{{$row->id}}">
											<img src="/uploads/{{$row->Image}}" alt="">
										</a>
									</div>
									<div class="event-content">
										<a href="medicaldetail/{{$row->id}}" style="font-weight: bold;" class="morees">{{$row->Title}}</a>

										<div class="causes-progress">
											<div class="causes-progress-bar">
												<div style="width: {{$percentage}}%"></div>
											</div>
										</div>
										<div>
											<span class="causes-raised">Raised: <strong>{{$row->raised_fund}}Rs</strong></span> -
											<span class="causes-goal">Goal: <strong>{{$row->Fund}}Rs</strong></span>
										</div>
										
										<a href="/basket-listing/{{$row->id}}" class="primary-button causes-donate">Donate Now</a>
									</div>
								</div></marquee>
							@endif	
						@endforeach	
						<!-- /event -->
                    </div>
                    <div id="card">
                    	<!-- event -->
                    	@foreach($side_education_event as $row)
							@if($row->raised_fund < $row->Fund)
								<?php
									$percent= ($row->raised_fund/$row->Fund )*100;
									$percentage=(int) $percent;
								?>
								<marquee direction="up" behavior="alternate" onmouseover="stop()" onmouseout="start()"><div class="event">
									<div class="event-img">
										<a href="educationdetail/{{$row->id}}">
											<img src="/uploads/{{$row->Image}}" alt="">
										</a>
									</div>
									<div class="event-content">
										<a href="educationdetail/{{$row->id}}" style="font-weight: bold;" class="morees">{{$row->Title}}</a>

										<div class="causes-progress">
											<div class="causes-progress-bar">
												<div style="width: {{$percentage}}%"></div>
											</div>
										</div>
										<div>
											<span class="causes-raised">Raised: <strong>{{$row->raised_fund}}Rs</strong></span> -
											<span class="causes-goal">Goal: <strong>{{$row->Fund}}Rs</strong></span>
										</div>
										
										<a href="/basket-listing/{{$row->id}}" class="primary-button causes-donate">Donate Now</a>
									</div>
								</div></marquee>
							@endif	
						@endforeach	
						<!-- /event -->
                    </div>
				</div>
				<!-- /about video -->
			</div>
		</div>
	</div>
	<!-- /HOME OWL -->

	<!-- ABOUT -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-6" style="margin-top: -35px">
					<div class="section-title">
						<h2 class="title">WE NEED YOUR DONATIONS</h2>
						<p class="sub-title">The Time To Help And Give Zakat, Sadaqah, Charity Is Now</p>
					</div>
					<div class="about-content linespace">
						<p>Charitable giving is one of the most rewarding and honorable things you can do. Companies that donate and individuals who choose to give back as well not only are making a difference in someone's life but in the process are heros for doing it. Giving without receiving is not easy for many to do although it should be. Because of this generosity, the government gives back to you with a donation tax write off. Donations come in the form of one time donations or monthly donations to charity.</p>
						<a href="donate" class="primary-button">Donate Now!</a>
					</div>
				</div>
				<!-- /about content -->

				<!-- about video -->
				<div class="col-md-offset-1 col-md-5">
					<iframe class="about-video" style="width: 100%; height: 340px; vertical-align: middle; border:0;" src="https://www.youtube.com/embed/M5DbJiuvu88">
					</iframe>
				</div>
				<!-- /about video -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->

	<!-- NUMBERS -->
	<div id="numbers" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
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

	<!-- CAUSESS -->
	<div id="causes" class="section" style="margin-top: -100px;">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Education Help</h2>
						<!-- <p class="sub-title">Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p> -->
					</div>
				</div>
				<!-- section title -->

				<!-- causes -->
				@foreach($education_event as $row)
					@if($row->raised_fund < $row->Fund)
						<?php
							$percent= ($row->raised_fund/$row->Fund )*100;
							$percentage=(int) $percent;
						?>
						<div class="col-md-4">
							<div class="causes">
								<div class="causes-img">
									<a href="educationdetail/{{$row->id}}">
										<img src="/uploads/{{$row->Image}}" alt="">
									</a>
								</div>
								<div class="causes-progress" style="margin-right: 10px; margin-left: 15px;">
									<div class="causes-progress-bar">
										<div style="width: {{$percentage}}%">
											<span>{{$percentage}}%</span>
										</div>
									</div>
									<div>
										<span class="causes-raised">Raised: <strong>{{$row->raised_fund}}Rs</strong></span>
										<span class="causes-goal">Goal: <strong>{{$row->Fund}}Rs</strong></span>
									</div>
								</div>
								<div class="causes-content">
									<h3>
										<a href="educationdetail/{{$row->id}}" class="morees">{{$row->Title}}</a>
									</h3>
									<p class="comment more">{{$row->Description}}</p>
									<a href="/basket-listing/{{$row->id}}" class="primary-button causes-donate">Donate Now</a>
								</div>
							</div>
						</div>
					@endif	
				@endforeach
				<!-- /causes -->

				<div class="col-md-12">
					<!-- number -->
					<div class="">
						<div class="number">
							<a href="education" class="primary-button" style="background-color: #dd4b39;">VIEW ALL EDUCATION HELP</a>
						</div>
					</div>
					<!-- /number -->
				</div>

				<div class="clearfix visible-md visible-lg"></div>

				<!-- section title -->
				<div class="col-md-8 col-md-offset-2" style="margin-top: 20PX;">
					<div class="section-title text-center">
						<h2 class="title">Medical Help</h2>
						<!-- <p class="sub-title">Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p> -->
					</div>
				</div>
				<!-- section title -->

				<!-- causes -->
				@foreach($medical_event as $row)
					@if($row->raised_fund < $row->Fund)
						<?php
							$percent= ($row->raised_fund/$row->Fund )*100;
							$percentage=(int) $percent;
						?>
						<div class="col-md-4">
							<div class="causes">
								<div class="causes-img">
									<a href="medicaldetail/{{$row->id}}">
										<img src="/uploads/{{$row->Image}}" alt="">
									</a>
								</div>
								<div class="causes-progress" style="margin-right: 10px; margin-left: 15px;">
									<div class="causes-progress-bar">
										<div style="width: {{$percentage}}%">
											<span>{{$percentage}}%</span>
										</div>
									</div>
									<div>
										<span class="causes-raised">Raised: <strong>{{$row->raised_fund}}Rs</strong></span>
										<span class="causes-goal">Goal: <strong>{{$row->Fund}}Rs</strong></span>
									</div>
								</div>
								<div class="causes-content">
									<h3>
										<a href="medicaldetail/{{$row->id}}" class="morees">{{$row->Title}}</a>
									</h3>
									<p class="comment more">{{$row->Description}}</p>
									<a href="/basket-listing/{{$row->id}}" class="primary-button causes-donate">Donate Now</a>
								</div>
							</div>
						</div>
					@endif	
				@endforeach
				<!-- /causes -->

				<div class="col-md-12">
					<!-- number -->
					<div class="">
						<div class="number">
							<a href="medical" class="primary-button" style="background-color: #dd4b39;">VIEW ALL MEDICAL HELP</a>
						</div>
					</div>
					<!-- /number -->
				</div>

				<div class="clearfix visible-md visible-lg"></div>

				<!-- section title -->
				<div class="col-md-8 col-md-offset-2" style="margin-top: 20PX;">
					<div class="section-title text-center">
						<h2 class="title">Poverty</h2>
						<!-- <p class="sub-title">Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p> -->
					</div>
				</div>
				<!-- section title -->

				<!-- causes -->
				@foreach($poverty_event as $row)
					@if($row->raised_fund < $row->Fund)
						<?php
							$percent= ($row->raised_fund/$row->Fund )*100;
							$percentage=(int) $percent;
						?>
						<div class="col-md-4">
							<div class="causes">
								<div class="causes-img">
									<a href="povertydetail/{{$row->id}}">
										<img src="/uploads/{{$row->Image}}" alt="">
									</a>
								</div>
								<div class="causes-progress" style="margin-right: 10px; margin-left: 15px;">
									<div class="causes-progress-bar">
										<div style="width: {{$percentage}}%">
											<span>{{$percentage}}%</span>
										</div>
									</div>
									<div>
										<span class="causes-raised">Raised: <strong>{{$row->raised_fund}}Rs</strong></span>
										<span class="causes-goal">Goal: <strong>{{$row->Fund}}Rs</strong></span>
									</div>
								</div>
								<div class="causes-content">
									<h3>
										<a href="povertydetail/{{$row->id}}" class="morees">{{$row->Title}}</a>
									</h3>
									<p class="comment more">{{$row->Description}}</p>
									<a href="/basket-listing/{{$row->id}}" class="primary-button causes-donate">Donate Now</a>
								</div>
							</div>
						</div>
					@endif	
				@endforeach
				<!-- /causes -->

				<div class="col-md-12">
					<!-- number -->
					<div class="">
						<div class="number">
							<a href="poverty" class="primary-button" style="background-color: #dd4b39;">VIEW ALL POVERTY CAUSES</a>
						</div>
					</div>
					<!-- /number -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CAUSESS -->

	<!-- CTA -->
	<div id="cta" class="section">
		<!-- background section -->
		<div class="section-bg" style="background-image: url(./img/background-1.jpg);" data-stellar-background-ratio="0.5"></div>
		<!-- /background section -->

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- cta content -->
				<div class="col-md-offset-2 col-md-8">
					<div class="cta-content text-center">
						<h1>Become A Donor</h1>
						<p class="lead">Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
						<a href="donate" class="primary-button">Join Us Now!</a>
					</div>
				</div>
				<!-- /cta content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CTA -->

	<!-- EVENTS -->
	<div id="events" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Ongoing Events</h2>
						<p class="sub-title">They want to see a brighter future for everyone in their community. They are compassionate and want to make Pakistan a better place. But they’re not sure which organizations they can trust to create real change.</p>
					</div>
				</div>
				<!-- /section title -->

				<!-- Event -->
				@foreach($ongoing_event as $row)
					@if($row->raised_fund < $row->Fund)
						<?php
							$percent= ($row->raised_fund/$row->Fund )*100;
							$percentage=(int) $percent;
						?>
						<div class="col-md-3">
							<div class="causes">
								<div class="causes-img">
									<a href="ongoingeventdetail/{{$row->id}}">
										<img src="/uploads/{{$row->Image}}" alt="">
									</a>
								</div>
								<div class="causes-progress" style="margin-right: 10px; margin-left: 15px;">
									<div class="causes-progress-bar">
										<div style="width: {{$percentage}}%">
											<span>{{$percentage}}%</span>
										</div>
									</div>
									<div>
										<span class="causes-raised">Raised: <strong>{{$row->raised_fund}}Rs</strong></span>
										<span class="causes-goal">Goal: <strong>{{$row->Fund}}Rs</strong></span>
									</div>
								</div>
								<div class="causes-content">
									<h3>
										<a href="ongoingeventdetail/{{$row->id}}" class="morees">{{$row->Title}}</a>
									</h3>
									<p class="comment more">{{$row->Description}}</p>
									<a href="/basket-listing/{{$row->id}}" class="primary-button causes-donate">Donate Now</a>
								</div>
							</div>
						</div>
					@endif	
				@endforeach
				<!-- /Event -->

				<div class="col-md-12">
					<!-- number -->
					<div class="">
						<div class="number">
							<a href="ongoingevent" class="primary-button" style="background-color: #dd4b39;">VIEW ALL ONGOING EVENT</a>
						</div>
					</div>
					<!-- /number -->
				</div>

				<!-- section title -->
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Upcoming Events</h2>
						<p class="sub-title">They want to see a brighter future for everyone in their community. Join hands with us in improving the health and well-being of people by providing them best.</p>
					</div>
				</div>
				<!-- /section title -->

				<!-- Event -->
				@foreach($upcoming_event as $row)
					@if($row->raised_fund < $row->Fund)
						<?php
							$percent= ($row->raised_fund/$row->Fund )*100;
							$percentage=(int) $percent;
						?>
						<div class="col-md-3">
							<div class="causes">
								<div class="causes-img">
									<a href="upcomingeventdetail/{{$row->id}}">
										<img src="/uploads/{{$row->Image}}" alt="">
									</a>
								</div>
								<div class="causes-progress" style="margin-right: 10px; margin-left: 15px;">
									<div class="causes-progress-bar">
										<div style="width: {{$percentage}}%">
											<span>{{$percentage}}%</span>
										</div>
									</div>
									<div>
										<span class="causes-raised">Raised: <strong>{{$row->raised_fund}}Rs</strong></span>
										<span class="causes-goal">Goal: <strong>{{$row->Fund}}Rs</strong></span>
									</div>
								</div>
								<div class="causes-content">
									<h3>
										<a href="upcomingeventdetail/{{$row->id}}" class="morees">{{$row->Title}}</a>
									</h3>
									<p class="comment more">{{$row->Description}}</p>
									<a href="/basket-listing/{{$row->id}}" class="primary-button causes-donate">Donate Now</a>
								</div>
							</div>
						</div>
					@endif	
				@endforeach
				<!-- /Event -->

				<div class="col-md-12">
					<!-- number -->
					<div class="">
						<div class="number">
							<a href="upcomingevent" class="primary-button" style="background-color: #dd4b39;">VIEW ALL UPCOMING EVENT</a>
						</div>
					</div>
					<!-- /number -->
				</div>

				<div class="clearfix visible-md visible-lg"></div>

				<!-- section title -->
				<div class="col-md-8 col-md-offset-2" style="margin-top: 20px;">
					<div class="section-title text-center">
						<h2 class="title">Completed Events</h2>
						<p class="sub-title">No one is useless in this world who lightens the burdens of another. Therefore give donations to someone to save someone life.</p>
					</div>
				</div>
				<!-- /section title -->

				<!-- Event -->
				@foreach($completed_event as $row)
					@if($row->raised_fund >= $row->Fund)
						<?php
							$percent= ($row->raised_fund/$row->Fund )*100;
							$percentage=(int) $percent;
						?>
						<div class="col-md-3">
							<div class="causes">
								<div class="causes-img">
									<div class="ribbon">
								        <div class="txt">
								            Completed
								        </div>
								    </div>
									<a href="completedeventdetail/{{$row->id}}">
										<img src="/uploads/{{$row->Image}}" alt="">
									</a>
								</div>
								<div class="causes-progress" style="margin-right: 10px;">
									<div class="causes-progress-bar">
										<div style="width: {{$percentage}}%">
											<span>{{$percentage}}%</span>
										</div>
									</div>
									<div>
										<span class="causes-raised">Raised: <strong>{{$row->raised_fund}}Rs</strong></span>
										<span class="causes-goal">Goal: <strong>{{$row->Fund}}Rs</strong></span>
									</div>
								</div>
								<div class="causes-content">
									<h3>
										<a href="completedeventdetail/{{$row->id}}" class="morees">{{$row->Title}}</a>
									</h3>
									<p class="comment more">{{$row->Description}}</p>
									<a href="#" class="primary-button causes-donate" style="opacity: 0.6; cursor: not-allowed; pointer-events: none;">Completed</a>
								</div>
							</div>
						</div>
					@endif	
				@endforeach
				<!-- /Event -->

				<div class="col-md-12">
					<!-- number -->
					<div class="">
						<div class="number">
							<a href="completedevent" class="primary-button" style="background-color: #dd4b39;">VIEW ALL COMPLETED EVENT</a>
						</div>
					</div>
					<!-- /number -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /EVENTS -->

	<!-- TESTIMONIAL -->
	<div id="testimonial" class="section">
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
									<img src="./img/a2.jpeg" alt="">
								</div>
								<h3>SaMee Khan</h3>
								<span>Developer 1</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/a3.jpeg" alt="">
								</div>
								<h3>Rizwan Khan</h3>
								<span>Developer 2</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/a2.jpeg" alt="">
								</div>
								<h3>SaMee Khan</h3>
								<span>Developer 1</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/a3.jpeg" alt="">
								</div>
								<h3>Rizwan Khan</h3>
								<span>Developer 2</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
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

	<!-- STORIES -->
	<div id="events" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Successful Stories</h2>
						<!-- <p class="sub-title">Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019.</p> -->
					</div>
				</div>
				<!-- /section title -->

				<!-- stories -->
				@foreach($success_story as $row)
					@if($row->raised_fund >= $row->Fund)
						<div class="col-md-6">
							<div class="event">
								<div class="event-img">
									<a href="successstoriesdetail/{{$row->id}}">
										<img src="/uploads/{{$row->Image}}" alt="">
									</a>
								</div>
								<div class="event-content">
									<h3><a href="successstoriesdetail/{{$row->id}}" class="morees">{{$row->Title}}</a></h3>
									<ul class="event-meta">
										<!-- <li><i class="fa fa-clock-o"></i> 24 October, 2020 | 8:00AM - 11:00PM</li> -->
										<li><i class="fa fa-money"></i> Total Cost Rs. <b>{{$row->raised_fund}}</b> <span style="color: #78ab0c;"><b>Donated</b></span></li>
									</ul>
									<p class="comment more">{{$row->Description}}</p>
								</div>
							</div>
						</div>
					@endif	
				@endforeach	
				<!-- /stories -->

				<div class="col-md-12">
					<!-- number -->
					<div class="">
						<div class="number">
							<a href="successstories" class="primary-button" style="background-color: #dd4b39;">VIEW ALL SUCCESSFUL STORIES</a>
						</div>
					</div>
					<!-- /number -->
				</div>

				<div class="clearfix visible-md visible-lg"></div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /STORIES -->

	<!-- WHO ARE WE -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about title -->
				<div class="col-md-12">
					<div class="section-title" style=" margin-top: -15px;">
						<h2 class="who-title">Who Are We<i class="fa fa-question-circle"></i></h2>
					</div>
				</div>
				<!-- about title -->

				<!-- about content -->
				<div class="col-md-12">
					<div class="about-content">
						<h3 class="question">
							FREE HEALTHCARE SERVICES FOR THOSE WHO CANNOT AFFORD
						</h3>

						<p class="linespace">
							Smile Charity is the largest technology platform for crowdfunding in the healthcare sector of Pakistan. It offers a complete range of free healthcare services including medical and surgical treatments, medical camps and tele-health facility to the underprivileged community of Pakistan.<br>
							The platform provides visibility of needy patients and builds a personal and trusted bond between patients and donors while ensuring complete transparency. It also sets up free medical camps in the rural areas of Pakistan in which, free consultation, free medicines and free diagnostic tests facility is provided to the deserving patients.
						</p>
					</div>

					<div class="about-content">
						<h3 class="question">
							WHERE IS THE PROBLEM?
						</h3>

						<p class="linespace">
							More than 80 million people in Pakistan are living below the poverty line due to which they are unable to undergo proper health treatment if they suffer from any disease. Estimated number of surgery backlog in Pakistan is in millions every year.....<a href="readmore"> <b>[Read More]</b></a>
						</p><br><br>
					</div>
				</div>
				<!-- about content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /WHO ARE WES -->

	<!-- BLOG -->
	<div id="blog" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Blog Posts</h2>
						<!-- <p class="sub-title">Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p> -->
					</div>
				</div>
				<!-- /section title -->

				<!-- blog -->
				@foreach($blog_post as $row)
					<div class="col-md-12">
						<div class="event">
							<div class="event-img">
								<a href="blogdetail/{{$row->id}}">
									<img src="/uploads/{{$row->Image}}" alt="">
								</a>
							</div>
							<div class="event-content">
								<h3><a href="blogdetail/{{$row->id}}">{{$row->Title}}</a></h3>
								<ul class="event-meta">
									<li><i class="fa fa-clock-o"></i>{{$row->Date}}</li>
									<li><i class="fa fa-user-circle-o"></i> {{$row->Poster_Name}}</li>
								</ul>
								<p class="comment more">{{$row->Body}}</p>
							</div>
						</div>
					</div>
				@endforeach
				<!-- /blog -->

				<div class="col-md-12">
					<!-- number -->
					<div class="">
						<div class="number">
							<a href="blog" class="primary-button" style="background-color: #dd4b39;">VIEW ALL BLOG POSTS</a>
						</div>
					</div>
					<!-- /number -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /BLOG -->
@endsection