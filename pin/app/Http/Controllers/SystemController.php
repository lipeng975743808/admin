<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;

class SystemController extends Controller
{
	/*
	 * 	修改密码
	*/
	public function update(){
        //echo 1;die;
		return view('sys/update');
	}
    
}