<?php

namespace App\Http\Controllers;

use App\brand;
use App\registered;
use Illuminate\Http\Request;

class my_blogController extends Controller
{
    //
    public function indexx(){
       $categories=category::where('publication-status',1)->get();
        $newProduct=product::where('publication-status',1)
              ->orderBy('id','DESC')
            ->take(8)
            ->get();


    	return view ('my_blog.index',[
    	   'categories'=> $categories,
            'products'=> $newProduct
            ]);
    }


   // public function products(){
     //  $categories=category::where('publication-status',1)->get();

    //	return view ('my_blog.product',[
       //     'categories' => $categories
     //   ]);
       // return view ('my_blog.product');
  //  }





    public function products($id){
     $categoryProducts= product::where('category-id',$id)
          ->where('publication-status',1)
          ->get();


    	return view ('my_blog.product',[
    	    'categorieyProduct' => $categoryProducts
        ]);
       // return view ('my_blog.product');
    }


    public function details($id){
        $product=product::find($id);
        return view ('front-end.product-details',[
            'product'=>$product
        ]);
    }

    public function editProducts($id){
        $product=product::find($id);
        return view ('front-end.edit-product',[
            'product'=>$product
        ]);
    }




    public function register(){
    	return view('my_blog.registered');
    }
    public function saveInfo(Request $request){
         $row=new registered();
        $row->Username = $request->Username;
        $row->email = $request->email;
        $row->Password=$request->Password;
        $row->ConfirmPassword=$request->ConfirmPassword;
        $row->save();
       //return $request->all();
        return redirect('/registers')->with('message','register successfully');

    }
    public function manageInfo(){
        $categories = registered::all();
        return view ('my_blog.manage',['category'=> $categories]);
    }


     public function logs(){
    	return view('my_blog.logins');
    }


    public function editInfo($id){
        $register=registered::find($id);
        return view('my_blog.edit-category',['regis'=>$register]);

    }

    public function updateInfo(Request $request){
        $row=registered::find($request->id);
        $row->Username = $request->Username;
        $row->email = $request->email;
        $row->Password=$request->Password;
        $row->ConfirmPassword=$request->ConfirmPassword;
        $row->save();
        return redirect('/registers',['message','category info update']);

    }

    public function deleteInfo($id){
        $row=registered::find($id);
        $row=delete();
        return redirect('/manage',['message','category info update']);

    }




    public function Brandadd(){
        return view ('my_blog.add-blog');
    }

    public function BrandReq(Request $request){
         $this->validate($request,[
             'brand-name' =>"required|regax:/^[\pL\s\-]+$/u|max:15|min:5",
             'brand-description' =>"required",
             'long-description' =>"required",
             'publication-status' =>"required"

         ]);
             $t  = new brand();
        //$brand=new registered();
        $t->brand-name = $request->brand-name;
        $t->brand-description = $request->description;
        $t->long-description =$request->long-description;
        $t->publication-status=$request->publication-status;
        $t->save();
        //return $request->all();
        return redirect('/brand/save')->with('message','register successfully');

    }
}
