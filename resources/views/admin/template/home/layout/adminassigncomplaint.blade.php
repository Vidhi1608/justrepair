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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Complaint</h1>
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
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card shadow p-3 mt-3 mb-5 ">
             
            
            <form method="POST" action="/taken">
            @csrf
            <div class="form-group">
                    <input type="hidden" name="id" value="{{$complaint->id}}">
                    {{-- <input type="hidden" name="id" value= "{{$complaint->id}}"> --}}
                    <label>{{$complaint->product->name}} Complaint Assign:</label>
                    <br>
                    <select class="form-control" name="user_id">
                      <option selected>Select Technician</option>
                      @foreach($users as $user)
                      @if ($complaint->city_id == $user->city->id && $user->role_id ==3)
                      
                        <option value="{{$user->id}}">{{$user->name}} @foreach ($user->products as $product)({{$loop->index+1}}) {{$product->name}}) @endforeach</option>
                       
                        @endif

                      @endforeach   
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Assign</button>
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
