<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Cart;

class CartController extends Controller
{
	public function add_cart(Request $Request)
	{
		// return $Request->all();
		$product =  product::find($Request->product_id);

	    Cart::add(array(
	    'id' => $product->id, // inique row ID
	    'name' => $product->product_name,
	    'price' => $product->buying_price,
	    'quantity' =>$Request->product_quantity,
	    'attributes' => array(
	    	'product_image' => $product->image,
	    )
	));
	    // return Cart::getContent();

	    return redirect()->route('shope',['id'=>$product->id]);
	}


	public function remove($id)
	{
		Cart::remove($id);
		return back();
	}


	public function update(Request $Request){

	Cart::update($Request->product_id, array(
  	  'quantity' => array(
      'relative' => false,
      'value' => $Request->product_quantity,
  ),
));
	return back();
		
	}




    
}
