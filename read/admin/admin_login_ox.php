<?php
	session_start();
	include "conn/conn.php";
	$a_sqlstr = "select * from comment_manager where name= '".@$_POST[adminname]."'";
	$a_rst = $conn->execute($a_sqlstr);
	$pwd=md5(@$_POST[psaaword]);
	if(!$a_rst->EOF){
		if($a_rst->fields[2] != $pwd){
			echo "<script>alert('用户名或密码输入错误');history.go(-1);</script>";
			exit();
		}
		if($a_rst->fields[6] == "0"){
			echo "<script>alert('您所登录的用户被冻结');history.go(-1)</script>";
			exit();
		}
		@$_SESSION[admin_name]=$a_rst->fields[1];
		@$_SESSION[admin_type]=$a_rst->fields[3];
		@$_SESSION[admin_id]=$a_rst->fields[0];
		echo "<script>alert('登陆成功');location='main.php';</script>";
	}
	else{
		echo "<script>alert('用户名或密码输入错误');history.go(-1);</script>";
	}
?>