 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-light-yellow elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link navbar-light text-center">
      <img src="{{url('images')}}/justrepairit-logo.png" alt="AdminLTE Logo" class="brand-image float-none">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('images')}}/user-logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block user">{{Auth::user()->name}}</a>
        </div>
      </div>

       <!-- Sidebar Menu -->
       <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               <li class="nav-item has-treeview menu-open">
                <a href="{{url('complaints')}}" class="nav-link">
                  <i class="fas fa-users-cog"></i>
                  <p>
                    Complaint
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('upcoming')}}" class="nav-link">
                      <i class="fas fa-sign-in-alt"></i>
                      <p class="p-cont">Upcoming Complaint</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('working')}}" class="nav-link">
                      <i class="fas fa-tools"></i>
                      <p class="p-cont">Working Complaint</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('completed')}}" class="nav-link">
                      <i class="fas fa-check-circle"></i>
                      <p class="p-cont">Complited Complaint</p>
                    </a>
                  </li>
                </ul>
              </li>
          <li class="nav-item">
            <a href="{{url('bill')}}" class="nav-link">
              <p>
                <i class="fas fa-file-invoice"></i>
                Update Bill
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="{{url('report')}}" class="nav-link ">
              <p>
                <i class="fas fa-coins"></i>
                Show Financial Report
              </p>
            </a>
            
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>