@extends('layouts.services')
@section('meta-data')
    
<title>Best Home Appliance Repairing And Service Provider | +919099880885 | JustRepairIt</title>

<meta charset="utf-8">

<meta name="description" content="Justrepairit is on call home appliance repairing and service providing company, We repair Washing Machine, ac, fridge, led-tv, mobile and more.">

<meta name="keywords" content="Best Home Appliance Repairing and Service Near Me, Washing Machine, AC, Fridge, Led-tv, Mobile Phone Repair Experts on call.">

@endsection

@section('carousel')
    <style type="text/css">
       .area-border{
         border-right: 2px solid #000;
       }
       /*.city-card {
      text-align: -webkit-center;
       }*/
       
       
       .area-border:last-child {
     border-right: 0;
       }
       
       @media (min-width: 768px){
    
      .banner-onsite0 {
    
        background-image: url({{url('images/justrepairit-repairing-service.jpg')}});
    
      }
    
      .banner-onsite1 {
    
        background-image: url({{url('images/justrepair-repairing-ahmedabad.jpg')}});
    
      }
    
      
    
       }
       
       @media (max-width: 767px){
    
      .banner-onsite0 {
    
        background-image: url({{url('images/justrepairit-repairing-service-ahmedabad.jpg')}});
    
      }
    
      .banner-onsite1 {
    
        background-image: url({{url('images/best-repairing-service-ahmedabad.jpg')}});
    
      }
    
      .carousel-caption {
    
        padding: 10px 20px;
    
      }
      .area-border{
       border-right: none;
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

            <div class="carousel-caption d-block d-md-block" style="vertical-align: top; position: static;">

              <h2 class="display-7">Guaranteed Service From JustRepairIt</h2>

              <strong class="lead text-light">Washing Machine | Air Conditioner | Friedge | LED-TV | Mobile Phone</strong> <br>

              <span class="fa fa-star checked" style="font-size:24px"></span>

              <span class="fa fa-star checked" style="font-size:24px"></span>

              <span class="fa fa-star checked" style="font-size:24px"></span>

              <span class="fa fa-star checked" style="font-size:24px"></span>

              <span class="fa fa-star-half checked" style="font-size:24px"></span>



              <p>our customer service</p>

                <div class="row" >

                    <div class="col-6" >

                        <div class="count">5050</div> 

                        <div>

                        <span>Served Clients</span>

                        </div>

                    </div>



                     <div class="col-6">

                        <div class="count">80</div> 

                        <div>

                        <span>Working Technicians</span>

                        </div>

                  </div>

                </div>

                 

              </div>

          </div>

          <!-- Slide Two - Set the background image for this slide in the line below -->

          <div class="carousel-item banner-onsite1">

            <div class="carousel-caption d-block d-md-block" style="vertical-align: top; position: static;">

              <h2 class="display-7">Our Expertise</h2>

              <strong class="lead">Washing Machine | Air Conditioner | Friedge | LED-TV | Mobile </strong> <br>

              <span class="fa fa-star checked" style="font-size:24px"></span>

              <span class="fa fa-star checked" style="font-size:24px"></span>

              <span class="fa fa-star checked" style="font-size:24px"></span>

              <span class="fa fa-star checked" style="font-size:24px"></span>

              <span class="fa fa-star-half checked" style="font-size:24px"></span>

              <p>our customer service</p>

                <div class="row" >

                    <div class="col-6" >

                        <div class="count">5050</div> 

                        <div>

                        <span>Served Clients</span>

                        </div>

                    </div>



                     <div class="col-6">

                        <div class="count">80</div> 

                        <div>

                        <span>Working Technicians</span>

                        </div>

                  </div>

                </div>

                 

              </div>

          </div>
    </div>
    </div>
</header>
@endsection

@section('congrats-cards')
  @include('includes.cards')
@endsection


@section('dianamic-content')
<div class="locations-area overflow-hidden">
    <div class="container">
      <div class="row">
      <div class="col-12 col-md-12 text-center">
        <p class="h1">Locations</p>
      </div>
    </div>  
    <div class="row">
      <div class="col-12 text-center">
        <ul class="list-inline">
            @foreach ($cities as $city)
            <li class="list-inline-item area-border pr-3 <?= ($city->id % 2 == 0)?'color-yelloww':'color-greeen';  ?> "><h5><?= ucfirst($city->name); ?></h5></li>
                @endforeach
        </ul>
      </div>
    </div>
    </div>
    </div>

    <!-- our service are started -->
<hr>
<div class="container text-center">
    @foreach ($cities as $city)
    <h2 class="color-greeen text-center py-4">Our Services  in  {{ucfirst($city->name)}}</h2>

    <div class="row justify-content-center text-center">
        @foreach ($city->products as $product)
        <div class="col-12 col-md-4">
            <a href="{{url('services')}}/{{Str::slug($product->name)}}-repairing-service-in-{{Str::slug($city->name)}}">
              <div class="w3-container city-card">
                <div class="card bg-light mb-3">
                  <div class="card-body">
                   <img src="{{url('images')}}/svg/{{Str::slug($product->name)}}.svg" alt="{{Str::slug($product->name)}}-repair-in-{{Str::slug($city->name)}}" width="50" class="mb-3">
                    <h6 class="text-dark">{{$product->name}} repair in {{$city->name}}</h6>
                  </div>
                </div>
              </div>
            </a>
          </div> 
        @endforeach

     
    </div>      
    @endforeach
</div>

@endsection

@section('brands')
    @include('includes.washing-machine.washing-machine-brands')
@endsection