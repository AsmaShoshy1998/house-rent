<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function house()
    {
    return view('frontend.layouts.house');
    }
}
