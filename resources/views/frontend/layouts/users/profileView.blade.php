
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
                  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"> <i class='fas fa-user-edit'></i> Edit Profile</button>
                 
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



<!-- Modal -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('user.put')}}" method="post">
        @method('PUT')
        @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input value="{{auth()->user()->full_name}}" required type="text" class="form-control" name="name" id="name" >
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input value="{{auth()->user()->email}} " required type="email" class="form-control" name="email" id="email" >
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Phone Number:</label>
            <input value="{{auth()->user()->mobile_number}}" required type="number" class="form-control" name="Phone Number" id="name" >
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">NID Number:</label>
            <input value="{{auth()->user()->NID_Number}}" required type="number" class="form-control" name="NID Number" id="name" >
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Present Address:</label>
            <input value="{{auth()->user()->present_address}}" required type="text" class="form-control" name="Present Address" id="name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Parmanent Address:</label>
            <input value="{{auth()->user()->permanent_address}}" required type="text" class="form-control" name="Permanent Address" id="name" >
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Occupation:</label>
            <select value="{{auth()->user()->full_name}}" required class="custom-select mr-sm-2" name="Occupation" id="inlineFormCustomSelect">
        <option selected>{{auth()->user()->occupation}}</option>
        <option >Engineer</option>
        <option >Doctor</option>
        <option >Banker</option>
        <option >Teacher</option>
        <option >Businessman</option>
        <option >Politicians</option>
      </select>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input value="{{auth()->user()->password}}" required type="password" class="form-control" name="password" id="name">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>



        @endsection