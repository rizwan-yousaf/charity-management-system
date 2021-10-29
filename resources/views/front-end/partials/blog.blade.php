@extends("front-end.layouts.master")

@section("title","Smile Charities | Blogs")

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
							<h1>Blog</h1>
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li class="active">Blogs</li>
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

	<!-- ABOUT -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-8">
					<div class="section-title" style="margin-top: -20px;">
						<h2 class="title">Welcome To Our Blog Page</h2>
					</div>
					<div class="about-content" style="line-height: 1.9;">
						<p>Explore our blog for healthcare tips, insightful articles and other meaningful resources on charity, online crowdfunding, top NGOs and many other topics you care about.</p>
					</div>
				</div>
				<!-- /about content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- MAIN -->
				<main id="main" class="col-md-9">
					<div class="row">

						<!-- Search -->
						<div class="col-md-12" style="margin-top: -30px; margin-bottom: 30px;">
							<form action="{{url('search-blog-post')}}">
							  	<input class="SearchEvents" type="text" name="searchData" placeholder="Search..." required="true" style=" background-image: url('{{ asset('./img/searchicon.PNG')}}');">
							</form>
						</div> 
						<!-- Search -->

						<!-- blog -->
						@if(count($blog_post)>0)
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
						@else
							<div class="col-md-12 text-center">
								<div class="causes">
									<div class="causes-content">
										<h3>
											No Results Found For Query: <strong style="color: red;">{{ request()->query('searchData') }}</strong>
										</h3>
										
									</div>
								</div>
							</div>
		                @endif		
						<!-- /blog -->

						<div class="clearfix visible-md visible-lg"></div>

						<!-- pagination -->
						<div class="col-md-12">
							<ul class="article-pagination">
								<li>{{$blog_post->links()}}</li>
							</ul>
						</div>
						<!-- /pagination -->
					</div>
				</main>
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

					<!-- causes widget -->
					<div class="widget">
						<h3 class="widget-title">Latest Causes</h3>
						<!-- single post -->
						@foreach($ongoing_event as $row)
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
					<!-- causes widget -->

					<!-- posts widget -->
					<div class="widget">
						<h3 class="widget-title">Latest Posts</h3>
						<!-- single post -->
						@if(count($blog_post)>0)
							@foreach($blog_post as $row)
								<div class="widget-post">
									<a href="/blogdetail/{{$row->id}}">
										<div class="widget-img">
											<img src="/uploads/{{$row->Image}}" alt="">
										</div>
										<div class="widget-content">
											{{$row->Title}}
										</div>
									</a>
									<ul class="article-meta">
										<li>By {{$row->Poster_Name}}</li>
										<li>{{$row->Date}}</li>
									</ul>
								</div>
							@endforeach
						@else
							<div class="widget-post">
								<div class="causes">
									<div class="widget-content">
										<h3>
											No Results Found For Query: <strong style="color: red;">{{ request()->query('searchData') }}</strong>
										</h3>
										
									</div>
								</div>
							</div>
		                @endif		
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

