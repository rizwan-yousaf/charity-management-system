@extends('admin.layouts.master')

@section('title', 'Smile Charities | Success Stories')

@section('content')

	<!-- Content Header (Page header) -->
	<section class="content-header">
	    <div class="container-fluid">
	      	<div class="row mb-2">
	        	<div class="col-sm-6">
	         	 	<h1>Successful Stories</h1>
        		</div>
        		<div class="col-sm-6">
	         		<ol class="breadcrumb float-sm-right">
	            		<li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
	            		<!-- <li class="breadcrumb-item active">Event Info</li> -->
	            		<li class="breadcrumb-item active">Success Stories</li>
	          		</ol>
	        	</div>
	      	</div>
	    </div><!-- /.container-fluid -->
	</section>

	@if(Session::has('flash_message'))
	  	<div class="container">      
	      	<div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
	     	</div>
  		</div>
	@endif 

  <!-- <div class="text-center">
    <a href="/donate" class="btn btn-success"><i class="fa fa-plus"></i>  Donate Now For General Purpose</a>
  </div> -->
  	<div class="card">
	    <div class="card-header">
	      	<h3 class="card-title">Success Stories List</h3>

	      	<div class="card-tools">
	            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
	              	<i class="fas fa-minus"></i></button>
	            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
	              	<i class="fas fa-times"></i></button>
	        </div>
	    </div>
	    <!-- /.card-header -->
	    <div class="card-body">
	      	<table id="example1" class="table table-bordered table-striped projects">
	        	<thead>
		          	<tr>
		          		<th>
		          			Event Image
		          		</th>
		              	<th style="width: 20%">
		                   Event Title
		              	</th>
		              	<th style="width: 16%">
		                  	Event Completion
		              	</th>
		              	<th style="width: 12%">
		                  	Donation
		              	</th>
		              	<th class="text-center">
		                  Status
		              	</th>
		              	<th>
		              		Action
		              	</th>
		          	</tr>
		      	</thead>
	        	<tbody>
	        		@foreach($successstories as $row)
	        			@if($row->raised_fund >= $row->Fund)
							<?php
								$percent= ($row->raised_fund/$row->Fund )*100;
								$percentage=(int) $percent;
							?>
			              	<tr>
			              		<td>
			              			<img src="/uploads/{{$row->Image}}" alt="no image" style="height:100px; width:100px;">
			              		</td>
			                    <td>
			                      	<a>
			                          	{{$row->Title}}
			                     	</a>
			                      	<br/>
			                      	<small>
			                          	{{$row->created_at}}
			                      	</small>
			                  	</td>
			                  	<td class="project_progress">
			                      	<div class="progress progress-sm">
			                          	<div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: {{$percentage}}%">
			                        	</div>
			                      	</div>
			                      	<small>
			                          	{{$percentage}}% Completed
			                      	</small>
			                  	</td>
			                  	<td>
			                  		<a>
			                          	Goal: {{$row->Fund}}Rs
			                     	</a>
			                      	<br/>
			                      	<small>
			                          	Raised: {{$row->raised_fund}}Rs
			                      	</small>
			                  	</td>
			                  	<td class="project-state">
			                      	<span class="badge badge-warning">Successful Stories</span>
			                  	</td>
			                  	<td class="project-actions text-right">
			                  		<a class="btn btn-danger btn-sm" href="/delete-success-stories/{{$row->id}}">
			                          	<i class="fas fa-trash">
			                          	</i>
			                          	Delete
			                      	</a>
			                    </td>
			              	</tr>
			            @endif	  	
		            @endforeach  	
	            </tbody>
	        	<tfoot>
	          		<tr>
		          		<th>
		          			Event Image
		          		</th>
		              	<th style="width: 20%">
		                   Event Title
		              	</th>
		              	<th style="width: 16%">
		                  	Event Completion
		              	</th>
		              	<th style="width: 12%">
		                  	Donation
		              	</th>
		              	<th class="text-center">
		                  Status
		              	</th>
		              	<th>
		              		Action
		              	</th>
		          	</tr>
	        	</tfoot> 
	      	</table>
	    </div>
	    <!-- /.card-body -->
  	</div>
  <!-- /.card -->
@endsection