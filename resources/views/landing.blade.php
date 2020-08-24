@extends('layouts.services')
@section('carousel')
    @include('includes.carousel-landing')
@endsection
@section('congrats-cards')
  @include('includes.cards')
  @include('includes.'.$product.'.'.$product.'-brands')
  @include('includes.'.$product.'.'.$product.'-collapse')
  
@endsection


@section('dianamic-content')
<div class="container mb-5">
  <div class="row"> 
    <div class="col-12 text-center">       
       <h3 class="under-line-check mb-3 py-4">Our Service Area in {{ucfirst($city)}}</h3>
     </div>
  </div>
      <div class="row"> 
@foreach ($areas as $area)
<div class="col-12 col-md-4 amd_area">
<a href="{{url('services')}}/{{$product}}-repairing-service-in-{{$city}}/repair-service-{{$area->name}}" ><strong class="pr-1">{{ucwords(str_replace('-', ' ', $product))}} Service Center In {{ucwords(str_replace('-', ' ', $area->name))}}</strong></a>
</div>
@endforeach

      </div>
</div>
@endsection