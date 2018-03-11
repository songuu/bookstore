<center>
	<?php
	session_start();
	include "conn/conn.php";
	include "mail.php";
	if (@$_POST['sub']) {
		$c_sql = "select * from comment_vip where phone = '" . @$_POST['PhoneNumber'] . "'";
		$c_rst = $conn -> execute($c_sql);
		if (!($c_rst == false)) {
			if (!$c_rst -> EOF) {
				echo "<script>alert('电话号码重复，请重新输入');history.go(-1);</script>";
				exit();
			} else {
				$nickname = @$_POST['nickName'];
				$_SESSION['name']=$nickname;
				$phonenumber = @$_POST['PhoneNumber'];
				$password = md5(@$_POST['password']);
				$email = @$_POST['email'];
				$time=date('Y-m-d H:i:s');
				$regtime = time();
				$token = md5($password . $password . $regtime);
				$_SESSION['token']=$token;
				$token_exptime = time() + 60 * 60 * 24;
				/*$sqlstr = "insert into comment_vip(phone,password) values ('".$phonenumber."','".$password."')";
				 $conn -> execute($sqlstr);*/
				$e_sql = "select * from comment_vip where email = '" . @$email . "'";
				$e_rst = $conn -> execute($e_sql);
				if (!($e_rst == false)) {
					if (!$e_rst -> EOF) {
						echo "<script>alert('邮箱已注册，请重新输入');history.go(-1);</script>";
						exit();
					} else {
						$c_sql = "select * from comment_vip where name = '" . $nickname . "'";
						$c_rst = $conn -> execute($c_sql);
						if (!($c_rst == false)) {
							if (!$c_rst -> EOF) {
								echo "<script>alert('用户名重复，请重新输入');history.go(-1);</script>";
								exit();
							} else {
								$sqlstr = "insert into comment_vip(phone,password,name,token,token_exptime,email,time,status) values ('" . $phonenumber . "','" . $password . "','" . $nickname . "','" . $token . "','" . $token_exptime . "','" . $email . "','".$time."','0')";
								$rst = $conn -> execute($sqlstr);
								if ($rst == false) {
									echo "<script>alert('添加错误');</script>";
								} else {
									$msg = @$mail . send_email($email, $phonenumber, $token);
									if ($msg == "1") {
										echo '<!DOCTYPE html>
											 <html lang="zh-cn">
											 <head>
											 <meta charset="UTF-8">
											 <title>会员登录</title>
											 <meta  name="viewport" http-equiv="refresh" content="2;URL=login.php"  />
											 </head>
											 <body style="width=100%;height=100%">
											 <div>
											 <br />
											 <h3>会员登录</h3>
									
											<span style="color:#F08080">请登陆邮箱验证</span><br/>
											 <span style="color:#FF0000; font-weight:bold;">2</span>本页面将在2秒内转移到登陆界面</div>
											 </body>
											 </html>';
										exit();
									} else {
										echo "<script>alert('发送失败!');</script>";
									}
								}
							}
						}
					}
				}

			}
		}
	}else {
		echo "<script>alert('!@#$$#@!@#,非法登录');window.close();</script>";
	}
	/*$c_sql = "select * from comment_vip where name = '" . @$_POST[nickName] . "'";
	 $c_rst = $conn -> execute($c_sql);
	 if (!($c_rst == false)) {
	 if (!$c_rst -> EOF) {
	 echo "<script>alert('用户名重复，请重新输入');history.go(-1);</script>";
	 exit();
	 }
	 }
	 $pwd=md5(@$_POST[password]);
	 $sqlstr = "insert into comment_vip(name,password,email,phone) values ('" . @$_POST[nickName] . "','".$pwd."','" . @$_POST[email] . "','" . @$_POST[PhoneNumber] . "')";
	 if ($conn -> Execute($sqlstr) == false) {
	 echo "<script>alert('添加错误：" . $conn -> Errormsg() . "');history.go(-1);</script>";
	 } else {
	 echo '<!DOCTYPE html>
	 <html lang="zh-cn">
	 <head>
	 <meta charset="UTF-8">
	 <title>会员登录</title>
	 <meta  name="viewport" http-equiv="refresh" content="2;URL=index.php"  />
	 </head>
	 <body style="width=100%;height=100%">
	 <div>
	 <br />
	 <h3>会员登录</h3>

	 会员登录      <br />
	 用户登录成功
	 <span style="color:#FF0000; font-weight:bold;">2</span>本页面将ת
	 </div>
	 </body>
	 </html>';
	 exit();
	 }*/
?>
</center>