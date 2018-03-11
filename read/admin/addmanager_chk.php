<?php
	session_start();
	include "conn/conn.php";
	$pwd=md5(@$_POST[password]);
	$a_sql="select * from comment_manager where name='".@$_POST[name]."'";
	$a_rst = $conn->execute($a_sql);
	if(!$a_rst->EOF)
		echo "<script>alert('该名称的管理员已经存在，请更换名称');history.go(-1);</script>";
	else{
		$a_sqlstr="insert into comment_manager values('3','".@$_POST[name]."','".$pwd."','".@$_POST[realname]."','".@$_POST[grade]."','".date('Y-m-d H:i:s')."','1')";
		$a_rst1 = $conn->execute($a_sqlstr);
		if(!$a_rst1){
?>
		<script>
			alert("管理员添加成功");
			window.close();
		</script>
<?php
		}
		else{
			echo "<script>alert('添加失败".$a_sqlstr."');history.go(-1);</script>";
		}
	}
?>	