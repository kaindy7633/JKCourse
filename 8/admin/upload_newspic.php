<?php
require_once("init.php");

/* 新闻图片上传 */
if(is_uploaded_file($_FILES['upload-newspic']['tmp_name'][0])){
	$tmp =  $_FILES['upload-newspic']['tmp_name'][0];
	$imgpath = "../images/items/";
	$newFileName = time().'.'.getFileType($_FILES['upload-newspic']['name'][0]);
	
	//把上传的临时文件移动到up目录下面 
	if(move_uploaded_file($tmp,$imgpath.$newFileName)) {
		echo json_encode($newFileName);
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