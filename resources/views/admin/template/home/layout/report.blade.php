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
            <h1 class="m-0 text-dark">Complaint List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Complaint List</li>
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
            <form class="form-inline ml-3" action="/find" method="POST" role="search">
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
            <tr>
              <th>Customer_Id</th>
              <th>Billed Amount</th>
              <th>Expence Amount</th>
             
              @if (Auth::user()->role->name == 'Admin')
              
              <th>Technician Income Amount</th>
              <th>Manager Income Amount</th>
              <th>Self Income Amount</th>

              @endif
              
              @if (Auth::user()->role->name == 'Manager')
              
              <th>Technician Income Amount</th>
              <th>Self Income Amount</th>
              <th>Payable Amount</th>
              
              @endif
              
              @if (Auth::user()->role->name == 'Technician')
                  
              <th>Self Income Amount</th>
              <th>Payable Amount</th>
              
              @endif
              
             

            </tr>
            </thead>
            {{-- {{$complaints->product_id}} --}}
            {{-- {{Auth::user()->product->name}} --}}
            @foreach($report as $data)
            
            @if (Auth::user()->role->name == 'Manager' && Auth::user()->city->id == $data->complaint->city_id)
              
            <tr>
              <td>{{$data->complaint_id}}</td>
              <td>{{array_sum($data['items_price'])}}</td>
              <td>{{array_sum($data['items_expense'])}}</td> 
              <td>{{(array_sum($data['items_price']) - array_sum($data['items_expense'])) / 2}}</td>
              <td>{{75 / 100 * (array_sum($data['items_price']) - array_sum($data['items_expense'])) / 2}}</td>
              <td>{{25 / 100 * (array_sum($data['items_price']) - array_sum($data['items_expense'])) / 2}}</td>
              
              
          </tr>
          @endif
            @if(Auth::user()->role->name == 'Admin')
            <tr>
              <td>{{$data->complaint_id}}</td>
              <td>{{array_sum($data['items_price'])}}</td>
              <td>{{array_sum($data['items_expense'])}}</td> 
              <td>{{(array_sum($data['items_price']) - array_sum($data['items_expense'])) / 2}}</td>
              <td>{{75 / 100 * (array_sum($data['items_price']) - array_sum($data['items_expense'])) / 2}}</td>
              <td>{{25 / 100 * (array_sum($data['items_price']) - array_sum($data['items_expense'])) / 2}}</td>
              
              
          </tr>
          @endif
          
          @if( Auth::user()->role->name == 'Technician' &&  Auth::user()->city->id == $data->complaint->city_id)
          <tr>
            <td>{{$data->complaint_id}}</td>
              <td>{{array_sum($data['items_price'])}}</td>
              <td>{{array_sum($data['items_expense'])}}</td> 
              <td>{{(array_sum($data['items_price']) - array_sum($data['items_expense'])) / 2}}</td>
              <td>{{(array_sum($data['items_price']) - array_sum($data['items_expense'])) / 2}}</td>
              
        </tr> 
           @endif
          @endforeach
          
         
           
         
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        {{-- <div class="row float-right">
          <div class="col-sm-6 col-sm-offset-5">
            {{ $complaints->render() }}
          </div>
        </div> --}}
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
