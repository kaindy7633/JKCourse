<?php
/*
 *	数据库配置文件	 
 */	
 
//定义数据库常量
define("SERVERNAME", "localhost");
define("USER", "root");
define("PASS", "");
define("DATABASE", "myNews"); 
 
//链接数据库
$conn = new mysqli(SERVERNAME, USER, PASS, DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>