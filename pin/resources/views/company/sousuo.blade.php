<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>行家-有点</title>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('')}}css/css.css" />
<script type="text/javascript" src="{{URL::asset('')}}js/jquery.min.js"></script>
</head>
<body>
	<div class="conShow">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">序号</td>
							<td width="170px" class="tdColor">Log</td>
							<td width="135px" class="tdColor">公司名称</td>
							<td width="145px" class="tdColor">联系方式</td>
							<td width="140px" class="tdColor">公司邮箱</td>
							<td width="140px" class="tdColor">公司规模</td>
							<td width="145px" class="tdColor">公司所属领域</td>
							<td width="150px" class="tdColor">公司简称</td>
							<td width="140px" class="tdColor">公司所在地</td>
							<td width="140px" class="tdColor">公司简介</td>
							<td width="150px" class="tdColor">公司网址</td>
							<td width="130px" class="tdColor">操作</td>
						</tr>
						@foreach($company as $k => $v)
						<tr>
							<td>{{$k+1}}</td>
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
							<td>
								<!-- <a href="{{url('connoisseuradd')}}"><img class="operation"
									src="{{URL::asset('')}}img/update.png"></a>  -->
									<img class="operation delban"
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
</body>
</html>
<script>
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