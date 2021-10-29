@extends('admin.layouts.master')

@section('title', 'Smile Charities | Admin Dashbord')

@section('content')

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Welcome To Admin Panel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

     <!-- Small boxes (Stat box) -->
    <div class="row">
      	<div class="col-lg-3 col-6">
    		<!-- small box -->
        	<div class="small-box bg-info">
          		<div class="inner">
            		<h3>{{$total_donors}}</h3>

            		<p>Donors</p>
          		</div>
          		<div class="icon">
            		<i class="ion ion-person-add"></i>
          		</div>
          		<!-- <a href="/showevents" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        	</div>
     	</div>
      	<!-- ./col -->
      	<div class="col-lg-3 col-6">
        	<!-- small box -->
    		<div class="small-box bg-success">
          		<div class="inner">
            		<h3>{{$total_receiver}}</h3>

            		<p>Receivers</p>
          		</div>
         		 <div class="icon">
            		<i class="ion ion-person-add"></i>
          		</div>
          		<!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
       	    </div>
      	</div>
      	<!-- ./col -->
      	<div class="col-lg-3 col-6">
        	<!-- small box -->
        	<div class="small-box bg-warning">
          		<div class="inner">
            		<h3>{{$total_events}}</h3>

           			<p>Total Events</p>
          		</div>
          		<div class="icon">
            		<i class="ion ion-bag"></i>
          		</div>
          		<!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
    		</div>
      	</div>
      	<!-- ./col -->
      	<div class="col-lg-3 col-6">
        	<!-- small box -->
        	<div class="small-box bg-danger">
         		<div class="inner">
            		<h3>{{$pending_event}}</h3>

            		<p>Pending Events</p>
          		</div>
          		<div class="icon">
            		<i class="ion ion-compose"></i>
          		</div>
          		<!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
       		</div>
  		</div>
      	<!-- ./col -->
      	<div class="col-lg-3 col-6">
        	<!-- small box -->
        	<div class="small-box" style="background-color: #4d4d33; color: white;">
          		<div class="inner">
            		<h3>{{$approved_event}}</h3>

            		<p>Approved Events</p>
          		</div>
         		 <div class="icon">
            		<i class="ion ion-checkmark"></i>
          		</div>
          		<!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
       		</div>
      	</div>
      	<!-- ./col -->

      	<div class="col-lg-3 col-6">
       		<!-- small box -->
        	<div class="small-box" style="background-color: #999900; color: white;">
          		<div class="inner">
            		<h3>{{$rejected_event}}</h3>

            		<p>Rejected Events</p>
          		</div>
          		<div class="icon">
            		<i class="ion ion-android-checkbox-blank"></i>
      			</div>
          		<!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        	</div>
      	</div>
      	<!-- ./col -->
      	<div class="col-lg-3 col-6">
        	<!-- small box -->
        	<div class="small-box" style="background:#ff00ff;color:#fff">
          		<div class="inner">
            		<h3>{{$completed_event}}</h3>

            		<p>Completed Events</p>
          		</div>
          		<div class="icon">
       				<i class="ion ion-android-checkbox-outline"></i>
          		</div>
          		<!-- <a href="/showevents" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
       		</div>
      	</div>
      	<!-- ./col -->
      	<div class="col-lg-3 col-6">
        	<!-- small box -->
        	<div class="small-box" style="background:#6600ff;color:#fff">
          		<div class="inner">
            		<h3>{{$ongoing_event}}</h3>

            		<p>Ongoing Events</p>
          		</div>
          		<div class="icon">
            		<i class="ion ion-load-a"></i>
          		</div>
          		<!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        	</div>
      	</div>
      	<!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box" style="background:#ff6600;color:#fff">
              <div class="inner">
                <h3>{{$success_stories}}</h3>

                <p>Success Stories</p>
              </div>
              <div class="icon">
              <i class="ion ion-android-checkbox-outline"></i>
              </div>
              <!-- <a href="/showevents" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box" style="background:#00ffff;">
              <div class="inner">
                <h3>{{$total_blogs}}</h3>

                <p>Total Blogs</p>
              </div>
              <div class="icon">
                <i class="ion ion-load-a"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
      	<div class="col-lg-3 col-6">
    		  <!-- small box -->
        	<div class="small-box" style="background:#53ff1a;color:black;">
          		<div class="inner">
            		<h3>Rs. {{$event_donation}}</h3>

            		<p>Total Event Donations</p>
          		</div>
          		<div class="icon">
            		<i class="ion ion-checkmark"></i>
          		</div>
          		<!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        	</div>
      	</div>
      	<!-- ./col -->
      	<div class="col-lg-3 col-6">
        	<!-- small box -->
        	<div class="small-box" style="background:#663300;color:#fff">
          		<div class="inner">
            		<h3>Rs. {{$general_donation}}</h3>

            		<p>Total General Donations</p>
          		</div>
          		<div class="icon">
           			<i class="ion ion-checkmark"></i>
          		</div>
          		<!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        	</div>
      	</div>
      	<!-- ./col -->
  	</div>
  	<!-- /.row -->

    @if(Session::has('flash_message'))
    <div class="container">      
        <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
        </div>
    </div>
    @endif 

	<!-- /.col -->
	<div class="container">
		<div class="row">
		    <div class="col-md-12">
		        <div class="card text-center">
		          <div class="card-header">
		            <h3 class="card-title">The Time To Help And Give Zakat, Sadaqah, Charity Is Now</h3>
		          </div>
		          <!-- /.card-header -->
		          <div class="card-body">
		            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		              <ol class="carousel-indicators">
		                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		              </ol>
		              <div class="carousel-inner">
		                <div class="carousel-item active">
		                  <img class="d-block w-100" src="./dist/img/background-2.jpg" alt="First slide">
		                </div>
		                <div class="carousel-item">
		                  <img class="d-block w-100" src="./dist/img/background-1.jpg" alt="Second slide">
		                </div>
		                <div class="carousel-item">
		                  <img class="d-block w-100" src="./dist/img/background-2.jpg" alt="Third slide">
		                </div>
		              </div>
		              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		                <span class="sr-only">Previous</span>
		              </a>
		              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		                <span class="carousel-control-next-icon" aria-hidden="true"></span>
		                <span class="sr-only">Next</span>
		              </a>
		            </div>
		          </div>
		          <!-- /.card-body -->
		        </div>
		        <!-- /.card -->
		    </div>
		</div>
	</div>
    <!-- /.col -->
@endsection