<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-orange navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-sm-inline-block" style="margin-top: 6px; color: white;">
        <h4>Welcome, {{ Auth::user()->name }}</h4>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="/uploads/{{Auth::user()->avatar }}" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="/uploads/{{Auth::user()->avatar }}" class="img-circle elevation-2" alt="User Image">

            <p>
              {{ Auth::user()->name }}
              <small>Member as a {{ Auth::user()->register_as }}</small>
            </p>
          </li>
          
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="/users" class="btn btn-warning btn-flat text-light">Profile</a>
            @role('Admin') {{-- Laravel-permission blade helper --}}
              <a href="#"><i class="fa fa-btn fa-unlock"></i>Admin</a>
            @endrole
            <a href="{{ route('logout') }}" class="btn btn-warning btn-flat float-right text-light" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
<!-- /.navbar -->     