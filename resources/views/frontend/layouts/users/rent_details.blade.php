@extends('frontend.master')


@section('contents')
<br></br>
      <br></br>
      <br></br>
      <div class="d-flex justify-content-center">

<h3> My House Rent Details</h3>
</div>

<table class="table table-hover table-success">
 
      <br></br>
      
      <tr class="table-info">
      <th>S. No.</th>
<th>Name</th>
<th>Email</th>
<th>Number</th>
<th>Address</th>
<th>House ID</th>
<th>House Address</th>
<th>House Type</th>
<th>Beginning Period</th>
<th>Reason for Rent</th>
<th>Rent Status</th>
<th>Payment Status</th>

      
      </tr>
  </thead>
  <tbody>
  @foreach($rents as $key=>$rent)
  <tr class="table-danger">
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
  <th scope="row">{{optional($rent->payment)->status}}</th>
 
    </tr>
    @endforeach
  </tbody>
</table>





@endsection