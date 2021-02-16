<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\support\facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\categoriesController;
use App\Http\manufactureController;
use DB;

class productController extends Controller
{
    public function index(){
    	return view('admin.add_product');
    }
    public function save_product(Request $request)
    {

    $data = array();
    $data['product_name'] = $request->product_name;
    $data['categories_id'] = $request->categories_id;
    $data['manufacture_id'] = $request->manufacture_id;
    $data['product_short_description'] = $request->product_short_description;
    $data['product_long_description'] = $request->product_long_description;
    $data['product_price'] = $request->product_price;
    $data['product_size'] = $request->product_size;
    $data['product_colour'] = $request->product_colour;
    $data['publication_status'] = $request->publication_status;	
    $image = $request->file('product_image');
    if($image){
    	$image_name = rand(1, 999);
    	$ext = strtolower($image->getClientOriginalExtension());
    	$image_full_name = $image_name. '.'. $ext;
    	$upload_path = 'product_image/';
    	$image_url = $upload_path. $image_full_name;
    	$success = $image->move($upload_path, $image_full_name);
    	if($success)
    	{
    		$data['product_image'] = $image_url;
    		DB::table('tbl_products')->insert($data);
    		Session::put('messsa ge', 'product uploaded success');
    		return Redirect::to('/add-product');
    	}
}

    	$data['product_image'] = '';
    	DB::table('tbl_products')->insert($data);
    		Session::put('messsage', 'product uploaded success');
    		return Redirect::to('/add-product');

    }
    public function all_product()
        {
        $all_product_info = DB::table('tbl_products')
              ->join('tbl_categories','tbl_products.categories_id','=','tbl_categories.categories_id')
              ->join('tbl_manufactures','tbl_products.manufacture_id','=','tbl_manufactures.manufacture_id')
              
              ->select ('tbl_products.*','tbl_categories.categories_name','tbl_manufactures.manufacture_name')
              ->latest()
                ->get();
                 // echo "<pre>";
                 // print_r($all_product_info);
                 // echo "</pre>";
                 // exit();
     $manage_product = view('admin.all_product')
     ->with('all_product_info',$all_product_info);
     return view('admin_layout')
     ->with('admin.all_product', $manage_product);

        }
      public function unactive_product($product_id)
    {

     DB::table('tbl_products')
            ->where('product_id',$product_id)
            ->update(['publication_status' => 0]);
            Session::put('message', 'product unactive succesfully');
            return Redirect::to('/all-product');

    }

    public function active_product($product_id)
    {

     DB::table('tbl_products')
            ->where('product_id',$product_id)
            ->update(['publication_status' => 1]);
            Session::put('message', 'product active succesfully');
            return Redirect::to('/all-product');

    }
    public function delete_product($product_id)
    {

        DB::table('tbl_products')
                    ->where('product_id', $product_id)
                    ->delete();
            Session::get('massage', 'delete success');
            return Redirect::to('/all-product');
    }   
     public function edit_product($product_id)
    {
     
      $product_info = DB::table('tbl_products')
           ->where('product_id', $product_id)
           ->first();
        $product_info = view('admin.edit_product')
        ->with('product_info',$product_info);
        return view('admin_layout')
        ->with('admin.edit_product', $product_info);

    }

    public function update_product(Request $request, $product_id)
       {
        $data = array();
        $data['product_name']=$request->product_name;
        $data['categories_id']= $request->categories_id;
        $data['manufacture_id']=$request->manufacture_id;
        $data['product_short_description']= $request->product_short_description;
        $data['product_long_description']=$request->product_long_description;
        $data['product_price']= $request->product_price;
        $data['product_image']=$request->product_image;
        $data['product_size']= $request->product_size;
        $data['product_colour']=$request->product_colour;
        DB::table('tbl_products')
                  ->where('product_id', $product_id)
                  ->update($data);
                Session::get('message', 'update sussessfully');
               return Redirect::to('/all-product');   
       }

}