<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
class UserController extends Controller
{
    public function signupform()
    {
        
    return view('frontend.layouts.signup');
    }
    

    public function signupformPost(Request $request)
    {
        // dd($request->all()); 
        $fileName='';
        if($request->hasFile('image'))
        {
           $file=$request->file('image');
           $fileName=date('Ymdms').'.'.$file->getClientOriginalExtension();
           $file->storeAs('/uploads',$fileName);
        }
        $request->validate([
            'name' => 'required|max:255',
            'NID_Number' => 'required',
            'Phone_Number' => 'required',
            'Present_Address' => 'required',
            'Permanent_Address' => 'required',
            'Occupation' => 'required',
            // 'images' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        
    User::create([
     'full_name'=>$request->name,
     'NID_Number'=>$request->NID_Number,
     'mobile_number'=>$request->Phone_Number,
     'present_address'=>$request->Present_Address,
     'permanent_address'=>$request->Permanent_Address,
     'occupation'=>$request->Occupation,
     'NID_Number'=>$request->NID_Number,
     'images'=>$fileName,
    'email'=>$request->email,
        'password'=>bcrypt($request->password),
        'role'=>'tenant',
    ]);
    // dd($request);
    return redirect()->back()->with('success','User Registration Succeccfully.');
    }
    public function login()
    {   
    return view('frontend.layouts.userlogin');
    }


    public function loginPost(Request $request)
    {
        // dd($request->all());
        $shoshy = $request->only('email', 'password');
    
        if (Auth::attempt($shoshy)) 
        
        {
            return redirect()->intended();
            
        }
        return redirect()->back()->with('success','invalid user info.');
    
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('userlogin');
    }

    public function profileview($id)
    { 
        // dd($id);
        $users=User::find($id);
        return view('frontend.layouts.profileView',compact('users'));
    }

    
}