@extends('backend.master')


@section('content')
<h3>Users List</h3>
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
  @foreach($users as $user)
<tr>
<th scope="row">{{$user->id}}</th>
<td scope="row">{{$user->full_name}}</td>
<td scope="row">{{$user->role}}</td>
<td scope="row">{{$user->NID_Number}}</td>
<td scope="row">{{$user->mobile_number}}</td>
<td scope="row">{{$user->present_address}}</td>
<td scope="row">{{$user->permanent_address}}</td>
<td scope="row">{{$user->occupation}}</td>
<td scope="row">{{$user->email}}</td>

<td scope="row"><a href="#" class="btn btn-primary">View</a></td>
</tr>
@endforeach
    
  </tbody>
</table>
{{$users->links('pagination::bootstrap-4')}}


@endsection