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

     {{-- @if (Auth::check())
    {{$role = Auth::user()->role->name}}
    @switch($role)
        @case('Admin') 
                                                                                                                                                                                                                                                                                                      --}}
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Cancel Complaint</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cancel Complaint List</li>
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
                  <form class="form-inline ml-3 ">
                    <div class="input-group input-group-sm ">
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
            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    {{-- @if (Auth::user()->role->name == 'Technician' )
                    <tr>
                      <th>Complaint Id</th>
                      <th>Date</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Mobile</th>
                      <th>Area</th>
                      <th>Product</th>
                      <th>Action</th>
                    </tr>
                    @endif --}}
                    @if (Auth::user()->role->name == 'Manager' )
                    <th>Complaint Id</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>product</th>

                    {{-- <th>Technician Name</th>
                    <th>Action</th> --}}
  
                    @endif
                    @if (Auth::user()->role->name == 'Admin' )
                    <th>Complaint Id</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Mobile</th>
                    <th>product</th>
                    <th>Manager Name</th>
                    @endif
                  </thead>
                @foreach($complaints as $complaint)
                
                @if (Auth::user()->role->name == 'Manager' && Auth::user()->city->name == $complaint->city->name)
                @if($complaint->status == 6 )
                <tr>
                 
                
                  <td>{{$complaint->id}}</td>
                  <td>{{$complaint->created_at}}</td>
                  <td>{{$complaint->name}}</td>
                  <td>{{$complaint->address}}</td>
                  <td>{{$complaint->mobile}}</td>
                  <td>{{$complaint->product->name}}</td>
                  
                 
              </tr>
              @endif
              @endif

                @if(Auth::user()->role->name == 'Admin')
                @if($complaint->status == 6 )
                <tr>
                  {{-- <td class="text-center">
                    @if ($complaint->bill['items_expense'] == Null)
                    <a href="" class="btn btn-danger btn-sm report-bt disabled">Pending</a>
                    @else
                    {{array_sum($complaint->bill['items_price']) - array_sum($complaint->bill['items_expense'])}}
                    @endif
                  </td> --}}
                  <td>{{$complaint->id}}</td>
                  <td>{{$complaint->created_at}}</td>
                  <td>{{$complaint->name}}</td> 
                  <td>{{$complaint->city->name}}</td>
                  <td>{{$complaint->mobile}}</td>
                  <td>{{$complaint->product->name}}</td>
                
                  {{-- <td>{{array_sum($complaint->bill['items_price'])}}</td> --}}
                  
              </tr>
              @endif
              @endif
              {{-- @if( Auth::user()->role->name == 'Technician' &&  Auth::user()->city->name ==  $complaint->city->name)
                @if(in_array($complaint->product->name,$items) && $complaint->status == 6 )
            
                  <tr>
                    <td class="text-center">
                      @if ($complaint->bill['items_expense'] == Null)
                      <a href="{{url('makereport/'.$complaint->id)}}" class="btn btn-danger btn-sm report-bt">Pending</a>
                      @else
                      {{array_sum($complaint->bill['items_price']) - array_sum($complaint->bill['items_expense'])}}
                      @endif
                    </td>
                    <td>{{$complaint->id}}</td>
                    <td>{{$complaint->created_at}}</td>
                    <td>{{$complaint->name}}</td>
                    <td>{{$complaint->address}}</td>
                    <td><a class="nav-item" href="tel:{{$complaint->mobile}}">
                      <i class="fas fa-phone-alt color"></i><span class="ml-1 right badge badge-success p-1">CALL</span></a></td>
                    <td>{{$complaint->product->name}}</td>
                    <td>{{array_sum($complaint->bill['items_price'])}}</td> --}}
                    
                    {{-- <td>
                      @if ($complaint->bill['items_expense'] == Null)
                      <a href="" class="btn btn-sm btn-warning">Report</a>
                      @else
                      <a href="" class="btn btn-sm btn-outline-dark disabled">Reported</a>
                      @endif
                    </td> --}}
                    {{-- <td>
                      <form action="/taken" method="Post">
                        @csrf
                        <input type="hidden" name="user_id" value= "{{Auth::user()->id}}">
                        <input type="hidden" name="id" value= "{{$complaint->id}}">
                        <button class="btn btn-success btn-sm" value>Take</button>
                      </form>
                    </td> --}}
                  {{-- </tr> --}}
                   
                {{-- @endif
              @endif --}}
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
   {{-- @break
               @default
               @include('admin.template.home.layout.invalid') 
  @endswitch
@endif  --}}
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('admin.template.home.script')
</body>
</html>
