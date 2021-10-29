{{-- \resources\views\permissions\create.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Smile Charities | Create Permission')

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
              <li class="breadcrumb-item active">Add Permissions</li>
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

            <h1><i class='fa fa-key'></i> Add Permission</h1>
            <div class="text-right">
                <a href="/permissions" class="btn btn-success pull-right"><i class="nav-icon fas fa-backward"></i> <b>Back</b></a>
            </div>
            <br>

            {{ Form::open(array('url' => 'permissions')) }}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', '', array('class' => 'form-control')) }}
            </div><br>
            @if(!$roles->isEmpty()) //If no roles exist yet
                <h4>Assign Permission to Roles</h4>

                @foreach ($roles as $role) 
                    {{ Form::checkbox('roles[]',  $role->id ) }}
                    {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                @endforeach
            @endif
            <br>
            {{ Form::submit('Add', array('class' => 'btn btn-success')) }}

            {{ Form::close() }}

        </div>
    </div>

@endsection