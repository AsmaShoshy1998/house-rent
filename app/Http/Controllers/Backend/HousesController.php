<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\house;
class HousesController extends Controller
{
    public function listall()
    {
        $houses= house::all();
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
    public function housepost(Request $request){
        // dd($request->all());

    House::create([
        'house_id'=>$request->id,
        'house_type'=>$request->house_type,
        'address'=>$request->address,
        'house_owner'=>$request->house_owner,
        'number_of_room'=>$request->number_of_rooms,
        'number_of_toilet'=>$request->number_of_toilets,
        'number_of_belcony'=>$request->number_of_belcony,
       'rent'=>$request->rent,
       'images'=>$request->image,
       'status'=>$request->status,
    
       ]);
       return redirect()->back();
       }
}
