<?php
include_once "../adodb5/adodb.inc.php";	
header("Content-type: text/html;charset=utf-8");							//载入adodb
date_default_timezone_set("PRC");   //系统使用北京时间
define('ALL_PS','WEBA');
$conn = NewADOConnection('mysqli');
$conn->Connect("localhost","root","root","comment");
$conn->query("set names utf8");		
@$ADODB_FETCH_MODE=ADODB_FETCH_ASSDC;
?>