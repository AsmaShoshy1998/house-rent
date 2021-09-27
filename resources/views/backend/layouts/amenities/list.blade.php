@extends('backend.master')


@section('content')



<br> </br>
<h2 >Amenities List</h2>


<!-- Button trigger modal -->

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Category</button>
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
<th scope="col">ID</th>
        <th scope="col">Amenities Name</th>
        
        <th scope="col">Status</th>
        <th scope="col">Action</th>
</tr>
</thead>
<tbody>
@foreach($amenities as $key=>$amenity)
<tr>
<th scope="row">{{$key+1}}

<th scope="row">{{$amenity->name}}</th>
  <th scope="row">{{$amenity->status}}</th>
  
  
  <td><a href=""><i class='fas fa-edit'></i></a></td>
  <td> <a href=""> <i onclick="return confirm('Are you sure you want to delete this item?');"  class="fas fa-trash-alt"></i></a>  </td>


  
</tr>
@endforeach

</tbody>

</table> 

</div>
</div>
</div>
</div>
</section>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form action="{{route('amenities.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new Amenities</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       
                        <div class="form-group">
                            <label for="category_name">Amenities Name</label>
                            <input type="text" class="form-control" id="amenities_name" name="amenities_name" placeholder="Enter Amenities Name">
                                                  
                        </div>
                        
                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    

@endsection