<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>行家-有点</title>
<link rel="stylesheet" type="text/css" href="{{URL::asset('')}}css/css.css" />
<script type="text/javascript" src="{{URL::asset('')}}js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="js/page.js" ></script> -->
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
			<!-- banner页面样式 -->
			<div class="connoisseur">
				<div class="conform">
					<form>
						<div class="cfD">
							工作年限：<select><option>1年以内</option></select> 审核状态：<label><input
								type="radio" checked="checked" name="styleshoice1" />&nbsp;未审核</label> <label><input
								type="radio" name="styleshoice1" />&nbsp;已通过</label> <label class="lar"><input
								type="radio" name="styleshoice1" />&nbsp;不通过</label> 推荐状态：<label><input
								type="radio" checked="checked" name="styleshoice2" />&nbsp;是</label><label><input
								type="radio" name="styleshoice2" />&nbsp;否</label>
						</div>
						<!-- 
							<input class="addUser" id="name" name="search" type="text" placeholder="输入简历名称" />
							<button class="button" onclick="fun2()">搜索</button>
						 -->
						 <div class="cfD">
						<input class="addUser" type="text" id="name" placeholder="输入简历名称"/>
						<input type="button" class="button" value="搜索" onclick="fun2()" /></div>
					</form>
				</div>
				<!-- banner 表格 显示 -->
				<div class="conShow">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="200px" class="tdColor tdC">序号</td>
							<td width="200px" class="tdColor">简历名称</td>
							<td width="350px" class="tdColor">发布时间</td>
							<td width="145px" class="tdColor">审核状态</td>
							<!-- <td width="140px" class="tdColor">所在城市</td>
							<td width="140px" class="tdColor">任职机构</td>
							<td width="145px" class="tdColor">行家头衔</td>
							<td width="150px" class="tdColor">本周预约次数</td>
							<td width="140px" class="tdColor">可约时段</td>
							<td width="140px" class="tdColor">审核状态</td>
							<td width="150px" class="tdColor">是否推荐</td>
							<td width="130px" class="tdColor">操作</td> -->
						</tr>
						@foreach($list as $info)
						<tr>
							<td>{{ $info->re_id }}</td>
							<td><div class="onsImg">
									{{ $info->re_name }}
								</div></td>
							<td>{{ $info->re_add_time }}</td>
							<td>
							@if($info->re_status)
								<a href="javascript:void(0)" onclick="fun1({{ $info->re_id }},0)"><img src="{{URL::asset('')}}img/ok.png"/></a>
							@else
								<a href="javascript:void(0)" onclick="fun1({{ $info->re_id }},1)"><img src="{{URL::asset('')}}img/no.png"/></a>
							@endif				
							</td>
							<!-- <td>南京市</td>
							<td>南京设疑网络科技公司哈哈哈</td>
							<td>总监</td>
							<td>3次</td>
							<td>周一周二周三</td>
							<td>未审核</td>
							<td>否</td>
							<td><a href="{{url('connoisseuradd')}}"><img class="operation"
									src="{{URL::asset('')}}img/update.png"></a> <img class="operation delban"
								src="{{URL::asset('')}}img/delete.png"></td> -->
						</tr>
						@endforeach
					</table>
					
					<center>
					
					<?php echo $page ?>

					</center>
				</div>
				<!-- banner 表格 显示 end-->
			</div>
			<!-- banner页面样式end -->
		</div>

	</div>


	<!-- 删除弹出框 -->
	<div class="banDel">
		<div class="delete">
			<div class="close">
				<a><img src="img/shanchu.png" /></a>
			</div>
			<p class="delP1">你确定要删除此条记录吗？</p>
			<p class="delP2">
				<a href="#" class="ok yes">确定</a><a class="ok no">取消</a>
			</p>
		</div>
	</div>
	<!-- 删除弹出框  end-->
</body>
<script type="text/javascript">
// 广告弹出框
$(".delban").click(function(){
  $(".banDel").show();
});
$(".close").click(function(){
  $(".banDel").hide();
});
$(".no").click(function(){
  $(".banDel").hide();
});
// 广告弹出框 end
function fun(p){
	$.ajax({
	   type: "GET",
	   url: "{{url('resume_list')}}",
	   data: "p="+p,
	   success: function(msg){
	     $("#pageAll").html(msg)
	   }
	});
}
function fun1(id,statu){
	$.ajax({
	   type: "GET",
	   url: "{{url('resume_statu')}}",
	   data: "id="+id+"&statu="+statu,
	   success: function(msg){
	     $("#pageAll").html(msg)
	   }
	});
}
function fun2(){
	var val = $("#name").val();
	$.ajax({
	   type: "GET",
	   url: "{{url('resume_search')}}",
	   data: "val="+val,
	   success: function(msg){
	     $("#pageAll").html(msg)
	   }
	});
}
</script>
</html>