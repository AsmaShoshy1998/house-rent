<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlacementFeesController extends Controller
{
    public function viewbyapartments()
    {
    return view('backend.layouts.placementfees.viewbyapartments');
    }
    public function viewbymonth()
    {
    return view('backend.layouts.placementfees.viewbymonth');
    }
}
