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
<div class="wrapper" style="overflow-y: hidden">

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


@if (Auth::check())


{{-- // return Auth::user()->role->name; --}}
{{ $role = Auth::user()->role->name }}

@switch($role)
    @case('Manager')
        @include('admin.template.home.section.sidebar2')
        @break
    @case('Technician')
        @include('admin.template.home.section.sidebar3')
        @break
    @default
        @include('admin.template.home.section.sidebar')
@endswitch
@endif
{{-- @if (Auth::check())
    {{$role = Auth::user()->role->name}}
    @switch($role)
        @case('Admin') --}}
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User List</li>
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
            <form class="form-inline ml-3" action="/search" method="POST" role="search">
              @csrf
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" name="q" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-cyan" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
           </form>
          </div>
           {{-- <div class="col-md-6">
               <form class="form-inline ml-3 float-right">
               <div class="input-group input-group-sm">
                 <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                 <div class="input-group-append">
                   <button class="btn btn-cyan" type="submit">
                     <i class="fas fa-search"></i>
                   </button>
                 </div>
               </div>
              <form>
          </div>  --}}
        </div>     
      </div>
        <!-- /.card-header -->

      

        <div class="card-body table-responsive">
          <table  id="myTable" class="table table-bordered table-striped">

            <thead>
            <tr>
              <th>Id</th>
              <th>Join Date</th>
              <th>Name</th>
              <th>Roles</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>City</th>
              <th>Product</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
           
            <tbody>
              
            @foreach($users as $user)
            @if (Auth::user()->role->name == 'Admin' )
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
            
            @endif
            {{-- @if (Auth::user()->role->name == 'Manager' ) --}}
            @if (Auth::user()->role->name == 'Manager' && Auth::user()->city->name == $user->city->name)
           
             
            
            @if ($user->role->name == 'Technician' && $user->city->name==$user->city->name )
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
            @endif
            @endif
            @endforeach
          </tbody>
             
            </table> 
          </div>
         
          
          <!-- /.card-body -->
          
        </div>
        <!-- /.card -->
        <div class="row float-right">
          <div class="col-sm-6 col-sm-offset-5">
            {{ $users->render() }}
          </div>
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

  @include('admin.template.home.section.footer')
  {{-- @break
  @default
  @include('admin.template.home.layout.invalid') 
  @endswitch
@endif --}}
</div>
<!-- ./wrapper -->
@include('admin.template.home.script')
@include('sweetalert::alert')
</body>
</html>
