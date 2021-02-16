<?php
namespace App\Http\Controllers;
use Session;
use Illuminate\support\facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class AdminController extends Controller
{
    public function index(){
    	return view('admin_login');
    }
       public function dashboard(Request $request){
        $admin_email=$request->admin_email;
        $admin_password=$request->admin_password;
        $result = DB::table('tbl_admin')
        ->where('admin_email', $admin_email)
        ->where('admin_password', $admin_password)
        ->first();

        if($result){
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/dashboard');
        }
        else{
            Session::put('message', 'email or password not metched');
            return Redirect::to('/admin');

        }
    }
}
