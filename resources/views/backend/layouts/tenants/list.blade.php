@extends('backend.master')


@section('content')
<h3>Tenants List</h3>
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
  @foreach($tenants as $tenant)
<tr>
<th scope="row">{{$tenant->id}}</th>
<td scope="row">{{$tenant->full_name}}</td>
<td scope="row">{{$tenant->role}}</td>
<td scope="row">{{$tenant->NID_Number}}</td>
<td scope="row">{{$tenant->mobile_number}}</td>
<td scope="row">{{$tenant->present_address}}</td>
<td scope="row">{{$tenant->permanent_address}}</td>
<td scope="row">{{$tenant->occupation}}</td>
<td scope="row">{{$tenant->email}}</td>

<td scope="row"><a href="#" class="btn btn-primary">View</a></td>
</tr>
@endforeach
    
  </tbody>
</table>


@endsection