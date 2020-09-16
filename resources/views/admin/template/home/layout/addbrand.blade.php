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

  @if (Auth::check())
            {{-- {{$role = Auth::user()->role->name}} --}}
            @switch(Auth::user()->role->name)
                @case('Admin')
        

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">New Brand</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Brand</li>
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
                <form method="POST" action="/brand">
                  @csrf
                  <div class="form-group">
                    {{-- <label>Select Product</label>
                         <br>
                         <select class="form-control" name="product_id">
                          @foreach ($products as $product)
                    
                         <option value="{{$product->id}}">{{$product->name}}</option>
                         @endforeach
                         </select> --}}
                    <br>
                    <label>Brand Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your Brand Name">
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
    
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
  @break
               @default
               @include('admin.template.home.layout.invalid') 
  @endswitch
@endif
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('admin.template.home.script')
</body>
</html>
