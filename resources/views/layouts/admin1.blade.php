<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>JRI Admin Panel</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    .icon{
      margin-left: -5px!important;
     } 
    .p-cont{
      margin-left: -2px!important;
     }
     .icon2{
      margin-left: 3px!important;
     } 
    .p-cont2{
      margin-left: 7px!important;
     }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <a href="{{url('logout')}}">logout</a>
    
    {{-- <form action="{{url('logout')}}" method="post">
      <input type="submit" value="logout">
    </form> --}}
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

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
          <img src="https://img.icons8.com/dotty/80/000000/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        {{-- <a href="#" class="d-block">{{Auth::user()->name}}</a> --}}
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Area
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('addcomplaint')}}" class="nav-link">
                  <i class="fas fa-plus icon2"></i>
                  <p class="p-cont2">Add Area</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('data')}}" class="nav-link">
                    <i class="fas fa-trash"></i>
                  <p class="p-cont">Remove Area</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="{{url('showcity')}}" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                City
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            {{-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('addcity')}}" class="nav-link">
                  <i class="fas fa-plus icon2"></i>
                  <p class="p-cont2">Add City</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('insert')}}" class="nav-link">
                    <i class="fas fa-trash"></i>
                  <p class="p-cont">Show Cities</p>
                </a>
              </li>
            </ul> --}}
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('addcomplaint')}}" class="nav-link">
                  <i class="fas fa-plus icon2"></i>
                  <p class="p-cont2">Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('data')}}" class="nav-link">
                    <i class="fas fa-trash"></i>
                  <p class="p-cont">Remove Product</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Brand
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('addcomplaint')}}" class="nav-link">
                  <i class="fas fa-plus icon2"></i>
                  <p class="p-cont2">Add Brand</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('data')}}" class="nav-link">
                    <i class="fas fa-trash"></i>
                  <p class="p-cont">Remove Brand</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('addcomplaint')}}" class="nav-link">
                  <i class="fas fa-plus icon2"></i>
                  <p class="p-cont2">Create Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('data')}}" class="nav-link">
                    <i class="fas fa-trash"></i>
                  <p class="p-cont">Remove Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Manager
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('addcomplaint')}}" class="nav-link">
                  <i class="fas fa-plus icon2"></i>
                  <p class="p-cont2">Add Manager</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('data')}}" class="nav-link">
                    <i class="fas fa-trash"></i>
                  <p class="p-cont">Remove Manager</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Technician
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('addcomplaint')}}" class="nav-link">
                  <i class="fas fa-plus icon2"></i>
                  <p class="p-cont2">Add Technician</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('data')}}" class="nav-link">
                    <i class="fas fa-trash"></i>
                  <p class="p-cont">Remove Technician</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Complain
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('addcomplaint')}}" class="nav-link">
                  <i class="fas fa-plus icon2"></i>
                  <p class="p-cont2">Add Complain</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('data')}}" class="nav-link">
                    <i class="fas fa-trash"></i>
                  <p class="p-cont">Remove Complain</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Update Bill
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('addcomplaint')}}" class="nav-link">
                  <i class="fas fa-plus icon2"></i>
                  <p class="p-cont2">Create Bill</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('data')}}" class="nav-link">
                  <i class="fas fa-trash"></i>
                  <p class="p-cont">Remove Bill</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Update Financial Report
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('addcomplaint')}}" class="nav-link">
                  <i class="fas fa-plus icon2"></i>
                  <p class="p-cont2">Create Financial Report                </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('data')}}" class="nav-link">
                  <i class="fas fa-trash"></i>
                  <p class="p-cont">Remove Financial Report                </p>
                </a>
              </li>
            </ul>
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
            <h1 class="m-0 text-dark">Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
            </ol>
          </div><!-- /.col -->
          <div>
            
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
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

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
