<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页左侧导航</title>
<link rel="stylesheet" type="text/css" href="{{URL::asset('')}}css/public.css" />
<script type="text/javascript" src="{{URL::asset('')}}js/jquery.min.js"></script>
<script type="text/javascript" src="{{URL::asset('')}}js/public.js"></script>
<head></head>

<body id="bg">
	<!-- 左边节点 -->
	<div class="container">

		<div class="leftsidebar_box">
			<a href="../main.html" target="main"><div class="line">
					<img src="{{URL::asset('')}}img/coin01.png" />&nbsp;&nbsp;首页
				</div></a>
			<!-- <dl class="system_log">
			<dt><img class="icon1" src="{{URL::asset('')}}img/coin01.png" /><img class="icon2"src="{{URL::asset('')}}img/coin02.png" />
				首页<img class="icon3" src="{{URL::asset('')}}img/coin19.png" /><img class="icon4" src="{{URL::asset('')}}img/coin20.png" /></dt>
		</dl> -->
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{URL::asset('')}}img/coin03.png" /><img class="icon2"
						src="{{URL::asset('')}}img/coin04.png" /> 网站管理<img class="icon3"
						src="{{URL::asset('')}}img/coin19.png" /><img class="icon4"
						src="{{URL::asset('')}}img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="{{URL::asset('')}}img/coin111.png" /><img class="coin22"
						src="{{URL::asset('')}}img/coin222.png" /><a class="cks" href="{{url('user')}}"
						target="main">管理员管理</a><img class="icon5" src="{{URL::asset('')}}img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{URL::asset('')}}img/coin05.png" /><img class="icon2"
						src="{{URL::asset('')}}img/coin06.png" /> 企业管理<img class="icon3"
						src="{{URL::asset('')}}img/coin19.png" /><img class="icon4"
						src="{{URL::asset('')}}img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="{{URL::asset('')}}img/coin111.png" /><img class="coin22"
						src="{{URL::asset('')}}img/coin222.png" /><a class="cks" href="{{url('list1')}}"
						target="main">企业列表</a><img class="icon5" src="{{URL::asset('')}}img/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="{{URL::asset('')}}img/coin111.png" /><img class="coin22"
						src="{{URL::asset('')}}img/coin222.png" /><a class="cks" href="{{url('shenhe')}}"
						target="main">职位审核</a><img class="icon5" src="{{URL::asset('')}}img/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="{{URL::asset('')}}img/coin111.png" /><img class="coin22"
						src="{{URL::asset('')}}img/coin222.png" /><a class="cks" href="{{url('guwen')}}"
						target="main">企业顾问</a><img class="icon5" src="{{URL::asset('')}}img/coin21.png" />
				</dd>	
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{URL::asset('')}}img/coin07.png" /><img class="icon2"
						src="{{URL::asset('')}}img/coin08.png" /> 会员管理<img class="icon3"
						src="{{URL::asset('')}}img/coin19.png" /><img class="icon4"
						src="{{URL::asset('')}}img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="{{URL::asset('')}}img/coin111.png" /><img class="coin22"
						src="{{URL::asset('')}}img/coin222.png" /><a href="{{url('user_list')}}" target="main"
						class="cks">会员列表</a><img class="icon5" src="{{URL::asset('')}}img/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="{{URL::asset('')}}img/coin111.png" /><img class="coin22"
						src="{{URL::asset('')}}img/coin222.png" /><a href="{{url('user_list')}}" target="main"
						class="cks">简历列表</a><img class="icon5" src="{{URL::asset('')}}img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{URL::asset('')}}img/coin10.png" /><img class="icon2"
						src="{{URL::asset('')}}img/coin09.png" /> 广告管理<img class="icon3"
						src="{{URL::asset('')}}img/coin19.png" /><img class="icon4"
						src="{{URL::asset('')}}img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="{{URL::asset('')}}img/coin111.png" /><img class="coin22"
						src="{{URL::asset('')}}img/coin222.png" /><a href="{{url('ad_add')}}"
						target="main" class="cks">添加广告</a><img class="icon5"
						src="{{URL::asset('')}}img/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="{{URL::asset('')}}img/coin111.png" /><img class="coin22"
						src="{{URL::asset('')}}img/coin222.png" /><a href="{{url('ad_list')}}"
						target="main" class="cks">广告列表</a><img class="icon5"
						src="{{URL::asset('')}}img/coin21.png" />
				</dd>
			</dl>
			<!-- <dl class="system_log">
				<dt>
					<img class="icon1" src="{{URL::asset('')}}img/coin11.png" /><img class="icon2"
						src="{{URL::asset('')}}img/coin12.png" /> 话题管理<img class="icon3"
						src="{{URL::asset('')}}img/coin19.png" /><img class="icon4"
						src="{{URL::asset('')}}img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="{{URL::asset('')}}img/coin111.png" /><img class="coin22"
						src="{{URL::asset('')}}img/coin222.png" /><a href="../topic.html" target="main"
						class="cks">话题管理</a><img class="icon5" src="{{URL::asset('')}}img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{URL::asset('')}}img/coin14.png" /><img class="icon2"
						src="{{URL::asset('')}}img/coin13.png" /> 心愿管理<img class="icon3"
						src="{{URL::asset('')}}img/coin19.png" /><img class="icon4"
						src="{{URL::asset('')}}img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="{{URL::asset('')}}img/coin111.png" /><img class="coin22"
						src="{{URL::asset('')}}img/coin222.png" /><a href="../wish.html" target="main"
						class="cks">心愿管理</a><img class="icon5" src="{{URL::asset('')}}img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{URL::asset('')}}img/coin15.png" /><img class="icon2"
						src="{{URL::asset('')}}img/coin16.png" /> 约见管理<img class="icon3"
						src="{{URL::asset('')}}img/coin19.png" /><img class="icon4"
						src="{{URL::asset('')}}img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="{{URL::asset('')}}img/coin111.png" /><img class="coin22"
						src="{{URL::asset('')}}img/coin222.png" /><a href="../appointment.html"
						target="main" class="cks">约见管理</a><img class="icon5"
						src="{{URL::asset('')}}img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{URL::asset('')}}img/coin17.png" /><img class="icon2"
						src="{{URL::asset('')}}img/coin18.png" /> 收支管理<img class="icon3"
						src="{{URL::asset('')}}img/coin19.png" /><img class="icon4"
						src="{{URL::asset('')}}img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="{{URL::asset('')}}img/coin111.png" /><img class="coin22"
						src="{{URL::asset('')}}img/coin222.png" /><a href="../balance.html"
						target="main" class="cks">收支管理</a><img class="icon5"
						src="{{URL::asset('')}}img/coin21.png" />
				</dd>
			</dl> -->
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{URL::asset('')}}img/coinL1.png" /><img class="icon2"
						src="{{URL::asset('')}}img/coinL2.png" /> 系统管理<img class="icon3"
						src="{{URL::asset('')}}img/coin19.png" /><img class="icon4"
						src="{{URL::asset('')}}img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="{{URL::asset('')}}img/coin111.png" /><img class="coin22"
						src="{{URL::asset('')}}img/coin222.png" /><a href="{{url('update')}}"
						target="main" class="cks">修改密码</a><img class="icon5"
						src="{{URL::asset('')}}img/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="{{URL::asset('')}}img/coin111.png" /><img class="coin22"
						src="{{URL::asset('')}}img/coin222.png" /><a href="{{url('/')}}" class="cks">退出</a><img
						class="icon5" src="{{URL::asset('')}}img/coin21.png" />
				</dd>
			</dl>

		</div>

	</div>
</body>
</html>
