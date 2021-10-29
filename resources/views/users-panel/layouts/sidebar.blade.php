<!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="../../dist/img/smile logo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b> Smile Charity </b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/uploads/{{Auth::user()->avatar }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ Auth::user()->name }} </a>
          <div class="profile-usertitle-status" style="color: white;"><span class="indicator label-success"></span><i class="fa fa-circle" aria-hidden="true" style="font-size: 13px; color: green;"></i> ONLINE</div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="/home" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @if(Auth::user()->register_as == 'receiver' or Auth::user()->register_as == 'Receiver')
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Events Request
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/showevents" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/show-approve-events" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Approved Request</p>
                  </a>
                </li>
              </ul>
            </li>
          @elseif(Auth::user()->register_as == 'Donor' or Auth::user()->register_as == 'donor')
            <li class="nav-item">
              <a href="/show-general-donation" class="nav-link">
                <i class="nav-icon fas fa-check"></i>
                <p>General Donations</p>
              </a>
            </li>
            <li class="nav-item has-treeview menu-open">
              <a href="/show-event-donation" class="nav-link active">
                <i class="nav-icon fas fa-copy"></i>
                <p>Event Donations</p>
              </a>
            </li>
             <li class="nav-item has-treeview menu-open">
              <a href="/donate" class="nav-link active" style="background-color: #78ab0c;">
                <i class="nav-icon  fas fa-hand-holding-usd"></i>
                <p>General Donate-Now </p>
              </a>
            </li>
             <li class="nav-item has-treeview menu-open">
              <a href="/ongoingevent" class="nav-link active" style="background-color: #78ab0c;">
                <i class="nav-icon  fas fa-hand-holding-usd"></i>
                <p>Events Donate-Now</p>
              </a>
            </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- /Main Sidebar Container -->  