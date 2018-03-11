<?php
include_once "conn/conn.php";
$verify = stripslashes(trim(@$_GET['verify']));
$nowtime = time();
$msg="";
$sql = "SELECT id,token_exptime FROM comment_vip WHERE status='0' AND token=:token";
$arr = array(':token' => $verify);
$stmt = $conn -> AutoExecute("comment_vip", $arr, "INSERT");
$sqlstr = "select * from comment_vip where status='0'";
$row = $conn -> execute($sqlstr);
$_id=$row->fields['id'];
if (!$row -> EOF) {
	if ($nowtime > $row->fields['token_exptime']) {
		$msg = '您的激活有效期已过，请登录您的帐号重新发送激活邮件.';
	}else {
		$sql_update = "UPDATE comment_vip SET status='1' WHERE id=$_id";
		$a=$conn->execute($sql_update);
		if ($a) {
			$msg = '激活成功！';
			
		} else {
			$msg = '服务器忙！';
		}
	}
} else {
	$msg = 'error.';
}
echo $msg;
?>