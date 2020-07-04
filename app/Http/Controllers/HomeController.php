<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\category;
use App\post;

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
        //  $product=DB::table('products')->get();
        // return view('home',compact('product'));

        $product =  Product::all()->take(10);
        $post =  post::all();
   
        $category = category::all();
        return view('home',["product"=>$product],["post"=>$post],["category"=>$category]);


    }
}
