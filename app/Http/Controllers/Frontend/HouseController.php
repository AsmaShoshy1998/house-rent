<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\house;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function house()
    {
        $houses=House::get()->take(18);
    return view('frontend.layouts.house',compact('houses'));
    }
    public function viewHouse($id)
    {
        $houses=House::find($id);
        // $allHouses=House::get()->take(4);
        // dd($id);
    return view('frontend.layouts.singleHouse', compact('houses'));
    }
    public function search()
    {
        // dd($_GET['search']);
        // $_GET['key']
        // request()->key
        $key=request()->search;
        $houses=House::where('address','LIKE',"%{$key}%")->get();


        return view('frontend.layouts.search',compact('houses'));
    }
    
}
