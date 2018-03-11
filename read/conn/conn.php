<?php
header("Content-Type: text/html;charset=utf-8");
include_once "../adodb5/adodb.inc.php";								//载入adodb
date_default_timezone_set("PRC");   //系统使用北京时间
$conn = NewADOConnection('mysqli');
$conn->Execute("set names utf8");						//建立mysql连接
$conn->Connect("localhost","root","root","comment");		//连接"db_online"数据库
@$ADODB_FETCH_MODE=ADODB_FETCH_ASSDC;
?>