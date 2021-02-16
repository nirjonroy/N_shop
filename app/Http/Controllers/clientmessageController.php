<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\support\facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
class clientmessageController extends Controller
{
    public function index(){
    	return view('admin.client_message');
    }
    public function delete_message($client_id){
    	  	 DB::table('tbl_contactus')
    	->where('client_id', $client_id)
    	->delete();
    	return Redirect::to('client_message');
    }
}
