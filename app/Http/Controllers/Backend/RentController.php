<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Rent;
use App\Models\house;
use App\Models\user;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function bookingList()
    {
        $rents= rent::paginate('5');
        $users=User::all();
    return view('backend.layouts.houses.bookingList',compact('rents','users'));
    }
    public function bookinginfo($id)
    {
        $rents= rent::find($id);
        $houses=House::all();
        $users=User::all();
    return view('backend.layouts.houses.bookingInfoView',compact('rents','users','houses'));
    }
    public function approved($id)
     {
     Rent::find($id)->update([
     'status'=>'Booked'
     ]);
     return redirect()->route('houses.bookingList')->with('message','Rent approved sucessfully'); 
     }
     public function  cancel($id)
     {
        Rent::find($id)->update([
     'status'=>'disapproved'
     ]);
     return redirect()->route('houses.bookingList')->with('message','Rent cancel sucessfully'); 
     }
}
