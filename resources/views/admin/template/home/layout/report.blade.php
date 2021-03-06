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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Financial Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Financial Report</li>
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
              <th>Complaint_Id</th>
              <th>Billed Amount</th>
              <th>Expence Amount</th>
             
              @if (Auth::user()->role->name == 'Admin')
              
              <th>Technician Income</th>
              <th>Manager Income</th>
              <th>Self Income</th>

              @endif
              
              @if (Auth::user()->role->name == 'Manager')
              
              <th>Technician Income</th>
              <th>Incoming Income</th>
              <th>Self Income</th>
              <th>Payable Amount</th>
              
              @endif
              
              @if (Auth::user()->role->name == 'Technician')
                  
              <th>Self Income</th>
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
              <td>{{array_sum($data['items_price'])}} <a href="{{url('billing/'.$data->complaint->id)}}"><i class="fas fa-file-pdf"></i></a></td>
              <td>@if ($data['items_expense']!=null)
                {{array_sum($data['items_expense'])}}
                @else Pending @endif</td> 
                @if ($data['items_expense']!=null)
                <td>{{$data->complaint->user->percentage /100 * (array_sum($data['items_price']) - array_sum($data['items_expense']))}}</td>
                <td>{{((array_sum($data['items_price']) - array_sum($data['items_expense'])) - ($data->complaint->user->percentage /100 * (array_sum($data['items_price']) - array_sum($data['items_expense']))))}}
                  <form method="POST" action="/confirmed">
                    @csrf  
                    <input type="hidden" name="bill_id" value="{{$data->id}}">
                    @if ($data->confirmed_by_technician == 1 && $data->confirmed_by_manager == NULL)
                    <button name="manager" value="1" class="btn btn-sm btn-outline-danger">Confirm</button></td>
                    @elseif($data->confirmed_by_technician == Null)
                    <button name="manager" value="1" class="btn btn-sm btn-danger" disabled>Pending</button></td>   
                    @else
                    <button name="manager" value="1" class="btn btn-sm btn-success" disabled>Confirmed</button></td>
                    @endif
                  </form>
                <td>{{$data->complaint->city->users->first()->where('role_id','=',2)->where('city_id','=',$data->complaint->city->id)->first()->percentage/100*((array_sum($data['items_price']) - array_sum($data['items_expense'])) - ($data->complaint->user->percentage /100 * (array_sum($data['items_price']) - array_sum($data['items_expense']))))}}</td>
                  
                <td>{{(array_sum($data['items_price']) - array_sum($data['items_expense'])) - ($data->complaint->user->percentage /100 * (array_sum($data['items_price']) - array_sum($data['items_expense']))) - ($data->complaint->city->users->first()->where('role_id','=',2)->where('city_id','=',$data->complaint->city->id)->first()->percentage/100*((array_sum($data['items_price']) - array_sum($data['items_expense'])) - ($data->complaint->user->percentage /100 * (array_sum($data['items_price']) - array_sum($data['items_expense'])))))}}</td>              
              @else
              <td>0</td> 
              <td>0</td> 
              <td>0</td> 
              @endif
              
          </tr>
          @endif
            @if(Auth::user()->role->name == 'Admin')
            <tr>
              <td>{{$data->complaint_id}}</td>
              <td>{{array_sum($data['items_price'])}} <a href="{{url('billing/'.$data->complaint->id)}}"><i class="fas fa-file-pdf"></i></a></td>
              <td>@if ($data['items_expense']!=null)
                {{array_sum($data['items_expense'])}}
              @else Pending @endif</td> 
              @if ($data['items_expense']!=null)
              <td>{{$data->complaint->user->percentage /100 * (array_sum($data['items_price']) - array_sum($data['items_expense']))}}</td>
              <td>{{$data->complaint->city->users->first()->where('role_id','=',2)->where('city_id','=',$data->complaint->city->id)->first()->percentage/100*((array_sum($data['items_price']) - array_sum($data['items_expense'])) - ($data->complaint->user->percentage /100 * (array_sum($data['items_price']) - array_sum($data['items_expense']))))}}</td>
              {{-- <td>{{($data->complaint->user->percentage /100 * (array_sum($data['items_price']) - array_sum($data['items_expense'])))-(((array_sum($data['items_price']) - array_sum($data['items_expense']))*($data->complaint->user->percentage / 100)) - ((array_sum($data['items_price']) - array_sum($data['items_expense']))*($data->complaint->user->percentage / 100)*($data->complaint->city->users->first()->where('role_id','=',2)->where('city_id','=',$data->complaint->city->id)->first()->percentage/100)))}}</td> --}}
              {{-- <td>{{ ((array_sum($data['items_price']) - array_sum($data['items_expense'])) - ($data->complaint->user->percentage /100 * (array_sum($data['items_price']) - array_sum($data['items_expense']))))}}</td> --}}
              <td>{{(array_sum($data['items_price']) - array_sum($data['items_expense'])) - ($data->complaint->user->percentage /100 * (array_sum($data['items_price']) - array_sum($data['items_expense']))) - ($data->complaint->city->users->first()->where('role_id','=',2)->where('city_id','=',$data->complaint->city->id)->first()->percentage/100*((array_sum($data['items_price']) - array_sum($data['items_expense'])) - ($data->complaint->user->percentage /100 * (array_sum($data['items_price']) - array_sum($data['items_expense'])))))}}</td>
              @else 
              <td>0</td>
              <td>0</td>
              <td>0</td>
              @endif
          </tr>
          @endif
          
          @if( Auth::user()->role->name == 'Technician' &&  Auth::user()->city->id == $data->complaint->city_id && Auth::user()->id == $data->complaint->user_id)
          <tr>
            <td>{{$data->complaint_id}}</td>
              <td>{{array_sum($data['items_price'])}} <a href="{{url('billing/'.$data->complaint->id)}}"><i class="fas fa-file-pdf"></i></a></td>
              <td>@if ($data['items_expense']!=null)
                {{array_sum($data['items_expense'])}}
                @else Pending @endif
              </td> 
                @if ($data['items_expense']!=null)
              <td>{{$data->complaint->user->percentage /100 * (array_sum($data['items_price']) - array_sum($data['items_expense']))}}</td>
              <td>{{((array_sum($data['items_price']) - array_sum($data['items_expense'])) - ($data->complaint->user->percentage /100 * (array_sum($data['items_price']) - array_sum($data['items_expense']))))}}
                <form method="POST" action="/confirmed">
                  @csrf  
                  <input type="hidden" name="bill_id" value="{{$data->id}}">
                  @if ($data->confirmed_by_technician !==NULL)
                   <button name="technician" value="1" class="btn btn-sm btn-success" disabled>Paid</button></td>   
                  @else
                   <button name="technician" value="1" class="btn btn-sm btn-outline-danger">Pay</button></td>
                  @endif
                </form>
              @else 
              <td>0</td>
              <td>0</td>
              @endif
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
