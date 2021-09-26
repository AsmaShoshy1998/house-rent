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
      <th scope="col">S. No.</th>
      <th scope="col">Full Name</th>
      <th scope="col">Phone No.</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">House ID</th>
      <th scope="col">Status</th>
      
      </tr>
  </thead>
  <tbody>
  @foreach($rents as $key=>$rent)
  <tr class="table-danger">
    <th scope="row">{{$key+1}}

<th scope="row">{{$rent->full_name}}</th>
  <th scope="row">{{$rent->phone_number}}</th>
  <th scope="row">{{$rent->email}}</th>
  <th scope="row">{{$rent->address}}</th>
  <th scope="row">{{$rent->house_id}}</th>
  <th scope="row">{{$rent->status}}</th>

 
    </tr>
    @endforeach
  </tbody>
</table>





@endsection