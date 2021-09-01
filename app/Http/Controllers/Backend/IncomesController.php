<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IncomesController extends Controller
{
    public function companyincome()
    {
    return view('backend.layouts.incomes.companyincome');
    }
    public function landlordsincome()
    {
    return view('backend.layouts.incomes.landlordsincome');
    }
}
