@extends('backend.master')


@section('content')


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">New House</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" type="form" method="post" enctype="multipart/form-data">
@csrf

          <div class="form-group">
<div class="form-group">
<label for="validationDefault01">House Type</label>
<select class="custom-select mr-sm-2" name="house_type" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option >single house</option>
        <option >apartment</option>
        <option >vacation home</option>
        
      </select>
    </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02">Address</label>
      <input type="text" class="form-control" name='address' id="validationDefault02" placeholder="" value=" " required>
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <div class="custom-file">
    <input type="file" class="form-control" name='image' >
    
    <br></br>
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02">House Owner</label>
      <input type="text" class="form-control" name='house_owner' id="validationDefault02" placeholder="" value="" required>
    </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02">Number of Rooms</label>
      <input type="number" class="form-control" name='number_of_rooms' id="validationDefault02" placeholder="" value="" required>
    </div>
    <div class="col-md-4 mb-3">
    <div class="form-group">
    <label for="inputAddress">Number of Toilets</label>
    <input type="number" class="form-control" name='number_of_toilets' id="inputAddress" placeholder=" ">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Number of Belcony</label>
    <input type="number" class="form-control" name='number_of_belcony' id="inputAddress2" placeholder=" ">
  </div>
     
  <div class="form-row">
    
    </div>
    <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inputAddress2">Rent</label>
      <input type="number" class="form-control" name='rent' id="inputAddress2" placeholder=" ">
    </div>
    <p> </p>
    
    
  </div>
  <div class="form-group">
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inputAddress2">Status</label>
      <input type="text" class="form-control" name='status' id="inputAddress2" placeholder=" ">
    </div>
    </div>
    
    </div>
    
    </div>
    
  </div>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
@endsection