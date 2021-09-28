<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rent;
use App\Models\user;

class ReportController extends Controller
{
    
    public function reportsearch()
    {
        $key=request()->search;
        $rents=Rent::where('beginning_time','LIKE',"%{$key}%")->get();
        return view('backend.layouts.report', compact('rents'));

    }
    }

