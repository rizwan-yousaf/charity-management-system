@extends('admin.layouts.master')

@section('title', 'Smile Charities | Donation Management')

@section('content')

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>General Donation List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
            <li class="breadcrumb-item active">Donation Management</li>
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
    <a href="/donate" class="btn btn-success"><i class="fa fa-plus"></i>  Donate Now For General Purpose</a>
  </div> -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">General Donations List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Donor Name</th>
            <th>Contact No.</th>
            <th>Pupose</th>
            <th>Card/EasyPaisa</th>
            <th>Donations</th>
            <th>Date/Time</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($generaldonate as $row)
            <tr>
              <td>{{$row->User_Name}}</td>
              <td>{{$row->User_Contact}}</td>
              <td>{{$row->Purpose}}</td>
              <td>{{$row->Card_Number}}</td>
              <td>{{$row->Payment}}/Rs</td>
              <td>{{$row->created_at}}</td>
              <td>
                 <span class="badge bg-success">Succeeded</span>
              </td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>Donor Name</th>
            <th>Contact No.</th>
            <th>Pupose</th>
            <th>Card/EasyPaisa</th>
            <th>Donations</th>
            <th>Date/Time</th>
            <th>Status</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection