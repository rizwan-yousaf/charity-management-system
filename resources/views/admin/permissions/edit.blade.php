@extends('admin.layouts.master')

@section('title', 'Smile Charities | Edit Permission')

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
              <li class="breadcrumb-item"><a href="/permissions">Permissions</a></li> 
              <li class="breadcrumb-item active">Update Permissions</li>
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

    <div class="row justify-content-center">    
        <div class='col-lg-8 col-lg-offset-4'>

            <h1><i class='fa fa-key'></i> Edit {{$permission->name}}</h1>
            <div class="text-right">
                <a href="/permissions" class="btn btn-success pull-right"><i class="nav-icon fas fa-backward"></i> <b>Back</b></a>
            </div>
            <br>
            {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

            <div class="form-group">
                {{ Form::label('name', 'Permission Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>
            <br>
            {{ Form::submit('Update', array('class' => 'btn btn-success')) }}

            {{ Form::close() }}

        </div>
    </div>

@endsection