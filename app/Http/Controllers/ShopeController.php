<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Product;

class ShopeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function shope()
    {
    	$category = category::all();

    	$products =  Product::paginate(3);

    	

        return view('shope',['category'=>$category,"products"=>$products]);
    }

  
}
