{{-- \resources\views\users\edit.blade.php --}}

@extends('admin.layouts.master')

@section('title', 'Smile Charities | Edit User')

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
              <li class="breadcrumb-item"><a href="/users">User</a></li> 
              <li class="breadcrumb-item active">Update User</li>
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

            <h1><i class='fa fa-user-plus'></i> Edit {{$user->name}}</h1>
            <div class="text-right">
                <a href="/users" class="btn btn-success pull-right"><i class="nav-icon fas fa-backward"></i> <b>Back</b></a>
            </div>
            <hr>

            <!--    {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}} -->
            <form method="post" enctype="multipart/form-data" action="{{route('users',[$user->id])}}">
                @csrf

                <div class="box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="/uploads/{{$user->avatar}}" alt="no image" style="height:150px; width:150px;">
                    </div>

                    <div class="form-group">
                       <label for="exampleInputFile">Update Profile Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="avatar">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>               
                </div>
                
                <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', null, array('class' => 'form-control')) }}
                </div>

                <h5><b>Give Role</b></h5>

                <div class='form-group'>
                    @foreach ($roles as $role)
                        {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
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
                    {{ Form::text('register_as', null, array('class' => 'form-control')) }}
                    
                </div>

                {{ Form::submit('Update', array('class' => 'btn btn-success')) }}
            </form>
           <!--  {{ Form::close() }} -->
        </div>
    </div>
@endsection