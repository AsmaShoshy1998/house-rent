
@extends('frontend.master')

@section('contents')


 <!--/ Intro Single star /-->
 <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
            <h1 class="d-flex justify-content-center">Search Result</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
            
          </div>
        </div>
        <div class="row">


        @if($houses->count()>0)
@foreach($houses as $data)

    <div class="col-md-4">
    

    <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
            <p class="best_text"></p>
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
                  <a href="{{route('singleHouse.view',$data->id)}}" class="link-a">Click here to view
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

@else
                    <div class="d-flex justify-content-center">
                        <h3>No houses found</h3>
                    </div>
                @endif

</div>

</div>
 
  
  @endsection