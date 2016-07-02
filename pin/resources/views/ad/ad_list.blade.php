<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>广告-有点</title>
<link rel="stylesheet" type="text/css" href="{{URL::asset('')}}css/css.css" />
<script type="text/javascript" src="{{URL::asset('')}}js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="js/page.js" ></script> -->
    <style>
        ul { list-style:none;}
        #pagelist {width:600px; margin:30px auto; padding:6px 0px; height:20px;}
        #pagelist ul li { float:left; border:1px solid #5d9cdf; height:20px; line-height:20px; margin:0px 2px;}
        #pagelist ul li a, .pageinfo { display:block; padding:0px 6px; background:#e6f2fe;}
        .pageinfo  { color:#555;}
        .current { background:#a9d2ff; display:block; padding:0px 6px; font-weight:bold;}
    </style>
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="{{URL::asset('')}}img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
					href="#">广告管理</a>&nbsp;-</span>&nbsp;广告列表
			</div>
		</div>
		<div class="page">
			<!-- banner页面样式 -->
			<div class="banner">
				<div class="add">
					<a class="addA" href="{{url('banneradd')}}">上传广告&nbsp;&nbsp;+</a>
				</div>
				<!-- banner 表格 显示 -->
				<div class="banShow">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">序号</td>
							<td width="315px" class="tdColor">图片</td>
							<td width="308px" class="tdColor">所属公司</td>
							<td width="450px" class="tdColor">链接</td>
                            <td width="450px" class="tdColor">展示时间和下架时间</td>
							<td width="215px" class="tdColor">是否显示</td>
							<td width="180px" class="tdColor">排序</td>
							<td width="125px" class="tdColor">操作</td>
						</tr>
						{{--<tr>--}}
							{{--<td>1</td>--}}
							{{--<td><div class="bsImg">--}}
									{{--<img src="{{URL::asset('')}}img/banimg.png">--}}
								{{--</div></td>--}}
							{{--<td>双十一连天购</td>--}}
							{{--<td><a class="bsA" href="#">http://www.sdfsdfsdfds.com</a></td>--}}
							{{--<td>是</td>--}}
							{{--<td>1</td>--}}
							{{--<td><a href="{{url('connoisseuradd')}}"><img class="operation"--}}
									{{--src="{{URL::asset('')}}img/update.png"></a> <img class="operation delban"--}}
								{{--src="{{URL::asset('')}}img/delete.png"></td>--}}
						{{--</tr>--}}
						{{--<tr>--}}
							{{--<td>1</td>--}}
							{{--<td><div class="bsImg">--}}
									{{--<img src="{{URL::asset('')}}img/banimg.png">--}}
								{{--</div></td>--}}
							{{--<td>双十一连天购</td>--}}
							{{--<td><a class="bsA" href="#">http://www.sdfsdfsdfds.com</a></td>--}}
							{{--<td>是</td>--}}
							{{--<td>1</td>--}}
							{{--<td><a href="{{url('connoisseuradd')}}"><img class="operation"--}}
									{{--src="{{URL::asset('')}}img/update.png"></a> <img class="operation delban"--}}
								{{--src="{{URL::asset('')}}img/delete.png"></td>--}}
						{{--</tr>--}}
                        @foreach($arr as $v)
                        <tr>
                        <td>{{$v->ad_id}}</td>
                        <td><div class="bsImg">
                        <img src="{{URL::asset('')}}img/ad/{{$v->ad_img}}">
                        </div></td>
                        <td>{{$v->ci_name}}</td>
                        <td><a class="bsA" href="#">http://www.kuaipin.com/kuaipin/kuaipin1/index.php?r=company_list/home&cid={{$v->ci_id}}</a></td>
                        <td><span class="name1">{{$v->ad_begin_time}}<br><br>{{$v->ad_end_time}}</span></td>
                        <td>
                            @if($v->ad_status==0)
                                <a href="javascript:void(0)" onclick="cge(this)" class="{{$v->ad_id}}" sid="{{$v->ad_status}}"><img src="{{URL::asset('')}}img/no.png"></a>
                            @else
                                <a href="javascript:void(0)" onclick="cge(this)" class="{{$v->ad_id}}" sid="{{$v->ad_status}}"><img src="{{URL::asset('')}}img/ok.png"></a>
                            @endif
                        </td>
                        <td value="{{$v->ad_id}}"><span class="name">{{$v->ad_sort}}</span></td>
                        <td > <img class="operation delban"
                        src="{{URL::asset('')}}img/delete.png" value="{{$v->ad_id}}"></td>
                        </tr>
                        @endforeach
					</table>
					<div class="paging" id="pagelist">
                            <ul>
                                <li><a href="{{url('ad_list/1')}}">首页</a></li>
                                <li><a href="{{URL::asset('index.php/ad_list')}}/{{$up}}">上页</a></li>
                                @for ($i = 1; $i <= $pages ; $i++)
                                    <li><a href="{{URL::asset('index.php/ad_list')}}/{{$i}}">{{$i}}</a></li>
                                @endfor
                                <li><a href="{{URL::asset('index.php/ad_list')}}/{{$next}}">下页</a></li>
                                <li><a href="{{URL::asset('index.php/ad_list')}}/{{$pages}}">尾页</a></li>
                                <li class="pageinfo">第{{$page}}页</li>
                                <li class="pageinfo">共{{$pages}}页</li>
                            </ul>
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
				<a><img src="{{URL::asset('')}}img/shanchu.png" /></a>
			</div>
			<p class="delP1">你确定要删除此条记录吗？</p>
			<p class="delP2">
				<a href="#" class="ok yes" onclick="del()">确定</a><a class="ok no">取消</a>
			</p>
		</div>
	</div>
	<!-- 删除弹出框  end-->
</body>

<script type="text/javascript">
// 广告弹出框
$(".delban").click(function(){
    var zhi=$(this).attr('value');
  $(".banDel").show();
    $(".ok").attr('cid',zhi);
});
$(".close").click(function(){
  $(".banDel").hide();
});
$(".no").click(function(){
  $(".banDel").hide();
});
// 广告弹出框 end

function del(){
//    var input=document.getElementsByName("check[]");
//    for(var i=input.length-1; i>=0;i--){
//       if(input[i].checked==true){
//           //获取td节点
//           var td=input[i].parentNode;
//          //获取tr节点
//          var tr=td.parentNode;
//          //获取table
//          var table=tr.parentNode;
//          //移除子节点
//          table.removeChild(tr);
//        }
//    }
    var zhi=$(".ok").attr('cid');
    $.ajax({
        type: "POST",
        url: "{{url('del_ad')}}",
        data: "ad_id="+zhi,
        success: function(msg){
                   if(msg==1){
                       $(".banDel").hide();
                       window.location.reload();
                   }else{
                       alert('删除失败')
                   }
        }
    });
}

    function cge(ts){
        var zhi=ts.getAttribute('class')
        var sta=ts.getAttribute('sid')
            $.ajax({
                type: "POST",
                url: "{{url('status')}}",
                data: "ad_id="+zhi+"&tus="+sta,
                success: function(msg){
                    if(msg==1){
                        ts.setAttribute('sid',1)
                        ts.innerHTML="<img src='http://www.kuaipin.com/admin/pin/public/img/ok.png'>";
                    }else{
                        ts.setAttribute('sid',0)
                        ts.innerHTML="<img src='http://www.kuaipin.com/admin/pin/public/img/no.png'>";
                    }

//                   alert(msg)
                }
            });
    }

    //即点即改
    //修改排序
    
    $(document).on('click','.name',function(){
        old_val=$(this).html();
        $(this).parent().html("<input type=\'text\' class='val1' value="+old_val+">");
        $('input').focus();
    })

$(document).on('blur','.val1',function(){
    var obj=$(this);
    var id=$(this).parent().attr('value'); //获取要修改内容的id
    var val=$(this).val(); //获取修改后的值
    $.ajax({
        type:'post',
        url:'{{url('upd_sort')}}',
        data:{
            id:id,
            val:val
        },
        success:function(msg){
            if(msg == 1){
                $('td[value='+id+']').html("<span class='name'>"+val+"</span>")
            }else{
                alert(msg);
                obj.parent().html("<span class='name'>"+old_val+"</span>")
            }
        }
    })
})

   
</script>
</html>