 @extends('backend.master')


@section('content')

<h1 class="mt-4">Dashboard</h1>
    <div class="text-center">
    <div class="row" style="margin-top: 60px;">
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-4">
        <div class="card text-white shadow" style="background-color:IndianRed; height:10rem">
                
                    <h5><span data-feather="user"></span>
                    <h1>Total User</h1>
            <p><h4>{{$user_count}}</h4></p>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="card text-white shadow" style="background-color: rgb(60, 179, 113); width: 15rm; height:10rem">
               
                    <h5><span data-feather="user"></span>
                    <h1>Total Rents</h1>
            <p><h4>{{$rent_count}}</h4></p>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="card text-white shadow" style="background-color:rgb(180, 60, 60); width: 15rm; height:10rem">
       
            <h5><span data-feather="user"></span>
            <h1>Total Category</h1>
    <p><h4>{{ $category_count}}</h4></p>
      </div>
      </div>



      
    <div class="text-center">
    <div class="row" style="margin-top: 60px;">
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-4">
        <div class="card text-white shadow" style="background-color:rgb(102, 204, 148); height:10rem">
                
                    <h5><span data-feather="user"></span>
                    <h1>Total Amenities</h1>
            <p><h4>{{ $amenity_count}}</h4></p>
                    
        </div>
        </div>
        <div class="col-lg-4">
        <div class="card text-white shadow" style="background-color: rgb(191, 64, 64); width: 15rm; height:10rem">
               
                    <h5><span data-feather="user"></span>
                    <h1>Total Houses</h1>
            <p><h4>{{$house_count}}</h4></p>
                    
        </div>
        </div>
        <div class="col-lg-4">
        <div class="card text-white shadow" style="background-color:rgb(60, 179, 113); width: 15rm; height:10rem">
       
            <h5><span data-feather="user"></span>
            <h1>Total Payments</h1>
    <p><h4>{{$payment_count}}</h4></p>
      </div>
      </div>
    <div class="text-center">
    <div class="row" style="margin-top: 60px;">
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-4">
        <div class="card text-white shadow" style="background-color:rgb(191, 64, 64); height:10rem">
                
                    <h5><span data-feather="user"></span>
                    <h1>Total Approve Rent</h1>
            <p><h4>{{$approverent_count}}</h4></p>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="card text-white shadow" style="background-color: rgb(60, 179, 113); width: 15rm; height:10rem">
               
                    <h5><span data-feather="user"></span>
                    <h1>Total Cancel Rents</h1>
            <p><h4>{{$cancelrent_count}}</h4></p>
        </div>
        </div>
        
      </div>
      </div>


@endsection