@extends('admin.layouts.master')

@section('title', 'Smile Charities | Edit Blog')

@section('content')
  	<!-- Content Header (Page header) -->
	<section class="content-header">
	    <div class="container-fluid">
	      <div class="row mb-2">
	        <div class="col-sm-6">
	          <h1>Update Blog</h1>
	        </div>
	        <div class="col-sm-6">
	          <ol class="breadcrumb float-sm-right">
	            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
	            <li class="breadcrumb-item"><a href="/show-blog">Blog Management</a></li> 
	            <li class="breadcrumb-item active">Edit Blog</li>
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
    	<form action="/update-blog/{{$blog->id}}" method="POST" enctype="multipart/form-data">
    		{{csrf_field()}}
	      	<div class="row justify-content-center">
		        <div class="col-md-10">
		          	<div class="card card-success">
			            <div class="card-header">
			              	<h3 class="card-title">Blog Info</h3>

			              	<div class="card-tools">
			                	<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
			                  <i class="fas fa-minus"></i></button>
			              	</div>
			            </div>
			            
			            <div class="card-body">
			            	<div class="form-group">
			                	<label for="inputName">Blog Poster Name</label>
			                	<input type="text" id="inputName" class="form-control" name="poster_name" required="true" value="{{$blog->Poster_Name}}">
			              	</div>
			              	<div class="form-group">
			                	<label for="inputName">Blog Title</label>
			                	<input type="text" id="inputName" class="form-control" name="blog_title" required="true" value="{{$blog->Title}}">
			              	</div>
			              	<div class="form-group">
			                	<label for="inputDescription">Blog Body</label>
			                	<textarea id="inputDescription" class="form-control" rows="8" name="blog_body" required="true">{{$blog->Body}}</textarea>
			              	</div>
			              	<div class="form-group">
			                  	<label>Date/Time:</label>
			                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
			                        <input type="text" placeholder="mm/dd/yyyy" class="form-control datetimepicker-input" data-target="#reservationdate" name="blog_date"  required="true"/>
			                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
			                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
			                        </div>
			                    </div>
			                </div>
							<div class="form-group">
				                <label for="exampleInputFile">Blog Image</label>
				                <div class="input-group">
				                  <div class="custom-file">
				                    	<input type="file" class="custom-file-input @error('imgFile') is-invalid @enderror" id="exampleInputFile" name="imgFile">
				                    	<label class="custom-file-label" for="exampleInputFile">Choose file</label>
				                  </div>
				                  <div class="input-group-append">
				                    	<span class="input-group-text" id="">Upload</span>
				                  </div>
				                </div>
				                <img src="/uploads/{{$blog->Image}}" alt="no image" style="height:100px; width:100px; margin-top: 10px;">
				            </div>	              
			            </div>
			            <!-- /.card-body -->
		          	</div>
		          	<!-- /.card -->
		        </div>
	        </div>
		    <div class="row justify-content-center">
		        <div class="col-10">
		        	<a href="/show-blog" class="btn btn-secondary"><i class="fas fa-angle-left"></i>  Back</a>
		        	<button type="submit" class="btn btn-success float-right"> Update & Publish Blog</button>
	            </div>
		    </div>
		</form>
    </section>
    <!-- /.content -->
 @endsection