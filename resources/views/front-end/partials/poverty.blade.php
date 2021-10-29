@extends("front-end.layouts.master")

@section("title","Smile Charities | Poverty_Events")

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
							<h1>Poverty</h1>
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li class="active">Poverty</li>
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
						<h2 class="title">Helping Families living below the poverty line</h2>
					</div>
					<div class="about-content" style="line-height: 1.9;">
						<p>Pakistan is a poor and underdeveloped country. Most of its population lives in adverse circumstances. Some reports reveal that more than 40% population of Pakistan lives below the line of poverty.A large number of people in our country do not have a proper place to live in. This miserable condition has given birth to an increase in beggars and needy people.</p>
						<a href="donate" class="primary-button">Click to Donate and support a family</a>
					</div>
				</div>
				<!-- /about content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->

	<!-- CAUSESS -->
	<div id="causes" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- Search -->
				<div class="col-md-8 col-md-offset-2" style="margin-top: -30px; margin-bottom: 30px;">
					<form action="{{url('search-poverty-event')}}">
					  	<input class="SearchEvents" type="text" name="searchData" placeholder="Search..." required="true" style=" background-image: url('{{ asset('./img/searchicon.PNG')}}');">
					</form>
				</div> 
				<!-- Search -->

				<!-- causes -->
				@if(count($poverty_event)>0)
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
				<!-- /causes -->

				<div class="clearfix visible-md visible-lg"></div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CAUSESS -->
@endsection