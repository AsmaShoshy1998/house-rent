@extends('backend.master')


@section('content')

<h2 >Booking List</h2>


<section class="ftco-section">
<div class="container">
<!-- <div class="row justify-content-center"> -->
<div class="col-md-6 text-center mb-5">

</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="table-wrap">
@if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{session()->get('message')}}</span>
        </div>
    @endif
<table class="table">
<thead class="thead-primary">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Email</th>
<th>Phone No.</th>
<th>Address</th>
<th>Beginning Period</th>
<th>Ending Period</th>
<th>Reason for Rent</th>
<th>House ID</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($rents as $key=>$rent)
<tr>
<th scope="row">{{$key+1}}

<th scope="row">{{$rent->full_name}}</th>
  <th scope="row">{{$rent->email}}</th>
  
  
  <th scope="row">{{$rent->phone_number}}</th>
  <th scope="row">{{$rent->address}}</th>
  <th scope="row">{{$rent->beginning_time}}</th>
  <th scope="row">{{$rent->ending_time}}</th>
  <th scope="row">{{$rent->description}}</th>
  <th scope="row">{{$rent->house_id}}</th>
  
  <td scope="row"><a href="#" class="btn btn-info">View</a></td>
  <td scope="row"><a href="{{route('houses.edit',$rent->id)}}" class="btn btn-danger">Edit</a></td>
  <!-- <br> </br> -->
  <td scope="row"><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('houses.delete',$rent->id)}}" class="btn btn-dark">Delete</a></td>
  
</tr>
@endforeach

</tbody>
</table>



</div>
</div>
</div>
</div>
</section>


@endsection


