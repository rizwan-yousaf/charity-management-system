@extends('users-panel.layouts.master')

@section('title', 'Smile Charities | Event Request')

@section('content')

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>All Events List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
            <li class="breadcrumb-item active">Events Request</li>
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
    <a href="/createevents" class="btn btn-success"><i class="fa fa-plus"></i>  Add Events</a>
  </div>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Events List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Image</th>
            <th style="width: 8%;">Title</th>
            <th style="width: 18%;">Description</th>
            <th style="width: 8%;">Category Type</th>
            <th style="width: 10%;">Require Fund</th>
            <th>Proof</th>
            <th style="width: 8%;">Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($event as $row)
            @if($row->Status == null or $row->Status == 2)          
              <tr>
                <td>
                  <img src="/uploads/{{$row->Image}}" alt="no image" style="height:100px; width:100px;">
                </td>
                <td>{{$row->Title}}</td>
                <td>{{$row->Description}}</td>
                <td>{{$row->category->Category_Type}}</td>
                <td>{{$row->Fund}}/Rs</td>
                <td>
                  <img src="/uploads/{{$row->Proof}}" alt="no image" style="height:100px; width:100px;">
                </td>
                <td>
                   @if($row->Status == null)<span class="badge bg-danger">Pending</span>@elseif($row->Status == 2)<span class="badge bg-warning">Rejected</span>@endif
                </td>
                <td class="project-actions">
                  <a class="btn btn-info btn-sm" href="/editevent/{{$row->id}}">
                    <i class="fas fa-pencil-alt">
                    </i>
                      Edit
                  </a>
                  <a class="btn btn-danger btn-sm" href="/deleteevent/{{$row->id}}">
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
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th>Category Type</th>
            <th>Require Fund</th>
            <th>Proof</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection