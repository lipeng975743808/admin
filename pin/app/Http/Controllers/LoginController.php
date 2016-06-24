<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;

class LoginController extends Controller
{
	/*
	 * 	登录 
	*/
	public function login(){
        //echo 1;die;
		return view('login/login');
	}
}