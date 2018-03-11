<?php
	@session_start();
	if(@!$_SESSION[admin_id] and @!$_SESSION[admin_type]){
		echo "<script>alert('非法登陆');window.close();</script>";
		exit();
	}
?>