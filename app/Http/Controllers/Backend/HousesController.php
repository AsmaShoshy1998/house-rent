<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\house;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
class HousesController extends Controller
{
    public function listall()
    {
        $houses= house::paginate('4');
    return view('backend.layouts.houses.listall',compact('houses'));
    }
    public function houseedit()
    {
        return view('backend.layouts.houses.edit');
    }
    // public function listvacant()
    // {
    // return view('backend.layouts.houses.listvacant');
    // }
    // public function listoccupied()
    // {
    // return view('backend.layouts.houses.listoccupied');
    // }
    public function housepost(Request $request)
    {
        // dd(date('Ymdms').'.'.$request->file('image')->getClientOriginalExtension());
        // dd(date('Ymdms').'.'.$file->getClientOriginalExtension());
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

