<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ResumeController extends Controller
{
	/*
	 * 	简历列表 
	*/
	public function resume_list(){
        //共多少条数据
        $count = DB::table('resume')->count();
        //每页显示多少条
        $size = 4;
        //共几页
        $page_num = ceil($count/$size);
        //当前页
        @$p = $_GET['p']?$_GET['p']:1;
        //偏移量
        $limit = ($p-1)*$size;
        $up=$p-1<1?$p-1:1;
        $down = $p+1>$page_num?$page_num:$p+1;
        $page = "<a href=\"javascript:fun(1)\">首页</a>";
        $page.= "<a href=\"javascript:fun($up)\">上一页</a>";
        $page.= "<a href=\"javascript:fun($down)\">下一页</a>";
        $page.= "<a href=\"javascript:fun($page_num)\">尾页</a>";
		$list = DB::table('resume')->join('user','resume.u_id','=','user.u_id')->skip($limit)->take(4)->get();
		return view('resume/resume_list',['list'=>$list,'page'=>$page]);
	}
	public function resume_statu(){
		$id = $_GET['id'];
		$statu = $_GET['statu'];
		$arr['re_status']=$statu;
		$list = DB::table('resume')
				->where('re_id',$id)
				->update($arr);
		if($list){
			return redirect('resume_list');
		}
	}
	public function resume_ss(Request $request){
		$val = $request->input('val');
		$arr = DB::table('resume')->where('re_name','like','%'.$val.'%')->get();
		$count = count($arr);
		//每页显示多少条
        $size = 4;
        //共几页
        $page_num = ceil($count/$size);
        //当前页
        @$p = $_GET['p']?$_GET['p']:1;
        //偏移量
        $limit = ($p-1)*$size;
        $up=$p-1<1?$p-1:1;
        $down = $p+1>$page_num?$page_num:$p+1;
        $page = "<a href=\"javascript:fun(1)\">首页</a>";
        $page.= "<a href=\"javascript:fun($up)\">上一页</a>";
        $page.= "<a href=\"javascript:fun($down)\">下一页</a>";
        $page.= "<a href=\"javascript:fun($page_num)\">尾页</a>";
		$list = DB::table('resume')->join('user','resume.u_id','=','user.u_id')->where('re_name','like','%'.$val.'%')->skip($limit)->take(4)->get();
		return view('resume/resume_list',['list'=>$list,'page'=>$page]);
	}
}