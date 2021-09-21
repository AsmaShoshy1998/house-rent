<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Rent;
use App\Models\house;
use App\Models\user;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function houserent($id)
    {
        $rents=Rent::all();
        $houses=House::find($id);;
        return view('frontend.layouts.houserent',compact('houses','rents'));
    }
    public function houserentPost(Request $request)
    {
        Rent::create([
            'full_name'=>$request->full_name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
            'beginning_time'=>$request->beginning_period,
            'ending_time'=>$request->ending_time,
            'description'=>$request->reason,
           'house_id'=>$request->house_id,
           ]);
        //    dd($request);
           return redirect()->back()->with('success','House Rent Successfully.');
    }
}
