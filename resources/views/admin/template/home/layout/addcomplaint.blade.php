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

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">New Complaint</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Complaint</li>
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
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card shadow p-3 mt-3 mb-5 ">
                <form action="/submit" method="post">
                  <div class="form-group">
                    <label>Name</label>
                     <input type="text" name="name" class="form-control text-capitalize" placeholder="Enter your name">
                     <label>Contact Number</label>
                     <input type="tel" name="mobile" class="form-control" placeholder="Enter your Mobile Number">
                     
                     <hr>
                     {{-- ------------FOR MANAGER------------ --}}
                     
                      @foreach ($cities as $city)
                      @if (Auth::user()->role->name == 'Manager' && Auth::user()->city->name == $city->name)
                       
                      <div class="form-group row">
                        <div class="col-md-6">
                          <input type="hidden" name="city_id" value="{{$city->id}}">
                          <label>City</label>
                          <input type="text" class="form-control" placeholder="{{$city->name}}" readonly>
                        </div>
                          
                        <div class="col-md-6">
                          <label>Select Product</label>
                          <select class="form-control" name="product_id">
                            {{-- @foreach ($cities as $city) --}}
                            
                            @foreach ($city->products as $product)
                            
                            <option value="{{$product->id}}">{{$product->name}}</option>
                           @endforeach
                           
                           </select>
                        </div>
                       
                      
                      </div> 
                      @endif
                      @endforeach
                      
               {{-- -----------FOR ADMIN----------- --}}
                     <div class="row text-center">
                      @foreach ($cities as $city)
                      @if (Auth::user()->role->name == 'Admin')
                      <div class="col"> 
                        <label>
                          <input type="radio" name="city_id" value="{{$city->id}}"> {{$city->name}}
                        </label>
                       <select class="form-control" name="product_id">
                        {{-- @foreach ($cities as $city) --}}
                        
                        @foreach ($city->products as $product)
                        
                        <option value="{{$product->id}}">{{$product->name}}</option>
                       @endforeach
                       
                       </select>
                      
                      </div>
                      @endif
                      @endforeach
                     </div> 
                       <hr>
                       <label>Brand</label>
                       <select class="form-control" name="brand_id">
                        @foreach ($brands as $brand)
                  
                       <option value="{{$brand->id}}">{{$brand->name}}</option>
                       @endforeach
                       </select>
                      <label>Model</label>
                      <input type="text" name="model" class="form-control" placeholder="Enter your Product Model">
                      
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter Your Address">
                        <label>Area</label>
                        <input type="text" name="area" class="form-control" placeholder="Enter Your Area">
                        <label>Comment</label>
                         <input type="text" name="comment" class="form-control" placeholder="Message"> 
                  </div>  
                  <input type="submit" name="submit" class="btn btn-success">
                  {{csrf_field()}} {{-- without this line it will give tokenmismatchexception --}}
              </form>
          
          </div>
          </div>
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
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('admin.template.home.script')
</body>
</html>
