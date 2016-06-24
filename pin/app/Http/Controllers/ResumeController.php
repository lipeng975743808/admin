<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;

class ResumeController extends Controller
{
	/*
	 * 	简历列表 
	*/
	public function resume_list(){
        //echo 1;die;
		return view('resume/resume_list');
	}
}