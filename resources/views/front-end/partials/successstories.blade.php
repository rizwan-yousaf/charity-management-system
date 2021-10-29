@extends("front-end.layouts.master")

@section("title","Smile Charities | Success Stories")

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
							<h1>Successful Stories </h1>
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li class="active">Successful Stories</li>
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
						<h2 class="title">You’ve turned their tears into cheers!</h2>
					</div>
					<div class="about-content" style="line-height: 1.9;">
						<p>We’ve been able to bring a change in the lives of hundreds of people including men, women and children with your support. These are the stories of people whose lives have been transformed!</p>
						<a href="donate" class="primary-button">Donate today and change a life forever!</a>
					</div>
				</div>
				<!-- /about content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->

	<!-- STORIES -->
	<div id="events" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- Search -->
				<div class="col-md-8 col-md-offset-2" style="margin-top: -30px; margin-bottom: 30px;">
					<form action="{{url('search-success-stories')}}">
					  	<input class="SearchEvents" type="text" name="searchData" placeholder="Search..." required="true" style=" background-image: url('{{ asset('./img/searchicon.PNG')}}');">
					</form>
				</div> 
				<!-- Search -->

				<!-- stories -->
				@if(count($success_story)>0)
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
				<!-- /stories -->

				<div class="clearfix visible-md visible-lg"></div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /STORIES -->
@endsection