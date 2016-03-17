<?php
header("Content-type:text/html; charset=utf-8");

//连接数据库配置文件
require_once("init.php");

if($_REQUEST['submit']) {
	$ntitle = isset($_POST['news-title']) ? trim($_POST['news-title']) : '';				//获取新闻标题
	$ncontent = isset($_POST['news-content']) ? trim($_POST['news-content']) : '';		//获取新闻内容
	$nsource = isset($_POST['news-source']) ? trim($_POST['news-source']) : '';			//获取新闻来源
	$nmode = isset($_POST['show-mode']) ? trim($_POST['show-mode']) : '';				//获取展示模式
	$npic = isset($_POST['newspic-name']) ? trim($_POST['newspic-name']) : '';			//获取新闻图片名
	
	//写入数据库
	$sql = "INSERT INTO `news_list`(`news_title`, `news_content`, `news_time`, `news_source`, `news_pic`,`show_mode`) VALUES ('".$ntitle."','".$ncontent."',".time().",'".$nsource."','".$npic."',".$nmode.")";
	if($conn->query($sql)) {
		echo "<script>alert('添加成功');window.location.href='newsList.php';</script>";
	}else {
		echo "<script>alert('添加失败');</script>";
	}
}

?>

 
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>后台管理系统 - 添加新闻</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   	<link href="css/global.css" rel="stylesheet">
    <link href="css/index-style.css" rel="stylesheet">
    	<link href="css/fileinput.min.css" rel="stylesheet" />
    	<style>
    		a {
    			color: #333;
    		}
    		a:hover {
    			text-decoration: none;
    			color: #333;
    		}
    		.index-main-add a {
    			margin-top: 15px;
    			margin-left: 15px;
    			display: block;
    			width: 120px;
    			height: 45px;
    			line-height: 45px;
    			background-color: #e5e5e5;
    			text-align: center;
    			border-radius: 5px;
    		}
    		table.tb-main {
    			margin-top: 20px;
    			margin-bottom: 50px;
    		}
		.td-left-w {
			width: 115px;
		}
		.input-w {
			width: 500px;
		}
		table.tb-main textarea {
			width: 500px;
			height: 160px;
		}
		.submit {
			width: 200px;
			height: 40px;
			line-height: 40px;
			font-size: 24px;
			border-radius: 5px;
		}
    	</style>

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
    			</div>
    			<div class="index-left-menu">
    				<i></i>
    				<h2 class="btn" role="button" data-toggle="collapse" href="#indexLeftMenuWhgl" aria-expanded="false" aria-controls="indexLeftMenuWhgl"><i></i>其他管理<strong class="index-left-menu-shutdown-icon"></strong></h2>
    			</div>
    			<div class="index-left-menu">
    				<i></i>
    				<h2 class="btn" role="button" data-toggle="collapse" href="#indexLeftMenuBpbj" aria-expanded="false" aria-controls="indexLeftMenuBpbj"><i></i>其他管理<strong class="index-left-menu-shutdown-icon"></strong></h2>
    			</div>
    		</div>
			<div class="col-md-10">
				<div class="row index-main-title">
					<div class="col-md-9"><i></i>新闻管理 > 新闻管理</div>
					<div class="col-md-3"><i></i>2015年3月10日 星期二</div>
				</div>
				<div class="row index-main-add">
					<a href="news-add.php">添加新闻</a>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<form action="news-add.php?action=add" method="post">
							<table class="table table-striped tb-main">
								<tr>
									<td class="td-left-w">新闻标题：</td>
									<td><input type="text" name="news-title" value="" class="input-w" /></td>
								</tr>
								<tr>
									<td class="td-left-w">新闻内容：</td>
									<td><textarea name="news-content"></textarea></td>
								</tr>
								<tr>
									<td class="td-left-w">新闻来源：</td>
									<td><input type="text" name="news-source" value=""  class="input-w" /></td>
								</tr>
								<tr>
									<td class="td-left-w">展示模式：</td>
									<td>
										<select name="show-mode">
											<option value="0">请选择展示模式</option>
											<option value="1">单图模式</option>
											<option value="2">无图模式</option>
											<option value="3">多图模式</option>
										</select>
									</td>
								</tr>
								<tr>
									<td class="td-left-w">上传图片：</td>
									<td>
										<label class="control-label">上传新闻图片</label>
										<input id="upload-newspic" name="upload-newspic[]" type="file" multiple class="file-loading">
									</td>
								</tr>
								
								<tr>
									<td colspan="2">
										<input type="submit" name="submit" value="提交" class="submit" />
									</td>
								</tr>
							</table>
							<input type="hidden" name="newspic-name" value="" id="newspicname" />
						</form>
						
					</div>
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
    <script src="js/fileinput.min.js"></script>
    <script src="js/fileinput_locale_zh.js"></script>
   <script>
	   	$(document).on('ready', function() {
		    $("#upload-newspic").fileinput({ 
		    		language: "zh",
		    		uploadUrl: "http://localhost/learn/8/admin/upload_newspic.php",
		        allowedFileExtensions: ["jpg", "gif", "png", "jpeg"],
		        uploadAsync: true
		    });
			
			$("#upload-newspic").on("fileuploaded", function(data,event,previewId,index){
				if(event.response != "error") {
					$("#newspicname").val(event.response);
				}
			});
		});
   </script>
  </body>
</html>
