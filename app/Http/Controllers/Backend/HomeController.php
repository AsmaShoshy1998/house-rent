<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
       // dd( ...vars:"hello");

return view('backend.layouts.homes.home');
    }
}
