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

        if (Auth::attempt($shoshy)) 
        {
        //    dd(auth()->user());
        if(auth()->user()->role=='admin')
        {
            return redirect()->route('dashboard.dash');
            
        }
        else{
            Auth::logout();
            return redirect()->route('userlogin');
        }
            
       
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
        $landlords=user::paginate('2');
        return view('backend.layouts.landlord.list', compact('landlords'));
    }
    public function tenantview($id)
       {
        $tenants=user::find($id);
           return view('backend.layouts.tenants.viewTenant',compact('tenants'));
       }
       
    
    public function userList()
    {
        
        $users=user::paginate('8');
        
        return view('backend.layouts.users.user', compact('users'));
    }
       
}
