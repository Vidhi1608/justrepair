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

  @include('admin.template.home.section.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="overflow: hidden">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0 text-dark">{{$product->name}} Brand</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>
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
           

            
            <div class="col-md-12">
              <form action="/storebrand" method="POST">
                @csrf
                <div class="row">
                <div class="form-group col-md-6 pt-3">
                <label>Select Brand</label>
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <select class="form-control" name="brand_id">
                  @foreach ($brands as $brand)
            
                 <option value="{{$brand->id}}">{{$brand->name}}</option>
                 @endforeach
                 </select>
                </div>
                <div class="form-group col-md-6 pt-5">
                  <button class=" btn btn-success" id="confirm">submit</button>
                </div>
              </div>
              </form>
              
            </div>
        
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                @foreach($product->brands as $value)
                <tr>
                    <td>{{$value['id']}}</td>
                    <td>{{$value['name']}}</td>
                    <td>
                      <form action="/destroybrand" method="Post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        {{-- <input type="hidden" name="product_id" value="{{$product->id}}"> --}}
                      <button type="submit" name="brand_id" value="{{$value->id}}" class="btn btn-danger btn-sm">Delete</button>
                    
                      </form>
                    </td>
                    {{-- <form action="/destroybrand" method="POST">
                      @csrf
                    <td>
                    <a href="{{action('BrandsController@edit',$value['id'])}}" class="btn btn-success btn-sm">Edit</a>
                    <button name="brand_id" value="{{$value->id}}" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                  </form> --}}
                    
                </tr>
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
 
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('admin.template.home.script')
@include('sweetalert::alert')
</body>
</html>
