<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $categories=Category::get();
        return view('backend.layouts.categories.list',compact('categories'));
    }
    public function categorystore(Request $request)
    {
        Category::create([
            'category_name'=>$request->name,
            'details'=>$request->details,
            'status'=>$request->status,
        ]);

        return redirect()->route('categories.list');
    }
  
    public function delete($id)
       {
        //  dd($house_id);
        $categories=Category::find($id);
        if($categories)
        {
            $categories->delete();
            return redirect()->back()->with('message','Product Deleted successfully.');
        }
        return redirect()->back()->with('message','No product found to delete.');
       }
       public function edit($id)
    {
        $categories=Category::find($id);
        // dd($houses);
        return view('backend.layouts.categories.edit',compact('categories'));
    }
    public function update(Request $request,$id)
    {
//        dd($request->all());
$categories=Category::find($id);
        
$categories->update([
            
            'category_name'=>$request->name,
            'details'=>$request->details,
            'status'=>$request->status,
            
            
        ]);

        return redirect()->route('categories.list')->with('message','product updated successfully.');
    }
    
      
}
