@extends('admin.layouts.master')

@section('title', 'Smile Charities | Blog Management')

@section('content')

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>All Blog Posts</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
            <li class="breadcrumb-item active">Blog Management</li>
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
    <a href="/new-blog" class="btn btn-success"><i class="fa fa-plus"></i>  New Blog Posts</a>
  </div>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Blog Posts List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Blog Body</th>
            <th>Date/Time</th>
            <th>Blog Poster Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($blog_posts as $row)
            <tr>
              <td>
                <img src="/uploads/{{$row->Image}}" alt="no image" style="height:100px; width:100px;">
              </td>
              <td>{{$row->Title}}</td>
              <td>{{$row->Body}}</td>
              <td>{{$row->Date}}</td>
              <td>{{$row->Poster_Name}}</td>
              <td class="project-actions">
                <a class="btn btn-info btn-sm" href="/edit-blog/{{$row->id}}">
                  <i class="fas fa-pencil-alt">
                  </i>
                    Edit
                </a>
                &nbsp;
                <a class="btn btn-danger btn-sm" href="/delete-blog/{{$row->id}}">
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
            <th>Image</th>
            <th>Title</th>
            <th>Blog Body</th>
            <th>Date/Time</th>
            <th>Blog Poster Name</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection