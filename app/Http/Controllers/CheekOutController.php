<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
// use Mail;
// use App\SendCustomar;
use Session;
use App\order;
use App\orderDetail;
use Cart;

class CheekOutController extends Controller
{
    public function cheek_out()
    {
    	return view('cheek_out');
    }
    public function sign_up(Request $Request)
    {
    	
    	$validatedData = $Request->validate([
             'first_name' => 'required|max:50',
             'last_name' => 'required',
             
         ]);

    	$data=array();
    	$data['first_name']=$Request->first_name;
    	$data['last_name']=$Request->last_name;
    	$data['email_address']=$Request->email_address;
    	$data['phone_number']=$Request->phone_number;
    	$data['password']=md5($Request->password);
    	$data['address']=$Request->address;
        DB::table('checkouts')->insert($data);

        return redirect(url('shipping'));
        // Mail::to($data['email_address'])->send(new SendCustomar($data)); 


         
        
        }

        public function payment_form()
    {
        return view('payment_form');
    }

    public function checkOut_payment(Request $Request)
        {
        
       // return $Request->payment_type;

       if($Request->payment_type == 'Cash'){
        $order = new order;
    
        $order->total_price = Session::get('CartGetTotal');
        $order->payment_type = $Request->payment_type;
        
        $order->save();


        $cartContents = Cart::getContent();
        foreach ($cartContents as $cartContent) {
        $order_details = new orderDetail;
        $order_details->order_id = $order->id;
        $order_details->product_id = $cartContent->id;
        $order_details->product_name = $cartContent->name;
        $order_details->product_image = $cartContent->attributes->product_image;
        $order_details->product_price = $cartContent->price;
        $order_details->product_quantity = $cartContent->quantity;
        $order_details->save();
        }

        Cart::clear();
        return redirect('home');



        




       }elseif ($Request->payment_type == 'Paypal') {
           echo "paypal";
       }else{
        echo "Bkash";
       }
        
        }

        

}
