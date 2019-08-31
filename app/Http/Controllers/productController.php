<?php

namespace App\Http\Controllers;

use Image;
use Illuminate\Http\Request;
use DB;
class productController extends Controller
{
    //
    public function index(){
        return view('product.main');
    }

    public function added(){
        $categories = categories::where('publication_status',1)->get();
                               //  where('addes','asxscd');

       $brand = brand::where('publication_status',1)->get();

        return view('product.add-product',[
            'categories' => $categories,
        'brands' => $brand
        ]);
    }

    public function manages(){
      // $products =product::all();
        $products = DB::table('products')
            ->join('categories','products.category-id'.'','categories.id')
        ->join('brands','products.brand-id'.'','brand.id')
        ->select('products','categories.category-name'.'','brands.name')
          ->get();
         // return $products;

        return view('product.manage-product',['products' =>$products]);
    }


    protected function productInfoValidate($request){
        $this->validate($request,[
            'product-name' => 'required'
        ]);
    }
    protected function productImageUpload($request){
        $productImage= $request->file('product-iamge');
      //  $imageName=$productImage ->getClientOriginalName();
        $fileType=$productImage ->getClientOriginalExtention();
        $imageName=$request ->product-name.'.'.$fileType;


       /// $imageName = $request->product-name;
        $directory = 'product-image/';
        $imageUrl=$directory.$imageName;
 //$productImage->move($directory,$imageName);
        Image::make($productImage)->resize(200,200)->save($imageUrl);
 return $imageUrl;

    }



    //protected function saveBasicInfo($request,$imageUrl){
      //  $row=new product();
      //  $row->category-id = $request->category-id;
      //  $row->brand-id = $request->brand-id;
      //  $row->product-name=$request->product-name;
     //   $row->product-price=$request->product-price;
     //   $row->product-quantity=$request->product-quantity;
      //  $row->short-description = $request->short-description;
      //  $row->long-description = $request->long-description;
       // $row->product-image = $imageUrl;
      //  $row->publication-status = $request->publication-status;
      //  $row->save();
        //return $request->all();
      //  return redirect('/product/save')->with('message','added successfully');

    //}

    public function saveProduct(Request $request){
       // return view('product.manage-product');
        //$this->validate( $request,[



$this->productInfoValidate($request);
$imageUrl=$this->productImageUpload($request);
//$this->saveBasicInfo($request,$imageUrl);





// $productImage=$request->file('product-iamge');
 //$imageName=$productImage ->getClientOriginalName();
 //$directory = 'product-image/';
 //$imageUrl=$directory.$imageName
 //$productImage->move($directory,$imageName);


        $row=new product();
        $row->category-id = $request->category-id;
        $row->brand-id = $request->brand-id;
        $row->product-name=$request->product-name;
        $row->product-price=$request->product-price;
        $row->product-quantity=$request->product-quantity;
        $row->short-description = $request->short-description;
        $row->long-description = $request->long-description;
        $row->product-image = $imageUrl;
          $row->publication-status = $request->publication-status;
        $row->save();
        //return $request->all();
        return redirect('/product/save')->with('message','added successfully');





    }
}
