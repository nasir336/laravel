<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShippingController extends Controller
{
    public function shipping()
    {
    	return view('shippin_form');
    }
    public function Storeshipping(Request $request)
    {
    	$validatedData = $request->validate([
             'full_name' => 'required|max:200',
             'email_address' => 'required',
             
         ]);

    	$data=array();
    	$data['full_name']=$request->full_name;
    	$data['email_address']=$request->email_address;
    	$data['phone_number']=$request->phone_number;
    	$data['address']=$request->address;
    	
            DB::table('shippings')->insert($data);  
            return redirect()->route('payment_form');  
            Session::put(['shipping_id'=>$data['id']]);

    }
    
}
