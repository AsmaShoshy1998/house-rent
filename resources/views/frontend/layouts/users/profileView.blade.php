
@extends('frontend.master')


@section('contents')


<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">{{auth()->user()->full_name}}</h1>
            
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

  <!--/ Agent Single Star /-->
  <section class="agent-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-6">
              <div class="agent-avatar-box">
                <img src="{{url('uploads/'.auth()->user()->images)}}" alt="" class="agent-avatar img-fluid">
              </div>
            </div>
            
            <div class="col-md-5 section-md-t3">
              <div class="agent-info-box">
                <div class="agent-title">
                  <div class="title-box-d">
                  <div class="col-md-2">
                  <a class="btn btn-success" href="#" role="button"> <i class='fas fa-user-edit'></i> Edit Profile</a>
                    </div>
                    <h3 class="title-d">{{auth()->user()->full_name}} </h3>
                  </div>
                </div>
               
                <div class="agent-content mb-3">
                  
                  <div class="info-agents color-a">
                  <p>
                      <strong>Email: </strong>
                      <span class="color-text-a"> {{auth()->user()->email}} </span>
                    </p>
                    <p>
                      <strong>Phone: </strong>
                      <span class="color-text-a"> {{auth()->user()->mobile_number}} </span>
                    </p>
                    <p>
                      <strong>NID Number: </strong>
                      <span class="color-text-a">  {{auth()->user()->NID_Number}}</span>
                    </p>
                    <p>
                      <strong>Present Address: </strong>
                      <span class="color-text-a"> {{auth()->user()->present_address}}</span>
                    </p>
                    <p>
                      <strong>Parmanent Address: </strong>
                      <span class="color-text-a"> {{auth()->user()->permanent_address}}</span>
                    </p>
                    <p>
                      <strong>Occupation: </strong>
                      <span class="color-text-a"> {{auth()->user()->occupation}}</span>
                    </p>
                  </div>
                </div>
                <div class="socials-footer">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>



        @endsection