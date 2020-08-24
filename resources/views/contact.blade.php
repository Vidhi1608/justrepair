@extends('layouts.main')

@section('meta-data')
<title>Repairing Service in 30 Minute in Ahmedabad |JustRepairIt</title>
<meta name="description" content="Justrepairit is on call Washing Machine, Air Conditioner, LED-TV and Friedge Repairing and Service provider in Ahmedabad - Gandhinagar - Bhavnagar, Our technicians are experianced enough to provide you best service to your home.">

<meta name="keywords" content="Justrepairit is on call Washing Machine, Air Conditioner, LED-TV and Friedge Repairing and Service provider in Ahmedabad - Gandhinagar - Bhavnagar, Our technicians are experianced enough to provide you best service to your home.">
@endsection


@section('static-content')
<hr>
<div class="container">
  <div class="row py-4">
    <div class="col">
            <div class="card">
                <div class="card-header bg-greeen text-white"><i class="fa fa-envelope"></i> Create Your Inquiry With us..
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group">

                          <label for="inputName">Name</label>

                          <input type="text" class="form-control" id="inputName" name="cust_name" placeholder="Your Name" required>

                        </div>
                        <div class="form-group">

                          <label for="inputContact">Contant Number</label>

                          <input type="tel" class="form-control" id="inputContact" name="cust_mobile" placeholder="Mobile Number" required>

                        </div>
                        <div class="form-group">

                         <label for="selectItem">Select Any Product</label>

                         <select class="form-control" id="selectItem" name="cust_item">

                             <option value="">Select Item</option>

                             <option value="Washing Machine (top/front load)">Washing Machine (top/front load)</option>

                             <option value="Air Conditioner">Air Conditioner</option>

                             <option value="Fridge">Fridge</option>

                             <option value="Television">Television</option>

                             <option value="Other">Other</option>

                         </select>

                      </div>
                        <div class="form-group">

                          <label for="inputAddress">Address</label>

                          <input type="text" class="form-control" name="cust_address" id="inputAddress" placeholder="Your Area">

                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="book-btn-desktop bg-greeen text-light text-right">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-greeen text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                <div class="card-body">
                    <p>636 CityGate, South Vasna,</p>
                    <p>380007 AHMEDABAD.</p>
                    <p>India.</p>
                    <p><a href="mailto:justrepairit636@gmail.com" target="_blank"> Email : justrepairit636@gmail.com</a></p>
                    <p><a href="tel:9099880885" class=""> Tel. +91 90 99 880 885</a></p>
                </div>
            </div>
        </div>
  </div>
</div>
@endsection