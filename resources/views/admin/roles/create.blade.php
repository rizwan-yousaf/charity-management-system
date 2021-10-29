@extends('admin.layouts.master')

@section('title', 'Smile Charities | Add Role')

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
              <li class="breadcrumb-item active">Add Role</li>
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

            <h1><i class='fa fa-key'></i> Add Role</h1>
            <div class="text-right">
                <a href="/roles" class="btn btn-success pull-right"><i class="nav-icon fas fa-backward"></i> <b>Back</b></a>
            </div>
            <hr>

            {{ Form::open(array('url' => 'roles')) }}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>

            <h5><b>Assign Permissions</b></h5>

            <div class='form-group'>
                @foreach ($permissions as $permission)
                    {{ Form::checkbox('permissions[]',  $permission->id ) }}
                    {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                @endforeach
            </div>

            {{ Form::submit('Add', array('class' => 'btn btn-success')) }}

            {{ Form::close() }}

        </div>
    </div>

@endsection