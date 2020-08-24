<style type="text/css">
    /*desktop */
    @media (min-width: 768px){
    .banner-onsite0 {
      background-image: url("{{url('images')}}/{{$product}}-desk.jpg");
    }
    .banner-onsite1 {
      background-image: url("{{url('images')}}/{{$product}}-desktop.jpg");
    }
      
    }
    /*mobile*/
    @media (max-width: 767px){
    .banner-onsite0 {
      background-image: url("{{url('images')}}/{{$product}}-mob.jpg");
    }
    .banner-onsite1 {
      background-image: url("{{url('images')}}/{{$product}}-mobile.jpg");
    }
    .carousel-caption {
      padding: 10px 20px;
    }
    }
  </style>
  
  
  <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <!-- Slide One - Set the background image for this slide in the line below -->
              <div class="carousel-item active banner-onsite0" >
                <div class="carousel-caption d-block d-md-block text-white" style="vertical-align: top; position: static;">
              <h2 class="display-7">{{ucwords(str_replace('-', ' ', $company))}} {{ucwords(str_replace('-', ' ', $product))}} Experts</h2>
                  <strong class="lead">{{ucwords(str_replace('-', ' ', $company))}} Service Center In {{ucwords(str_replace('-', ' ', $area))}}.</strong> <br>
                  
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
                <div class="carousel-caption d-block d-md-block text-white" style="vertical-align: top; position: static;">
                  <h2 class="display-7">Best Reasonable rate in {{$area}} </h2>
                  <strong class="lead">Make one call and technician on your door.</strong> <br>
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