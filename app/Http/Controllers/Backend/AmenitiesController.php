<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Amenities;
use Illuminate\Http\Request;

class AmenitiesController extends Controller
{
public function amenities()
{
    $amenities=Amenities::all();
    return view('backend.layouts.amenities.list',compact('amenities'));
}
public function amenitiesstore(Request $request)
    {
        Amenities::create([
            'name'=>$request->amenities_name,
           
        ]);
        // dd($request->all());

        return redirect()->route('amenities.list');
    }
    public function delete($id)
       {
        //  dd($house_id);
        $amenities=Amenities::find($id);
        if($amenities)
        {
            $amenities->delete();
            return redirect()->back()->with('message','Amenity Deleted successfully.');
        }
        return redirect()->back()->with('message','No Amenity found to delete.');
       }
       public function edit($id)
    {
        $amenities=Amenities::find($id);
        // dd($houses);
        return view('backend.layouts.amenities.edit',compact('amenities'));
    }
    public function update(Request $request,$id)
    {
//        dd($request->all());
$amenities=Amenities::find($id);
        
$amenities->update([
            
    'name'=>$request->amenities_name,
            'status'=>$request->status,
            
            
        ]);

        return redirect()->route('amenities.list')->with('message','Amenity updated successfully.');
    }
}
