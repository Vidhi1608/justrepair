<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('admin.template.home.link')
</head>
<body class="hold-transition sidebar-mini over">
<div class="wrapper">

  @include('admin.template.home.section.navbar')

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
        
        <li class="nav-item has-treeview menu-open">
          <a href="{{url('areas')}}" class="nav-link active">
            <p>
              <i class="fas fa-chart-area"></i>
              Area
            </p>
          </a>
          
        </li>
        <li class="nav-item has-treeview menu-open">
          <a href="{{url('cities')}}" class="nav-link active">
            <p>
              <i class="fas fa-city"></i>
              City
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview menu-open">
          <a href="{{url('products')}}" class="nav-link active">
            <p>
              <i class="fab fa-product-hunt"></i>
              Product
            </p>
          </a>
          
        </li>
        <li class="nav-item has-treeview menu-open">
          <a href="{{url('brands')}}" class="nav-link active">
            <p>
              <i class="fab fa-bootstrap"></i>
              Brand
            </p>
          </a>
          
        </li>
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <p>
              <i class="fab fa-dochub"></i>
              Dashboard
            </p>
          </a>
          
        </li>
        <li class="nav-item has-treeview menu-open">
            <a href="{{url('managers')}}" class="nav-link">
              <i class="fas fa-user"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('addadmin')}}" class="nav-link">
                  <i class="fas fa-plus icon2"></i>
                  <p class="p-cont2">Add Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('showadmin')}}" class="nav-link">
                  <i class="far fa-eye nav-icon icon"></i>
                  <p class="p-cont">Show Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('addmanager')}}" class="nav-link">
                  <i class="fas fa-plus icon2"></i>
                  <p class="p-cont2">Add Manager</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('showmanager')}}" class="nav-link">
                  <i class="far fa-eye nav-icon icon"></i>
                  <p class="p-cont">Show Manager</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('addtechnician')}}" class="nav-link">
                  <i class="fas fa-plus icon2"></i>
                  <p class="p-cont2">Add Technician</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('showtechnician')}}" class="nav-link">
                  <i class="far fa-eye nav-icon icon"></i>
                  <p class="p-cont">Show Technician</p>
                </a>
              </li>
            </ul>
          </li>
        <li class="nav-item has-treeview menu-open">
          <a href="{{url('complaints')}}" class="nav-link active">
            <p>
              <i class="fas fa-users-cog"></i>
              Complain
            </p>
          </a>
          
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Technician List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Technician List</li>
            </ol>
          </div><!-- /.col -->
          <div>
            
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6">
            {{-- <form class="form-inline ml-3">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-cyan" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
           </form> --}}

          </div>
          {{-- <div class="col-md-6">
            <a href="" class="btn-add  float-right"> <i class="fas fa-plus icon2"></i> Add</a>
          </div> --}}
        </div>     
      </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Id</th>
              <th>Join Date</th>
              <th>Name</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>Password</th>
              <th>City_Id</th>
              <th>Product_Id</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            @if ($user->role->name == 'Technician')
                
            
            @foreach($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['created_at']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user->role['name']}}</td>
                <td>{{$user['mobile']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user->city['name']}}</td>
                <td>@foreach ($user->products as $product){{$product->name}}<br>@endforeach</td>
                <td>{{$user['status']}}</td>
                <td>
                  <a href="{{action('AdminController@edit',$user['id'])}}" class="btn btn-success btn-sm">Edit</a>
                </td>
                
            </tr>
            @endforeach
            @endif
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  @include('admin.template.home.section.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('admin.template.home.script')
</body>
</html>
