<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\support\facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
class shopinfoController extends Controller
{
    public function index(){
    	return view('admin.add_shopinfo');
    }
    public function save_shopinfo(Request $request){
    	$data = array();
    	$data['shop_name']=$request->shop_name;
    	$data['shop_location'] = $request->shop_location;
    	$data['shop_hotline'] = $request->shop_hotline;
    	$data['shop_email'] = $request->shop_email;
    	$data['shop_description'] = $request->shop_description;
    	$data['publication_status'] = $request->publication_status;

    	$image = $request->file('shop_logo');
    if($image){
    	$image_name = rand(1, 999);
    	$ext = strtolower($image->getClientOriginalExtension());
    	$image_full_name = $image_name. '.'. $ext;
    	$upload_path = 'slider_image/';
    	$image_url = $upload_path. $image_full_name;
    	$success = $image->move($upload_path, $image_full_name);
    	if($success)
    	{
    		$data['shop_logo'] = $image_url;
    		DB::table('tbl_shopinformation')->insert($data);
    		Session::put('messsa ge', 'product uploaded success');
    		return Redirect::to('/add-shopinfo');
    	}
}
		$data['shop_logo'] = '';
		DB::table('tbl_shopinformation')->insert($data);
		return Redirect::to('/add-shopinfo');

    }
    	public function all_shopinfo(){
    	$all_shop_info= DB::table('tbl_shopinformation')->get();
    	$manage_shop = view('admin.all_shopinformation')
    	->with('all_shop_info', $all_shop_info);
    	return view('admin_layout')
    	->with('admin.all_shopinformation', $manage_shop);
    }
    	public function unactive_shop(Request $request, $shop_id){
    		DB::table('tbl_shopinformation')
            ->where('shop_id', $shop_id)
            ->update(['publication_status' => 0]);
            Session::put('message', 'slider unactive succesfully');
            return Redirect::to('/admin.all_shopinformation');

    	}
    	public function active_shop(Request $request, $shop_id){
    		 DB::table('tbl_shopinformation')
        ->where('shop_id', $shop_id)
        ->update(['publication_status' => 1]);
         return Redirect::to('admin.all_shopinformation');

    	}
    	public function delete_shop(Request $request, $shop_id){
    		DB::table('tbl_shopinformation')
    		->where('shop_id', $shop_id)
    		->delete();
    		return Redirect::to('admin.all_shopinformation');
    	}
}
