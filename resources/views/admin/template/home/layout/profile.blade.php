<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('admin.template.home.link')
  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
</head>
<body class="hold-transition sidebar-mini over">
<div class="wrapper">

  @include('admin.template.home.section.navbar')

  @if (Auth::check())


  {{-- // return Auth::user()->role->name; --}}
  {{-- {{ $role = Auth::user()->role->name }} --}}

  @switch(Auth::user()->role->name)
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
            <h1 class="m-0 text-dark">User Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>  
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            {{-- <div class="col-md-6">
              <div class="section">
                <div class="container">
                    <div>
                    <div class="text-center bg">
                        <div class="pt-4 pb-4">
                        <h2>Profile</h2>
                        <h1><i class="fas fa-user-circle fa-2x"></i></h1>
                        <button class="btn btn-light">Change Photo</button>
                    </div>
                    </div>
                    <div class="col-md-12 shadow p-4" style="background-color: white">
                    <div class="card shadow">
                        <div class="card-body">
                          
                                <h3>Personal Detail</h3>
                                <h6 class="mt-3 text-muted">First Name</h6>
                                <p>Vidhi Gajjar</p>
                                <h6 class="mt-3 text-muted">Post</h6>
                                <p>Admin</p>
                                <h6 class="mt-3 text-muted">Mobile</h6>
                                <p>9856321450</p>
                                <h6 class="mt-3 text-muted">Address</h6>
                                <p>xyz nr abc road ahmedabad</p>
                                <h6 class="mt-3 text-muted">City</h6>
                                <p>Ahmedabad</p>
                        </div>
                </div>
                </div>
                </div>
              </div>
          </div>
      </div> --}}
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-md-6 col-lg-" >
            <div class="card">
                    
               <div  class="justify-content-center pb-5" style="background-color:#fcc71f">
                <h1 class="text-center" style="color: black; font-family: 'Tangerine', serif;
                font-size: 65px;
                text-shadow: 4px 4px 4px #aaa; padding-top:50px">Personal Information</h1>
              {{-- <img class="card-img-top" src="{{url('images')}}/gradient.png" height="250"> --}}
            </div>
              <div class="card-body text-center pt-5" style=" background-color:#419eaa">
              <img class="profile rounded-circle" src="images/{{$users->file}}" alt="Bologna">
            
           
            {{-- <div class="col-md-12 shadow text-left">
                <div class="card shadow">
                    <div class="card-body">
                        --}}
                        
                        <div class="ml-4 text-left" style="color: white">
                            <h4 class="">{{$users->name}}</h4>
                          
                            <h6 class=" mb-2 ">{{$users->role->name}}</h6>
                            <hr>   
                            <h4>Contact Number</h4>
                            <h6 class="mb-2 ">{{$users->mobile}}</h6> 
                            <hr>
                            <h4>Email</h4>
                            <h6 class="mb-2 ">{{$users->email}}</h6>
                            @if (isset($users->city->name))
                            <hr>
                                
                            <h4>City</h4>
                            <h6 class="mb-2 ">{{$users->city->name}}</h6>
                            <hr>   
                            @endif
                            </div>
                    {{-- </div>
            </div>
            </div> --}}
        </div>   
                <a href="{{action('AdminController@edit',$users['id'])}}" class="btn" style="background-color: #fcc71f;">Edit</a>
                {{-- <a href="#" class="btn btn-outline-info">Message</a> --}}
            </div>
          </div>
        </div>
      </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <!-- /.content -->
  </div>
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

<!-- REQUIRED SCRIPTS -->
@include('admin.template.home.script')
</body>
</html>
