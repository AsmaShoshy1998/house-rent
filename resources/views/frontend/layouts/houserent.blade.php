@extends('frontend.master')


@section('contents')

<!DOCTYPE html>
<html lang="en">
<head>
<link type="text/css" rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}" />

<link type="text/css" rel="stylesheet" href="{{url('/frontend/css/styles.css')}}" />


<meta name="robots" content="noindex, follow">
</head>
<body>
<div id="booking" class="section">
<div class="section-center">
<div class="container">
<div class="row">
<div class="booking-form">
<div class="form-header">
    <br> </br>
    <br> </br>
    <br> </br>
    <br> </br>
    <br> </br>
    <br> </br>
    <br> </br>
    <br> </br>
    <br> </br>
    <br> </br>
    <br> </br>
    <br> </br>
    <br> </br>
    <br> </br>
    <br> </br>
<h1>Rent a House</h1>


</div>
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<form action="{{route('houserent.post')}}" method="post">
  @csrf
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<span class="form-label">Full Name</span>
<input  class="form-control" type="text" name="full_name" placeholder="Enter your name">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<span class="form-label">Email</span>
<input class="form-control" type="email" name="email" placeholder="Enter your email">
</div>
</div>
</div>
<div class="form-group">
<span class="form-label">Phone No.</span>
<input class="form-control" type="tel" name="phone_number" placeholder="Enter your phone number">
</div>
<div class="form-group">
<span class="form-label">Address</span>
<input class="form-control" type="text" name="address" placeholder="Enter your phone number">
</div>
<div class="form-group">
<span class="form-label">House ID</span>
<input value="{{$houses->id}}" class="form-control" type="number" name="id" placeholder="Enter your phone number">
</div>
<div class="text-light">
<p> <h4>Booking by </h4></p>
</div>
<div class="col-sm-5">
<div class="form-group">
<span class="form-label">Full Name</span>
<select class="form-control" name="name" id="">
                                @foreach($users as $data)
                                <option >{{$data->full_name}}</option>
                                @endforeach
                            </select>
</div>
</div>
<div class="col-sm-5">
<div class="form-group">
<span class="form-label">Email</span>
<select class="form-control" name="email" id="">
                                @foreach($users as $data)
                                <option>{{$data->email}}</option>
                                @endforeach
                            </select>
</div>
</div>
<div class="form-group">
<span class="form-label">For the Beginning Period</span>
<input class="form-control" type="date" name="beginning_period" placeholder="Enter ZIP/Location">
</div>
<!-- <div class="form-group">
<span class="form-label">and Ending Period</span>
<input class="form-control" type="date" name="ending_time" placeholder="Enter ZIP/Location">
</div> -->
<div class="form-group">
<span class="form-label">Reason for Rent the House</span>
<textarea type="text" id="description" name="reason" class="form-control" placeholder="Write a Reason" ></textarea>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">

</div>
</div>
<div class="col-sm-7">
<div class="row">
<div class="col-sm-8">
<div class="form-group">


</div>
</div>
<div class="col-sm-4">
<div class="form-group">

</div>
</div>
<div class="col-sm-4">
<div class="form-group"> 

</div>
</div>
</div>
</div>
</div>
<div class="form-btn">
<button class="submit-btn">Rent Now</button>
</div>
</form>
</div>
</div>

</div>


    @endsection