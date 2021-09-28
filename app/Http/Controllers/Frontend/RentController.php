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
        
        $users=User::find($id);
        $houses=House::find($id);
        return view('frontend.layouts.houserent',compact('users','houses'));
    }
    public function houserentPost(Request $request)
    {
        $rent = Rent::where('house_id',$request->id)->first();
        if($rent){
            return redirect()->back()->with('success','Already Booked.'); 
        }
        if(!$rent && auth()->user()->id !=1){
            Rent::create([
                'user_id'=>auth()->user()->id,
                'user_name'=>auth()->user()->full_name,
                'user_email'=>auth()->user()->email,
                'user_number'=>auth()->user()->mobile_number,
                'user_address'=>auth()->user()->present_address,
                'beginning_time'=>$request->beginning_period,
                'description'=>$request->reason,
                'house_id'=>$request->house_id,
                'house_address' =>$request->house_address,
                'house_type' =>$request->house_type,
                'house_rent' =>$request->house_rent,
           
               ]);
               return redirect()->back()->with('success','Rent Successfully.');
            
        }else {
            return redirect()->back()->with('success','Admin cannot rent any house.');
        }
        
       
        Rent::create([
            'user_id'=>auth()->user()->id,
            'user_name'=>auth()->user()->full_name,
            'user_email'=>auth()->user()->email,
            'user_number'=>auth()->user()->mobile_number,
            'user_address'=>auth()->user()->present_address,
            'beginning_time'=>$request->beginning_period,
            'description'=>$request->reason,
            'house_id'=>$request->id,
            'house_address' =>$request->house_address,
            'house_type' =>$request->house_type,
            'house_rent' =>$request->house_rent,
           ]);
        //    dd($request);
           return redirect()->back()->with('success','House Rent Successfully.');
    }
    public function rent_details()
    {
        
        $rents=Rent::where('user_id',auth()->user()->id)->get();
        $users=User::all();
        $houses=House::all();
        
        return view('frontend.layouts.users.rent_details',compact('rents','users','houses'));
    }
}
