@extends('users-panel.layouts.master')

@section('title', 'Smile Charities | Profile')

@section('content')
	<!-- Content Header (Page header) -->
	<section class="content-header">
	    <div class="container-fluid">
	      	<div class="row mb-2">
	        	<div class="col-sm-6">
	         	 	<h1>My Profile</h1>
	        	</div>
	        	<div class="col-sm-6">
	          		<ol class="breadcrumb float-sm-right">
	            		<li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
	            		<li class="breadcrumb-item active">User Profile</li>
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

	<!-- Main content -->
    <section class="content">
    	@if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
          	</div>
        @endif
      	<div class="container-fluid">
      		<form action="/updateprofile" method="POST" enctype="multipart/form-data">
      			{{csrf_field()}} 
	        	<div class="row">
	        		<div class="col-md-4">
	            		<!-- Profile Image -->
	            		<div class="card card-primary card-outline">
	              			<div class="card-body box-profile">
	                			<div class="text-center">
				                  	<img class="profile-user-img img-fluid img-circle"
				                       src="/uploads/{{Auth::user()->avatar }}"
				                       alt="User profile picture" style="width: 150px; height: 150px;">
				                </div>

	                			<h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

	                			<p class="text-muted text-center">{{ Auth::user()->register_as }}</p>

				                <div class="form-group">
					                <label for="exampleInputFile">Update Profile Image</label>
					                <div class="input-group">
						                <div class="custom-file">
						                    <input type="file" class="custom-file-input  @error('avatar') is-invalid @enderror" id="exampleInputFile" name="avatar" required="true">
						                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
						                </div>
					                </div>
					                @if($errors->has('avatar'))
                                    	<span class="alert alert-danger" role="alert">{{ $errors->first('avatar') }}
                                    	</span>
                                	@endif
				            	</div>	             
	              			</div>
	              			<!-- /.card-body -->
			            </div>
			            <!-- /.card -->
	                </div>
			        <!-- /.col -->

	          		<div class="col-md-8">
	            		<div class="card">
	              			<div class="card-header p-2">
	                			<ul class="nav nav-pills">
				                  	<li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Update Personal Info</a></li>
				                </ul>
				            </div><!-- /.card-header -->

	              			<div class="card-body">
	                			<div class="tab-content">
	                  	            <div class="active tab-pane" id="settings">
	                    				<div class="form-group row">
	                        				<label for="inputName" class="col-sm-2 col-form-label">Name</label>
					                        <div class="col-sm-10">
					                          	<input type="text" class="form-control" id="inputName" placeholder="Name" required="true" name="p_name" value="{{ Auth::user()->name }}">
					                        </div>
					                    </div>
				                      	<div class="form-group row">
				                        	<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
					                        <div class="col-sm-10">
					                          	<input type="email" class="form-control" id="inputEmail" placeholder="Email" required="true" name="p_email" value="{{ Auth::user()->email }}">
					                        </div>
				                      	</div>
					                    <div class="form-group row">
					                        <label for="inputName2" class="col-sm-2 col-form-label">Register As</label>
					                        <div class="col-sm-10">
					                          	<input type="text" class="form-control" id="inputName2" placeholder="Register As" required="true" name="p_register" value="{{ Auth::user()->register_as }}">
					                        </div>
					                    </div>
	                                    <div class="form-group row">
					                        <label for="inputSkills" class="col-sm-2 col-form-label">Password</label>
					                        <div class="col-sm-10">
					                          	<input type="password" class="form-control" id="inputSkills" placeholder="Password" required="true" name="p_password">
					                        </div>
					                    </div>
					                    <div class="form-group row">
					                        <div class="offset-sm-2 col-sm-10">
					                          <div class="checkbox">
						                            <label>
						                              	<input type="checkbox"> I agree 
						                            </label>
					                          	</div>
					                        </div>
					                    </div>
					                    <div class="form-group row">
					                        <div class="offset-sm-2 col-sm-10">
					                        	<a href="/home" class="btn btn-secondary"><i class="fas fa-angle-left"></i>  Back</a>
					                          	<button type="submit" class="btn btn-danger float-right">Submit</button>
					                        </div>
					                    </div>
	                                </div>
				                  	<!-- /.tab-pane -->
				                </div>
				                <!-- /.tab-content -->
				            </div><!-- /.card-body -->
				        </div>
				        <!-- /.nav-tabs-custom -->
	          		</div>
	          		<!-- /.col -->
		        </div>
	        	<!-- /.row -->
	        </form>
      	</div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection