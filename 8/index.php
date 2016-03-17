<?php
	header("Content-type: application/json; charset=utf-8")	;
	
	//定义数据库常量
	define("SERVERNAME", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("DATABASE", "myNews");
	
	//链接数据库
	$conn = new mysqli(SERVERNAME, USER, PASS, DATABASE);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} else {
		$resData = array("carousel"=>"", "newslist"=>"");		//定义存放结果数组
	
		$requestArg = $_POST['requestTime'];						//获取请求参数
		if($requestArg == "first") {								//页面加载第一次请求数据
			$sql = "SELECT * FROM news_carousel ORDER BY id DESC LIMIT 5";				//获取轮播图数据
			$result = $conn->query($sql);
			while($row = $result->fetch_array()){				//轮播图数据存入结果数组
				$resData["carousel"][] = $row;				
			}
			
			$sql = "SELECT * FROM news_hotlist";					//获取热点信息数据
			$result = $conn->query($sql);
			while($row = $result->fetch_array()){				
				$resData["hotnews"][] = $row;				
			}
				
			$sql = "SELECT * FROM news_list LIMIT 5";			//获取新闻列表数据
			$result = $conn->query($sql);
			while($row = $result->fetch_array()){
				$resData["newslist"][] = $row;	
			}
			
			echo json_encode($resData);
		}
		
		//加载更多新闻
		if($requestArg == "loadmore") {		
			$sql = "SELECT * FROM news_list WHERE id > 5";
			$result = $conn->query($sql);
			while($row = $result->fetch_array()){
				$moreData[] = $row;	
			}
			echo json_encode($moreData);
		}
	}
	
	$conn->close();
?>