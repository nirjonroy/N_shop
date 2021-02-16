<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\support\facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class categoriesController extends Controller
{
    public function index(){
    	return view('admin.add_categories');
    }
    public function save_categories(Request $request){
    	$data = array();
    	$data['categories_id'] = $request->categories_id;
    	$data['categories_name']= $request->categories_name;
    	$data['categories_description']=$request->categories_description;
    	$data['publication_status']=$request->publication_status;
    	DB::table('tbl_categories')->insert($data);
    	Session::put('massage', 'add successfully');
    	return Redirect::to('dashboard'); 

    }
    
    public function all_categories(){
    	$all_categories_info= DB::table('tbl_categories')->get();
    	$manage_categories = view('admin.all_categories')
    	->with('all_categories_info', $all_categories_info);
    	return view('admin_layout')
    	->with('admin.all_categories', $manage_categories);
    }

    public function unactive_categories($categories_id)
    {

        DB::table('tbl_categories')

            ->where('categories_id', $categories_id)
            ->update(['publication_status' => 0]);
            Session::put('message', 'categories unactive succesfully');
            return Redirect::to('/all-categories');
    }
    
    public function  active_categories($categories_id){
        DB::table('tbl_categories')
        ->where('categories_id', $categories_id)
        ->update(['publication_status' => 1]);
        Session::put('massage', 'categories_id active  successfully');
        return Redirect::to('/all-categories');
    }

     public function delete_categories($categories_id)
     {
            DB::table('tbl_categories')
                    ->where('categories_id', $categories_id)
                    ->delete();
            Session::get('massage', 'delete success');
            return Redirect::to('/all-categories');                   
       }
    public function edit_categories($categories_id){
        $categories_info = DB::table('tbl_categories')
        ->where('categories_id', $categories_id)
        ->first();
        $categories_info = view('admin.edit_categories')
        ->with('categories_info', $categories_info);
        return view('admin_layout')
        ->with('admin.edit_categories', $categories_info);
    }
    public function update_categories(Request $request, $categories_id)
       {
        $data = array();
        $data['categories_name']=$request->categories_name;
        $data['categories_description']= $request->categories_description;
        DB::table('tbl_categories')
                  ->where('categories_id', $categories_id)
                  ->update($data);
                Session::get('message', 'update sussessfully');
               return Redirect::to('/all-categories');   

       }
}
