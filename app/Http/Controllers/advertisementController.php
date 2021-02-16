<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\support\facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\categoriesController;
use App\Http\manufactureController;
use DB;

class advertisementController extends Controller
{
    public function index(){
    	return view('admin.add_advertisement');
    }
    public function save(Request $request){
    	$data = array();
    	$data['advertise_name'] = $request->advertise_name;
    	$data['categories_id'] = $request->categories_id;
    	$data['manufacture_id'] = $request->manufacture_id;
    	
    	$data['advirtise_short_description'] = $request->advirtise_short_description;
    	$data['advirtise_long_description'] = $request->advirtise_long_description;
    	$data['publication_status'] = $request->publication_status;	
    	 $image = $request->file('advirtise_image');
    if($image){
    	$image_name = rand(1, 999);
    	$ext = strtolower($image->getClientOriginalExtension());
    	$image_full_name = $image_name. '.'. $ext;
    	$upload_path = 'advirtise_image/';
    	$image_url = $upload_path. $image_full_name;
    	$success = $image->move($upload_path, $image_full_name);
    	if($success)
    	{
    		$data['advirtise_image'] = $image_url;
    		DB::table('tbl_advertise')->insert($data);
    		Session::put('messsa ge', 'advertise uploaded success');
    		return Redirect::to('/add-advertise');
    	}
}
		$data['advirtise_image'] = '';
    	DB::table('tbl_advertise')->insert($data);
    		Session::put('messsage', 'advertise uploaded success');
    		return Redirect::to('/add-advertise');

    }
    public function all_advertise(){

    	$all_advertise_info = DB::table('tbl_advertise')
    	->join('tbl_categories','tbl_advertise.categories_id','=','tbl_categories.categories_id')
              ->join('tbl_manufactures','tbl_advertise.manufacture_id','=','tbl_manufactures.manufacture_id')
              
              ->select ('tbl_advertise.*','tbl_categories.categories_name','tbl_manufactures.manufacture_name')
              ->latest()
                ->get();
     $manage_advertise = view('admin.all_advertise')
     ->with('all_advertise_info',$all_advertise_info);
     return view('admin_layout')
     ->with('admin.all_advertise', $manage_advertise); 
    }

    public function unactive_advertise($advertise_id)
    {

     DB::table('tbl_advertise')
            ->where('advertise_id',$advertise_id)
            ->update(['publication_status' => 0]);
            Session::put('message', 'product unactive succesfully');
            return Redirect::to('/all_advertise');

    }

}
