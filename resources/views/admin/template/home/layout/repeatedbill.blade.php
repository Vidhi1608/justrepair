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
            <h1 class="m-0 text-dark">Create Bill</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Bill</li>
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
            <div class="col-md-10">
              <div class="card shadow p-3  mb-5">
              <form class="form-group p-3" action="/repeatedbill" method="POST">
                        @csrf
                        <input type="hidden" name="bill_id" value= "{{$complaint->bill->id}}">
                        <input type="hidden" name="complaint_id" value= "{{$complaint->id}}">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Customer Name</label>
                                <input type="text" class="form-control" placeholder="{{$complaint->name}}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label>Mobile</label>
                                <input type="text" class="form-control" placeholder="{{$complaint->mobile}}" readonly>
                            </div>
                        </div>
                            <label>Address</label>
                            <textarea type="text" class="form-control" placeholder="{{$complaint->address}}" readonly></textarea>
                            <label>Product</label>
                            <input type="text" class="form-control" placeholder="{{$complaint->product->name}}" readonly>
                            <label>Payment Method</label>
                            <br>
                            <select class="form-control" name="payment">
                                <option value="cash">Cash</option>
                                <option value="online">Online</option>
                            </select>
                            <label>Date</label>
                            <input type="text" class="form-control" placeholder="{{$complaint->created_at->format('d-m-y')}}" readonly>
                            <div class="items_list" id="items_list">
                                <table class="table table-hover" id="tab_logic" cellpadding="1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">  </th>
                                            <th class="" style="width: 60%;"> Items </th>
                                            <th class="text-center d-none"> Qty </th>
                                            <th class=""> Price </th>
                                            <th class="text-center d-none"> Total </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($array as $key => $value)
                                        <tr id='addr0'>
                                        <td class="text-center">{{$loop->index +1}}</td>
                                            <td><input type="text" name='product[]' placeholder='Enter Item' class="form-control" required value="{{$key}}" readonly></td>
                                            <td class="d-none"><input type="number" name='qty[]' placeholder='Enter Qty' class="form-control qty" step="0" min="0" value="1"  readonly/></td>
                                            <td><input type="number" name='price[]' placeholder='Enter Price' class="form-control price" step="0.00" min="0" required value="{{$value}}" readonly></td>
                                            <td class="d-none"><input type="number" name='total[]' placeholder='0.00' class="form-control total" readonly /></td>
                                        </tr>
                                        @endforeach
                                        <tr id='addr1'>
                                          <td class="text-center"></td>
                                            <td><input type="text" name="product[]" placeholder="Enter Item" class="form-control" required="" autocomplete="off"></td>
                                            <td class="d-none"><input type="number" name="qty[]" placeholder="Enter Qty" class="form-control qty" step="0" min="0" value="1" autocomplete="off"></td>
                                            <td><input type="number" name="price[]" placeholder="Enter Price" class="form-control price" step="0.00" min="0" required="" autocomplete="off"></td>
                                            <td class="d-none"><input type="number" name="total[]" placeholder="0.00" class="form-control total" readonly="" autocomplete="off"></td>
                                        </tr>
                                        <tr id='addr2'></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <button id="add_row" class="btn btn-success ml-5" type="button"><i class="fas fa-plus"></i></button>
                                <button id='delete_row' class="float-right btn btn-danger mr-5" type="button"><i class="fas fa-minus"></i></button>
                            </div>
                            <div class="row clearfix d-none" style="margin-top:20px">
                                <div class="pull-right col-md-4">
                                    <table class="table table-hover" id="tab_logic_total">
                                        <tbody>
                                            <tr>
                                                <th class="text-center">Sub Total</th>
                                                <td class="text-center"><input type="number" name='sub_total' placeholder='0.00' class="form-control" id="sub_total" readonly /></td>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Tax</th>
                                                <td class="text-center">
                                                    <div class="input-group mb-2 mb-sm-0">
                                                        <input type="number" class="form-control" id="tax" placeholder="0" readonly>
                                                        <div class="input-group-addon">%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Tax Amount</th>
                                                <td class="text-center"><input type="number" name='tax_amount' id="tax_amount" placeholder='0.00' class="form-control" readonly /></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="total_price mt-4" id="total_price">
                                <div class="row total_main_div">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="total_amount">Grand Total(₹)</label>
                                                <input type="number" class="form-control" id="total_amount" name="total_amount" placeholder="000" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class=" mt-3 text-center">
                                <button type="submit" name="rrbill" value="5" class="btn btn-success px-3 shadow" style="font-size: 15px !important;">SUBMIT</button>
                            </div>
                    </form>
                </div>
            </div>
         </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
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
  @endswitch --}}
{{-- @endif --}}
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('admin.template.home.script')

<script>
    $(document).ready(function(){
      $('form').attr("autocomplete","off");
      $('input').attr("autocomplete","off");
      var i=2;
      $("#add_row").click(function(){b=i-1;
          $('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
          $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
          i++; 
      });
      $("#delete_row").click(function(){
        if(i>1){
      $("#addr"+(i-1)).html('');
      i--;
      }
      calc();
    });
    
    $('#tab_logic tbody').on('keyup change',function(){
      calc();
    });
    $('#tax').on('keyup change',function(){
      calc_total();
    });
    
  
  });
  
  function calc()
  {
    $('#tab_logic tbody tr').each(function(i, element) {
      var html = $(this).html();
      if(html!='')
      {
        var qty = $(this).find('.qty').val();
        var price = $(this).find('.price').val();
        $(this).find('.total').val(qty*price);
        
        calc_total();
      }
      });
  }
  
  function calc_total()
  {
    total=0;
    $('.total').each(function() {
          total += parseInt($(this).val());
      });
    $('#sub_total').val(total.toFixed(2));
    tax_sum=total/100*$('#tax').val();
    $('#tax_amount').val(tax_sum.toFixed(2));
    $('#total_amount').val((tax_sum+total).toFixed(2));
  }
</script>

</body>
</html>
