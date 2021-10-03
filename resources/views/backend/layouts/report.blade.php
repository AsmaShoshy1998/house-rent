@extends('backend.master')


@section('content')
<br> </br>

<button class="btn btn-danger" onclick="printDiv('printableArea')">
    <i class="fas fa-print"></i> Print
</button>
<form action="{{route('reports.store')}}" method="post">
        @csrf
<div class="row" style="padding-left: 300px;padding-top: 20px;">

    <div class="col-md-4">
        <input name="date" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <input name="date1" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>

</div>
    </form>  
    
    <br> </br>
    <div id="printableArea">
<div class="d-flex justify-content-center">
    <h1> Ashakana Mohol</h1>
</div>


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
<table class="table">
<thead class="thead-primary">
<tr>
<th>ID</th>
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
@foreach($report as $key=>$rent)
<tr>
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

</div>


</div>
</div>
</div>
</div>
</section>


<script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>


@endsection


