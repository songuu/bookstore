<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>欢迎加入乐阅</title>
		<meta charset="UTF-8">
		<meta name="viewport" content=
			"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"/>
		<link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon" />
		<link type="text/css" rel="stylesheet" href="css/reg.css"/>
		<link type="text/css" rel="stylesheet" href="css/same_share.css"/>
	</head>
	<body>
		<div class="wrapper">
			<!--start header-->
			<div id="header" >
				<a class="logo" href ="login.php">
					<img src="" width="215" height="50" alt = "乐阅"/>
				</a>	
			</div>
			<!--end header-->
			
			
			<!--start content-->
			<div id="content">
				<!--start form-->
				<form name="reg-form" action="register_chk.php" method="post">
					<!--start reg-box-->
					<div id="reg-box">
						<!--start progressbar-->
						<ul id="progressbar">
							<li class="active">
								<strong>1.</strong>
								基本信息
							</li>
							<li>
								<strong>2.</strong>
								邮箱验证
							</li>
							<li>
								<strong>3.</strong>
								完成注册
							</li>
						</ul>
						<!--end progressbar-->
						
						<!--start items-->
						<div class="items">
							<!--start page1-->
							<div class="page-item">
								<h2>注册账号</h2><br />
								<div class="prompt-msg">
									<label id="err-msg1" style="display: block;">
										请输入电话号码密码注册
									</label>
								</div>
								<p>
									<input type="text" class="basic-input" id="userId"
										name="PhoneNumber" placeholder="PhoneNumber">
								</p>
								<p>
									<input type="password" class="basic-input" id="pass"
										name="password" placeholder="Password">
								</p>
								<p>
									<input type="password" class="basic-input" id="cpass"
										name="cpass" placeholder="ConfirmPassword">
								</p>
								<div style="float: left;margin-left: 30px;">> 已有账号，<br/>请<a href="login.php" target="_self">
										登录乐阅</a></div>
								<div class="btn-nav">
									<input type="button" class="next right btn" value="Next" />
								</div>
							</div>
							<!--end page1-->
							<!--start page2-->
							<div class="page-item">
								<h2>邮箱验证</h2><br />
								<div class="prompt-msg">
										<label id="err-msg2" >
											请输入QQ邮箱注册验证
										</label>
								</div>
								<p>
									<input type="email" class="basic-input" id="email" name="email" 
										placeholder="E-mail"/>
								</p>
								
								<div class="to-qq-mail">
									
								</div>
								<div class="btn-nav">
									<input type="button" class="prev btn" value="Previous" />
									<input type="button" class="next right btn" value="Next" />
								</div>
							</div>	
							<!--start page3-->
							<div class="page-item">
								<h2>完成注册</h2><br />
								<div class="prompt-msg">
										<label id="err-msg3">快为自己取个昵称吧,
											完成最后一步注册吧验证</label>
								</div>
								<p>
									<input type="text" class="basic-input" id="nickName" name="nickName"
										placeholder="NickName"/>
								</p>
								<div class="to-qq-mail">
									
								</div>
								<div class="btn_nav">
									<input type="button" class="prev btn" value="Previous" />
									<input name="sub" type="submit" id="sub" class="next right btn" value="Finish" />
								</div>
							</div>	
							<!--end page3-->	
						</div>
						<!--end items-->
					</div>
					<!--end reg-box-->
				</form>
				<!--end form-->
			</div>	
			<!--end content-->
			
			
			
			
			<!--start footer-->
			<div id="footer">
				<div class="copyright-con">
					<span class="copyright">
   				 		© 2017 yueyue.com, all rights reserved
					</span>
					<span class="other-link">
						<a href="###">关于乐阅 </a>-
						<a href="###">免费声明 </a>-
						<a href="###">联系我们 </a>-
						<a href="###">帮助中心</a>
					</span>
				</div>		
			</div>
			<!--end footer-->
		</div>
		
		
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/scrollable.js"></script>	
		<script type="text/javascript" src="js/reg-chk.js"></script>
		<!--<script type="text/javascript" src="js/pre-next.js"></script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>-->
		
			
	</body>
</html>
