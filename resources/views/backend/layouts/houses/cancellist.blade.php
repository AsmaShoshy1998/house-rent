@extends('backend.master')


@section('content')

<h2 >Cancel Rent List</h2>


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
<th>Name</th>
<th>Email</th>
<th>Number</th>
<th>Address</th>
<th>House ID</th>
<th>House Address</th>
<th>House Type</th>
<th>Beginning Period</th>
<th>Reason for Rent</th>
<th>Status</th>
</tr>
</thead>
<tbody>
@foreach($request as $key=>$rent)
<tr>
<th scope="row">{{$key+1}}

<th scope="row">{{$rent->user_name}}</th>
  <th scope="row">{{$rent->user_email}}</th>
  <th scope="row">{{$rent->user_number}}</th>
  <th scope="row">{{$rent->user_address}}</th>
  <th scope="row">{{$rent->house_id}}</th>
  <th scope="row">{{$rent->house_address}}</th>
  <th scope="row">{{$rent->house_type}}</th>
  <th scope="row">{{$rent->beginning_time}}</th>
  
  <th scope="row">{{$rent->description}}</th>

  <th scope="row">{{$rent->status}}</th>
  
  
  
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


