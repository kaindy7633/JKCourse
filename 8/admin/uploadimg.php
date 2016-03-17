<?php


echo "success"; exit;

require_once("init.php");

/* 轮播图上传 */
if(is_uploaded_file($_FILES['upload-carousel']['tmp_name'][0])){
	
	$tmp =  $_FILES['upload-carousel']['tmp_name'][0];
	$imgpath = "../images/slide/";
	$newFileName = time().'.'.getFileType($_FILES['upload-carousel']['name'][0]);
	
	//把上传的临时文件移动到up目录下面 
	if(move_uploaded_file($tmp,$imgpath.$newFileName)) {
		//将文件名写入数据库
		$sql = "INSERT INTO news_carousel (id, pic_address) VALUES ('', '". $newFileName ."')";
		if($conn->query($sql)){
			echo json_encode("success");
		}
	}else {
		echo json_encode("error");
	}
}
 
/**
 * 获取文件类型
 * @param string $filename 文件名称
 * @return string 文件类型
 */
function getFileType($filename) {
return substr($filename, strrpos($filename, '.') + 1);
}
?>