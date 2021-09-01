<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tenant;
class TenantsController extends Controller
{
    
    public function listall()
    {
        $tenants=Tenant::all();
    return view('backend.layouts.tenants.listall', compact('tenants'));
    }
    public function sotre(Request $request){
        // dd($request->all());

    Tenant::create([
        'tenant_id'=>$request->id,
        'full_name'=>$request->name,
        'NID_Number'=>$request->NID_number,
        'Phone_number'=>$request->Phone_number,
        'present_address'=>$request->present_address,
        'permanent_address'=>$request->permanent_address,
        'occupation'=>$request->occupation,
       'email_address'=>$request->email,
       'status'=>$request->status,
       'placement_date'=>$request->placement_date,
    'password'=>bcrypt($request->password),
       ]);
       return redirect()->back()->with('success','User Registration Succeccfully.');
       }
}

