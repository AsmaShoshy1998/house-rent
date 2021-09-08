<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\house;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $houses=House::latest()->get()->take(6);
    //    dd($houses);
    return view('frontend.layouts.home',compact('houses'));
    }
}
