@extends('backend.master')


@section('content')
<h2> Register New Tenants</h2>
<form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Tenant Full Name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="tenant Full name" value=" " required>
    </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02">Other name</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value=" " required>
    </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02">NID Number/Passport No.</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="374837289" value="" required>
    </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02">Phone Number</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="12345678910" value="" required>
    </div>
    <div class="col-md-4 mb-3">
    <div class="form-group">
    <label for="inputAddress">Present Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Permanent Address</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="House No.,Apartment, Area,District">
  </div>
     
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">City</label>
      <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
    </div>
    <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Occupation</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="1">Engineer</option>
        <option value="2">Doctor</option>
        <option value="3">Banker</option>
        <option value="1">Teacher</option>
        <option value="2">Businessman</option>
        <option value="3">Politicians</option>
      </select>
    </div>
    <p> </p>
    <div class="form-group">
    <label for="inputPassword6">Login Password</label>
    <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
    <small id="passwordHelpInline" class="text-muted">
      <h6>Must be 8-20 characters long.</h6>
    </small>
  </div>
  
    <small id="emailHelp" class="form-text text-muted"><h8>Person to Contact Incase of Emergency.</h8></small>
    
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Full Name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="tenant Full name" value=" " required>
    </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02">Phone Number</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="12345678910" value="" required>
    </div>
   
  

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
      <br> </br>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>

<button type="button" class="btn btn-secondary">Cancel</button>
</form>




@endsection