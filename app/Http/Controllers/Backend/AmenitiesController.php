<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Amenities;
use Illuminate\Http\Request;

class AmenitiesController extends Controller
{
public function amenities()
{
    $amenities=Amenities::get();
    return view('backend.layouts.amenities.list',compact('amenities'));
}
public function amenitiesstore(Request $request)
    {
        Amenities::create([
            'name'=>$request->amenities_name,
            
            
        ]);
        // dd($request->all());

        return redirect()->route('amenities.list');
    }
}
