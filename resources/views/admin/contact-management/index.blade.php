@extends('admin.layouts.master')

@section('title', 'Smile Charities | Contact Management')

@section('content')

  	<!-- Content Header (Page header) -->
  	<section class="content-header">
    	<div class="container-fluid">
     	 	<div class="row mb-2">
        		<div class="col-sm-6">
          			<h1>All Contact List</h1>
    			</div>
        		<div class="col-sm-6">
          			<ol class="breadcrumb float-sm-right">
           				<li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
    					<!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
            			<li class="breadcrumb-item active">Contact Management</li>
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

 	<!-- card -->
  	<div class="card">
	    <div class="card-header">
	      <h3 class="card-title">Contact List</h3>
	    </div>
	    <!-- /.card-header -->
	    <div class="card-body table-responsive">
	      	<table id="example1" class="table table-bordered table-striped">
		        <thead>
		          	<tr>
			            <th>Sr. #</th>
			            <th>Name</th>
			            <th>Email</th>
			            <th>Phone No.</th>
			            <th>Subject</th>
			            <th>Message</th>
			            <th>Status</th>
			            <th>Action</th>
			            <th>View</th>
		         	</tr>
		        </thead>
		        <tbody>
		          	@foreach($all_contact as $row)
			            <tr>
			              	<td>{{$row->id}}</td>
			              	<td>{{$row->Name}}</td>
			              	<td>{{$row->Email}}</td>
			              	<td>{{$row->Contact_No}}</td>
			              	<td>{{$row->Subject}}</td>
			              	<td>{{$row->Message}}</td>
			                <td>
				                @if($row->Status == null)<span class="badge bg-danger">New Message</span>@elseif($row->Status == 1)<span class="badge bg-success">Read</span>@else<span class="badge bg-secondary">Un-Read</span>@endif
				            </td>
				            <td class="project-actions">
				                <a class="btn btn-warning btn-sm" href="/deletecontact/{{$row->id}}">
				                  Delete
				                </a>
				            </td>
				            <td>
				                <form action="{{url('/toggle-view')}}" method="POST" class="btn-group inline pull-left">
				                  	{{csrf_field()}}
				                  
					                <input type="text" name="c_email" hidden="" value="{{$row->Email}}">

					                <input <?php if($row->Status == 1){echo "checked";}?> type="checkbox" name="view" style="margin-top: 8px;">

					                <input type="hidden" name="id" value="{{$row->id}}">

					                <input class="btn btn-primary btn-sm" type="submit" Value="View" style=" margin-left: 10px; border-radius: 2px;">
				                </form>
				            </td>
			            </tr>
		          	@endforeach
		        </tbody>
		        <tfoot>
		          	<tr>
			            <th>Sr. #</th>
			            <th>Name</th>
			            <th>Email</th>
			            <th>Phone No.</th>
			            <th>Subject</th>
			            <th>Message</th>
			            <th>Status</th>
			            <th>Action</th>
			            <th>View</th>
		          	</tr>
		        </tfoot>
	      	</table>
	    </div>
	    <!-- /.card-body -->
	</div>
	<!-- /.card -->
@endsection