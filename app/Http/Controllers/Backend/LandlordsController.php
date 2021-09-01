<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandlordsController extends Controller
{
    public function registernew()
    {
    return view('backend.layouts.tenants.registernew');
    }
    public function listall()
    {
    return view('backend.layouts.landlords.listall');
    }
}
