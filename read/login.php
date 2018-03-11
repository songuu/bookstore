<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content=
			"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"/>
		<link href="img/favicon.ico"  type="image/x-icon" rel="shortcut icon" />
		<title>登录悦阅</title>
		<link type="text/css" rel="stylesheet" href="css/login.css"/>
		<link type="text/css" rel="stylesheet" href="css/same_share.css"/>
		
	</head>
	<body>
		<!--start wrapper-->
		<div id="wrapper">
			
			<!--start header-->
			<div id="header" >
				<a class="logo" href ="login.php">
					<img src="img/logo.png" width="160" height="40" alt = "悦阅"/>
				</a>	
			</div>
			<!--end header-->
			
			<!--start content-->
			<div id="content">
				<!--start get pwd-->
					<div class="get-pwd-outerbox" style="display: none;">
						<div class="get-pwd-box">
							<h1>&emsp;找回密码</h1>
							<div class="get-pwd-con">
								<input type="text" name="get-pwd-text" placeholder="请输入注册验证的邮箱" 
									class="get-pwd-text"/>
								<input type="button" name="send-pwd"value="找回密码" 
									class="get-pwd-btn"/>		
							</div>
							<div class="reg-nav">
								&gt;不需要找回密码
								<a rel="nofollow" href="javascript:void(0);"
									class="to-login">
								返回登录
								</a>
							</div>
						</div>
						</div>
					</div>	
						<!--end get pwd-->
				<!--start login-con-box-->
				<div class="login-con-box">
					<!--start login-con-outer-->
					<!--设置浮动效果-->
					<div class="login-con-outerbox"></div>
					<!--start login-con-->
					<div class="login-con">
					<h1>登录悦阅</h1>
					<!--error message or prompt-->
					<div class="err-con">
						<span class="err-mes"> </span>
					</div>	
						<!--start login-items-->
						<div class="login-item">
							<!--表单开始-->
							<!--action为处理登录的事务处理逻辑-->
							<form id="login-form" name="login-form" 
							action="login_chk.php" method="post">
								<p class="item">
									<div class="basic-lbl">账&emsp;号</div>
									<input id="userName" name="nickname" 
										class="basic-input" type="text"
										 maxlength="20" tabindex="1" 
										placeholder="请输入账号"/>
								</p>
								<p class="item">
									<div class="basic-lbl">密&emsp;码</div>
									<input id="password" name="password" 
										class="basic-input"type="password"
										 maxlength="20" tabindex="2" 
										placeholder="请输入密码" />
								</p>
								<input type="text" name="checkedCode" 
												id="checkedCode"class="basic-input-code"
												placeholder="验证码" />
								<div class="validation-code">			
									<div id="getCode" class="getCode"></div>
								</div>					
								<p class="item">
									<input type="checkbox" id="remember" 
										name="remember"tabindex="4" 
										value="remember-pwd"/>
									<label for="remember" class="remember">
										记住密码</label>
								</p>
								<p class="item">
									<input type="submit" id="sub-btn" value="登录" 
										name="login-now"class="btn-submit"
										 tabindex="5"/>
								</p>
							</form>
							<!--表单结束-->
							<div class="reg-nav">
								&gt;忘记密码？
								<a rel="nofollow" href="javascript:void(0);"
									class="get-pwd-link">
								找回密码
								</a>
								<br />
								&gt;还没有悦阅帐号？
								<a rel="nofollow" href="register.php">
								立即注册
								</a>	
							</div>
						</div>
						<!--end login-items-->
						
					
				
					</div>
					<!--end login-con-->
				</div>
				<!--end login-con-box-->
				<div class="aside-nav">
						<div class="aside-text" >
							<label class="lb1">好电影、好书、好音乐</label><br />
							<label class="lb2">&emsp;&emsp;&emsp;在悦阅</label><br />
							<label class="lb3">&emsp;&emsp;&emsp;给你不一样的愉悦</label><br />
						</div>
				</div>
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
		</div>
		<!--end wrapper-->
		<script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
		<script type="text/javascript" src="js/validation.js"></script>
	</body>
</html>


