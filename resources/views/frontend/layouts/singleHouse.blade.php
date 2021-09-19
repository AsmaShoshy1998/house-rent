
@extends('frontend.master')


@section('contents')




<section class="intro-single">
    <div class="container">
      <div class="row">
      
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">{{$houses->address}}</h1>
            <span class="color-text-a">Dhaka-1230</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{route('user.house')}}">Houses</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
              {{$houses->address}}
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
      
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
              <img src="{{url('uploads/'.$houses->images)}}" width="50px" alt="">
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="ion-money">BDT</span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c">{{$houses->rent}}</h5>
                  </div>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Quick Summary</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>House ID:</strong>
                      <span>{{$houses->id}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Location:</strong>
                      <span>{{$houses->address}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Type:</strong>
                      <span>{{$houses->house_type}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Status:</strong>
                      <span>{{$houses->status}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Beds:</strong>
                      <span>{{$houses->number_of_room}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Baths:</strong>
                      <span>{{$houses->number_of_toilet}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Belcony</strong>
                      <span>{{$houses->number_of_belcony}}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            



            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">House Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                {{$houses->description}}
                </p>
               
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-md-10 offset-md-1">
          <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
            <li class="nav-item">

            <a href="{{route('houserent')}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Rent Now </a>
       
              
  <!--/ Property Single End /-->

  
       
  <!--/ Property Single End /-->



@endsection