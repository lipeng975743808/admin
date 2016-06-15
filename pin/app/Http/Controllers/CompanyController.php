<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;

class CompanyController extends Controller
{
	/*
	 * 	企业列表 
	*/
	public function list1(){
        //echo 1;die;
		return view('company/list1');
	}
    /**
     * 修改
     */
    public function connoisseuradd(){
        //echo 1;die;
        return view('company/connoisseuradd');
    }
    
    /**
     * 职位审核
     */
    public function shenhe()
    {
        
        return view('company/opinion');
    }
    /**
     * 企业顾问
     */
    public function guwen()
    {
        
        return view('company/list1');
    }
}