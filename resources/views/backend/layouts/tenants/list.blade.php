@extends('backend.master')


@section('content')
<br> </br>
<h3>Tenants List</h3>
<br> </br>

@if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{session()->get('message')}}</span>
        </div>
    @endif

<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
<th scope="col">Name</th>
<!-- <th scope="col">Type</th> -->
<th scope="col">NID Number</th>
<th scope="col">Ph. Number</th>
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
<!-- <td scope="row">{{$tenant->role}}</td> -->
<td scope="row">{{$tenant->NID_Number}}</td>
<td scope="row">{{$tenant->mobile_number}}</td>
<td scope="row">{{$tenant->present_address}}</td>
<td scope="row">{{$tenant->permanent_address}}</td>
<td scope="row">{{$tenant->occupation}}</td>
<td scope="row">{{$tenant->email}}</td>

<td scope="row"><a href="#" class="btn btn-primary">View</a></td>
<td scope="row"><a href="{{route('tenants.edit',$tenant->id)}}" class="btn btn-success">Edit</a></td>
<td scope="row"><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('tenants.delete',$tenant->id)}}" class="btn btn-dark">Delete</a></td>
</tr>
@endforeach
    
  </tbody>
</table>


@endsection