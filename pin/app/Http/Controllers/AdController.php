<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class AdController extends Controller
{
	/*
	 * 	广告列表 
	*/
	public function ad_list($id=1){
        //echo 1;die;
        $users = DB::table('ad')
            ->join('company_info','ad.ci_id','=','company_info.ci_id')
            ->select('ad.*','company_info.ci_name')
            ->orderby('ad_id','desc')
            ->get();
        //每页显示条数
        $length=3;
        //总页数
        $pages=ceil(count($users)/$length);
        //当前页
        $p=$id;
        //上一页
        $up=$p-1<=1?1:$p-1;
        //下一页
        $next=$p+1>=$pages?$pages:$p+1;
        //偏移量
        $offset=($p-1)*$length;
        $list = DB::table('ad')
            ->join('company_info','ad.ci_id','=','company_info.ci_id')
            ->select('ad.*','company_info.ci_name')
            ->orderby('ad_id','desc')
            //->limit($offset,$length)
            ->skip($offset)->take($length)
            ->get();
		return view('ad/ad_list',['arr' => $list,'up'=>$up,'next'=>$next,'page'=>$p,'pages'=>$pages]);
	}
    /**
     * 添加广告
     */
    public function ad_add()
    {
        return view('ad/ad_add');
    }

    /**
     * 接收添加的信息
     */
    public function add_ad(Request $request){
        $file=$request->file('file');//接收文件
        $cname=$request->input('cname');
        $adtil=$request->input('adtil');
        $ad_con=$request->input('ad_con');
        $b_time=$request->input('b_time');
        $e_time=$request->input('e_time');
        $status=$request->input('status');
        $ad_sort=$request->input('ad_sort');
        //echo $con_name;die;
//     $file=  $_FILES['file'];
        $allow_extensions=['png','jpg','gif'];
        $suffix_name=$file->getClientOriginalExtension();// 获得图片的后缀名
        if($suffix_name && !in_array($suffix_name,$allow_extensions)){
            echo 1;die;
        }
        $path=public_path(); //获得公共文件的路径
        $destinationPath=$path.'\img\ad'; //上传文件保存路径
        $fileName=str_random(10).'.'.$suffix_name;//编写新的文件名
        $info= $file->move($destinationPath,$fileName);

        //获得公司的id
        $users=DB::table('company_info')->select('ci_id')->where('ci_name','=',$cname)->get();
        $ci_id=$users[0]->ci_id;

        //添加时间
        $date=date('Y-m-d',time());
        //添加到数据库
        $id = DB::table('ad')->insertGetId(
            ['ci_id' => $ci_id, 'ad_title' => $adtil,'ad_content'=>$ad_con,'new_addtime'=>$date,'ad_img'=>$fileName,'ad_begin_time'=>$b_time,'ad_end_time'=>$e_time,'ad_status'=>$status,'ad_sort'=>$ad_sort]
        );
        if($id){
            echo 2;
        }
    }


    /**
     * @param Request $request 修改状态
     */
    public function upd_sta(Request $request){
        $ad_id=$request->input('ad_id');
        $tus=$request->input('tus');
        //判断状态
       if($tus==0){
           DB::table('ad') ->where('ad_id', $ad_id) ->update(['ad_status' => 1]);
           echo 1;
       }else{
           DB::table('ad') ->where('ad_id', $ad_id) ->update(['ad_status' => 0]);
           echo 0;
       }
    }

    /**
     * 修改排序
     */
    public function update_sort(Request $request){
        $ad_id=$request->input('id');
        $sort=$request->input('val');

        $arr = DB::select('select ad_sort from kp_ad where ad_sort = ?', [$sort]);
       // $arr1= DB::select('select ad_sort from kp_ad order by ad_sort desc limit 1');

        if($arr){
            echo "该排序已存在";die;
        }
       $bool= DB::table('ad')
            ->where('ad_id', $ad_id)
            ->update(['ad_sort' => $sort]);
        if($bool){
            echo 1;
        }
    }

    /**
     * 删除广告信息
     */
    public function delete_ad(Request $request){
        $ad_id=$request->input('ad_id');
//        echo $ad_id;
        $bool=DB::table('ad')->where('ad_id', '=', $ad_id)->delete();
        if($bool){
            echo 1;
        }
    }
}