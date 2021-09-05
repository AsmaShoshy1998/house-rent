<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\apartment;

class ApartmentsController extends Controller
{

    
    public function apartmentlist()
    {
        $apartments= apartment::paginate('2');
    return view('backend.layouts.apartments.list',compact('apartments'));
    }
    public function apartmentstore(Request $request)
    {
    Apartment::create([
        'apartment_id'=>$request->id,
        'apartment_name'=>$request->house_type,
        'apartment_type'=>$request->address,
        'town_location'=>$request->house_owner,
        'location'=>$request->number_of_rooms,
        'apartment_description'=>$request->number_of_toilets,
        'apartment_owner'=>$request->number_of_belcony,
       'rent'=>$request->rent,
       'images'=>$request->image,
       'status'=>$request->status,
    
       ]);
       return redirect()->back();
       }
}
