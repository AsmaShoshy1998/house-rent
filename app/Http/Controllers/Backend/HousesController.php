<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\house;
use App\Models\Amenities;
use App\Models\HouseAmenities;
use App\Models\category;

class HousesController extends Controller
{
    
    public function listall()
    {
        $amenities=Amenities::all();
        $houses= house::with('category','HouseAmenities')->paginate('15');
        $categories=Category::all();
    return view('backend.layouts.houses.listall',compact('houses','categories','amenities'));
    }
    public function housepost(Request $request)
    {
    // dd($request->all());
         $fileName='';
        if($request->hasFile('image'))
        {
           $file=$request->file('image');
           $fileName=date('Ymdms').'.'.$file->getClientOriginalExtension();
           $file->storeAs('/uploads',$fileName);

        }
        $houses=House::create([
        'category_id'=>$request->category_name,
        'address'=>$request->address,
        'number_of_room'=>$request->number_of_rooms,
        'number_of_toilet'=>$request->number_of_toilets,
        'number_of_belcony'=>$request->number_of_belcony,
       'rent'=>$request->rent,
       'description'=>$request->description,
       'images'=>$fileName,
       ]);
       
       foreach($request->amenities_name as $am)
      
       {
HouseAmenities::create([
    'house_id'=>$houses->id,
    'amenities_id'=>$am,
]);
       }
       return redirect()->back();
       }

    public function houseedit($id)
    {
        $categories=Category::all();
        $houses=House::find($id);
        // dd($houses);
        return view('backend.layouts.houses.edit',compact('houses','categories'));
    }
    public function update(Request $request,$id)
    {
        
        $houses=House::find($id);
        $fileName='';
        if($request->hasFile('image'))
        {
           $file=$request->file('image');
           $fileName=date('Ymdms').'.'.$file->getClientOriginalExtension();
           $file->storeAs('/uploads',$fileName);
        }
        $houses->update([
            
            'category_id'=>$request->category_name,
            'address'=>$request->address,
           
            'number_of_room'=>$request->number_of_rooms,
            'number_of_toilet'=>$request->number_of_toilets,
            'number_of_belcony'=>$request->number_of_belcony,
             'rent'=>$request->rent,
             'description'=>$request->description,
           
             'status'=>$request->status,
            
        ]);

        return redirect()->route('houses.listall')->with('message','House updated successfully.');
    }
    
       public function delete($id)
       {
        //  dd($house_id);
         $houses=house::find($id);
        if($houses)
        {
            $houses->delete();
            return redirect()->back()->with('message','House Deleted successfully.');
        }
        return redirect()->back()->with('message','No house found to delete.');
       }
}

