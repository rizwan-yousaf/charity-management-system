@extends('admin.layouts.master')

@section('title', 'Smile Charities | Event Management')

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
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
            <li class="breadcrumb-item active">Events Management</li>
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
    <a href="/generateevent" class="btn btn-success"><i class="fa fa-plus"></i>  Add Events</a>
  </div>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Events List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Image</th>
            <th style="width: 8%;">Title</th>
            <th style="width: 21%;">Description</th>
            <th style="width: 15%;">Category Type</th>
            <th>Require Fund</th>
            <th>Proof</th>
            <th>User Name</th>
            <th>Cell No</th>
            <th>Status</th>
            <th>Action</th>
            <th>Approval</th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_event as $row)
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
              <td>{{$row->User_Name}}</td>
              <td>{{$row->User_Contact}}</td>
              <td>
                @if($row->Status == null)<span class="badge bg-danger">Pending</span>@elseif($row->Status == 1)<span class="badge bg-success">Approved</span>@else<span class="badge bg-warning">Rejected</span>@endif
              </td>
              <td class="project-actions">
                <a class="btn btn-info btn-sm" href="/edituserevent/{{$row->id}}">
                  <i class="fas fa-pencil-alt">
                  </i>
                    Edit
                </a>
                &nbsp;
                <a class="btn btn-danger btn-sm" href="/deleteuserevent/{{$row->id}}">
                  <i class="fas fa-trash">
                  </i>
                    Delete
                </a>
                &nbsp;
                <a class="btn btn-warning btn-sm" href="/viewuserevent/{{$row->id}}">
                  <i class="fas fa-folder">
                  </i>
                    View
                </a>
              </td>
              <td>
                <form action="{{url('/toggle-approve')}}" method="POST" class="btn-group inline pull-left">
                  {{csrf_field()}}
                  
                  <input type="text" name="user_email" hidden="" value="{{$row->User_Email}}">

                  <input <?php if($row->Status == 1){echo "checked";}?> type="checkbox" name="approve" style="margin-top: 8px;">

                  <input type="hidden" name="id" value="{{$row->id}}">

                  <input class="btn btn-success btn-sm" type="submit" Value="Done" style=" margin-left: 10px; border-radius: 2px;">
                </form>
              </td>
            </tr>
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
            <th>User Name</th>
            <th>Cell No</th>
            <th>Status</th>
            <th>Action</th>
            <th>Approval</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection