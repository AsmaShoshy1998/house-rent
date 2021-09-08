
@extends('frontend.master')

@section('contents')


<div class="row">


@php 
$items=['1','2','3','4','5','6'];
@endphp
@foreach($houses as $data)
    <div class="col-md-4">
    <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
            <p class="best_text">{{$data->address}} </p>
            <img width="400px" src="{{url('uploads/'.$data->images)}}" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href=" ">{{$data->address}}
                      <br /> </a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | {{$data->rent}}.BDT</span>
                  </div>
                  <a href="#" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    
                    <li>
                      <h4 class="card-info-title">Rooms</h4>
                      <span>{{$data->number_of_room}}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Toilets</h4>
                      <span>{{$data->number_of_toilet}}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Belcony</h4>
                      <span>{{$data->number_of_belcony}}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endforeach


</div>
 


</div>
 
  <!--/ Property End /-->
  @endsection