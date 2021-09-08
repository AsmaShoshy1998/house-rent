<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\house;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function house()
    {
        $houses=House::get()->take(18);
    return view('frontend.layouts.house',compact('houses'));
    }
    public function firsthouse()
    {
        
    return view('frontend.layouts.single houses.1sthouse');
    }
    
}
