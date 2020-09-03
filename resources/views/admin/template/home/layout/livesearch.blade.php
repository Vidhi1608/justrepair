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

  {{-- @include('admin.template.home.section.navbar') --}}

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light shadow">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
      <div class="ml-auto">
        <a class="nav-item" href="tel:9099880885">
          <i class="fas fa-phone-alt color"></i></i><span class="ml-1 right badge badge-success p-1">OFFICE</span></a>
      </div>
      
    
  
  
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <a href="{{url('logout')}}" class="nav-link"><i class="fas fa-power-off "></i></a>
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


  @include('admin.template.home.section.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Admin List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin List</li>
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
           <div class="col-md-6">
               {{-- <a href="" class="btn-add  float-right"> <i class="fas fa-plus icon2"></i> Add</a> --}}
               <form class="form-inline ml-3 float-right">
               <div class="input-group input-group-sm">
                 <input class="form-control form-control-navbar" name="search" id="search" type="search" placeholder="Search Data" aria-label="Search">
                 <div class="input-group-append">
                   <button class="btn btn-cyan" type="submit">
                     <i class="fas fa-search"></i>
                   </button>
                 </div>
                 <div class="table-responsive">
                    <h3 class="text-center">Total Data :<span id="total_records"></span></h3>
                 </div>
               </div>
              <form>
          </div> 
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
              <th>Roles</th>
              <th>Mobile</th>
              <th>Email</th>
              {{-- <th>Password</th> --}}
              <th>City</th>
              <th>Product_id</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
           
            
            {{-- <tr>
              @foreach($users as $user)
              {{-- @foreach ($roles as $role) --}}
                {{-- <td>{{$user->id}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->name}}</td> --}}
                {{-- <td>{{$role->name}}</td>  --}}
                {{-- <td>{{$user->mobile}}</td>
                <td>{{$user->email}}</td> --}}
                {{-- <$user['password']}}<d> --}}
                {{-- <td>{{$user->city->name}}</td>
                <td>{{$user->product->name}}</td> --}}
                {{-- <td>{{$user->status}}</td> --}} 
                {{-- @endforeach --}}
                {{-- @endforeach --}}
            {{-- </tr> --}} 
            @foreach($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['created_at']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user->role['name']}}</td>
                <td>{{$user['mobile']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user->city['name']}}</td>
                <td>{{$user->product['name']}}</td>
                <td>{{$user['status']}}</td>
                <td>
                  {{-- <div class="btn-group" aria-label="Basic example">
                    <button class="btn btn-cyan mr-1">Upload</button>
                    <button class="btn btn-cyan mr-1">Update</button>
                    <button class="btn btn-cyan">Download</button>
                    
                  </div> --}}
                  
                </td>
                
            </tr>
            @endforeach
            
         
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
