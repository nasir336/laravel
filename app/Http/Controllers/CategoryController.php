<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
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

    public function add_category()
    {
        return view('add_category');
    }


     public function StoreCategory(Request $request)
    {
        $validatedData = $request->validate([
             'name' => 'required|max:20',
             'slug' => 'required',
             
         ]);

        $data=array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
        DB::table('categories')->insert($data);
             return Redirect()->route('all.category');

    }
    
   public function AllCategory()
    {
        // $post=DB::table('posts')->get();
        $category=DB::table('categories')
        ->get();
        return view('allcategory',compact('category'));
             
    }

     public function ViewCategory($id)
    {
        $category=DB::table('categories')
              ->where('categories.id',$id)
              ->first();
         return view('viewcategory',compact('category'));    
    }

    public function DeleteCategory($id)
    {

        DB::table('categories')->where('id',$id)->delete();
        
             return Redirect()->back();
        
    }

     public function EditCategory($id)
    {
       
        $category=DB::table('categories')->where('id',$id)->first();
        return view('editcategory',compact('category'));
    }

     public function UpdateCategory(Request $request,$id)
    {
        

        $data=array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
       
        DB::table('categories')->where('id',$id)->update($data);
             
             return Redirect()->route('all.category');
        
    }


}
