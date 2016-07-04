<?php

namespace App\Http\Controllers;

use DB;
use App\Kp_user;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class UserController extends Controller
{
	/*
	 * 	用户列表 
	*/
	
	public function user_list(){
		// $us = new kp_user;
       //  $arr=$us->selectall();
		 //获取当前页
         $p=isset($_GET['p']) ? $_GET['p'] : 1 ;
        //设置每页条数
        $size=3;
        //获取总条数
        $count=DB::table('user')
		->select()
		->count();
        //获取总页数
        $pages=ceil($count/$size);
        //取得偏移量
        $pyl=($p-1)*$size;
        //上一页 下一页
        $up=$p-1<=1 ? 1 : $p-1;
        $down=$p+1>=$pages ? $pages : $p+1;
        $str='';
        $str.='<a href="javascript:page(1)">首页</a>';
        $str.='<a href="javascript:page('.$up.')">上一页</a>';
        $str.='<a href="javascript:page('.$down.')">下一页</a>';
        $str.='<a href="javascript:page('.$pages.')">尾页</a>';
        $arr= DB::table('user')->skip($pyl)->take($size)->get();
		return view('user/vip',['arr'=>$arr,'str'=>$str]);
	}
	public function deletes()
	{
		
		$id=$_GET['id'];
		// $us = new kp_user;
		// $res=$us->deleteone($id);
		$res=DB::table("user")->where("u_id" , "=" , $id)->delete();
		// $res=DB::delete("delete from kp_user where u_id=$id");
		if ($res) {
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	 public function searchs(Request $request)
	{
		$p=$request->input('p');
		$us = new kp_user;
        $arr=$us->search($p);
        return json_encode($arr);
	}
}