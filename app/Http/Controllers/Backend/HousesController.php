<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\house;
use App\Models\category;

class HousesController extends Controller
{
    
    public function listall()
    {
        $houses= house::with('category')->paginate('4');
        $categories=Category::all();
    return view('backend.layouts.houses.listall',compact('houses','categories'));
    }
    public function houseedit($id)
    {
        $houses=House::find($id);
        // dd($houses);
        return view('backend.layouts.houses.edit',compact('houses'));
    }
    public function update(Request $request,$id)
    {
//        dd($request->all());
        $houses=House::find($id);
        $fileName='';
        if($request->hasFile('image'))
        {
           $file=$request->file('image');
           $fileName=date('Ymdms').'.'.$file->getClientOriginalExtension();
           $file->storeAs('/uploads',$fileName);
        }
        $houses->update([
            
            'house_type'=>$request->house_type,
            'address'=>$request->address,
            'house_owner'=>$request->house_owner,
            'number_of_room'=>$request->number_of_rooms,
            'number_of_toilet'=>$request->number_of_toilets,
            'number_of_belcony'=>$request->number_of_belcony,
             'rent'=>$request->rent,
             'description'=>$request->description,
             'images'=>$fileName,
             'status'=>$request->status,
        ]);

        return redirect()->route('houses.listall')->with('message','product updated successfully.');
    }
    // public function listvacant()
    // {
    // return view('backend.layouts.houses.listvacant');
    // }
    
    public function housepost(Request $request)
    {
    
         $fileName='';
        if($request->hasFile('image'))
        {
           $file=$request->file('image');
           $fileName=date('Ymdms').'.'.$file->getClientOriginalExtension();
           $file->storeAs('/uploads',$fileName);

        
        }
    House::create([
        'id'=>$request->id,
        'house_type'=>$request->house_type,
        'address'=>$request->address,
        'house_owner'=>$request->house_owner,
        'number_of_room'=>$request->number_of_rooms,
        'number_of_toilet'=>$request->number_of_toilets,
        'number_of_belcony'=>$request->number_of_belcony,
       'rent'=>$request->rent,
       'description'=>$request->description,
       'images'=>$fileName,
       'status'=>$request->status,
    
       ]);
       return redirect()->back();
       }
       public function delete($id)
       {
        //  dd($house_id);
         $houses=house::find($id);
        if($houses)
        {
            $houses->delete();
            return redirect()->back()->with('message','Product Deleted successfully.');
        }
        return redirect()->back()->with('message','No product found to delete.');
       }
}

