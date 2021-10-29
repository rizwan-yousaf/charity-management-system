{{-- \resources\views\users\create.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Smile Charities | Add User')

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
              <li class="breadcrumb-item"><a href="users">User</a></li> 
              <li class="breadcrumb-item active">Add User</li>
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

            <h1><i class='fa fa-user-plus'></i> Add User</h1>
                <div class="text-right">
                    <a href="users" class="btn btn-success pull-right"><i class="nav-icon fas fa-backward"></i> <b>Back</b></a>
                </div>
            <hr>

            {{ Form::open(array('url' => 'users')) }}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', '', array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::email('email', '', array('class' => 'form-control')) }}
            </div>

            <div class='form-group'>
                @foreach ($roles as $role)
                    {{ Form::checkbox('roles[]',  $role->id ) }}
                    {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                @endforeach
            </div>

            <div class="form-group">
                {{ Form::label('password', 'Password') }}<br>
                {{ Form::password('password', array('class' => 'form-control')) }}

            </div>

            <div class="form-group">
                {{ Form::label('password', 'Confirm Password') }}<br>
                {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

            </div>

            <div class="form-group">
                {{ Form::label('register_as', 'Register As') }}
                <select name="register_as" class="form-control @error('register_as') is-invalid @enderror" required autocomplete="register_as">
                    <option value="register As*">Register As*</option>
                    <option value="admin">Admin</option>
                    <option value="donor">Donor</option>
                    <option value="receiver">Receiver</option>
                </select>
            </div>

            {{ Form::submit('Add', array('class' => 'btn btn-success')) }}

            {{ Form::close() }}

        </div>
    </div>

@endsection