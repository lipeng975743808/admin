<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;

class CompanyController extends Controller
{
	/*
	 * 	企业列表 
	*/
	public function list1($p=1)
    {
        // echo 1;die;
        $company = DB::table('company_info')->get();
        // print_r($company);die;
        $count = count($company);//总条数
        //每页显示的条数
        $page=5;
        @$p=isset($_GET['p'])?$_GET['p']:1;
        //总页数
        $num_page = ceil($count/$page);
        //偏移量
        $page_limt = ($p-1)*$page;
        //上一页
        $data['page_up'] = $p-1<1 ? 1 : $p-1;
        //下一页
        $data['page_down'] = $p+1>$num_page ? $num_page : $p+1;
        //末页
        $data['endpage'] = $num_page;
        // print_r($data);die;
        $company = DB::select("select * from kp_company_info limit $page_limt,$page");
        // print_r($re);die;
		return view('company/list1',['company'=>$company,'data'=>$data]);
	}

    //搜索
    public function seek($p=1)
    {
        $price=$_POST['seek'];
       // print_r($price);
        $company = DB::select("select * from kp_company_info where ci_name like '%$price%' or ci_city like '%$price%'");
        // print_r($company);
        $count = count($company);
        // print_r($count);die;
        //每页显示的条数
        $page=4;
        @$p=isset($_GET['p'])?$_GET['p']:1;
        //总页数
        $num_page = ceil($count/$page);
        //偏移量
        $page_limt = ($p-1)*$page;
        //上一页
        $data['page_up'] = $p-1<1 ? 1 : $p-1;
        //下一页
        $data['page_down'] = $p+1>$num_page ? $num_page : $p+1;
        //末页
        $data['endpage'] = $num_page;
        // print_r($data);die;
        $company = DB::select("select * from kp_company_info where ci_name like '%$price%' or ci_city like '%$price%' limit $page_limt,$page");
        return view('company/sousuo',['company'=>$company,'data'=>$data]);
    }


    /**
     * 修改
     */
    public function connoisseuradd()
    {
        //echo 1;die;
        return view('company/connoisseuradd');
    }
}