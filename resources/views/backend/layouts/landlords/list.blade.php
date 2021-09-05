@extends('backend.master')


@section('content')
<h3>Landlords List</h3>
<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
<th scope="col">Full Name</th>
<th scope="col">Type</th>
<th scope="col">NID Number</th>
<th scope="col">Phone Number</th>
<th scope="col"> Present Address</th>
<th scope="col">Permanent Address</th>
<th scope="col">Occupation</th>
<th scope="col">Email</th>

<th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($landlors $landlord)
<tr>
<th scope="row">{{$landlord->id}}</th>
<td scope="row">{{$landlord->full_name}}</td>
<td scope="row">{{$landlord->role}}</td>
<td scope="row">{{$landlord->NID_Number}}</td>
<td scope="row">{{$landlord->mobile_number}}</td>
<td scope="row">{{$landlord->present_address}}</td>
<td scope="row">{{$landlord->permanent_address}}</td>
<td scope="row">{{$landlord->occupation}}</td>
<td scope="row">{{$landlord->email}}</td>

<td scope="row"><a href="#" class="btn btn-primary">View</a></td>
</tr>
@endforeach
    
  </tbody>
</table>


@endsection