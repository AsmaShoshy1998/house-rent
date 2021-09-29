<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rent;
use App\Models\Report;

class ReportController extends Controller
{
    
    public function report()
    {
        $report=Rent::all();
        return view('backend.layouts.report', compact('report'));

    }
    public function reportstore(Request $request)
    {
        $report=Rent::whereBetween('created_at',[$request->date,$request->date1])->get();
        return view('backend.layouts.report', compact('report'));

    }
    
    }

