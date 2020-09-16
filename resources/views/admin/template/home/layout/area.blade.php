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
            <h1 class="m-0 text-dark">Show Area</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Area List</li>
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
                <div class="col-md-6 text-left">
                  <button class="btn btn-primary btn-sm shadow mb-2" data-toggle="modal" data-target="#myModal2">Add Area</button>
                     <!-- The Modal -->
                    <div class="modal fade" id="myModal2">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        
                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Add Area</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                        
                          <!-- Modal body -->
                          <div class="modal-body">
                            <form method="POST" action="/storearea">
                              @csrf
                              <div class="form-group">
                                <label>Select City</label>
                                     <br>
                                     <select class="form-control" name="city_id">
                                      @foreach ($cities as $city)
                                    
                                     <option value="{{$city->id}}">{{$city->name}}</option>
                                     @endforeach
                                     </select>
                                <br>
                                <label>Area Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your Area Name">
                              </div>
                              <button type="submit" class="btn btn-success">Submit</button>
                            
                            </form>
                            </div>
                          
                          <!-- Modal footer -->
                          <div class="modal-footer">
                          
                          </div>
                        
                        
                        </div>
                      </div>
                    </div>
                    <!-- The Modal -->
                </div>
                <div class="col-md-6">
                  <form class="form-inline" action="/find" method="POST" role="search" style="justify-content: flex-end">
                    @csrf
                    <div class="input-group input-group-sm text-right">
                      <input class="form-control form-control-navbar" name="q" type="search" placeholder="Search" aria-label="Search">
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
                  <th>City</th>
                  <th>Area</th>
                  
                </tr>
                </thead>
                @foreach($cities as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>
                      <a href="{{url('displayareas/'.$value->id)}}" class="btn btn-success btn-sm">Areas</a>
                    </td>
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
