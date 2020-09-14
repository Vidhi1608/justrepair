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
        {{-- switch ($role) {
            case 'Admin':
               return redirect('admindashboard');
                break;
            case 'Technician':
                return redirect('techdashboard');
                break;
            case 'Manager':
                return redirect('managerdashboard');
                break;
        }
    // return redirect()->route('chcking');
} --}}

  {{-- @include('admin.template.home.section.sidebar') --}}
  @if (Auth::check())
  {{$role = Auth::user()->role->name}}
  @switch($role)
      @case('Admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">New Manager</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Manager</li>
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
            
            {!! Form::open(['method'=>'post','action'=>'AdminController@store','enctype'=>'multipart/form-data']) !!}

            <div class="form-group">
                {!! Form::hidden('role_id', 2) !!}
                {!! Form::hidden('user_id', Auth::user()->id) !!}
                {!! Form::label('fname', 'First Name') !!}
                {!! Form::text('fname', null, ['class'=>'form-control text-capitalize', 'placeholder'=>'Enter your First Name']) !!}
                {!! Form::label('lname', 'Last Name') !!}
                {!! Form::text('lname', null, ['class'=>'form-control text-capitalize', 'placeholder'=>'Enter your Last Name']) !!}
                {!! Form::label('mobile', 'Contact Number') !!}
                {!! Form::tel('mobile', null, ['class'=>'form-control', 'placeholder'=>'Enter your Mobile Number']) !!}
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Enter your Email Address']) !!}
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class'=>'form-control' ,'placeholder'=>'Your Password']) !!}
                <br>
                <div class="row">
                  <div class="col-md-2">
                    {!! Form::label('name', 'Select City') !!}
                  </div>
                  
                  <div class="col-md-10">
                    <div class="row ex2">
                      @foreach ($cities as $city)
                      <div class="col-md-4">
                      {!! Form::radio('city_id', $city->id) !!}

                      {!! Form::label('name', $city->name) !!}
                    </div>
                      @endforeach
                    </div>

                  </div>
                  
                  
                </div>
                <br>
                {!! Form::label('file', 'Profile') !!}
                {!! Form::file('file', null, ['class'=>'form-control' ,'placeholder'=>'Your profile']) !!}
                <hr>

              
            </div>
            <div class="form-group text-center">
                {!! Form::submit('Submit', ['class'=>'btn btn-success text-right']) !!}
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
