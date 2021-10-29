<!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="../../dist/img/smile logo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b> Smile Charities </b></span>
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
            <a href="admin" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/users" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Roles and Permission
                <!-- <span class="right badge badge-danger"> New</span> -->
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="/showcategories" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Categories Management 
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/showallevent" class="nav-link">
              <i class="nav-icon fa fa-tag"></i>
              <p>
                Event Management 
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/showecontact" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Contact Management 
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Donation Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/view-general-donation" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Donations</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/view-event-donation" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event Donations</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Event Info
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/view-ongoing-event" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ongoing Event</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/view-upcoming-event" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upcoming Event</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/view-completed-event" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Completed Event</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/view-success-stories" class="nav-link">
              <i class="nav-icon far fa-check-square"></i>
              <p>
                Successs Stories 
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/show-blog" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Blog Management 
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- /Main Sidebar Container -->  