@extends('users-panel.layouts.master')

@section('title', 'Smile Charities | Add Event')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Create Event</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/showevents">Events Request</a></li> 
            <li class="breadcrumb-item active">Create Event</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

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
    	<form action="/saveevent" method="POST" enctype="multipart/form-data">
    		{{csrf_field()}}
	      	<div class="row">
		        <div class="col-md-6">
		          	<div class="card card-success">
			            <div class="card-header">
			              	<h3 class="card-title">Event Info</h3>

			              	<div class="card-tools">
			                	<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
			                  <i class="fas fa-minus"></i></button>
			              	</div>
			            </div>
			            <div class="card-body">
			              	<div class="form-group">
			                	<label for="inputName">Event Title</label>
			                	<input type="text" id="inputName" class="form-control" name="title" required="true">
			              	</div>
			              	<div class="form-group">
			                	<label for="inputDescription">Event Description</label>
			                	<textarea id="inputDescription" class="form-control" rows="4" name="description" required="true"></textarea>
			              	</div>
			              	<div class="form-group">
			                	<label for="inputStatus">Category Type</label>
			                	<select class="form-control custom-select" required="true" name="category_id">
			                  		<option value="" selected disabled>--Select Category Type--</option>
			                  		@foreach($categories as $row)
			                  			<option value="{{ $row->id}}">{{ $row->Category_Type }}</option>
			                  		@endforeach
			                	</select>
			              	</div>
			              	<div class="form-group">
			                	<label for="inputEstimatedDuration">Require Fund</label>
			                	<input type="number" id="inputEstimatedDuration" class="form-control" name="fund" required="true">
			              	</div>
							<div class="form-group">
				                <label for="exampleInputFile">Event Image</label>
				                <div class="input-group">
				                  	<div class="custom-file">
				                    	<input type="file" class="custom-file-input @error('imgFile') is-invalid @enderror" id="exampleInputFile" name="imgFile" required="true" value="{{ old('imgFile') }}">
				                    	<label class="custom-file-label" for="exampleInputFile">Choose file</label>
			                  		</div>
				                  	<div class="input-group-append">
				                    	<span class="input-group-text" id="">Upload</span>
				                  	</div>
				                </div>
				                @if($errors->has('imgFile'))
                                    <span class="alert alert-danger" role="alert">{{ $errors->first('imgFile') }}
                                    </span>
                                @endif
				            </div>	              
			            </div>
			            <!-- /.card-body -->
		          	</div>
		          	<!-- /.card -->
		        </div>
	        	<div class="col-md-6">
	          		<div class="card card-secondary">
	            		<div class="card-header">
	              			<h3 class="card-title">Personal Info</h3>

				            <div class="card-tools">
				                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				                  <i class="fas fa-minus"></i></button>
				            </div>
	            		</div>
			            <div class="card-body">
			              	<div class="form-group">
			                	<label for="inputName">User Name</label>
			                	<input type="text" id="inputName" class="form-control" name="user_name" required="true" value="{{ Auth::user()->name }}">
			              	</div>
			              	<div class="form-group">
			                	<label for="inputName">User Email</label>
			                	<input type="email" id="inputName" class="form-control" name="user_email" required="true" value="{{ Auth::user()->email }}">
			              	</div>
				            <div class="form-group">
				                <label for="inputEstimatedDuration">Contact No</label>
				                <input type="number" id="inputEstimatedDuration" class="form-control" name="contact_no" required="true">
				            </div>
				            <div class="form-group">
				                <label for="exampleInputFile">Any Proof</label>
				                <div class="input-group">
				                  	<div class="custom-file">
				                    	<input type="file" class="custom-file-input @error('imgProof') is-invalid @enderror" id="exampleInputFile" name="imgProof" required="true">
				                    	<label class="custom-file-label" for="exampleInputFile">Choose file</label>
				                  	</div>
				                  	<div class="input-group-append">
				                    	<span class="input-group-text" id="">Upload</span>
				                  	</div>
				                </div>
			                  	@if($errors->has('imgProof'))
                                    <span class="alert alert-danger" role="alert">
                                        {{ $errors->first('imgProof') }}
                                    </span>
                                @endif
	                        </div>	 
			            </div>
			            <!-- /.card-body -->
			        </div>
			          <!-- /.card -->
	        	</div>
	      	</div>
		    <div class="row">
		        <div class="col-12">
		        	<a href="/showevents" class="btn btn-secondary"><i class="fas fa-angle-left"></i>  Back</a>
		        	<button type="submit" class="btn btn-success float-right">Create New Event</button>
	            </div>
		    </div>
		</form>
    </section>
    <!-- /.content -->
 @endsection