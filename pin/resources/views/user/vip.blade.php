<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员管理-有点</title>
<link rel="stylesheet" type="text/css" href="{{URL::asset('')}}css/css.css" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('')}}css/manhuaDate.1.0.css">
	<script type="text/javascript" src="{{URL::asset('')}}js/jquery.min.js"></script>
	<script type="text/javascript" src="{{URL::asset('')}}js/manhuaDate.1.0.js"></script>
	<script type="text/javascript" src="{{URL::asset('')}}js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="{{URL::asset('')}}js/jquery1.8.js"></script>
	<!-- <script type="text/javascript" src="js/page.js" ></script> -->
	<script type="text/javascript">
$(function (){
  $("input.mh_date").manhuaDate({
    Event : "click",//可选               
    Left : 0,//弹出时间停靠的左边位置
    Top : -16,//弹出时间停靠的顶部边位置
    fuhao : "-",//日期连接符默认为-
    isTime : false,//是否开启时间值默认为false
    beginY : 1949,//年份的开始默认为1949
    endY :2100//年份的结束默认为2049
  });
});
</script>
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="{{URL::asset('')}}img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
					href="#">公共管理</a>&nbsp;-</span>&nbsp;意见管理
			</div>
		</div>

		<div class="page">
			<!-- vip页面样式 -->
			<div class="vip">
				<div class="conform">
					<form>
						<div class="cfD">
							时间段：<input class="vinput mh_date" type="text" readonly="true" />&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
							<input class="vinput mh_date" type="text" readonly="true" />
						</div>
						<div class="cfD">
							<input class="addUser" type="text" placeholder="输入用户名/ID/手机号/城市" />
							<!-- <button class="button" onclick="bu()">搜索</button> -->
							<input type="button" class="button" value="搜索" />
							<a class="addA addA1" href="vipadd.html">新增会员+</a>
							 <a class="addA addA1 addA2" href="vipadd.html">密码重置</a>
						</div>
					</form>
				</div>
				<!-- vip 表格 显示 -->
				<div class="conShow">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">序号</td>
							<td width="250px" class="tdColor">头像</td>
							<td width="188px" class="tdColor">姓名</td>
							<td width="235px" class="tdColor">手机号码</td>
							<td width="220px" class="tdColor">所在城市</td>
							<td width="290px" class="tdColor">会员余额</td>
							<td width="282px" class="tdColor">注册时间</td>
							<td width="130px" class="tdColor">操作</td>
						</tr>
						@foreach($arr as $val)
						<tr class="trs" id="a_{{$val->u_id}}">
							<td>{{$val->u_id}}</td>
							<td><div class="onsImg onsImgv">
									<img src="{{URL::asset('')}}img/banimg.png">
								</div></td>
							<td>{{$val->i_name}}</td>
							<td>{{$val->iphone}}</td>
							<td>{{$val->i_native}}</td>
							<td>0.00<input class="vipinput" type="text" /><a
								class="vsAdd">增加</a></td>
							<td>{{$val->birth_date}}</td>
							<td>
								<input type="hidden" id='haha' value="{{$val->u_id}}" />
								<a href="connoisseuradd.html">
									<img class="operation" src="{{URL::asset('')}}img/update.png">
								</a>
								    <img class="operation delban" src="{{URL::asset('')}}img/delete.png">
							</td>
						</tr>
						@endforeach
					</table>
					<div class="paging"><?php echo $str?></div>
					<div id="divs"></div>
				</div>
				<!-- vip 表格 显示 end-->
			</div>
			<!-- vip页面样式end -->
		</div>

	</div>


	<!-- 删除弹出框 -->
	<div class="banDel">
		
		<div class="delete">
			<div class="close">
				<a><img src="{{URL::asset('')}}img/shanchu.png" /></a>
			</div>
			<p class="delP1">你确定要删除此条记录吗？</p>
			
			<p class="delP2">
				
				<a href="javascript:del()" class="ok yes">确定</a><a class="ok no">取消</a>
				
			</p>
			
		</div>
		
	</div>
	<!-- 删除弹出框  end-->
</body>
<script>
	function del()
	{
		var id =$(".yes").attr('id');
		$.get("{{url('del')}}",{"id":id},function(msg){
			 $("#a_"+id).remove();
			 $(".banDel").hide();
		})
	}
	function page(p)
	{
		$.get("{{url('user_list')}}",{"p":p},function(msg){
			 $("body").html(msg);
		})
	}
	$(".button").click(function(){
		var pr=$(".addUser").val();
		$.get("user_search",{"p":pr},function(msg){
			var ar=eval('('+msg+')');
			var str='';
    		for(a in ar )
    		{
    				str+='<tr class="trs" id="a_'+ar[a].u_id+'">'
							str+='<td>'+ar[a].u_id+'</td>'
							str+='<td><div class="onsImg onsImgv">'
									str+='<img src="{{URL::asset('')}}img/banimg.png">'
								str+='</div></td>'
							str+='<td>'+ar[a].i_name+'</td>'
							str+='<td>'+ar[a].iphone+'</td>'
							str+='<td>'+ar[a].i_native+'</td>'
							str+='<td>0.00<input class="vipinput" type="text" /><a class="vsAdd">增加</a></td>'
							str+='<td>'+ar[a].birth_date+'</td>'
							str+='td>'
								str+='<input type="hidden" id="haha" value="'+ar[a].u_id+'" />'
								str+='<a href="connoisseuradd.html">'
									str+='<img class="operation" src="{{URL::asset('')}}img/update.png">'
								str+='</a>'
								   str+=' <img class="operation delban" src="{{URL::asset('')}}img/delete.png">'
							str+='</td>'
						str+='</tr>'
			}
			var $tr=$("tr").last();
					$tr.after(str);
		})
	})
// function bu()
// 	{
// 		var pr=$(".addUser").val();
// 		var url="{{url('sel')}}";
// 		// http://www.insist.com/admin/pin/public/sel
// 		// alert(url)
// 		var data={'p':pr};
// 		$.get(url,data,function(msg){
// 			  alert(msg)
// 		})
// 	}
</script>
<script type="text/javascript">
// 广告弹出框
$(".delban").click(function(){
	var a = $(this).parents().parents()
	var td = a.children("td:eq(0)");
    $(".yes").attr('id',td.text())
    $(".banDel").show();
});
$(".close").click(function(){
  $(".banDel").hide();
});
$(".no").click(function(){
  $(".banDel").hide();
});
// 广告弹出框 end
</script>
</html>