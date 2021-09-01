@extends('backend.master')


@section('content')
<h2 >Tenants List</h2>

<!-- Button trigger modal -->


<section class="ftco-section">
<div class="container">
<!-- <div class="row justify-content-center"> -->
<div class="col-md-6 text-center mb-5">

</div>
</div>
<div class="row">
<div class="col-md-12">

<div class="table-wrap">
<table class="table">
<thead class="thead-primary">
<tr>
<th scope="col">ID</th>
<th scope="col">Full Name</th>
<th scope="col">NID Number</th>
<th scope="col">Phone Number</th>
<th scope="col"> Present Address</th>
<th scope="col">Permanent Address</th>
<th scope="col">Occupation</th>
<th scope="col">Email</th>
<th scope="col">Placement Date</th>
<th scope="col">Password</th>
<th scope="col">Status</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
@foreach($tenants as $tenant)
<tr>
<th scope="row">{{$tenant->id}}</th>
<td scope="row">{{$tenant->name}}</td>
<td scope="row">{{$tenant->NID_number}}</td>
<td scope="row">{{$tenant->Phone_number}}</td>
<td scope="row">{{$tenant->present_address}}</td>
<td scope="row">{{$tenant->permanent_address}}</td>
<td scope="row">{{$tenant->occupation}}</td>
<td scope="row">{{$tenant->email}}</td>
<td scope="row">{{$tenant->placement_date}}</td>
<td scope="row">{{$tenant->password}}</td>
<td scope="row">{{$tenant->status}}</td>
<td scope="row"><a href="#" class="btn btn-primary">View</a></td>
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