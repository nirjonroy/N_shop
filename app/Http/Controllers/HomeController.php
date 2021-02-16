<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Session;
class HomeController extends Controller
{
    public function index(){
    	return view('pages.home');
    }
    public function show_product_by_categories($categories_id){
    	$product_by_categories = DB::table('tbl_products')
              ->join('tbl_categories','tbl_products.categories_id','=','tbl_categories.categories_id')
              
              ->select ('tbl_products.*','tbl_categories.categories_name')

              ->where('tbl_categories.categories_id',$categories_id)
              ->where('tbl_products.publication_status',1)
              ->limit(18)
                ->get();
                 
     $manage_product_by_categories = view('pages.categories_by_products')
     ->with('product_by_categories',$product_by_categories);
     return view('layout')
     ->with('pages.categories_by_products', $manage_product_by_categories);
    }
    public function show_product_by_manufacture($manufacture_id){

    	$product_by_manufacture = DB::table('tbl_products')
              ->join('tbl_manufactures','tbl_products.manufacture_id','=','tbl_manufactures.manufacture_id')
              
              ->select ('tbl_products.*','tbl_manufactures.manufacture_name')

              ->where('tbl_manufactures.manufacture_id',$manufacture_id)
              ->where('tbl_products.publication_status',1)
              ->limit(18)
                ->get();
                 
     $manage_product_by_manufacture = view('pages.manufacture_by_products')
     ->with('product_by_manufacture',$product_by_manufacture);
     return view('layout')
     ->with('pages.manufacture_by_products', $manage_product_by_manufacture);
    }
            public function product_details_by_id($product_id){
              $product_by_details = DB::table('tbl_products')
              
              ->where('product_id',$product_id)
              ->where('publication_status',1)
             
                ->first();
                 
     $manage_product_by_details = view('pages.product-details')
     ->with('product_by_details',$product_by_details);
     return view('layout')
     ->with('pages.product_details', $manage_product_by_details);      

            }
      public function advertise_details_by_id($advertise_id){

              $advertise_by_details = DB::table('tbl_advertise')
             ->join('tbl_categories','tbl_advertise.categories_id','=','tbl_categories.categories_id')
              ->join('tbl_manufactures','tbl_advertise.manufacture_id','=','tbl_manufactures.manufacture_id')
              
              ->select ('tbl_advertise.*','tbl_categories.categories_name','tbl_manufactures.manufacture_name')

              ->where('tbl_advertise.advertise_id',$advertise_id)
              ->where('tbl_advertise.publication_status',1)
              ->limit(2)
                ->get();
                 return Redirect::to('/');
      }      

}
