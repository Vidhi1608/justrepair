<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('admin.template.home.link')
  <style>
    div.ex2 {
      
      height: 60px;
      width: 100%;  
      overflow-y: scroll;
    }
  </style>
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
    @if (Auth::check())
    {{$role = Auth::user()->role->name}}
    @switch($role)
        @case('Technician')
        @include('admin.template.home.layout.invalid')
        @break
      @default
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">New Technician</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Technician</li>
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
              
            
            {!! Form::open(['method'=>'post','action'=>'AdminController@store']) !!}

            <div class="form-group">
                {!! Form::hidden('role_id', 3) !!}
                {!! Form::hidden('user_id', Auth::user()->id) !!}
                {!! Form::label('fname', 'First Name') !!}
                {!! Form::text('fname', null, ['class'=>'form-control text-capitalize', 'placeholder'=>'Enter your First Name', 'required']) !!}
                {!! Form::label('lname', 'Last Name') !!}
                {!! Form::text('lname', null, ['class'=>'form-control text-capitalize', 'placeholder'=>'Enter your Last Name', 'required']) !!}
                {!! Form::label('mobile', 'Contact Number') !!}
                {!! Form::number('mobile',null,  ['class'=>'form-control', 'placeholder'=>'Enter your Mobile Number', 'required']) !!}
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Enter your Email Address', 'required']) !!}
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class'=>'form-control' ,'placeholder'=>'Your Password', 'required']) !!}
             
                </div>
                {{-- ------------FOR MANAGER------------ --}}
                  @foreach ($cities as $city)
                  @if (Auth::user()->role->name == 'Manager' && Auth::user()->city->name == $city->name)
                  <div class="row">
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
            
            <div class="form-group text-center">
                {!! Form::submit('Submit', ['class'=>'btn btn-success']) !!}
            </div>    
            {!! Form::close() !!}
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
  
  
  @endswitch
@endif
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('admin.template.home.script')
</body>
</html>
