<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Rent;
use App\Models\User;
use App\Models\House;
use App\Models\Payment;
use App\Models\Category;
use App\Models\Amenities;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dash()
    {
        $title='Dashboard';
        $link= 'Admin/dashboard';
        $rent_count=Rent::all()->count();
        $user_count=User::all()->count();
        $house_count=House::all()->count();
        $payment_count=Payment::all()->count();
        $category_count=Category::all()->count();
        $amenity_count=Amenities::all()->count();
        $approverent_count=Rent::where( 'status','Approved')->count();
        $cancelrent_count=Rent::where( 'status','Cancel')->count();
      
       
        return view('backend.layouts.dashboard.dash',compact('rent_count','user_count','house_count','payment_count','category_count','amenity_count','approverent_count','cancelrent_count'));
    }
}
