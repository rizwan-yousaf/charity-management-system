@extends("front-end.layouts.master")

@section("title","Smile Charities | Success Stories Detail")

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
							<h1>Successful Stories Detail</h1>
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li><a href="/successstories">Successful Stories</a></li>
								@foreach($success_story_details as $row)
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
				@foreach($success_story_details as $row)
					<main id="main" class="col-md-9">
						<!-- article -->
						<div class="article causes-details">
							<!-- article img -->
							<div class="article-img">
								<img src="/uploads/{{$row->Image}}" alt="">
							</div>
							<!-- article img -->

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
					@foreach($success_story_details as $row)
						<?php
							$percent= ($row->raised_fund/$row->Fund )*100;
							$percentage=(int) $percent;
						?>
						<!-- number -->
						<div class="number">
							<p>Donated Fund</p>
							<span>Rs.{{$row->raised_fund}}</span><br><br>
							<p>Funds Raised 100%</p><br>
							<div class="causes-progress">
								<div class="causes-progress-bar">
									<div style="width: {{$percentage}}%">
										<span>{{$percentage}}%</span>
									</div>
								</div>
								<!-- <div>
									<p class="causes-raised">Raised: <strong>92.000$</strong></p>
									<p class="causes-goal">Goal: <strong>90.000$</strong></p>
								</div> -->
							</div>
						</div>
						<!-- /number -->
					@endforeach	

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
						@foreach($success_story as $row)
							@if($row->raised_fund < $row->Fund)
								<?php
									$percent= ($row->raised_fund/$row->Fund )*100;
									$percentage=(int) $percent;
								?>
								<div class="widget-post">
									<a href="/ongoingeventdetail/{{$row->id}}">
										<div class="widget-img">
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