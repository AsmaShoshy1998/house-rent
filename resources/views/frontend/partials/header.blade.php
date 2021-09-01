



<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">House<span class="color-b">Rent</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="property-grid.html">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog-grid.html">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Pages
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="property-single.html">Property Single</a>
              <a class="dropdown-item" href="blog-single.html">Blog Single</a>
              <a class="dropdown-item" href="agents-grid.html">Agents Grid</a>
              <a class="dropdown-item" href="agent-single.html">Agent Single</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->
           
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.signup')}}">Signup</a>
          </li>
         
          
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fas fa-search" aria-hidden="true"></span>
      </button>
    </div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Login
</button>
  </nav>



  <!-- Modal -->
 
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  
  <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>


<div class="modal-dialog">
<div class="col-lg-8 col-sm-8 col-12 main-section">
<div class="modal-content">
  
<div class="col-lg-12 col-sm-12 col-12 user-img">
<img src="{{url('/frontend/img/man01.png')}}">
</div>
<div class="col-lg-12 col-sm-12 col-12 user-name">
<h1>User Login</h1>
<button type="button" class="close" data-dismiss="modal">×</button>
</div>
<div class="col-lg-12 col-sm-12 col-12 form-input">
<form action="#" type="form" method="Post">
  @csrf
<div class="form-group">
<label for="validationDefault01">Email</label>
<input name="user_email" type="email" class="form-control" placeholder="Enter email">
</div>
<div class="form-group">
<label for="validationDefault01">Password</label>
<input name="user_password" type="password" class="form-control" placeholder="Password">
</div>
<button type="submit" class="btn btn-success">Login</button>
<br> </br>
<a href="http://www.nicesnippets.com" target="_blank" >Forgot Password?</a>
<br> </br>
<button type="submit" class="btn btn-primary" href="contact.html" >Create Account</button>
</form>
</div>
<a href="http://www.nicesnippets.com" target="_blank" ></a>
<div class="col-lg-12 col-sm-12 col-12 link-part">
  

</div>
</div>
</div>
</div>
</div>