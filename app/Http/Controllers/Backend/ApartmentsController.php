<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\apartment;

class ApartmentsController extends Controller
{

    
    public function apartmentlist()
    {
        $apartments= apartment::paginate('2');
    return view('backend.layouts.apartments.list',compact('apartments'));
    }
    public function apartmentstore(Request $request)
    {
        $fileName='';
        if($request->hasFile('image'))
        {
           $file=$request->file('image');
           $fileName=date('Ymdms').'.'.$file->getClientOriginalExtension();
           $file->storeAs('/uploads',$fileName);

        
        }
    Apartment::create([
        
        'apartment_name'=>$request->apartment_name,
        'apartment_type'=>$request->apartment_type,
        'town_location'=>$request->town_location,
        'location'=>$request->location,
        'apartment_description'=>$request->apartment_description,
        'apartment_owner'=>$request->apartment_owner,
       'rent'=>$request->rent,
       'images'=>$fileName,
       'status'=>$request->status,
       'managementfee_percentage'=>$request->management_fee_percetage
    
       ]);
        // dd($request->all());
       return redirect()->back();
       }
}
