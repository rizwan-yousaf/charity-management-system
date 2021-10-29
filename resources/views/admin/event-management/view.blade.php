@extends('admin.layouts.master')

@section('title', 'Smile Charities | View Event')

@section('content')
	<!-- Content Header (Page header) -->
	<section class="content-header">
	    <div class="container-fluid">
	      	<div class="row mb-2">
	        	<div class="col-sm-6">
	          		<h1>View Event</h1>
	        	</div>
	        	<div class="col-sm-6">
	          		<ol class="breadcrumb float-sm-right">
	            		<li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
	            		<li class="breadcrumb-item"><a href="/showallevent">Events Management</a></li> 
	            		<li class="breadcrumb-item active">View Event</li>
	          		</ol>
	        	</div>
	      	</div>
	    </div><!-- /.container-fluid -->
	</section>

	<div class="text-center">
	    <a href="/showallevent" class="btn btn-success"><i class="fas fa-angle-left"></i>  Back</a>
	 </div>

	<!-- Main content -->
    <section class="content">
    	<div class="row justify-content-center">
          	<div class="col-md-10">
            	<div class="card">
              		<div class="card-header">
                		<h3 class="card-title">
                  		<i class="fas fa-text-width"></i>
                  			<strong>{{$event->Title}}</strong>
                		</h3>
              		</div>
             		<!-- /.card-header -->
              		<div class="card-body">
                		<dl>
		                  	<dt>Event Title:</dt>
		                  	<dd>{{$event->Title}}</dd>
		                  	<br>
		                  	<dt>Donation Required:</dt>
		                  	<dd>{{$event->Fund}}/Rs</dd>
		                  	<br>
		                  	<dt>Event Image:</dt>
		                  	<img src="/uploads/{{$event->Image}}" alt="no image" style="height:60%; width:80%; margin-top: 20px;">
		                  	<br>
		                  	<br>
		                  	<dt>Event Description:</dt>
		                  	<dd>{{$event->Description}}</dd>
		                  	<br>
		                  	<dt>Event Proof:</dt>
		                  	<img src="/uploads/{{$event->Proof}}" alt="no image" style="height:60%; width:80%; margin-top: 20px;">
		                </dl>
              		</div>
              		<!-- /.card-body -->
            	</div>
            	<!-- /.card -->
          	</div>
          	<!-- ./col -->
      	</div>
    </section>
    <!-- /.content -->
@endsection