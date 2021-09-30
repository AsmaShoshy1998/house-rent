 @extends('backend.master')


@section('content')

<h1 class="mt-4">Dashboard</h1>
    <div class="text-center">
    <div class="row" style="margin-top: 100px;">
                        
<div class="col-md-3" style="background-color:Tomato; padding: 10px; margin-right: 10px">
    <h3>Total Rents</h3>
     <p><h4>{{$rent_count}}</h4></p>
</div>
 <div class="col-md-3" style="background-color:Teal; padding: 10px; margin-right: 10px">
    <h3>Total Users</h3>
    <p><h4>{{$user_count}}</h4></p>
</div>
<div class="col-md-3" style="background-color: Pink; padding: 10px; margin-right: 10px;">
    <h3>Total Houses</h3>
    <p><h4>{{$house_count}}</h4></p>
</div>
</div>
</div>
                        


@endsection