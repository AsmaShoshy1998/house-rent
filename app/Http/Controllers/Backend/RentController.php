<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Rent;
use App\Models\house;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function bookingList()
    {
        $rents= rent::all();
        $houses=House::all();
    return view('backend.layouts.houses.bookingList',compact('rents','houses'));
    }
}
