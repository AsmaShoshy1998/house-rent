<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function signupform()
    {
    return view('frontend.layouts.signup');
    }


    public function signupformPost(Request $request)
    {
        
    User::create([
     'full_name'=>$request->name,
     'NID_Number'=>$request->NID_Number,
     'mobile_number'=>$request->Phone_Number,
     'present_address'=>$request->Present_Address,
     'permanent_address'=>$request->Permanent_Address,
     'occupation'=>$request->Occupation,
     'NID_Number'=>$request->NID_Number,
    'email'=>$request->email,
        'password'=>bcrypt($request->password),
    ]);
    return redirect()->back()->with('success','User Registration Succeccfully.');
    }
    

}

