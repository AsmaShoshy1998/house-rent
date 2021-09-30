



<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" >House<span class="color-b">Rent</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('home')}}">Home</a>
          </li>
          
          
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.house')}}">Houses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">News</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('user.about')}}">About</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('homecontact')}}">Contact</a>
          </li>
          <li class="nav-item">
          <form action="{{route('search')}}" method="get">

     
         <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for Location" name="search" aria-label="Search for..." />
                    <button class="btn btn-radient-danger" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                </div>
         </form>    
      </div>
    </div>
    @if(auth()->user())
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>{{auth()->user()->full_name}}</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('profile.view')}}">My Profile</a></li>
                        <li><a class="dropdown-item" href="{{route('rent_details.view')}}">My Rent Details</a></li>
                        <li><a class="dropdown-item" href="{{route('user.logout')}}">Logout</a></li>
                    </ul>

    @else

    <a class="btn btn-success" href= "{{route('userlogin')}}" role="button">Login</a>
    <a class="btn btn-light" href= "{{route('user.signup')}}" role="button">Signup</a>
    @endif



  </nav>

  

  