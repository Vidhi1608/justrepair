<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
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
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               {{-- <li class="nav-item has-treeview menu-open">
                <a href="{{url('areas')}}" class="nav-link">
                  <i class="fas fa-chart-area"></i>
                  <p>
                    Area
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('addarea')}}" class="nav-link">
                      <i class="fas fa-plus icon2"></i>
                      <p class="p-cont2">Add Area</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{URL::to('areas')}}" class="nav-link">
                      <i class="far fa-eye nav-icon icon"></i>
                      <p class="p-cont">Show Area</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="{{url('brands')}}" class="nav-link">
                  <i class="fab fa-bootstrap"></i>
                  <p>
                    Brand
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('addbrand')}}" class="nav-link">
                      <i class="fas fa-plus icon2"></i>
                      <p class="p-cont2">Add Brand</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{URL::to('brands')}}" class="nav-link">
                      <i class="far fa-eye nav-icon icon"></i>
                      <p class="p-cont">Show Brand</p>
                    </a>
                  </li>
                </ul>
              </li> --}}
          <li class="nav-item has-treeview menu-open">
            <a href="{{url('managers')}}" class="nav-link">
              <i class="fas fa-user"></i>
              <p>
                Technicians
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('addtechnician')}}" class="nav-link">
                  <i class="fas fa-plus icon2"></i>
                  <p class="p-cont2">Add Technician</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('admin')}}" class="nav-link">
                  <i class="far fa-eye nav-icon icon"></i>
                  <p class="p-cont">Show Technicians</p>
                </a>
              </li>
            </ul>
          </li>
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
                <a href="{{url('addcomplaint')}}" class="nav-link">
                  <i class="fas fa-plus icon2"></i>
                  <p class="p-cont2">Add Complaint</p>
                </a>
              </li>
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
                  {{-- {{URL::to('complaints')}} --}}
                  <i class="fas fa-check-circle"></i>
                  <p class="p-cont">Complited Complaint</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="{{url('bill')}}" class="nav-link active">
              <p>
                <i class="fas fa-file-invoice"></i>
                Update Bill
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="{{url('report')}}" class="nav-link active">
              <p>
                <i class="fas fa-coins"></i>
                Update Financial Report
              </p>
            </a>
            
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>