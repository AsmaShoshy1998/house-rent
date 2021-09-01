<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepositeReportsController extends Controller
{
    public function alldeposites()
    {
    return view('backend.layouts.depositereports.alldeposites');
    }
    public function sortbyapartments()
    {
    return view('backend.layouts.depositereports.sortbyapartments');
    }
    public function sumbyapartments()
    {
    return view('backend.layouts.depositereports.sumbyapartments');
    }
}
