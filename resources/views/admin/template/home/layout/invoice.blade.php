<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JRI Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @page {
            margin: 0;
        }
        
    </style>    
</head>
<body style="margin: 0px; font-size: 14px; font-family: SourceSansPro">
        <div class="container pt-3" style="background-color:#fff;">   
            <div class="row pt-3">
                <div class="text-left">
                    <h1><strong>BILL</strong></h1>
                </div>
                <div class="text-right mb-5">
                    <div>
                        <img src="{{url('images')}}/justrepairit-logo.png" height="80" width="160" alt="AdminLTE Logo" class="brand-image float-none">
                    </div>
                </div>
            </div>
            <br>
            <div class="row pt-3 mb-0">
                <div class="text-justify">
                    <ul style="list-style-type: none; padding-left: 0rem" class="text-left">
                        <h3 class="text-muted">From</h3>
                        <h3><strong><span style="color: #419eaa">JUST REPAIR</span><span style="color: #fcc71f"> IT</span></strong></h3>                            
                        <li>636, City Gate, South Vasna</li>                            
                        <li>Ahmedabad, Gujarat</li>                            
                        <li><a href="tel:+919099880885">+91 9099880885</a></li>                                                        
                        <li><a href="mailto:justrepairit636@gmail.com">justrepairit636@gmail.com</a></li>                                                        
                        <li class="text-capitalize"><a href="https://justrepairit.in">justrepairit.in</a></li>                                                        
                    </ul>
                </div>
                <div class="text-justify">
                    <ul style="list-style-type: none; padding-left: 1rem" class="text-right">
                        <h3 class="text-muted">To</h3>
                        <h3 style="color: #419eaa"><strong>{{$complaint->name}}</strong></h3>                            
                        <li>{{$complaint->address}}</li>                            
                        <li><a href="tel:{{$complaint->mobile}}">{{$complaint->mobile}}</a></li>                                                        
                        <li>{{$complaint->city->name}}</li>                                                        
                    </ul>
                    <br>
                    <hr>
                        <div class="row">
                            <ul class="text-left" style="list-style-type: none; padding-left: 1rem">
                                <li style="color: #419eaa"><strong>Receipt No. </strong><span style="font-size: 18px">{{$complaint->bill['id']}}</span></li>                            
                                <li><strong>Date : </strong>{{$complaint->bill['created_at']->format('d/m/y H:i A')}}</li>                                                        
                                <li class="text-capitalize"><strong>Technician Name : </strong>{{$complaint->user->name}}</li>                                                        
                            </ul>
                            <ul style="list-style-type: none; padding-right: 1rem" class="text-right">
                                <h4 class="text-muted mb-0">Product</h4>
                                <li class="text-muted text-capitalize">{{$complaint->product->name}}</li>
                            </ul>
                            
                        </div>
                        <br>
                        <table class="table table-bordered mb-0 text-left">
                            <thead style="background-color: #419eaa; font-size: 18px; color: #fff">
                            <tr>
                                <th>No.</th>
                                <th>Items</th>
                                <th class="text-center">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($array as $key => $value)
                                <tr>
                                    <td>{{($loop->index)+1}}.</td>
                                    <td class="text-capitalize">{{$key}}</td>
                                    <td class="text-right"><span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> {{$value}}</td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table> 
                        <div class="text-right">
                            <ul style="list-style-type: none; padding-left: 1rem">                              
                                <li class="pr-2" style="font-size: 20px"><strong class="pr-3" style="font-size: 25px; color: #419eaa">Grand Total : </strong><span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> <strong>{{array_sum($complaint->bill['items_price'])}}</strong></li>  
                            </ul> 
                        </div>
                        <hr class="mt-0" style="height: 2px; background: grey">
                        <div class="text-left">
                            <h5 class="text"><strong>Notes :</strong></h5>
                            <ul class="pl-4" style="font-size: 8px">
                            <li>
                            <a href="https://justrepairit.in">justrepairit.in</a> is private home appliance service provider.
                            </li>
                            <li>
                            Make sure that you keep your bill or receipt number with you, Incase of any future assistance for warrenty.
                            </li>
                            <li>
                            Minimum visit charge is 250/-, do contact on <a href="tel:9099880885">9099880885</a> for any special offer.
                            </li>
                            <li>
                            Just repair it is not responsible for any water or electric power damage of repaired parts.
                            </li>
                            <li>
                            Once part is repaired/replaced refund is not applicable.
                            </li>
                            <li>
                            For any future complaint or Inquiry call on our contact number: <a href="tel:9099880885">9099880885</a>, Justrepairit will not be responsible if you contact technician directly.
                            </li>
                            </ul>
                        </div>
                    
                </div>
            </div>
        </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>