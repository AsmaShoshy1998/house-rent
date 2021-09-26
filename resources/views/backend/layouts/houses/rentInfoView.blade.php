@extends('backend.master')


@section('content')

<section class="invoice">
<br> </br>

      <button class="btn btn-danger" onclick="printDiv('printableArea')">
    <i class="fas fa-print"></i> Print
</button> &nbsp; 
     <p id="hide_me_"><a href="{{route('houses.bookingList')}}" class="btn btn-info" style="float:right"><i class="fas fa-backward"></i> Back</a> </p>
		</section>

<div id="printableArea">

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        
          <h1>
            Booking Information
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"></i> Booking ID : </a></li>
            <li class="active"> {{$rents->id}}</li>
          </ol>
        </section>

        
        <!-- Main content -->
        <section class="invoice" id="print_id_for">
		
          <!-- info row -->
          <div class="row invoice-info">
		  <div class="col-sm-12"><h1>Information of the Tenant:</h1></div>
            <div class="col-sm-6 invoice-col">
			  <p><b>Name of Tenant         :</b> {{$rents->full_name}}</p>
			  <p><b>Tenant's Email         :</b> {{$rents->email}}</p>
        <p><b>Tenant's Phone Number  :</b> {{$rents->phone_number}}</p>
        <p><b>Tenant's Address       :</b> {{$rents->address}}</p>
        <p><b>Beginning Period       :</b> {{$rents->beginning_time}}</p>
        <p><b>Reason for Rent        :</b> {{$rents->description}}</p>
			  
            </div><!-- /.col -->
            <div class="col-sm-6 invoice-col">
             <p><b>Booked by :</b> {{$rents->user_name}}</p>
			  <p> <b>User Email :</b> {{$rents->user_email}}</p>
			  <p><b>Number :</b> {{$rents->user_number}}</p>
            </div><!-- /.col -->
          </div><!-- /.row -->

          

          <div class="row">
            <!-- accepted payments column -->
			
            <div class="col-xs-12">
			<h1>House details:</h1>
              <div class="table" >
                <table class="table" style="margin-bottom:0px;">
                  <tr><td>
				  As per booking created on July 26, 2021, House details are as below:
				  </td>
				  </tr>
				  </table>
			  </div>
			</div>
            <div class="col-xs-12">
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th style="width:50%">House ID:</th>
                    <td>{{$rents->house_id}}</td>
                  </tr>
				  <tr>
                    <th style="width:50%">Address:</th>
                    <td>{{$rents->house_address}}</td>
                  </tr>
				  
				  <tr>
                    <th style="width:50%">House Rent:</th>
                    <td>BDT 34000 </td>
                  </tr>
				  
                  
                </table>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->
<!-- Table row -->
            		  <div class="row">
		  <div class="col-xs-12">
              <p class="lead"><b>Payment Methods:</b></p>
              
                They can pay physically in Landlord's House .
              </p>
              </div>
			  
            </div><!-- /.col -->
		  </div>
     
      


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