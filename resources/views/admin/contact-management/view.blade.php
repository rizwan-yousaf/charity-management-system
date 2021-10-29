@extends('admin.layouts.master')

@section('title', 'Smile Charities | Contact View')

@section('content')

  	<!-- Content Header (Page header) -->
  	<section class="content-header">
    	<div class="container-fluid">
     	 	<div class="row mb-2">
        		<div class="col-sm-6">
          			<h1>View Contact</h1>
    			</div>
        		<div class="col-sm-6">
          			<ol class="breadcrumb float-sm-right">
           				<li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
    					<li class="breadcrumb-item"><a href="/showecontact">Contact Management</a></li>
    					<li class="breadcrumb-item active">Contact View</li>
          			</ol>
        		</div>
     		</div>
    	</div><!-- /.container-fluid -->
  	</section>

  	<div class="col-md-6">
        <div class="card">
          	<div class="card-header">
           		<h3 class="card-title">
              		<i class="fas fa-text-width"></i>
              		Description
            	</h3>
          	</div>
          	<!-- /.card-header -->
          	<div class="card-body">
            	<dl>
		            <dt>Description lists</dt>
		            <dd>A description list is perfect for defining terms.</dd>
		            <dt>Euismod</dt>
		            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
		            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
		            <dt>Malesuada porta</dt>
		            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
	            </dl>
          	</div>
          	<!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
