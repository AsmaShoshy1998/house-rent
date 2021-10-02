@extends('backend.master')


@section('content')



     
        <h2>Payment </h2>
        <form action="{{route('payment.store')}}" method="Post">
            @csrf
        <div class="col-md-6">
            <label for="recipient-name" class="col-form-label">Rent ID:</label>
            <input readonly value="{{$rents->id}}" type="number" name="rent_id" class="form-control" id="recipient-name">
          </div>
          
          <div class="col-md-5">
            <label for="recipient-name" class="col-form-label">Amount:</label>
            <input readonly value="{{$rents->house_rent}}" type="number" name="Amount" class="form-control" id="recipient-name">
          </div>
          <div class="col-md-4">
            <label for="message-text" class="col-form-label">User ID:</label>
            <input readonly value="{{$rents->user_id}}" type="number" name="user_id" class="form-control" id="recipient-name">
          </div>
          <div class="col-md-4">
            <label for="message-text" class="col-form-label">User Name:</label>
            <input readonly value="{{$rents->user_name}}" type="text" name="user_name" class="form-control" id="recipient-name">
          </div>
          <div class="col-md-4">
            <label for="message-text" class="col-form-label">Month:</label>
            <select required class="custom-select mr-sm-2" name="month" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
        <option>July</option>
        <option>August</option>
        <option>September</option>
        <option>October</option>
        <option>November</option>
        <option>December</option>
      </select>
          </div>
          
          <div class="col-md-3">
            <label for="message-text" class="col-form-label">Pay at:</label>
            <input type="date" value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}"  name="date" class="form-control" id="recipient-name">
          </div>
         
       <br></br>
        <button type="submit" class="btn btn-success">Submit</button>
     
        </form>
      </div>
     
    </div>
  </div>
</div>
@endsection