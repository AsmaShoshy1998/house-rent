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
        $rents=Rent::with('User');
        $users=User::all();
        $houses=House::find($id);
        return view('frontend.layouts.houserent',compact('users','rents','houses'));
    }
    public function houserentPost(Request $request)
    {
        $rent = Rent::where('house_id',$request->id)->first();
        if($rent){
            return redirect()->back()->with('success','Already Booked.'); 
        }
        Rent::create([
            'full_name'=>$request->full_name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
            'beginning_time'=>$request->beginning_period,
            'description'=>$request->reason,
            'user_name' =>$request->name,
            'user_email' =>$request->email,
            'house_id'=>$request->id,
           
       
           ]);
        //    dd($request);
           return redirect()->back()->with('success','House Rent Successfully.');
    }
}
