@extends('backend.master')


@section('content')
<br> </br>
<h2 >Payment Records</h2>
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

<table class="table table-hover table-success">
 
      <br></br>
      
      <tr class="table-info">
      <th>ID</th>
<th>Rent ID</th>
<th>Payment Type</th>
<th>Amount</th>
<th>User ID</th>
<th>User Name</th>

<th>Month</th>
<th>Payment Date</th>
<th>Status</th>
<th>Action</th>
      </tr>
  </thead>
  <tbody>

@foreach($payments as $key=>$pay)
<tr class="table-danger">
<th scope="row">{{$key+1}}

<th scope="row">{{$pay->rent_id}}</th>
  <th scope="row">{{$pay->payment_type}}</th>
  <th scope="row">{{$pay->amount}}</th>
  <th scope="row">{{$pay->user_id}}</th>
  <th scope="row">{{$pay->user_name}}</th>

  <th scope="row">{{$pay->month}}</th>
  <th scope="row">{{$pay->pay_at}}</th>
  

  <th scope="row">{{$pay->status}}</th>
  
  
  <td><a href="{{route('payment.confirm',$pay->id)}}" > <i class="fas fa-check-double"></i></a></td>
 
  
  
  
</tr>
@endforeach
</thead>
</tbody>
</table>
</div>
</div>
</div>
</div>
</section>



@endsection