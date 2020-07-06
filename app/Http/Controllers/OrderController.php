<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
  
     public function order()
    {
    	// $post=DB::table('posts')->get();
    	$orders=DB::table('orders')
    	      // ->join('shippings','orders.id','shippings.id')
    	      // ->select('orders.*','shippings.full_name')
    	      ->get();
    	return view('order',['orders'=>$orders]);
    	     
    }


    


}
