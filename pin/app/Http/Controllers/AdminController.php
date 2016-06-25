<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;

class AdminController extends Controller
{
    
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

    /*
     * main 
     */
    public function main()
    {
        return view('admin/main');
    }
}