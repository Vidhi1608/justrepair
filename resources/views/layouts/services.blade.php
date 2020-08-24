@extends('layouts.main')

@section('static-content')
@yield('carousel')

@yield('header')
    


<div class="action-buttons sticky-top">

    <div class="container-fluid">

      <div class="row">

        <div class="col-6 btn-mobile bg-yelloww">

          <a class="btn cot-btn" onclick="gtag_report_conversion();" href="tel:9099880885"><i class="fas fa-phone-volume"></i> Call 9099880885</a>       

        </div>

        <div class="col-6 btn-mobile bg-greeen">

          <a class="btn" href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalCenter"><i class="far fa-calendar-check"></i> Book Appointment</a>

        </div>

      </div>

    </div>

</div>
  @yield('congrats-cards')

  @yield('dianamic-content')

  @yield('brands')

  @yield('collapse')
@endsection





