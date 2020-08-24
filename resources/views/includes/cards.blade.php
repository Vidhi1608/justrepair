<div class="container we-are-available py-5">

    <div class="row">

     <div class="col-12 col-md-6 col-lg-6 card-deck mt-2">

       <div class="card">

         <div class="card-body">

           <h5 class="card-title">Congratulations!! We are available in {{ ucwords($city ?? $area ?? 'Your Area')}}. <span class="badge badge-secondary"><a class="text-decoration-none text-light" href="tel:9099880885">Call Now</a> </span></h5>

           <ul class="list-group list-group-flush">

             <li class="list-group-item"><i class="fas fa-tools"></i> #1 in appliance services in the {{ ucwords($city ?? $area ?? 'Your Area')}}</li>

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

            @if (isset($product))
                @switch($product)
                    @case('washing-machine')
                    <ul class="list-group list-group-flush text-center">

                        <li class="list-group-item">IFB DESCALE POWDER</li>
           
                        <li class="list-group-item">LG DESCALER FOR WASHING MACHINE</li>
           
                        <li class="list-group-item">BOSCH SIEMENS POWDER</li>
           
                        <li class="list-group-item">Cover for your machine</li>
           
                        <li class="list-group-item">Accessories for Home Appliances</li>                   
           
                    </ul>                      
                        @break
                    @case('ac')
                    <ul class="list-group list-group-flush text-center">

                        <li class="list-group-item">Not Cooling properly</li>
     
                        <li class="list-group-item">Feeling gas in compressor</li>
     
                        <li class="list-group-item">A/C maintainance and service</li>
     
                        <li class="list-group-item">Accessories for Home Appliances</li>                   
     
                      </ul>   
                        @break
                    @case('fridge')
                    <ul class="list-group list-group-flush text-center">

                        <li class="list-group-item">Solve Gas Leak Problems</li>
     
                        <li class="list-group-item">Solve Cooling Problems</li>
     
                        <li class="list-group-item">Solve Electric Problems</li>
     
                        <li class="list-group-item">Cover for your machine</li>
     
                        <li class="list-group-item">Accessories for Home Appliances</li>                  
                    </ul>   
                        @break
                    @case('tv')
                    <ul class="list-group list-group-flush text-center">

                        <li class="list-group-item">LED TV screen goes blank</li>
     
                        <li class="list-group-item">LED TV has Horizontal lines on start-up</li>
     
                        <li class="list-group-item">LED TV with no sound output</li>
     
                        <li class="list-group-item">LED TV not connecting to WiFi</li>                   
     
                    </ul>    
                        @break
                    @case('mobile')
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">Screen Replacement</li>
                        <li class="list-group-item">Display Repairing</li>
                        <li class="list-group-item">Charging and Bettery Issues</li>
                        <li class="list-group-item">Software Update change or unlock</li>
                        <li class="list-group-item">Motherboard issues</li>                   
                    </ul>   
                        @break
                    @default
                    <ul class="list-group list-group-flush text-center">

                        <li class="list-group-item">IFB DESCALE POWDER</li>
           
                        <li class="list-group-item">LG DESCALER FOR WASHING MACHINE</li>
           
                        <li class="list-group-item">BOSCH SIEMENS POWDER</li>
           
                        <li class="list-group-item">Cover for your machine</li>
           
                        <li class="list-group-item">Accessories for Home Appliances</li>                   
           
                    </ul>   
                @endswitch
            @else
            <ul class="list-group list-group-flush text-center">

                <li class="list-group-item">IFB DESCALE POWDER</li>
   
                <li class="list-group-item">LG DESCALER FOR WASHING MACHINE</li>
   
                <li class="list-group-item">BOSCH SIEMENS POWDER</li>
   
                <li class="list-group-item">Cover for your machine</li>
   
                <li class="list-group-item">Accessories for Home Appliances</li>                   
   
              </ul>   
            @endif

           

           <div>

           <a class="btn form-control btn-background-color" href="tel:9099880885">Call Now And Buy</a>

           </div>

         </div>

       </div>

     </div>

    </div>

</div>