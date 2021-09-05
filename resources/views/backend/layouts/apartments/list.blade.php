@extends('backend.master')


@section('content')
<h2 >Apartments List</h2>
<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Houses</button>
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
<th>ID</th>
<th>Apartment Name</th>
<th>Apartment Type</th>
<th>Town Location</th>
<th>Location</th>
<th>Apartment Description</th>
<th>Apartment Owner</th>
<th>Management fee Percentage</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($apartments as $apartment)
<tr>
<th scope="row">{{$apartment->apartment_id}}</th>
<th scope="row">{{$apartment->apartment_name}}</th>
  <th scope="row">{{$apartment->apartment_type}}</th>
  <th>
<img src="{{url('/uploads/'.$apartment->images)}}" width="100px" alt="image">
</th>
 
  <th scope="row">{{$apartment->town_location}}</th>
  <th scope="row">{{$apartment->location}}</th>
  <th scope="row">{{$apartment->apartment_description}}</th>
  <th scope="row">{{$apartment->apartment_owner}}</th>
  <th scope="row">{{$apartment->managementfee_persentage}}.BDT</th>
  <th scope="row">{{$apartment->status}}</th>

  <td scope="row"><a href="#" class="btn btn-primary">View</a></td>
</tr>
@endforeach

</tbody>
</table>
{{$apartments->links('pagination::bootstrap-4')}}


</div>
</div>
</div>
</div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">New Apartment</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=" " type="form" method="post" enctype="multipart/form-data">
@csrf

          <div class="form-group">
<div class="form-group">
<label for="validationDefault01">Apartment Name</label>
<select class="custom-select mr-sm-2" name="apartment_name" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option >single house</option>
        <option >apartment</option>
        <option >vacation home</option>
        
      </select>
    </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02">Apartment Type</label>
      <input type="text" class="form-control" name='apartment_type' id="validationDefault02" placeholder="" value=" " required>
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <div class="custom-file">
    <input type="file" class="form-control" name='image' >
    
    <br></br>
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02">Town Location</label>
      <input type="text" class="form-control" name='town_location' id="validationDefault02" placeholder="" value="" required>
    </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02">Location</label>
      <input type="number" class="form-control" name='location' id="validationDefault02" placeholder="" value="" required>
    </div>
    <div class="col-md-4 mb-3">
    <div class="form-group">
    <label for="inputAddress">Apartment Description</label>
    <input type="number" class="form-control" name='apartment_description' id="inputAddress" placeholder=" ">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Apartment Owner</label>
    <input type="number" class="form-control" name='apartment_owner' id="inputAddress2" placeholder=" ">
  </div>
     
  <div class="form-row">
    
    </div>
    <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inputAddress2">Management fee Percentage</label>
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