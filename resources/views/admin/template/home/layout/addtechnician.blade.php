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
                {!! Form::label('fname', 'First Name') !!}
                {!! Form::text('fname', null, ['class'=>'form-control', 'placeholder'=>'Enter your First Name']) !!}
                {!! Form::label('lname', 'Last Name') !!}
                {!! Form::text('lname', null, ['class'=>'form-control', 'placeholder'=>'Enter your Last Name']) !!}
                {!! Form::label('mobile', 'Contact Number') !!}
                {!! Form::text('mobile', null, ['class'=>'form-control', 'placeholder'=>'Enter your Mobile Number']) !!}
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Enter your Email Address']) !!}
                {!! Form::label('password', 'Password') !!}
                {!! Form::text('password', null, ['class'=>'form-control' ,'placeholder'=>'Your Password']) !!}
                
                {!! Form::label('name', 'Select City') !!}
                <br>
                @foreach ($cities as $city)
                
                {!! Form::label('name', $city->name) !!}
                {!! Form::checkbox('city_id', $city->id) !!}
                    
                @endforeach
                <br>
                {!! Form::label('name', 'Select Product') !!}
                <br>
                @foreach ($products as $product)
                
                {!! Form::label('name', $product->name) !!}
                {!! Form::checkbox('product_id', $product->id) !!}
                    
                @endforeach
            </div>
            <div class="form-group">
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
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('admin.template.home.script')
</body>
</html>
