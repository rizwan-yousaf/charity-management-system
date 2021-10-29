@extends('admin.layouts.master')

@section('title', 'Smile Charities | Edit Role')

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
              <li class="breadcrumb-item"><a href="/roles">Roles</a></li> 
              <li class="breadcrumb-item active">Update Role</li>
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
            <h1><i class='fa fa-key'></i> Edit Role: {{$role->name}}</h1>
            <div class="text-right">
                <a href="/roles" class="btn btn-success pull-right"><i class="nav-icon fas fa-backward"></i> <b>Back</b></a>
            </div>
            <hr>

            {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}

            <div class="form-group">
                {{ Form::label('name', 'Role Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>

            <h5><b>Assign Permissions</b></h5>
            @foreach ($permissions as $permission)

                {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
                {{Form::label($permission->name, ucfirst($permission->name)) }}<br>

            @endforeach
            <br>
            {{ Form::submit('Update', array('class' => 'btn btn-success')) }}

            {{ Form::close() }}    
        </div>
    </div>

@endsection