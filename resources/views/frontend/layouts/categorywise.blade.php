
@extends('frontend.master')


@section('contents')


<!-- @include('frontend.partials.slider') -->

<!--/ Services Star /-->
<section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="text-dark"><b>Our Services</b></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fas fa-unlock-alt"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="text-dark"><b>Security</b></h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="text-dark">
              Security is important, and if you rent in an urban area or city with higher rates of crime, creating secured community access is essential for attracting quality tenants. From additional locks and surveillance cameras to high-tech security systems, the modern tenant appreciates any measure taken to increase their safety at home.
              </p>
            </div>
            <div class="card-footer-c">
             
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-gamepad"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="text-dark"><b>Play area</b></h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="text-dark">
              Earlier, the enquiries that I used to get, used to be on the size of the flat and configuration but now, people ask about club house in the building and a parks where their children can play. As the house is normally leased for three years, they want to have all these facilities.
              </p>
            </div>
            <div class="card-footer-c">
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-car"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="text-dark"><b>Parking facilities</b></h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="text-dark">
              For tenants with cars, parking is of utmost importance, especially in community living situations. Off-street parking is more desirable, but as long as a tenant has a place to park within reasonably close proximity you’ll find it easier to rent your unit quickly. If you’re renting in an urban area, parking tends to be more of an issue.
              </p>
            </div>
            <div class="card-footer-c">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Services End /-->

  <!--/ Property Star /-->
  <div class="container" style="margin-top: 2rem; text-align:center; padding-left:11rem; padding-right: 12rem;">
  <div class="col-lg-12">
  <div class="row">
@foreach($category as $cat)
						<div class="col-lg-3">
							<a href="{{route('categorywise',$cat->id)}}" class="active btn btn-success" data-filter="*">{{$cat->category_name}}</a>
							
						</div>
						@endforeach 
</div>
  </div>

</div>
 
  <section class="section-property section-t8">
  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="text-dark"><b>Latest Houses</b></h2>
            </div>
            
            
            
            <div class="title-link">
              
            </div>
          </div>
        </div>
      </div>
      <div class="row">


      @foreach($categoryWiseHouse as $house)
@if($house->status === "active")
    <div class="col-md-4">
    <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
            <p class="best_text">{{$house->name}} </p>
            <img width="400px" src="{{url('uploads/'.$house->images)}}" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="">{{$house->address}}
                      <br /> </a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | {{$house->rent}}.BDT</span>
                  </div>
                  <a href="{{route('singleHouse.view',$house->id)}}" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    
                    <li>
                      <h4 class="card-info-title">Rooms</h4>
                      <span>{{$house->number_of_room}}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Toilets</h4>
                      <span>{{$house->number_of_toilet}}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Belcony</h4>
                      <span>{{$house->number_of_belcony}}</span>
                    </li>
                   
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    @endif
@endforeach


</div>
 
  <!--/ Property End /-->
  <br></br>
  <div class="text-center">
  <a class="btn btn-success btn-lg" href="{{route('user.house')}}" role="button">View All Houses</i></a>
  </div>

  

  
  
  @endsection