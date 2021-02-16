<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index(){
    	return view('admin_layout');
    }
    public function dashboard(){
    	return view('admin.dashboard');
    }
}
