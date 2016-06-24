<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;

class UserController extends Controller
{
	/*
	 * 	用户列表 
	*/
	public function user_list(){
        //echo 1;die;
		return view('user/vip');
	}
}