@extends('backend.master')


@section('content')


<br></br>
<h2>Update Your House</h2>
      
        <form action="{{route('houses.put',$houses->id)}}" type="form" method="POST" enctype="multipart/form-data">
        @method('PUT')
@csrf

<div class="form-group">
<div class="form-group">
<label for="validationDefault01">Setect Category</label>
<select class="form-control" name="category_name" id="">
                                @foreach($categories as $data)
                                <option 
                                @if($houses->category_id==$data->id)
                            selected
                            @endif
                                value="{{$data->id}}">{{$data->category_name}}</option>
                                @endforeach
                            </select>
    </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02">Address</label>
      <input value="{{$houses->address}}" type="text" class="form-control" name='address' id="validationDefault02" placeholder="" value=" " required>
    </div>
    <div class="form-group">
    
    <div class="custom-file">
    
    
 
  </div>
    
    <div class="col-md-4 mb-3">
    <label for="validationDefault02">Number of Rooms</label>
      <input value="{{$houses->number_of_room}}" type="number" class="form-control" name='number_of_rooms' id="validationDefault02" placeholder="" value="" required>
    </div>
    <div class="col-md-4 mb-3">
    <div class="form-group">
    <label for="inputAddress">Number of Toilets</label>
    <input value="{{$houses->number_of_toilet}}" type="number" class="form-control" name='number_of_toilets' id="inputAddress" placeholder=" ">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Number of Belcony</label>
    <input value="{{$houses->number_of_belcony}}" type="number" class="form-control" name='number_of_belcony' id="inputAddress2" placeholder=" ">
  </div>
     
  <div class="form-row">
    
    </div>
    <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inputAddress2">Rent</label>
      <input value="{{$houses->rent}}" type="number" class="form-control" name='rent' id="inputAddress2" placeholder=" ">
    </div>
  
    <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" placeholder="Enter product description">{{$houses->description}}
                </textarea>
            </div>
  <div class="form-group">
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inputAddress2">Status</label>
      <input value="{{$houses->status}}" type="text" class="form-control" name='address' id="validationDefault02"  required>
      
    </div>
    </div>
    
    </div>
    
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