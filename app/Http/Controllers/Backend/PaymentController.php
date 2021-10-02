<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rent;
use App\Models\Payment;
class PaymentController extends Controller
{
    public function paymentlist()
    {
        $payments=Payment::with('Rent')->get();
        
    return view('backend.layouts.payments.list',compact('payments'));
    }
    public function  paymentcreate($id)
    {
        $rents= rent::find($id);
        $payments=Payment::all();
        return view('backend.layouts.payments.createPayment',compact('rents','payments'));
    }
    public function paymentstore(Request $request)
    {
        Payment::create([
            'rent_id'=>$request->rent_id,
            'amount'=>$request->Amount,
            'user_id'=>$request->user_id,
            'user_name'=>$request->user_name,
            'pay_at'=>$request->date,
            'month'=>$request->month,
        ]);

        return redirect()->route('payment.list');
    }
    public function approved($id)
     {
        Payment::find($id)->update([
     'status'=>'Paid'
     ]);
     return redirect()->route('payment.list')->with('message','Payment Confirm'); 
     }
     
}
