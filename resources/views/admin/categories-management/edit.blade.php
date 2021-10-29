@extends('admin.layouts.master')

@section('title', 'Smile Charities | Edit Categories')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="admin">Dashborad</a></li>
            <li class="breadcrumb-item"><a href="/showcategories">Categories Management</a></li>
            <li class="breadcrumb-item active">Edit Categories</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Edit Categories</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <form action="/updatecategories/{{$categories->id}}" method="POST" enctype="multipart/form-data">

              {{csrf_field()}}

              <div class="form-group">
                <label for="inputName">Category Type</label>
                <input type="text" id="inputName" class="form-control" placeholder="Enter Category Name" name="Category_type" required="true" value="{{$categories->Category_Type}}">
              </div>
              
              <div class="">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="/showcategories" class="btn btn-success float-right"><i class="fas fa-angle-left"></i>  Back</a>
              </div>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
  <!-- /.content -->
@endsection