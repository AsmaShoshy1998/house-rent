@extends('backend.master')


@section('content')
<h3>Users List</h3>

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
<th scope="col">Image</th>
<th scope="col">Type</th>
<th scope="col">NID Number</th>
<th scope="col">Ph. Number</th>
<th scope="col"> Present Address</th>
<th scope="col">Permanent Address</th>
<th scope="col">Occupation</th>
<th scope="col">Email</th>
<th scope="col">Status</th>

<th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $key=>$user)
 
<tr>
<th scope="row">{{$key+1}}

<td scope="row">{{$user->full_name}}</td>
<th>
<img src="{{url('/uploads/'.$user->images)}}" width="100px" alt="image">
</th>
<td scope="row">{{$user->role}}</td>
<td scope="row">{{$user->NID_Number}}</td>
<td scope="row">{{$user->mobile_number}}</td>
<td scope="row">{{$user->present_address}}</td>
<td scope="row">{{$user->permanent_address}}</td>
<td scope="row">{{$user->occupation}}</td>
<td scope="row">{{$user->email}}</td>
<td scope="row">{{$user->status}}</td>


<td scope="row"><a href="{{route('users.viewUser',$user->id)}}" class="btn btn-primary">View</a></td>
<td><a href="{{route('user.edit',$user->id)}}"><i class='fas fa-user-edit'></i></a> </td>
  <td><a href="{{route('user.delete',$user->id)}}"> <i onclick="return confirm('Are you sure you want to delete this item?');"  class="fas fa-trash-alt"></i></a> </td>
</tr>
@endforeach
    
  </tbody>
</table>
{{$users->links('pagination::bootstrap-4')}}


@endsection