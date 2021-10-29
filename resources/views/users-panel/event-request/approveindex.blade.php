@extends('users-panel.layouts.master')

@section('title', 'Smile Charities | Approved Request')

@section('content')

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>All Approved Events List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
            <li class="breadcrumb-item active">Approved Request</li>
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
    <a href="/createevents" class="btn btn-success"><i class="fa fa-plus"></i>  Add Events</a>
  </div> -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Approve Events List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Image</th>
            <th style="width: 8%;">Title</th>
            <th>Description</th>
            <th style="width: 8%;">Category Type</th>
            <th style="width: 6%;">Require Fund</th>
            <th>Proof</th>
            <th style="width: 8%;">Status</th>
            <!-- <th>Action</th> -->
          </tr>
        </thead>
        <tbody>
          @foreach($event as $row)
            @if($row->Status == 1)          
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
                  @if($row->Status == 1)<span class="badge bg-success">Approved</span>@if($row->Status == 1 && $row->Transfer_Fund == 1)<span class="badge bg-warning">Completed</span>@endif
                   @endif
                </td>
                <!-- <td class="project-actions">
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
                </td> -->
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
           <!--  <th>Action</th> -->
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection