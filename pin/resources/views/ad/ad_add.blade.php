<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>头部-有点</title>
<link rel="stylesheet" type="text/css" href="{{URL::asset('')}}css/css.css" />
<script type="text/javascript" src="{{URL::asset('')}}js/jquery.min.js"></script>
</head>
<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="{{URL::asset('')}}img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
					href="#">广告管理</a>&nbsp;-</span>&nbsp;广告添加
			</div>
		</div>
		<div class="page ">
			<!-- 上传广告页面样式 -->
			<div class="banneradd bor">
				<div class="baTop">
					<span>上传广告</span>
				</div>
				<div class="baBody">
					<div class="bbD">
						公司名称：<input type="text" class="input1" id="com_name" name="cname"/>
					</div>

                    <div class="bbD">
                        广告标题：<input type="text" class="input1" id="ad_title" name="adtil"/>
                    </div>

                    <div class="bbD">
                        广告简介：<input type="text" class="input1" id="ad_content" name="ad_con"/>
                    </div>

                    <div class="bbD">
                        展示时间：<input type="text" class="input1" id="begin_time" name="b_time"/>--<input type="text" class="input1" id="end_time" name="e_time"/>(格式：0000-00-00 00:00:00)
                    </div>
					<div class="bbD">
                        &nbsp;&nbsp;&nbsp;进度条：<progress id="progressBar" value="0" max="100"> </progress>
                        <span id="percentage"></span><br>
						上传图片：
						<div class="bbDd">
							<div class="bbDImg">+</div>
							<input type="file" class="file" id="file" name="myfile"/>
						</div>

                    </div>

					<div class="bbD">
						是否显示：<label><input type="radio"  name="status" value="1"/>是</label> <label><input
							type="radio" name="status" value="0"/>否</label>
					</div>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;排序：<input class="input2" type="text" id="sort" name="ad_sort"/>
					</div>
					<div class="bbD">
						<p class="bbDP">
							<button class="btn_ok btn_yes" onclick="UpladFile()">提交</button>
							<a class="btn_ok btn_no" href="#">取消</a>
						</p>
					</div>
				</div>
			</div>
			<!-- 上传广告页面样式end -->
		</div>
	</div>
</body>
</html>

<script>
    //ajax上传
    function UpladFile() {
        //获取公司名称
        var com_name=$("#com_name").val();
        var ad_title=$("#ad_title").val();
        var ad_content=$("#ad_content").val();
        var begin_time=$("#begin_time").val();
        var end_time=$("#end_time").val();
        var sta=$("input[name='status']:checked").val();
        var sort=$("#sort").val();

        var fileObj = document.getElementById("file").files[0]; // js 获取文件对象
        //alert(fileObj);
        var FileController = "{{url('accept')}}";                    // 接收上传文件的后台地址

        // FormData 对象

        var form = new FormData();

        form.append("cname", com_name);                        // 可以增加公司名称
        form.append("adtil", ad_title);                        // 可以增加广告标题
        form.append("ad_con", ad_content);                        // 可以增加广告介绍
        form.append("b_time", begin_time);                         // 可以增加开始时间
        form.append("e_time", end_time);                         // 可以增加结束时间
        form.append("status", sta);                        // 可以增加显示状态
        form.append("ad_sort", sort);                        // 可以增加排序

        form.append("file", fileObj);                           // 文件对象


        // XMLHttpRequest 对象

        var xhr = new XMLHttpRequest();

        xhr.open("post", FileController, true);

//        xhr.onload = function () {
//
//             alert("上传完成!");
//        };
        xhr.onreadystatechange=function(){
            if(xhr.readyState==4 && xhr.status == 200){
                //alert(xhr.responseText);
                if(xhr.responseText==1){
                    alert('图片格式不正确');
                }
                if(xhr.responseText==2){
                    alert('提交成功');
                    location.href="{{url('ad_list')}}";
                }
            }
        }
        xhr.upload.addEventListener("progress", progressFunction, false);
        xhr.send(form);
    }

    function progressFunction(evt) {

        var progressBar = document.getElementById("progressBar");

        var percentageDiv = document.getElementById("percentage");

        if (evt.lengthComputable) {

            progressBar.max = evt.total;

            progressBar.value = evt.loaded;

            percentageDiv.innerHTML = Math.round(evt.loaded / evt.total * 100) + "%";
        }
    }

</script>