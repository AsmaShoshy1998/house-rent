<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Rent;
use App\Models\User;
use App\Models\House;
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
       
        return view('backend.layouts.dashboard.dash',compact('rent_count','user_count','house_count'));
    }
}
