<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\support\facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
class contactusController extends Controller
{
    public function index(){
    	return view('pages.contact_us');
    }
    public function save_contactus(Request $request){
    	$data = array();
    	$data['client_name'] = $request->client_name;
    	$data['client_subject'] = $request->client_subject;
    	$data['client_email'] = $request->client_email;
    	$data['client_phone'] = $request->client_phone;
    	$data['client_message'] = $request->client_message;
    	DB::table('tbl_contactus')->insert($data);
    	return Redirect::to('pages.contact_us');
    }
}
