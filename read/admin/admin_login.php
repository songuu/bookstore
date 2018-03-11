<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content=
			"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"/>
		<link href="img/favicon.ico"  type="image/x-icon" rel="shortcut icon" />
		<link href="css/admin_login.css" type="text/css" rel="stylesheet" />
		<title>登录后台管理界面</title>
	</head>
	<body>
		<!--start header-->
		<div id="header" >
			<a class="logo" href ="login.html">
				<img src="img/logo.png" width="210" height="50" alt = "悦阅"/>
			</a>	
		</div>
		<!--end header-->
		
		<!--start content-->
		<div id="content">
			<!--start login-->
			<div class="login">
				<h1>后台管理登录界面</h1>
				<form method="post" action="admin_login_ox.php" name="admin_form">
					<p class="item">
						<input name="adminname" type="text"  placeholder="用户名" required="required">
					</p>
					<p class="item">
						<input name="psaaword" type="password"  placeholder="密码" required="required">
					</p>
					<p class="item">
						<button type="submit" class="btn btn-primary btn-block btn-large">
						登录
					</button>
					</p>
					
				</form>
			</div>
			<!--end login-->
		</div>
		<!--end content-->
		
		
		<!--start footer-->
			<div id="footer">
				<div class="copyright-con">
					<span class="copyright">
   				 		© 2017 yueyue.com, all rights reserved
					</span>
					<span class="other-link">
						<a href="###">关于悦阅 </a>-
						<a href="###">免费声明 </a>-
						<a href="###">联系我们 </a>-
						<a href="###">帮助中心</a>
					</span>
				</div>		
			</div>
			<!--end footer-->
	</body>
</html>