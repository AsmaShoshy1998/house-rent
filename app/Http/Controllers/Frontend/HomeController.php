<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\house;
use App\Models\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $category=Category::all();
        $houses=House::latest()->get()->take(6);
    //    dd($houses);
    return view('frontend.layouts.home',compact('houses','category'));
    }
    public function contact()
    {
        
    return view('frontend.layouts.contact');
    }
    public function categoryitem($id)

        {
            $category=Category::all();
            $categoryWiseHouse=House::where('category_id',$id)->get();
            
            
            return view ('frontend.layouts.categorywise',compact('categoryWiseHouse','category'));
        }
}
