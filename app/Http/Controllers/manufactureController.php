<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\support\facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class manufactureController extends Controller
{
    public function index(){
    	return view('admin.add_manufacture');
    }
    public function save_manufacture(Request $request){
    	$data = array();
    	$data['manufacture_id']=$request->manufacture_id;
    	$data['manufacture_name']=$request->manufacture_name;
    	$data['manufacture_description']=$request->manufacture_description;
    	$data['publication_status']=$request->publication_status;
    	DB::table('tbl_manufactures')->insert($data);
    	Session::put('massage', 'Added Successfully');
    	return Redirect::to('all-manufacture');

    }
    public function all_manufacture(){
    	$all_manufacture_info = DB::table('tbl_manufactures')->get();
    	$manage_manufacture = view('admin.all_manufacture')
    	->with('all_manufacture_info', $all_manufacture_info);
    	return view('admin_layout')
    	->with('admin.all_manufacture', $manage_manufacture);
    }
     public function unactive_manufacture($manufacture_id)
    {

        DB::table('tbl_manufactures')

            ->where('manufacture_id', $manufacture_id)
            ->update(['publication_status' => 0]);
            Session::put('message', 'manufacture unactive succesfully');
            return Redirect::to('/all-manufacture');
    }
    
    public function  active_manufacture($manufacture_id){
        DB::table('tbl_manufactures')
        ->where('manufacture_id', $manufacture_id)
        ->update(['publication_status' => 1]);
        Session::put('massage', 'manufacture_id active  successfully');
        return Redirect::to('/all-manufacture');
    }
    public function delete_manufacture($manufacture_id)
     {
            DB::table('tbl_manufactures')
                    ->where('manufacture_id', $manufacture_id)
                    ->delete();
            Session::get('massage', 'delete success');
            return Redirect::to('/all-manufacture');                   
       }


    public function edit_manufacture($manufacture_id){
        $manufacture_info = DB::table('tbl_manufactures')
        ->where('manufacture_id', $manufacture_id)
        ->first();
        $manufacture_info = view('admin.edit_manufacture')
        ->with('manufacture_info', $manufacture_info);
        return view('admin_layout')
        ->with('admin.edit_manufacture', $manufacture_info);
    }
    public function update_manufacture(Request $request, $manufacture_id)
       {
        $data = array();
        $data['manufacture_name']=$request->manufacture_name;
        $data['manufacture_description']= $request->manufacture_description;
        DB::table('tbl_manufactures')
                  ->where('manufacture_id', $manufacture_id)
                  ->update($data);
                Session::get('message', 'update sussessfully');
               return Redirect::to('/all-manufacture');   

       }
}
