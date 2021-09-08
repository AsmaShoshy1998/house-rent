@extends('backend.master')

@section('content')



<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
    <br> </br>
    <br> </br>
    
<div class="d-flex justify-content-center"><h3><b>Update Register User</b></h3></div>
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

<form action="" type="form" method="post">
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
 <label for="number" class="cols-sm-2 control-label">NID Number</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="number" class="form-control" name="NID Number" id="name" placeholder="Enter your NID Number">
</div>
</div>
</div>
<div class="form-group">
 <label for="number" class="cols-sm-2 control-label">Phone Number</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="number" class="form-control" name="Phone Number" id="name" placeholder="Enter your Phone Number">
</div>
</div>
</div>
<div class="form-group">
 <label for="present_address" class="cols-sm-2 control-label">Present Address</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="text" class="form-control" name="Present Address" id="name" placeholder="">
</div>
</div>
</div>
<div class="form-group">
 <label for="permanent_address" class="cols-sm-2 control-label">Permanent Address</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="text" class="form-control" name="Permanent Address" id="name" placeholder="">
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
<button type="submit" class="btn btn-success" href=" " >Submit</button>
<br> </br>



</form>


@endsection
