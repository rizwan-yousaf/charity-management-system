@extends("front-end.layouts.master")

@section("title","Smile Charities | Completed Event Detail")

@section("content")
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
							<h1>Completed Event Detail</h1>
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li><a href="/completedevent">Completed Events</a></li>
								@foreach($completed_event_details as $row)
									<li class="active">{{$row->Title}}</li>
								@endforeach
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

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- MAIN -->
				@foreach($completed_event_details as $row)
					<?php
						$percent= ($row->raised_fund/$row->Fund )*100;
						$percentage=(int) $percent;
					?>
					<main id="main" class="col-md-9">
						<!-- article -->
						<div class="article causes-details">
							<!-- article img -->
							<div class="article-img">
								<div class="" style="background-color: #ffc107;">
							        <marquee onmouseover="stop()" onmouseout="start()">
							        	<div class="" style="color: white; font-size: 20px; font-weight: bold;">
							            	Successfully Completed
							        	</div>
							    	</marquee>
							    </div>
							    <!-- <span class="badge bg-success">Approved</span> -->
								<img src="/uploads/{{$row->Image}}" alt="">
							</div>
							<!-- article img -->

							<!-- causes progress -->
							<div class="clearfix" style="margin-right: 10px;">
								<div class="causes-progress">
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
								<a href="#" class="primary-button causes-donate" style="pointer-events: none">Completed</a>
							</div>
							<!-- /causes progress -->

							<!-- article content -->
							<div class="article-content">
								<!-- article title -->
								<h2 class="article-title">{{$row->Title}}</h2>
								<!-- /article title -->

								<!-- article meta -->
								<ul class="article-meta">
									<li>{{$row->created_at}}</li>
									<li>By {{$row->User_Name}}</li>
								</ul>
								<!-- /article meta -->

								<p>{{$row->Description}}</p>
							</div>
							<!-- /article content -->

							<!-- article tags share -->
							<div class="article-tags-share">
								<!-- article tags -->
								<ul class="tags">
									<li>TAGS:</li>
									<li><a href="/education">Education</a></li>
									<li><a href="/medical">Medical</a></li>
									<li><a href="/poverty">Poverty</a></li>
								</ul>
								<!-- /article tags -->

								<!-- article share -->
								<ul class="share">
									<li>SHARE:</li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
								<!-- /article share -->
							</div>
							<!-- /article tags share -->
						</div>
						<!-- /article -->
					</main>
				@endforeach
				<!-- /MAIN -->

				<!-- ASIDE -->
				<aside id="aside" class="col-md-3">
					<!-- category widget -->
					<div class="widget">
						<h3 class="widget-title">Category</h3>
						<div class="widget-category">
							<ul>
								<li><a href="/education">Education<span>({{$education_event_count}})</span></a></li>
								<li><a href="/medical">Medical<span>({{$medical_event_count}})</span></a></li>
								<li><a href="/poverty">Poverty<span>({{$poverty_event_count}})</span></a></li>
							</ul>
						</div>
					</div>
					<!-- /category widget -->

					<!-- posts widget -->
					<div class="widget">
						<h3 class="widget-title">Latest Posts</h3>
						<!-- single post -->
						@foreach($completed_event as $row)
							@if($row->raised_fund >= $row->Fund)
								<?php
									$percent= ($row->raised_fund/$row->Fund )*100;
									$percentage=(int) $percent;
								?>
								<div class="widget-post">
									<a href="/completedeventdetail/{{$row->id}}">
										<div class="widget-img">
											<div class="" style="
												-webkit-transform: rotate(-45deg); 
										     	-moz-transform: rotate(-45deg); 
										      	-ms-transform: rotate(-45deg); 
										      	-o-transform: rotate(-45deg); 
										        transform: rotate(-45deg); 
										    	border: 25px solid transparent;
										    	border-top: 20px solid #ffc107;
										    	position: absolute;
										    	bottom: -35px;
										    	right: -50px;
										    	padding: 0 75px;
										    	width: 120px;
										    	color: white;
										    	font-family: sans-serif;
										    	size: 11px;
										    	font-size: 12px;">
										        <div class="" style="
										        	position: absolute;
										    		top: -19px;
											    	left: 89px;">
										            Completed
										        </div>
										    </div>
											<img src="/uploads/{{$row->Image}}" alt="">
										</div>
										<div class="widget-content">
											{{$row->Title}}
											<div class="causes-progress">
												<div class="causes-progress-bar">
													<div style="width: {{$percentage}}%"></div>
												</div>
											</div>
										</div>
									</a>
									<div>
										<span class="causes-raised">Raised: <strong>{{$row->raised_fund}}Rs</strong></span> -
										<span class="causes-goal">Goal: <strong>{{$row->Fund}}Rs</strong></span>
									</div>
									<ul class="article-meta">
										<li>By {{$row->User_Name}}</li>
										<li>{{$row->created_at}}</li>
									</ul>
								</div>
							@endif	
						@endforeach
						<!-- /single post -->
					</div>
					<!-- /posts widget -->
				</aside>
				<!-- /ASIDE -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
@endsection