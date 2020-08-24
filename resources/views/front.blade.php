@extends('layouts.services')

@section('meta-data')
<title>Instant Repairing Serivce in Ahmedabad call us on +919099880885 |JustRepairIt</title>
<meta name="description" content="Best Repairing Service Provider in Ahmedabad, Call on +919099880885, Our technicians are experianced enough to provide you best service to your home, We repair different brands of Washing Machine, Air Conditioner, led-tv and Fridge.">
<meta name="keywords" content="Best Repairing Service Provider in Ahmedabad, Call on +919099880885, Our technicians are experianced enough to provide you best service to your home, We repair different brands of Washing Machine, Air Conditioner, led-tv and Fridge.">
@endsection

@section('carousel')
<style type="text/css">
    @media (min-width: 768px){
    
      .banner-onsite0 {
    
        background-image: url({{url('images/justrepairit-home-banner-desk.jpg')}});
    
        background-size: cover;
    
      }
    
      .banner-onsite1 {
    
        background-image: url({{url('images/justrepairit-home-2.jpg')}});
    
        background-size: cover;
    
    
    
      }
    
      
    
    }
    
    @media (max-width: 767px){
    
      .banner-onsite0 {
    
        background-image: url({{url('images/jri-home-mobile.jpg')}});
    
      }
    
      .banner-onsite1 {
    
        background-image: url({{url('images/jri-home-mobile1.jpg')}});
    
      }
    
      .carousel-caption {
    
        padding: 10px 20px;
    
      }
    
    }
    
    </style>
@endsection

@section('header')
<header>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">

        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

      </ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide One - Set the background image for this slide in the line below -->

        <div class="carousel-item active banner-onsite0" >

     

        </div>

        <!-- Slide Two - Set the background image for this slide in the line below -->

        <div class="carousel-item banner-onsite1">

      

        </div>
</div>
</div>
</header>
@endsection

@section('congrats-cards')
<div class="container we-are-available py-5">

    <div class="row">

     <div class="col-12 col-md-6 col-lg-6 card-deck mt-2">

       <div class="card">

         <div class="card-body">

           <h5 class="card-title">Congratulations!! We are available in your area. <span class="badge badge-secondary"><a class="text-decoration-none text-light" href="tel:9099880885">Call Now</a> </span></h5>

           <ul class="list-group list-group-flush">

             <li class="list-group-item"><i class="fas fa-tools"></i> #1 in appliance services in the Ahmedabad</li>

             <li class="list-group-item"><i class="fas fa-tools"></i> 90-day satisfaction guarantee</li>

             <li class="list-group-item"><i class="fas fa-tools"></i> Discount on our AMC plan for our regular customers</li>

             <li class="list-group-item"><i class="fas fa-tools"></i> Technicians average 7+ years experience</li>

           </ul>

         </div>

       </div>

     </div>

     <div class="col-12 col-md-6 col-lg-6 mt-2">

       <div class="card">

         <div class="card-body">

           <h5 class="card-title">Home Delivery available for below Items at Lowest Rate <span class="badge badge-secondary">Guaranteed</span></h5>

           <ul class="list-group list-group-flush text-center">

             <li class="list-group-item">IFB DESCALE POWDER</li>

             <li class="list-group-item">LG DESCALER FOR WASHING MACHINE</li>

             <li class="list-group-item">BOSCH SIEMENS POWDER</li>

             <li class="list-group-item">Cover for your machine</li>

             <li class="list-group-item">Accessories for Home Appliances</li>                   

           </ul>

           <div>

           <a class="btn form-control btn-background-color" href="tel:9099880885">Call Now And Buy</a>

           </div>

         </div>

       </div>

     </div>

    </div>

</div>

@endsection

@section('brands')
    @include('includes.washing-machine.washing-machine-brands')
@endsection

@section('collapse')
    @include('includes.collapse')
@endsection