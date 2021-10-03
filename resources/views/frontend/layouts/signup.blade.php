@extends('frontend.master')

@section('contents')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
    <br> </br>
    <br> </br>
    <br> </br>
    
    
<div class="d-flex justify-content-center"><h3><b>Register</b></h3></div>
<div class="card-body">

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif



@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



<body>

<style type="text/css">
body {
    background-image:url('https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'); 
  background-position:center;
  background-size:cover;

  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
</style>

<form action="{{route('user.signup.store')}}" type="form" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
 <label for="name" class="cols-sm-2 control-label">Full Name</label>
<div class="cols-sm-10">
<div class="input-group">
<input  required type="text" class="form-control" name="name" id="name" placeholder="Enter your Name">
</div>
</div>
</div>
<div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <div class="custom-file">
    <input type="file" class="form-control" name='image'>
    
    <br></br>
  </div>
<div class="form-group">
 <label for="number" class="cols-sm-2 control-label">NID Number</label>
<div class="cols-sm-10">
<div class="input-group">
<input type="number" class="form-control" name="NID_Number" id="name" placeholder="Enter your NID Number" required>
</div>
</div>
</div>
<div class="form-group">
 <label for="number" class="cols-sm-2 control-label">Phone Number</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="number" class="form-control" name="Phone_Number" id="name" placeholder="Enter your Phone Number">
</div>
</div>
</div>
<div class="form-group">
 <label for="present_address" class="cols-sm-2 control-label">Present Address</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="text" class="form-control" name="Present_Address" id="name" placeholder="">
</div>
</div>
</div>
<div class="form-group">
 <label for="permanent_address" class="cols-sm-2 control-label">Permanent Address</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="text" class="form-control" name="Permanent_Address" id="name" placeholder="">
</div>
</div>
</div>


<div class="form-group">
<label for="occupation" class="cols-sm-2 control-label">Occupation</label>
<div class="cols-sm-10">
<div class="input-group">
<select required class="custom-select mr-sm-2" name="Occupation" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option >Engineer</option>
        <option >Doctor</option>
        <option >Banker</option>
        <option >Teacher</option>
        <option >Businessman</option>
        <option >Politicians</option>
      </select>
</div>
 </div>
</div>

<div class="form-group">
<label for="email" class="cols-sm-2 control-label">Email</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" />
</div>
</div>
</div>
 <div class="form-group">
<label for="password" class="cols-sm-2 control-label">Password</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
</div>
</div>
</div>
<div class="form-group">

<div class="form-group ">
<button type="submit" class="btn btn-success btn-lg btn-block login-button" href=" " >Create Account</button>
<br> </br>



</form>
<div class="text-center">Already have an account? <a href="{{route('userlogin')}}">Login here</a>


@endsection
