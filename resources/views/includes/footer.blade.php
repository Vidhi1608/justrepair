<!-- footer start -->

<div class="bg-yelloww">

    <div class="footer container d-table overflow-hidden">
    
      <div class="row pb-5 pt-5 ">
    
        <div class="col-12 col-md-6 col-lg-6 mb-1 text-center vertical-align-center">
    
          <img src="{{url('images/footer-logo.png')}}" alt="justrepairit logo ahmedabad" width="200"><br>
    
          <hr>
    
             <a target="_blank" href="https://wa.me/919099880885"><i class="fab fa-whatsapp bg-greeen rounded-circle"></i></a> 
    
         <a target="_blank" href="https://www.instagram.com/justrepairit.in/"><i class="fab fa-instagram bg-greeen rounded-circle"></i></a> 
    
         <a target="_blank" href="https://www.facebook.com/justrepairit.in"><i class="fab fa-facebook-f bg-greeen rounded-circle"></i></a> 
    
        </div>
    
    
    
        <div class="col-12 col-md-6 col-lg-6 text-justify">
    
          <strong class="lead">
    
              Just Repairit’s team of Service engineer “diagnoses” the problem on the same day and offers the most efficient solution that can get your appliances back on track in no time. Just Repairit stands as a leader in providing professional Washing machine, Air conditioner, Led – TV and more repairing and services in Ahmedabad. 
    
          </strong>
          <br>
          <div class="fb-like" data-href="https://www.facebook.com/justrepairit.in/?modal=admin_todo_tour" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
        </div>
    
        
    
      </div>
    
          
    
    </div>  
    
    <div class=" bg-greeen text-center p-2">
    
         <span class="">©<script>document.write(new Date().getFullYear());</script> | made with love by <a class="text-decoration-none text-light" href="https://nocat.tech"> nocat technologies pvt. ltd.</a> | Powered by justrepairit</span>
    
    </div>
    
</div>
    
    
    
    
    
    <!-- Button trigger modal -->
    
    
    
    
    
    <!-- Modal -->
    
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    
      <div class="modal-dialog modal-dialog" role="document">
    
        <div class="modal-content">
    
          <div class="modal-header justify-content-center">
    
            <h5 class="modal-title" id="exampleModalLongTitle">Repairing And Service</h5>
    
          </div>
    
          <div class="modal-body">
    
    <form method="post" action="/submit">
    @csrf
      <div class="form-row">
    
        <div class="form-group col-md-6">
    
          <label for="inputName">Name</label>
    
          <input type="text" class="form-control" id="inputName" name="name" placeholder="Your Name" required>
    
        </div>
    
        <div class="form-group col-md-6">
    
          <label for="inputContact">Contant Number</label>
    
          <input type="tel" class="form-control" id="inputContact" name="mobile" placeholder="Mobile Number" required>
    
        </div>
    
      </div>
    
    
    
        {{-- <div class="form-group">
    
           <label for="selectItem">Select Any Product</label>
    
           <select class="form-control" id="selectItem" name="cust_item">
    
               <option value="">Select Item</option>
    
               <option value="Washing Machine (top/front load)">Washing Machine (top/front load)</option>
    
               <option value="Air Conditioner">Air Conditioner</option>
    
               <option value="Fridge">Fridge</option>
    
               <option value="Television">Television</option>
    
               <option value="Other">Other</option>
    
           </select>
    
        </div> --}}
       {{-- {{$cities=City::all()}} 
        {{$products=Product::all()}} --}}
                      <label>Select City</label>
                     <br>
                     <select class="form-control" name="city_id">
                      @foreach ($cities as $city)
                
                     <option value="{{$city->id}}" >{{$city->name}}</option>
                     @endforeach
                     </select>
                     <br>
                     <label>Select Product</label>
                       <br>
                       @foreach ($products as $product)
                       <label>{{$product->name}}</label>
                       <input type="checkbox" name="product_id" value="{{$product->id}}"> 
                       @endforeach
     
    
    
    
      <div class="form-group">
    
        <label for="inputAddress">Address</label>
    
        <input type="text" class="form-control" name="address" id="inputAddress" placeholder="Your Area">
    
      </div>
      <div class="form-group">
        <label>Comment</label>
         <input type="text" name="comment" class="form-control" placeholder="Message"> 
      </div>
    
            <div class="modal-footer">
    
              <button type="submit" class="btn btn-success">Submit</button>
    
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
              <a class="btn btn-warning cot-btn" href="tel:9099880885">Call Direct</a>
    
            </div>
    
    </form>
    
          </div>
    
          
    
        </div>
    
      </div>
    
    </div>
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
 
    {{-- <script>
        $(document).ready(function(){
            $("#exampleModalCenter").modal('show');
        });
    </script> --}}
    
    
    <script type="text/javascript">
    
      $(document).ready(function() {
    
    
    
      var counters = $(".count");
    
      var countersQuantity = counters.length;
    
      var counter = [];
    
    
    
      for (i = 0; i < countersQuantity; i++) {
    
        counter[i] = parseInt(counters[i].innerHTML);
    
      }
    
    
    
      var count = function(start, value, id) {
    
        var localStart = start;
    
        setInterval(function() {
    
          if (localStart < value) {
    
            localStart++;
    
            counters[id].innerHTML = localStart;
    
          }
    
        }, 40);
    
      }
    
    
    
      for (j = 0; j < countersQuantity; j++) {
    
        count(0, counter[j], j);
    
      }
    
    });
    
    </script>
    
    
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    
    
    
    <script type="text/javascript">
    
      $(document).ready(function(){
    
    
    
    if($('.brands_slider').length)
    
      {
    
      var brandsSlider = $('.brands_slider');
    
    
    
      brandsSlider.owlCarousel(
    
      {
    
      loop:true,
    
      autoplay:true,
    
      autoplayTimeout:5000,
    
      nav:false,
    
      dots:false,
    
      autoWidth:true,
    
      items:8,
    
      margin:42
    
      });
    
    
    
      if($('.brands_prev').length)
    
      {
    
      var prev = $('.brands_prev');
    
      prev.on('click', function()
    
      {
    
      brandsSlider.trigger('prev.owl.carousel');
    
      });
    
      }
    
    
    
      if($('.brands_next').length)
    
      {
    
      var next = $('.brands_next');
    
      next.on('click', function()
    
      {
    
      brandsSlider.trigger('next.owl.carousel');
    
      });
    
      }
    
      }
  
      });
    
    </script>
    
         
