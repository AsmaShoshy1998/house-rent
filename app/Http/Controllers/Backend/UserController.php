<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class UserController extends Controller
{
    public function login()
    {   
    return view('backend.layouts.login');
    }


    public function loginPost(Request $request)
    {
        $shoshy = $request->only('email', 'password');
//      dd(Auth::attempt($shoshy));
        if (Auth::attempt($shoshy)) 
        {
           
            return redirect()->route('dashboard.dash');
       
        }
        return redirect()->back()->with('success','invalid user info.');
    }


    public function logout()
    {
        Auth::logout();
    return redirect()->route('admin.login');
    }
    


    public function tenantList()
    {
    
       $tenants=user::where('role','=', 'tenant')->get();
    return view('backend.layouts.tenants.list', compact('tenants'));
    }
    public function landlordList()
    {
        $landlords=user::all();
        return view('backend.layouts.landlord.list', compact('landlords'));
    }
    
       
    
    public function userList()
    {
        $users=user::all();
        
        return view('backend.layouts.user', compact('users'));
    }
}
