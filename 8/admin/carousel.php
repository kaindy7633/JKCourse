<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>后台管理系统 - 首页轮播管理</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   	<link href="css/global.css" rel="stylesheet">
    <link href="css/index-style.css" rel="stylesheet">
    	<link href="css/fileinput.min.css" rel="stylesheet" />

    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- 主体 -->
    <div class="container-fluid">
    	<!-- 顶端 -->
    	<div class="row-fluid index-top">
    		<div class="col-md-2 index-top-left">
    			<div class="index-top-logo"><img src="images/index-logo.png" alt="ibm" /></div>
    			<a href="javascript:;"></a>
    		</div>
    		<div class="col-md-10 index-top-right">
    			<div class="index-top-title">新闻管理系统</div>
    			<div class="index-top-menu">
    				<ul>
    					<li>管理员您好，欢迎光临XXX</li>
    					<li><a href="javascript:;"><i></i></a></li>
    					<li><a href="javascript:;"><i></i></a></li>
    					<li><a href="javascript:;"><i></i></a></li>
    					<li><a href="javascript:;"><i></i></a></li>
    					<li>
    						<span class="index-top-menu-last-icon"></span>
    						<span class="index-top-menu-last-downdrop">
    							<span class="btn-group">
								  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    中文 (简体)<span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu">
								    <li><a href="#">英文(English)</a></li>
								    <li><a href="#">日文(Japan)</a></li>
								    <li><a href="#">韩文(Koren)</a></li>
								  </ul>
								</span>
    						</span>
    					</li>
    				</ul>
    			</div>
    		</div>
    	</div>
    	<!-- 主体内容 -->
    	<div class="row-fluid index-main">
    		<div class="col-md-2 index-left">
    			<div class="index-left-menu">
    				<h2 class="btn" role="button" data-toggle="collapse" href="#indexLeftMenuJkzx" aria-expanded="false" aria-controls="indexLeftMenuJkzx"><i></i>新闻管理<strong class="index-left-menu-shutdown-icon"></strong></h2>
    				<ul class="collapse" id="indexLeftMenuJkzx">
    					<li><a class="bdr-btm" href="carousel.php"><i class="childItemIcon"></i>轮播管理</a></li>
    					<li><a class="bdr-btm" href="newsList.php?action=show"><i class="childItemIcon"></i>新闻管理</a></li>
    				</ul>
    			</div>
    			<div class="index-left-menu">
    				<i></i>
    				<h2 class="btn" role="button" data-toggle="collapse" href="#indexLeftMenuYxgl" aria-expanded="false" aria-controls="indexLeftMenuYxgl"><i></i>其他管理<strong class="index-left-menu-shutdown-icon"></strong></h2>
    				<!--<ul class="collapse" id="indexLeftMenuYxgl">
    					<li><a class="bdr-btm" href="javascript:;"><i class="childItemIcon"></i>警报总揽</a></li>
    					<li><a class="bdr-btm" href="javascript:;"><i class="childItemIcon"></i>警报列表</a></li>
    					<li><a class="bdr-btm" href="javascript:;"><i class="childItemIcon"></i>警报模板</a></li>
    					<li><a class="bdr-btm" href="javascript:;"><i class="childItemIcon"></i>运行总揽</a></li>
    					<li><a class="bdr-btm" href="javascript:;"><i class="childItemIcon"></i>运行监控</a></li>
    					<li><a class="bdr-btm" href="javascript:;"><i class="childItemIcon"></i>生产计划</a></li>
    					<li><a class="bdr-btm" href="javascript:;"><i class="childItemIcon"></i>分发电站</a></li>
    					<li><a href="javascript:;"><i class="childItemIcon"></i>警报配置</a></li>
    				</ul>-->
    			</div>
    			<div class="index-left-menu">
    				<i></i>
    				<h2 class="btn" role="button" data-toggle="collapse" href="#indexLeftMenuWhgl" aria-expanded="false" aria-controls="indexLeftMenuWhgl"><i></i>其他管理<strong class="index-left-menu-shutdown-icon"></strong></h2>
    				<!--<ul class="collapse" id="indexLeftMenuWhgl">
    					<li><a class="bdr-btm" href="javascript:;"><i class="childItemIcon"></i>子菜单一</a></li>
    					<li><a class="bdr-btm" href="javascript:;"><i class="childItemIcon"></i>子菜单二</a></li>
    					<li><a class="bdr-btm" href="javascript:;"><i class="childItemIcon"></i>子菜单三</a></li>
    				</ul>-->
    			</div>
    			<div class="index-left-menu">
    				<i></i>
    				<h2 class="btn" role="button" data-toggle="collapse" href="#indexLeftMenuBpbj" aria-expanded="false" aria-controls="indexLeftMenuBpbj"><i></i>其他管理<strong class="index-left-menu-shutdown-icon"></strong></h2>
    				<!--<ul class="collapse" id="indexLeftMenuBpbj">
    					<li><a class="bdr-btm" href="javascript:;"><i class="childItemIcon"></i>子菜单一</a></li>
    					<li><a class="bdr-btm" href="javascript:;"><i class="childItemIcon"></i>子菜单二</a></li>
    					<li><a class="bdr-btm" href="javascript:;"><i class="childItemIcon"></i>子菜单三</a></li>
    				</ul>-->
    			</div>
    		</div>
			<div class="col-md-10">
				<div class="row index-main-title">
					<div class="col-md-9"><i></i>新闻管理 > 轮播图管理</div>
					<div class="col-md-3"><i></i>2015年3月10日 星期二</div>
				</div>
				<div class="row index-main-upload" style="width:500px;margin:30px auto;">
						<label class="control-label">选择轮播图并上传</label>
						<input id="upload-carousel" name="upload-carousel[]" type="file" multiple class="file-loading">
				</div>
			</div>
    	</div>
    	<!-- 脚注 -->
    	<div class="row-fluid">
    		<div class="col-md-12 footer">CopyRight &copy; 2005-2015 TDENERGYs. All Rights Reserved</div>
    	</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- bootstrap file input -->
    <script src="js/fileinput.min.js"></script>
    <script src="js/fileinput_locale_zh.js"></script>
   <script>
   	$(document).on('ready', function() {
	    $("#upload-carousel").fileinput({ 
	    		language: "zh",
	    		uploadUrl: "http://localhost/learn/8/admin/uploadimg.php",
	        allowedFileExtensions: ["jpg", "gif", "png", "jpeg"],
	        uploadAsync: true
	    });
		
		$("#upload-carousel").on("fileuploaded", function(data,event,previewId,index){
			if(event.response == "success") {
				alert("上传成功!");
				window.location.reload();
			}else {
				alert("Error");
				return false;
			}
		});
	});
	
	
   </script>
  </body>
</html>
