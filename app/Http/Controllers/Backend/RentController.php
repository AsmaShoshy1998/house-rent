<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Rent;
use App\Models\house;
use App\Models\user;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function rentList()
    {
        $rents= rent::paginate('5');
        $users=User::all();
    return view('backend.layouts.houses.rentList',compact('rents','users'));
    }
    public function rentinfo($id)
    {
        $rents= rent::find($id);
        $houses=House::all();
        $users=User::all();
    return view('backend.layouts.houses.rentInfoView',compact('rents','users','houses'));
    }
    public function approved($id)
     {
     Rent::find($id)->update([
     'status'=>'Approved'
     ]);
     return redirect()->route('houses.rentList')->with('message','Rent approved sucessfully'); 
     }
     public function  cancel($id)
     {
        Rent::find($id)->update([
     'status'=>'Cancel'
     ]);
     return redirect()->route('houses.rentList')->with('message','Rent cancel sucessfully'); 
     }
     public function approvedlist()
    {
          $request=Rent::with('House')->where('status','Approved')->get();
         return view('backend.layouts.houses.approvedlist',compact('request'));
    }
    public function cancellist()
    {
          $request=Rent::with('House')
          ->where('status','Cancel')->get();
         return view('backend.layouts.houses.cancellist',compact('request'));
    }
}
