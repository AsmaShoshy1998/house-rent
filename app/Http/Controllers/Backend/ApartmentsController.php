<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApartmentsController extends Controller
{
    public function registernew()
    {
    return view('backend.layouts.apartments.registernew');
    }
    public function addhouses()
    {
    return view('backend.layouts.apartments.addhouses');
    }
    public function listall()
    {
    return view('backend.layouts.apartments.listall');
    }
}
