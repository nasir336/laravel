<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
         $product =  Product::all()->take(10);

         $all_products =  Product::where('publication_status',1)->get();
      
   
        $category = category::all();

        return view('home',["product"=>$product,'all_products'=>$all_products,'category'=>$category]);


    }
    //product details here---
    public function product_details($product_id)
    {
        $product = product::find($product_id);

        $related_product = product::where('cat_id',$product->cat_id)->where('id','!=',$product->id)->get();
        //i dont show details main image than i code this
         //related product

        return view('product_details',['product'=>$product,'related_product'=>$related_product]);
    }

    
}
