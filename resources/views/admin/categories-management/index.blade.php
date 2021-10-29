@extends('admin.layouts.master')

@section('title', 'Smile Charities | Categories Management')

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
            <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
            <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
            <li class="breadcrumb-item active">Categories Management</li>
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

  <div class="text-center">
    <a href="createcategories" class="btn btn-success"><i class="fa fa-plus"></i>  Add Category</a>
  </div>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Categories List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Categories Type</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $row)
            <tr>
              <td>{{$row->id}}</td>
              <td>{{$row->Category_Type}}</td>
              <td class="project-actions">
                <a class="btn btn-info btn-sm" href="/editcategories/{{$row->id}}">
                  <i class="fas fa-pencil-alt">
                  </i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="/deletecategories/{{$row->id}}">
                  <i class="fas fa-trash">
                  </i>
                    Delete
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>Id</th>
            <th>Categories Type</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection