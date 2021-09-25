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
    public function bookingdisapproved($id)
       {
       
         $rents=rent::find($id);
        if($rents)
        {
            $rents->delete();
            return redirect()->back()->with('message','Booking Disapproved successfully.');
        }
        return redirect()->back()->with('message','No booking found to delete.');
       }
}
