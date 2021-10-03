@extends('backend.master')


@section('content')


<br></br>
<h2>Update Amenities</h2>
      
        <form action="{{route('amenities.put',$amenities->id)}}" type="form" method="POST" enctype="multipart/form-data">
        @method('PUT')
@csrf

          <div class="form-group">
<div class="form-group">
<br></br>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="category_name"><h5>Amenities Name</h5></label>
                            <input value="{{$amenities->name}}" type="text" class="form-control" id="category_name" name="name" placeholder="Enter Category Name">
                                                  
                        </div>
                        <div class="form-group">
                            <label for="product_name"><h5>Status</h5></label>
                            <input value="{{$amenities->status}}" type="text" class="form-control" id="status" name="status">
                                                  
                        </div>


                    </div>
                        
                    <button type="submit" class="btn btn-success">Submit</button>
        </form>
        </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
@endsection