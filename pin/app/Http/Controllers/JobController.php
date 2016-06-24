<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;

class JobController extends Controller
{
	/*
	 * 	职位列表 
	*/
	public function job_list(){
        //echo 1;die;
		return view('job/job_list');
	}
}