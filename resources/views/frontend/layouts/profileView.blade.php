
@extends('frontend.master')


@section('contents')



<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Margaret Stone</h1>
            <span class="color-text-a">Agent Immobiliari</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Agents</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Margaret Stone
              </li>
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
                <img src="{{url('/frontend/img/agent-7.jpg')}}" alt="" class="agent-avatar img-fluid">
              </div>
            </div>
            
            <div class="col-md-5 section-md-t3">
              <div class="agent-info-box">
                <div class="agent-title">
                  <div class="title-box-d">
                  <div class="col-md-2">
                  <a class="btn btn-success" href="#" role="button"> <i class='fas fa-user-edit'></i> Edit Profile</a>
                    </div>
                    <h3 class="title-d">Margaret Stone
                      <br> Escala</h3>
                  </div>
                </div>
               
                <div class="agent-content mb-3">
                  <p class="content-d color-text-a">
                    Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
                    Vivamus suscipit tortor
                    eget felis porttitor volutpat. Vivamus suscipit tortor eget felis porttitor volutpat.
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong>
                      <span class="color-text-a"> +54 356 945234 </span>
                    </p>
                    <p>
                      <strong>Mobile: </strong>
                      <span class="color-text-a"> 999 123 456 789</span>
                    </p>
                    <p>
                      <strong>Email: </strong>
                      <span class="color-text-a"> agents@example.com</span>
                    </p>
                    <p>
                      <strong>skype: </strong>
                      <span class="color-text-a"> Margaret.Es</span>
                    </p>
                    <p>
                      <strong>Email: </strong>
                      <span class="color-text-a"> agents@example.com</span>
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