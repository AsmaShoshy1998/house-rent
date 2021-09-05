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
        $houses= house::paginate('2');
    return view('backend.layouts.houses.listall',compact('houses'));
    }
    public function listvacant()
    {
    return view('backend.layouts.houses.listvacant');
    }
    public function listoccupied()
    {
    return view('backend.layouts.houses.listoccupied');
    }
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
        'house_id'=>$request->id,
        'house_type'=>$request->house_type,
        'address'=>$request->address,
        'house_owner'=>$request->house_owner,
        'number_of_room'=>$request->number_of_rooms,
        'number_of_toilet'=>$request->number_of_toilets,
        'number_of_belcony'=>$request->number_of_belcony,
       'rent'=>$request->rent,
       'images'=>$fileName,
       'status'=>$request->status,
    
       ]);
       return redirect()->back();
       }
}

