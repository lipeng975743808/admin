<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;

class AdminController extends Controller
{
	/*
	 * 	登录页面 
	*/
	public function login(){
		return view('admin/login');
	}
    /**
     * 首页
     */
    public function index()
    {
        
        return view('admin/index');
    }
    /**
     * gly管理
     */
    public function gly()
    {
        
        return view('admin/user');
    }
    /**
     * head
     */
    public function head()
    {
        
        return view('admin/head');
    }
    /**
     * left
     */
    public function left()
    {
        
        return view('admin/left');
    }
    /**
     * right
     */
    public function right()
    {
        
        return view('admin/right');
    }

}