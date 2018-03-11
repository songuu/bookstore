<?php
require_once "./phpmailer/class.phpmailer.php";
require_once "./phpmailer/class.smtp.php";
function send_email($user_email,$username,$token) {
	$mail = new PHPMailer();
	date_default_timezone_set("Asia/Shanghai");
	$mail -> CharSet = "UTF-8";
	$mail -> IsSMTP();
	$mail -> SMTPAuth = true;
	$mail -> SMTPSecure = "ssl";
	$mail -> Host = "smtp.qq.com";
	$mail -> Port = 465;
	//$mail->AddEmbeddedImage("logo.jpg", "my-attach", "logo.jpg");
	$mail -> Username = "1101309860@qq.com";
	$mail -> Password = "otndnrrydeeabadh";
	$mail -> From = "1101309860@qq.com";
	$to = $user_email;
	$mail -> AddAddress($to);
	$mail -> Subject = 'yueyue验证码';
	$mail -> AltBody = "为了查看该邮件，请切换到支持 HTML 的邮件客户端";	    
    $mail->IsHTML(true); 
	$emailbody = $emailbody = "亲爱的".$_SESSION['name']."：<br/>感谢您在我站注册了新帐号。<br/>请点击链接激活您的帐号。<br/> 
    <a href='http://localhost/read0/active.php?verify=".$_SESSION['token']."' target= 
'_blank'>http://localhost/read0/active.php</a><br/> 
    如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。"; 
	$mail->MsgHTML($emailbody);
	if (!$mail -> Send()) {
		$msg= "0";
	}
	else{
		$msg="1";
	}
	return $msg;
}
?>
