<?php
header("Content-type:text/html; charset=utf-8");

//连接数据库配置文件
require_once("init.php");

//新闻列表
if($_REQUEST['action'] && ($_REQUEST['action'] == 'show')) {
	//查询数据
	$sql = "SELECT * FROM news_list";
	$result = $conn->query($sql);
	
	while($row = $result->fetch_array()){
		$row['news_time'] = date("Y-m-d", $row['news_time']);
		$newsList[] = $row;				
	}
}

//删除新闻
if($_REQUEST['action'] && ($_REQUEST['action'] == 'del')) {
	if($_REQUEST['id']) {
		$sql = "DELETE FROM news_list WHERE id = " . $_REQUEST['id'];
		if($conn->query($sql)) {
			header("Location: newsList.php?action=show");
		}
	}
}

//echo "<pre>";
//print_r($newsList);


?>


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
    			margin-bottom: 20px;
    		}
    		table.tb-main tr th, table.tb-main tr td {
    			width: 13%;
    		}
    		table.tb-main tr td a {
    			color: #333333;
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
					<div class="col-md-9"><i></i>新闻管理 > 新闻管理</div>
					<div class="col-md-3"><i></i>2015年3月10日 星期二</div>
				</div>
				<div class="row index-main-add">
					<a href="news-add.php">添加新闻</a>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-striped tb-main">
							<thead>
								<tr>
									<th>ID</th>
									<th>新闻标题</th>
									<th>新闻内容</th>
									<th>新闻图片</th>
									<th>发布日期</th>
									<th>新闻来源</th>
									<th>展示模式</th>
									<th>操作</th>
								</tr>
							</thead>
							<?php	
								if($_REQUEST['action'] && ($_REQUEST['action'] == 'show')){
									foreach($newsList as $k => $v){
										echo "<tr>";
										echo "<td>".$v['id']."</td>";
										echo "<td>".$v['news_title']."</td>";
										echo "<td>".$v['news_content']."</td>";
										echo "<td>".$v['news_pic']."</td>";
										echo "<td>".$v['news_time']."</td>";
										echo "<td>".$v['news_source']."</td>";
										echo "<td>".$v['show_mode']."</td>";
										echo "<td><a href='newsList.php?action=modify&id=".$v['id']."'>修改</a>&nbsp;<a onclick='return confirmDel();' href='newsList.php?action=del&id=".$v['id']."'>删除</a></td>";
									}	
								}
							?>
							
						</table>
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
    
    <script>
    		function confirmDel() {
    			return (confirm("您确定要删除此条数据吗？")) ? true :false;
    		}
    </script>
  </body>
</html>
