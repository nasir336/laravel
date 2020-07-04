<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
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
     public function add_product()
    {
    	$product=DB::table('categories')->get();
    	return view('add_product',compact('product'));
    }


     public function StoreProduct(Request $request)
    {
    	$validatedData = $request->validate([
             'product_name' => 'required|max:200',
             'details' => 'required',
             'image' => 'required | mimes:jpeg,jpg,png,PNG | max:1000',
         ]);

    	$data=array();
    	$data['product_name']=$request->product_name;
    	$data['product_id']=$request->product_id;
    	$data['cat_id']=$request->cat_id;
    	$data['product_code']=$request->product_code;
    	$data['product_garege']=$request->product_garege;
    	$data['product_route']=$request->product_route;
    	$data['bye_date']=$request->bye_date;
    	$data['expier_date']=$request->expier_date;
    	$data['buying_price']=$request->buying_price;
    	$data['selling_price']=$request->selling_price;
    	$data['details']=$request->details;
    	$image=$request->file('image');
    	if ($image) {
    		$image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='frontend/image/product/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('products')->insert($data);
             return Redirect()->back();
    	}else{
    		 DB::table('products')->insert($data);
             return Redirect()->back();
    	}

    }



    public function AllProduct()
    {
    	// $post=DB::table('posts')->get();
    	$product=DB::table('products')
    	      ->join('categories','products.cat_id','categories.id')
    	      ->select('products.*','categories.name')
    	      ->get();
    	return view('allproduct',compact('product'));
    	     
    }

     public function Viewproduct($id)
    {
    	$product=DB::table('products')
    	      ->join('categories','products.cat_id','categories.id')
    	      ->select('products.*','categories.name')
    	      ->where('products.id',$id)
    	      ->first();
    	 return view('viewproduct',compact('product'));    
    }


    public function DeleteProduct($id)
    {
    	$post=DB::table('products')->where('id',$id)->first();
    	$image=$post->image;
    	$delete=DB::table('products')->where('id',$id)->delete();
    	if ($delete) {
    		unlink($image);
    		
             return Redirect()->back();
    	}else{
    		
             return Redirect()->back();
    	}
    }

     public function Editproduct($id)
    {
    	$category=DB::table('categories')->get();
    	$product=DB::table('products')->where('id',$id)->first();
    	return view('editproduct',compact('category','product'));
    }

    public function UpdateProduct(Request $request,$id)
    {
    	 $validatedData = $request->validate([
             'product_name' => 'required|max:200',
             'product_id' => 'required',
             'image' => ' mimes:jpeg,jpg,png,PNG | max:1000',
         ]);

    	$data=array();
    	$data['product_name']=$request->product_name;
    	$data['product_id']=$request->product_id;
    	$data['cat_id']=$request->cat_id;
    	$data['product_code']=$request->product_code;
 
    	$data['selling_price']=$request->selling_price;
    	
	    $image=$request->file('image');
    	if ($image) {
    		$image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/frontend/image/product';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            unlink($request->old_photo);
            DB::table('products')->where('id',$id)->update($data);
             
             return Redirect()->route('all.product');
    	}else{
    		 $data['image']=$request->old_photo;
    		 DB::table('products')->where('id',$id)->update($data);
    		
             return Redirect()->route('all.product');
    	}
    }


}
