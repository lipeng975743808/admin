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
					href="#">企业管理</a>&nbsp;-</span>&nbsp;企业列表
			</div>
		</div>

		<div class="page">
			<!-- banner页面样式 -->
			<div class="connoisseur">
				<div class="conform">
					<form>
						<div class="cfD">
							搜索：<input class="addUser" type="text" placeholder="输入公司名称/公司所在地" id='seek' onkeyup='sousuo()'/>
							<!-- <input type="button" onclick='sousuo()' value='搜索'>  -->
							
						</div>
					</form>
				</div>
				<!-- banner 表格 显示 -->
				<div class="conShow" id='div'>
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">序号</td>
							<td width="170px" class="tdColor">Log</td>
							<td width="135px" class="tdColor">公司名称</td>
							<td width="145px" class="tdColor">联系方式</td>
							<td width="140px" class="tdColor">公司邮箱</td>
							<td width="140px" class="tdColor">公司规模</td>
							<td width="160px" class="tdColor">所属领域</td>
							<td width="150px" class="tdColor">公司简称</td>
							<td width="140px" class="tdColor">公司所在地</td>
							<td width="140px" class="tdColor">公司简介</td>
							<td width="150px" class="tdColor">公司网址</td>
							<td width="130px" class="tdColor">操作</td>
						</tr>
						@foreach($company as $k => $v)
						<tr>
							<td>{{$v->ci_id}}</td>
							<td><div class="onsImg">
									<img src="{{URL::asset('')}}img/banimg.png">
								</div></td>
							<td>{{$v->ci_name}}</td>
							<td>{{$v->ci_phone}}</td>
							<td>{{$v->ci_email}}</td>
							<td>{{$v->ci_scale}}</td>
							<td>{{$v->ci_field}}</td>
							<td>{{$v->ci_ming}}</td>
							<td>{{$v->ci_city}}</td>
							<td>{{$v->ci_content}}</td>
							<td>{{$v->ci_url}}</td>
							<td><!-- <a href="{{url('connoisseuradd')}}"><img class="operation"
									src="{{URL::asset('')}}img/update.png"></a> --> <img class="operation delban"
								src="{{URL::asset('')}}img/delete.png"></td>
						</tr>
						@endforeach
					</table>
					
					<div class="paging">
						<a href="javascript:fun(1)">首页</a>
						<a href="javascript:fun(<?php echo $data['page_up']?>)">上一页</a>
						<a href="javascript:fun(<?php echo $data['page_down']?>)">下一页</a>
						<a href="javascript:fun(<?php echo $data['endpage']?>)">尾页</a>
					</div>
					
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
// 广告弹出框 


	//搜索
	function sousuo()
	{
		// alert(1)
		var seek=$('#seek').val();
		// alert(seek);
		$.ajax({
	   	   type: "POST",
		   url: "{{url('seek')}}",
		   data: "seek="+seek,
		   success: function(msg){
		     // alert(msg);
		     $('#div').html(msg);
		   }
		});		
	}

	//分页
	function fun(p)
	{
		$.ajax({
         type: "GET",
         url:"{{url('list1')}}",
         data: "p="+p,
         success: function(msg)
         {
            $("body").html(msg)
         }
    })  
	}
</script>
</html>