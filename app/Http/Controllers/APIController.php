<?php

namespace App\Http\Controllers;
use App\Models\House;
use App\Models\HouseAmenities;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function gethouses()
    {
        try{
            $houses=House::all();
return response()->json([
    'success'=>'true',
    'message'=>'All Houses information are given to you',
    'data'=>$houses,
]); 
        }
        catch (\Throwable $s)
        {
           
            return response()->json([
                'success'=>'false',
                'message'=>$s->getMessage(),
                'data'=>'',
            ]); 
        }
        
    }
    public function createhouses(Request $request)
    {
        $fileName='';
        if($request->hasFile('image'))
        {
           $file=$request->file('image');
           $fileName=date('Ymdms').'.'.$file->getClientOriginalExtension();
           $file->storeAs('/uploads',$fileName);

        }
        $new_houses=House::create([
        'category_id'=>$request->category_name,
        'address'=>$request->address,
        'number_of_room'=>$request->number_of_rooms,
        'number_of_toilet'=>$request->number_of_toilets,
        'number_of_belcony'=>$request->number_of_belcony,
       'rent'=>$request->rent,
       'description'=>$request->description,
       'images'=>$fileName,
       ]);
       
       
return response()->json([
    'success'=>'true',
    'message'=>'House Created Succeessfully',
    'data'=>$new_houses,
]); 
    }
    public function deletehouses($id)
    {
        $result=House::where('id',$id)->delete();

        if($result)
        {
           
            return ["result"=>"Houses has been deleted"];
        }
        
    }
    public function updatehouses($id,Request $request)
    {
        try{
// return $request->input();
$update_houses=House::find($id);
$fileName='';
        if($request->hasFile('image'))
        {
           $file=$request->file('image');
           $fileName=date('Ymdms').'.'.$file->getClientOriginalExtension();
           $file->storeAs('/uploads',$fileName);
        }
        $update_houses->update([
            
            'category_id'=>$request->category_name,
            'address'=>$request->address,
            'number_of_room'=>$request->number_of_rooms,
            'number_of_toilet'=>$request->number_of_toilets,
            'number_of_belcony'=>$request->number_of_belcony,
             'rent'=>$request->rent,
             'description'=>$request->description,
             'images'=>$fileName,
             'status'=>$request->status,
            
        ]);
        return response()->json([
            'success'=>'true',
            'message'=>'House Updated Succeessfully',
            'data'=>$update_houses,
        ]);
    }
    catch (\Throwable $s)
    {
       
        return response()->json([
            'success'=>'false',
            'message'=>$s->getMessage(),
            'data'=>'',
        ]); 
    } 
    }
}

