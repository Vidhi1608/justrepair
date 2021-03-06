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
            <h1 class="m-0 text-dark">Working Complaint</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Working Complaint List</li>
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
                <div class="col-md-6">
                  <form class="form-inline ml-3" action="/found" method="POST" role="search">
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
              </div>     
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  @if (Auth::user()->role->name == 'Technician' )
                  <tr>
                    <th>Complaint Id</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Area</th>
                    <th>Product</th>
                    <th>Brand(model)</th>
                    <th>Action</th>
                  </tr>
                  @endif
                  @if (Auth::user()->role->name == 'Manager' )
                  <th>Complaint Id</th>
                  <th>Date</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Mobile</th>
                  <th>product</th>
                  <th>Brand(model)</th>
                  <th>Technician Name</th>
                  <th>Action</th>

                  @endif
                  @if (Auth::user()->role->name == 'Admin' )
                  <th>Complaint Id</th>
                  <th>Date</th>
                  <th>Name</th>
                  <th>City</th>
                  <th>Mobile</th>
                  <th>product</th>
                  <th>Brand(model)</th>
                  <th>Technician Name</th>
                  <th>Action</th>
                  @endif
                </thead>
                @foreach($complaints as $complaint)
            
                @if (Auth::user()->role->name == 'Manager' && Auth::user()->city->name == $complaint->city->name)
                @if($complaint->status == 1 || $complaint->status == 4)
                <tr>
                  <td>{{$complaint->id}}
                    @if ($complaint->status == 4)
                    <a class="btn btn-danger btn-sm repeat-bt">Repeat</a>
                    @endif
                  </td>
                  <td>{{$complaint->created_at}}</td>
                  <td>{{$complaint->name}}</td>
                  <td>{{$complaint->address}}</td>
                  <td>{{$complaint->mobile}}</td>
                  <td>{{$complaint->product->name}}</td>
                  <td>{{$complaint->brand['name']}}({{$complaint->model}})</td>
                  <td>{{$complaint->user->name}}</td>
                  <td>
                    
                    @if ($complaint->status == 4)
                      <div class="btn-group">
                      <button class="btn btn-info btn-sm mr-2" data-toggle="modal" data-target="#myModal-{{$complaint->id}}">Assign</button>
                      <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal-{{$complaint->id}}">Cancel</button>
                      @else 
                    </div>
                      <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal-{{$complaint->id}}">Cancel</button>
                      
                      @endif                  
                  </td>
                   <!-- The Modal -->
                   <div class="modal fade" id="myModal2">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                      
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Cancel Reason</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                          <form class="form-group" action="/editstatus" method="Post">
                            @csrf
                          <input type="hidden" name="user_id" value="{{Auth::user()->name}}">
                            <input type="hidden" name="id" value= "{{$complaint->id}}">
                            <label>Reason:</label>
                            <br>
                            <select class="form-control" name="complaint_status">

                              <option value="6">Complaint canceled by Customer</option>
                              <option value="0">Not Reachable</option>
                            </select>
                            <button type="submit" class="btn btn-success mt-3">Submit</button>
                          </form>
                          </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">

                        </div>
                      

                      </div>
                    </div>
                  </div>
                <!-- The Modal -->
                <!-- The Modal -->
                <div class="modal fade" id="myModal-{{$complaint->id}}">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Assign Complaint to Technician</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
  
                      <!-- Modal body -->
                      <div class="modal-body">
                        <form class="form-group" action="/taken" method="Post">
                          @csrf
                          <input type="hidden" name="id" value="{{$complaint->id}}">
                          {{-- <input type="hidden" name="id" value= "{{$complaint->id}}"> --}}
                        <label>Complaint Assign for {{$complaint->product->name}}:</label>
                          <br>
                          <select class="form-control" name="user_id">
                            <option selected>Select Technician</option>
                            @foreach($users as $user)
                            @if ($complaint->city_id == $user->city->id && $user->role_id == 3)
                           @foreach ($user->products as $product)
                           @if ($product->id == $complaint->product_id)
                               
                           <option value="{{$user->id}}">{{$user->name}}</option>    
                           @endif
                           @endforeach 
                            @endif
                            @endforeach
                          </select>
                          <button type="submit" class="btn btn-success mt-3" name="repeat" value="4">Assign</button>
                        </form>
                        </div>
                      
                      <!-- Modal footer -->
                      <div class="modal-footer">
  
                      </div>
                    
  
                    </div>
                  </div>
                </div>
              <!-- The Modal -->
              </tr>
              @endif
              @endif

                @if(Auth::user()->role->name == 'Admin')
                @if($complaint->status == 1 || $complaint->status == 4)
                <tr>
                  <td>
                    @if ($complaint->status == 4)
                    <a style="pointer-events: none; cursor: default;" class="btn btn-danger btn-sm repeat-bt">Repeat</a>
                    
                    @endif
                       {{$complaint->id}}
                  </td>
                  <td>{{$complaint->created_at}}</td>
                  <td>{{$complaint->name}}</td> 
                  <td>{{$complaint->city->name}}</td>
                  <td>{{$complaint->mobile}}</td>
                  <td>{{$complaint->product->name}}</td>
                  <td>{{$complaint->brand['name']}}({{$complaint->model}})</td>
                  <td>{{$complaint->user->name}}</td>
                  <td>
                    @if ($complaint->status == 4)
                      <div class="btn-group">
                      <button class="btn btn-info btn-sm mr-2" data-toggle="modal" data-target="#myModal-{{$complaint->id}}">Assign</button>
                      <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal2-{{$complaint->id}}">Cancel</button>
                      @else 
                    </div>
                  <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal2-{{$complaint->id}}">Cancel</button>
                      
                      @endif
                  </td>
                   <!-- The Modal -->
                <div class="modal fade" id="myModal2-{{$complaint->id}}">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                      
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Cancel Reason</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                          <form class="form-group" action="/editstatus" method="Post">
                            @csrf
                          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="id" value= "{{$complaint->id}}">
                            <label>Reason:</label>
                            <br>
                            <select class="form-control" name="complaint_status">

                              <option value="6">Complaint canceled by Customer</option>
                              <option value="0">Not Reachable</option>
                            </select>
                            <button type="submit" class="btn btn-success mt-3">Submit</button>
                          </form>
                          </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">

                        </div>
                      

                      </div>
                    </div>
                  </div>
                <!-- The Modal -->
                <!-- The Modal -->
                <div class="modal fade" id="myModal-{{$complaint->id}}">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Assign Complaint to Technician</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
  
                      <!-- Modal body -->
                      <div class="modal-body">
                        <form class="form-group" action="/taken" method="Post">
                          @csrf
                          <input type="hidden" name="id" value="{{$complaint->id}}">
                          {{-- <input type="hidden" name="id" value= "{{$complaint->id}}"> --}}
                        <label>Complaint Assign for {{$complaint->product->name}}:</label>
                          <br>
                          <select class="form-control" name="user_id">
                            <option selected>Select Technician</option>
                            @foreach($users as $user)
                            @if ($complaint->city_id == $user->city->id && $user->role_id == 3)
                           @foreach ($user->products as $product)
                           @if ($product->id == $complaint->product_id)
                               
                           <option value="{{$user->id}}">{{$user->name}}</option>    
                           @endif
                           @endforeach 
                            @endif
                            @endforeach
                          </select>
                          <button type="submit" class="btn btn-success mt-3" name="repeat" value="4">Assign</button>
                        </form>
                        </div>
                      
                      <!-- Modal footer -->
                      <div class="modal-footer">
  
                      </div>
                    
  
                    </div>
                  </div>
                </div>
              <!-- The Modal -->
              </tr>
              @endif
              @endif
              
              @if( Auth::user()->role->name == 'Technician'  && Auth::user()->city->name ==  $complaint->city->name && Auth::user()->id == $complaint->user_id)
                @if(in_array($complaint->product->name,$items) && $complaint->status == 1 || $complaint->status == 4 )
                  <tr>
                    <td>
                      @if ($complaint->status == 4)
                      <a style="pointer-events: none; cursor: default;" class="btn btn-danger btn-sm repeat-bt">Repeat</a>
                      
                      @endif
                         {{$complaint->id}}
                    </td>
                    <td>{{$complaint->created_at}}</td>
                    <td>{{$complaint->name}}</td>
                    <td>{{$complaint->address}}</td>
                    <td><a class="nav-item" href="tel:{{$complaint->mobile}}">
                      <i class="fas fa-phone-alt color"></i><span class="ml-1 right badge badge-success p-1">CALL</span></a></td>
                    <td>{{$complaint->area}}</td>
                    <td>{{$complaint->product->name}}</td>
                    <td>{{$complaint->brand['name']}}({{$complaint->model}})</td>
                    <td class="btn-group">
                        <button class="btn btn-danger btn-sm mr-2" data-toggle="modal" data-target="#modal{{$complaint->id}}">X</button>
                        @if ($complaint->status == 4)
                        <a href="{{url('rrbill/'.$complaint->id)}}" name="repeat" class="btn btn-success btn-sm">Bill</a>
                        
                        @else
                        <a href="{{url('bill/'.$complaint->id)}}" class="btn btn-success btn-sm">Bill</a>                        
                        @endif
                    </td>
                  </tr> 
                  <!-- The Modal -->
                    <div class="modal fade" id="modal{{$complaint->id}}">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        
                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Cancel Reason</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                            <form class="form-group" action="/editstatus" method="Post">
                              @csrf
                              <input type="hidden" name="id" value= "{{$complaint->id}}">
                              <label>Reason:</label>
                              <br>
                              <select class="form-control" name="complaint_status">

                                {{-- <option value="6">Complaint canceled by Customer</option> --}}
                                <option value="0">Not Reachable</option>
                              </select>
                              <button type="submit" class="btn btn-success mt-3">Submit</button>
                            </form>
                            </div>
                          
                          <!-- Modal footer -->
                          <div class="modal-footer">
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- The Modal -->
                @endif
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
  {{-- @break
               @default
               @include('admin.template.home.layout.invalid') 
  @endswitch
@endif --}}
  
</div>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('admin.template.home.script')
@include('sweetalert::alert')
</body>
</html>
