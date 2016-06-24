<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;

class AdController extends Controller
{
	/*
	 * 	广告列表 
	*/
	public function ad_list(){
        //echo 1;die;
		return view('ad/ad_list');
	}
    /**
     * 添加广告
     */
    public function ad_add()
    {
        
        return view('ad/ad_add');
    }
}