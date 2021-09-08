



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
            <a class="nav-link" href="">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.house')}}">Houses</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('user.about')}}">About</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="">Contact</a>
          </li>
          <li class="nav-item">
          
           
          
         
          
        </ul>
        
      </div>
     
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fas fa-search" aria-hidden="true"></span>
      </button>
     
    </div>
    @if(auth()->user())
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>{{auth()->user()->full_name}}</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="{{route('user.logout')}}">Logout</a></li>
                    </ul>

    @else

    <a class="btn btn-success" href= "{{route('userlogin')}}" role="button">Login</a>
    <a class="btn btn-light" href= "{{route('user.signup')}}" role="button">Signup</a>
    @endif



  </nav>

  

  