<?php
	session_start();
	include "conn/conn.php";
	if((trim(@$_POST[nickname]) == "") or (trim(@$_POST[password]) == "")){
		echo "<script>alert('帐号或密码错误');history.go(-1);</script>";
		exit();
	}
	$pwd=md5(@$_POST[password]);
	$sqlstr = "select * from comment_vip where name = '".@$_POST[nickname]."' and password = '".@$pwd."'";
	$u_rst = $conn->execute($sqlstr);
	if(!$u_rst->EOF){
		if($u_rst->fields[8] == "0")
			echo "<script>alert('未验证');history.go(-1);</script>";
		else{
			@$_SESSION[name]=@$u_rst->fields[1];
			@$_SESSION[id]=@$u_rst->fields[0];
			@$_SESSION[grades]=@$u_rst->fields[7];
			@$_SESSION[counts]=@$u_rst->fields[8];
			echo "<script>location='index.php';</script>";
		}
	}
	else{
		echo "<script>alert('用户名或密码错误，请重新登录。');history.go(-1);</script>";
	}
?>