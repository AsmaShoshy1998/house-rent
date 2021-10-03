@extends('backend.master')


@section('content')

<section class="invoice">
<br> </br>

      <button class="btn btn-danger" onclick="printDiv('printableArea')">
    <i class="fas fa-print"></i> Print
</button> &nbsp; 
     <p id="hide_me_"><a href="{{route('houses.rentList')}}" class="btn btn-info" style="float:right"><i class="fas fa-backward"></i> Back</a> </p>
		</section>

<div id="printableArea">

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div id="printableArea">
<div class="d-flex justify-content-center">
    <h1> Ashakana Mohol</h1>
</div>
          <h2>
            Rent Information
          </h2>
          <ol class="breadcrumb">
            <li><a href="#"></i> Booking ID : </a></li>
            <li class="active"> {{$rents->id}}</li>
          </ol>
        </section>

        
        <!-- Main content -->
        <section class="invoice" id="print_id_for">
		
          <!-- info row -->
          <div class="row invoice-info">
		  <div class="col-sm-12"><h2>Information of the Tenant:</h2></div>
            <div class="col-sm-6 invoice-col">
			  <p><b>Name of Tenant         :</b> {{$rents->user_name}}</p>
			  <p><b>Tenant's Email         :</b> {{$rents->user_email}}</p>
        <p><b>Tenant's Phone Number  :</b> {{$rents->user_number}}</p>
        <p><b>Tenant's Address       :</b> {{$rents->user_address}}</p>
       
      
			  
            </div><!-- /.col -->
            <div class="col-sm-6 invoice-col">
            <p><b>Beginning Period       :</b> {{$rents->beginning_time}}</p>
            <p><b>Reason for Rent        :</b> {{$rents->description}}</p>
			 
            </div><!-- /.col -->
          </div><!-- /.row -->

          

          <div class="row">
            <!-- accepted payments column -->
			
            <div class="col-xs-12">
			<h2>House details:</h2>
              <div class="table" >
                
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
                    <th style="width:50%">Type:</th>
                    <td>{{$rents->house_type}}</td>
                  </tr>
                  <tr>
                    <th style="width:50%">House Rent:</th>
                    <td>{{$rents->house_rent}}</td>
                  </tr>
                  <th style="width:50%">Rent Status:</th>
                    <td>{{$rents->status}}</td>
                  </tr>
                  <th style="width:50%">Payment Status:</th>
                    <td>{{optional($rents->payment)->status}}</td>
                  </tr>
				  
				  
				  
                  
                </table>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->
<!-- Table row -->
            		  <div class="row">
		  <div class="col-xs-12">
              
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