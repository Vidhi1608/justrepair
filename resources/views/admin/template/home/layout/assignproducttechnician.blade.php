<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('admin.template.home.link')
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="hold-transition sidebar-mini over">
<div class="wrapper" style="overflow: hidden">

  @include('admin.template.home.section.navbar')

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

    @if (Auth::check())
    {{$role = Auth::user()->role->name}}
    @switch($role)
        @case('Admin')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Technician Product List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product List</li>
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
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md-12 searchbar-corner">
                <form class="form-inline ml-3">
                  <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-cyan" type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
               </form>
              </div>
            </div>     
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Delete Product</th>
                  <th>Assign Product</th>
                  <th>Action</th>
                </tr>
                </thead>
              
                @foreach($users as $user)
               @if($user->role->name == 'Technician')
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td> 
                      {{-- {!! Form::open(['method'=>'post','action'=>'TechnicianController@destroy']) !!} 
                      
                        <div class="form-group">
                          @foreach ($user->products as $product)
                          {{ $product->name}}
                            <a href="destroy/{{$product->id}}" class="btn btn-delete btn-sm">X</a>
                          @endforeach
                        </div>     --}}
                         <form action="/destroytechpro" method="Post">
                          @csrf
                          <input type="hidden" name="user_id" value="{{$user->id}}">
                           @foreach ($user->products as $product)
                          {{ $product->name}}
                           {{-- <input type="hidden" name="product_id" value="{{$product->id}}">  --}}
                          <button type="submit" name="product_id" value="{{$product->id}}" class="btn btn-delete btn-sm">X</button>
                          @endforeach 
                         </form> 
                     
                    </td>
                     <form action="/storeproduct" method="POST">
                      @csrf
                    <td> 
                      <input type="hidden" name="user_id" value="{{$user->id}}">
                     <select class="form-control" name="product_id">
                      @foreach ($products as $product)
                
                     <option value="{{$product->id}}">{{$product->name}}</option>
                     @endforeach
                      
                    </td>
                    <td>
                      <button class="submit form-control btn btn-success btn-sm" id="confirm">submit</button>
                    </td>
                  </form> 
                </tr>
                @endif
                @endforeach
                
             
                </table>
              </div>
              <!-- /.card-body -->
            </div>
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

@break
        @case('Manager')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Technician Product List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product List</li>
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
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md-12 searchbar-corner">
                <form class="form-inline ml-3">
                  <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-cyan" type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
               </form>
              </div>
            </div>     
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Delete Product</th>
                  <th>Assign Product</th>
                  <th>Action</th>
                </tr>
                </thead>
              
                @foreach($users as $user)
               @if($user->role->name == 'Technician' && Auth::user()->city->name == $user->city->name)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td> 
                      {{-- {!! Form::open(['method'=>'post','action'=>'TechnicianController@destroy']) !!} 
                      
                        <div class="form-group">
                          @foreach ($user->products as $product)
                          {{ $product->name}}
                            <a href="destroy/{{$product->id}}" class="btn btn-delete btn-sm">X</a>
                          @endforeach
                        </div>     --}}
                         <form action="/destroytechpro" method="Post">
                          @csrf
                          <input type="hidden" name="user_id" value="{{$user->id}}">
                           @foreach ($user->products as $product)
                          {{ $product->name}}
                           {{-- <input type="hidden" name="product_id" value="{{$product->id}}">  --}}
                          <button type="submit" name="product_id" value="{{$product->id}}" class="btn btn-delete btn-sm">X</button>
                          @endforeach 
                         </form> 
                     
                    </td>
                     <form action="/storeproduct" method="POST">
                      @csrf
                    <td> 
                      <input type="hidden" name="user_id" value="{{$user->id}}">
                     <select class="form-control" name="product_id">
                      @foreach ($products as $product)
                
                     <option value="{{$product->id}}">{{$product->name}}</option>
                     @endforeach
                      
                    </td>
                    <td>
                      <button class="submit form-control btn btn-success btn-sm" id="confirm">submit</button>
                    </td>
                  </form> 
                </tr>
                @endif
                @endforeach
                
             
                </table>
              </div>
              <!-- /.card-body -->
            </div>
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
  @include('admin.template.home.section.footer')
  @break
  @default
  @include('admin.template.home.layout.invalid') 
  @endswitch
@endif
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('admin.template.home.script')
@include('sweetalert::alert')
</body>
</html>
