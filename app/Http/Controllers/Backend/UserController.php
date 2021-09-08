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
        //    dd(auth()->user());
        if(auth()->user()->role=='admin'){
            return redirect()->route('dashboard.dash');
            
        }else{
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
    public function tenantedit($id)
       {
           return view('backend.layouts.tenants.edit');
       }
    public function tenantdelete($id)
       {
       
         $tenants=user::find($id);
        if($tenants)
        {
            $tenants->delete();
            return redirect()->back()->with('message','Product Deleted successfully.');
        }
        return redirect()->back()->with('message','No product found to delete.');
       }
    
       
    
    public function userList()
    {
        $users=user::paginate('2');
        
        return view('backend.layouts.users.user', compact('users'));
    }
    public function useredit($id)
    {
        return view('backend.layouts.user.edit');
    }
    public function userdelete($id)
       {
       
         $users=user::find($id);
        if($users)
        {
            $users->delete();
            return redirect()->back()->with('message','Product Deleted successfully.');
        }
        return redirect()->back()->with('message','No product found to delete.');
       }
       
}
